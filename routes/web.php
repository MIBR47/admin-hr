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

Route::get('/', function () {
    return redirect('/admin');
})->name('dashboard');

Route::get('/admin', function () {
    return view('pages.dashboard');
});
Route::get('/login', function () {
    return view('auth.login');
})->name('login');


Route::prefix('/admin/employees')->group(function () {
    Route::get('/', function () { return view('pages.employees.index'); })->name('employees');
    Route::get('/create', function(){return view('pages.employees.create'); })->name('employees-create');
    Route::get('/edit', function(){return view('pages.employees.edit'); })->name('employees-edit');
});

Route::prefix('/admin/branch_office')->group(function(){
    Route::get('/',function(){ return view('pages.branch_office.index');})->name('branch_office');
    Route::get('/create',function(){ return view('pages.branch_office.create');})->name('branch_office-create');
    Route::get('/edit',function(){ return view('pages.branch_office.edit');})->name('branch_office-edit');
});

Route::prefix('/admin/visiting_place')->group(function(){
    Route::get('/',function(){return view('pages.visiting_place.index');})->name('visiting_place');
    Route::get('/create',function(){return view('pages.visiting_place.create');})->name('visiting_place-create');
    Route::get('/edit',function(){return view('pages.visiting_place.edit');})->name('visiting_place-edit');
});

Route::prefix('/admin/visiting_history')->group(function(){
    Route::get('/',function(){return view('pages.visiting_history.index');})->name('visiting_history');
    
});

Route::prefix('/admin/attendance_history')->group(function(){
    Route::get('/',function(){return view('pages.attendance_history.index');})->name('attendance_history');
    
});

