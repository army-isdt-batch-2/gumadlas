<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Leaves extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = "leaves";

    protected $fillable = [
        'leaves',
        'employee_id',
        'leave_type',
        'start',
        'end',
        'notes'
    ];
    
}
