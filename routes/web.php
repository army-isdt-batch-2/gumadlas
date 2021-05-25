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
]);

Route::get('/table',[
    App\Http\Controllers\LoginController::class,
    'table'

]);
Route::get('/employees',[
    App\Http\Controllers\LoginController::class,
    'employees'
]);
Route::get('/department',[
    App\Http\Controllers\LoginController::class,
    'department'
]);
Route::get('/loans',[
    App\Http\Controllers\LoginController::class,
    'loans'
]);
Route::get('/leaves',[
    App\Http\Controllers\LoginController::class,
    'leaves'
]);
Route::get('/deductions',[
    App\Http\Controllers\LoginController::class,
    'deductions'
]);
Route::get('/timekeeping',[
    App\Http\Controllers\LoginController::class,
    'timekeeping'
]);
Route::get('/payslip',[
    App\Http\Controllers\LoginController::class,
    'payslip'
]);
Route::get('/layout',[
    App\Http\Controllers\LoginController::class,
    'layout'
]);
Route::get('/form',[
    App\Http\Controllers\LoginController::class,
    'form'
]);
Route::get('/department/create',[
    App\Http\Controllers\LoginController::class,
    'department_create'
]);
Route::get('/employees/create',[
    App\Http\Controllers\LoginController::class,
    'employees_create'
]);
    Route::get('/loans/create',[
        App\Http\Controllers\LoginController::class,
        'loans_create'
 ]);
 Route::get('/leaves/create',[
     App\Http\Controllers\LoginController::class,
     'leaves_create'
 ]);
Route::get('/deductions/create',[
    App\Http\Controllers\LoginController::class,
    'deductions_create'
]);
Route::get('/timekeeping/create',[
    App\Http\Controllers\LoginController::class,
    'timekeeping_create'
]);
Route::get('/payslip/create',[
    App\Http\Controllers\LoginController::class,
    'payslip_create'
]);
