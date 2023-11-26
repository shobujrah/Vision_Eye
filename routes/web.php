<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });




Route::get('/', [CompanyController::class, 'company'])->name('company');
Route::get('/company-create-form', [CompanyController::class, 'form'])->name('company.create.form');
Route::post('/company-store', [CompanyController::class, 'store'])->name('company.store');

Route::get('/edit/{id}',[CompanyController::class,'edit'])->name('company.edit');
Route::put('/update/{id}',[CompanyController::class,'update'])->name('company.update');
Route::get('delete/{id}',[CompanyController::class,'delete'])->name('company.delete');


Route::get('/employee', [EmployeeController::class, 'employee'])->name('employee');
Route::get('/employee-create-form', [EmployeeController::class, 'form'])->name('employee.create.form');
Route::post('/employee-store', [EmployeeController::class, 'store'])->name('employe.store');

Route::get('/employee/edit/{id}',[EmployeeController::class,'edit'])->name('employee.edit');
Route::put('/employee/update/{id}',[EmployeeController::class,'update'])->name('employee.update');
Route::get('/employee/delete/{id}',[EmployeeController::class,'delete'])->name('employee.delete');





