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
});

Route::get('/admin', function () {
    return view('pages.admin.dashboard');
});

// Route::get('/admin/karyawan', function () {
//     return view('pages.admin.karyawan.index');
// })->name('karyawan');
// Route::get('/admin/karyawan/tambah', function(){
//     return view('pages.admin.karyawan.create');
// })->name('tambah_karyawan');
// Route::get('/admin/karyawan/edit', function(){

// });

Route::prefix('/admin/karyawan')->group(function () {
    Route::get('/', function () { return view('pages.admin.karyawan.index'); })->name('karyawan');;
    Route::get('/create', function(){return view('pages.admin.karyawan.create'); })->name('tambah_karyawan');;
    Route::get('/edit', function(){return view('pages.admin.karyawan.edit'); })->name('edit_karyawan');;
});
