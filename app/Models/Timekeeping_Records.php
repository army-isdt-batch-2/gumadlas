<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Timekeeping_Records extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = "timekeeping_records";

    protected $fillable = [
        'timekeeping_records',
        'employee_id',
        'clockin',
        'clockout',
        'total',
        'timekeeping_id'
    ];
}
