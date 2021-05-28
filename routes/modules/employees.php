<?php

use Illuminate\Support\Facades\Route;


Route::get('/employees',[
    App\Http\Controllers\EmployeesController::class,
    'employees'
])->name('employees');


Route::get('/employees/create',[
    App\Http\Controllers\LoginController::class,
    'create'

])->name('employees.create');

Route::post('/employees/create/save',[
    App\Http\Controllers\LoginController::class,
    'create_save'

])->name('employees.create.save');

