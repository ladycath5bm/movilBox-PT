<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;

class QueryController extends Controller
{
    public function queryDepartments(): View
    {
        $query = DB::table('departments')
            ->join('employees', 'departments.id', '=', 'employees.department_id')
            ->select('departments.department_name')
            ->selectRaw('count(APPX_employees.department_id) as total_employees')
            ->groupBy('departments.department_name')
            ->having('total_employees', '>', 1)
            ->orderBy('departments.department_name', 'ASC');
        
        $consult = [
            'sql' => $query->toSql(),
            'result' => $query->get(),
            'json' => $query->get()->toJson(),
        ];
        
        return view('querys.departments', compact('consult'));
    }

    public function queryPeople(): View
    {
        $query = DB::table('employees')
            ->join('departments', 'employees.department_id', '=', 'departments.id')
            ->join('education_levels', 'employees.education_level_id', '=', 'education_levels.id')
            ->select('employees.lastname', 'education_levels.description', function ($q) {
                $q->select('employees.department_id')
                    ->from('employees')
                    ->groupBy('employees.department_id')
                    ->havingRaw('sum(APPX_amployees.salary)', '>', 250000)->get();
            })
            ->orderBy('employees.lastname', 'ASC');
/* 
            select e2.last_name, n.nivel_educacional 
            (
            select e.idDpto
            from empleados e 
            group by e.idDpto   
            having sum(e.salary) > 250000
            ) t1 inner join empleados e2 on e2.idDpto = t1.idDpto    ​
            ​inner join nivel_escolar n on e2.idnivel_escolar = n.id
            ​order by e2.last_name */
            


            /**$query = Employee::where(function ($q) {
            $q->selectRaw('sum(APPX_employees.salary) as total_salary_dpto')
                ->join('departments', 'employees.department_id', '=', 'departments.id')
                ->having('total_salary_dpto', '>', 25000)
                ->get();
        }); */
        
        dd($consult = [
            'sql' => $query->toSql(),
            'result' => $query->get(),
            'json' => $query->get()->toJson(),
        ]);

        return view('querys.people', compact('consult'));
    }
}
