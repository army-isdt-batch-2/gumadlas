<?php

use Illuminate\Support\Facades\Route;

Route::get('/deductions',[
    App\Http\Controllers\DeductionsController::class,
    'deductions'
])->name('deductions');


Route::post('/deductions/create/save',[
    App\Http\Controllers\LoginController::class,
    'save'

])->name('deductions.save');


