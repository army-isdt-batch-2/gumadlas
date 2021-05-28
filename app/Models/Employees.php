<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Employees extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = "employees";

    protected $fillable = [
        'photo',
        'employees',
        'employees_id',
        'photo',
        'first_name',
        'last_name',
        'middle_name',
        'contact',
        'address',
        'birthday',
        'gender',
        'designation',
        'rate',
        'employee_id',
        'department_id',
        'sss',
        'philhealth',
        'pagibig',
        'tax'

    ];

}
