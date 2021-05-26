<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login',[
    App\Http\Controllers\LoginController::class,
    'index'
])->name('login');

Route::get('/table',[
    App\Http\Controllers\LoginController::class,
    'table'

])->name('table');

Route::get('/employees',[
    App\Http\Controllers\LoginController::class,
    'employees'
])->name('employees');

Route::get('/department',[
    App\Http\Controllers\LoginController::class,
    'department'
])->name('department');

Route::get('/loans',[
    App\Http\Controllers\LoginController::class,
    'loans'
])->name('loans');

Route::get('/leaves',[
    App\Http\Controllers\LoginController::class,
    'leaves'
])->name('leaves');

Route::get('/deductions',[
    App\Http\Controllers\LoginController::class,
    'deductions'
])->name('deductions');

Route::get('/timekeeping',[
    App\Http\Controllers\LoginController::class,
    'timekeeping'
])->name('timekeeping');

Route::get('/payslip',[
    App\Http\Controllers\LoginController::class,
    'payslip'
])->name('payslip');



Route::get('/layout',[
    App\Http\Controllers\LoginController::class,
    'layout'
])->name('layout');



Route::get('/form',[
    App\Http\Controllers\LoginController::class,
    'form'
])->name('form');



Route::post('/department/create',[
    App\Http\Controllers\LoginController::class,
    'save'

])->name('department.save');

Route::post('/employees/create',[
    App\Http\Controllers\LoginController::class,
    'save'

])->name('employees.save');

    Route::post('/loans/create',[
        App\Http\Controllers\LoginController::class,
        'save'

 ])->name('loans.save');

 Route::post('/leaves/create',[
     App\Http\Controllers\LoginController::class,
     'save'

 ])->name('leaves.save');

Route::post('/deductions/create',[
    App\Http\Controllers\LoginController::class,
    'save'

])->name('deductions.save');

Route::post('/timekeeping/create',[
    App\Http\Controllers\LoginController::class,
    'save'

])->name('timekeeping.save');

Route::post('/payslip/create',[
    App\Http\Controllers\LoginController::class,
    'save'

])->name('payslip.save');
