<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Timekeeping extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = "timekeeping";

    protected $fillable = [
        'timekeeping',
        'timekeeping_name'

    ];




}