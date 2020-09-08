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

Route::get('/', 'Login@index')->name('login.form');
Route::post('/login', 'Login@auth')->name('login.proses');
Route::get('/logout', 'Login@logout')->name('login.logout');

Route::group(['middleware' => ['guest:dinas']], function () {
    Route::get('/spj', 'module_spj\spj_dinas\Dashboard_dinas@index')->name('dinas.dashboard');
    Route::get('/dinas', 'module_spj\spj_dinas\Manajemen@rka')->name('dinas.manajemen.rka');
    Route::get('/pejabatdinas', 'module_spj\spj_dinas\Manajemen@pejabat')->name('dinas.manajemen.pejabat');
    Route::get('/list/kegiatan/dinas', 'module_spj\spj_dinas\Manajemen@kegiatanperkodes')->name('dinas.manajemen.list.kegiatan');
});
