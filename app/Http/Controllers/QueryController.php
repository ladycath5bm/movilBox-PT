<?php

namespace App\Http\Controllers;

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
}
