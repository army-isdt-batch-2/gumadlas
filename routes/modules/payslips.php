<?php

use Illuminate\Support\Facades\Route;

Route::get('/payslip',[
    App\Http\Controllers\PayslipController::class,
    'payslip'
])->name('payslip');


Route::get('/payslip/create',[
    App\Http\Controllers\PayslipsController::class,
    'create'

])->name('payslip.create');

Route::post('/payslip/create/save',[
    App\Http\Controllers\PayslipsController::class,
    'save'

])->name('payslip.create.save');

