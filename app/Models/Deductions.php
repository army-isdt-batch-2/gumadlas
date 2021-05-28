<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Deductions extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = "deductions";

    protected $fillable = [
        'deductions',
        'employee_id',
        'contribution_type',
        'tax',
        'sss',
        'philhealth',
        'pagibig',
        'basic_range',
        'employee_share',
        'monthly_contribution'
     ];
}