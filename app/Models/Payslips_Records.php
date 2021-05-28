<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Payslips_records extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = "payslips_records";

    protected $fillable = [
        'payslips_records',
        'employee_id',
        'payslip_id',
        'data'
    ];

}
