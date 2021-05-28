<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payslips extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = "payslips";

    protected $fillable = [
        'payslips',
        'cutoff_start',
        'cutoff_end'

    ];
}
