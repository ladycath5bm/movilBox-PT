<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Department extends Model
{
    use HasFactory;

    protected $table = 'departments';
    protected $fillable = ['department_name', 'department_city'];

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class);
    }
}
