<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Loans extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = "loans";

    protected $fillable = [
        'loans',
        'employee_id',
        'loan_type',
        'amount',
        'months_payable',
        'notes'

    ];


}
