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

    Route::get('/dinas', 'module_spj\spj_dinas\Dashboard_dinas@index')->name('dinas.dashboard');
    Route::get('/dinas/rka', 'module_spj\spj_dinas\Manajemen@rka')->name('dinas.manajemen.rka');
    Route::get('/dinas/pejabat', 'module_spj\spj_dinas\Manajemen@pejabat')->name('dinas.manajemen.pejabat');
    Route::get('/dinas/list/kegiatan', 'module_spj\spj_dinas\Manajemen@kegiatanperkodes')->name('dinas.manajemen.list.kegiatan');
    Route::get('/dinas/list/pejabat', 'module_spj\spj_dinas\Manajemen@pejabatperkodes')->name('dinas.manajemen.list.pejabat');

    Route::post('/dinas/pejabat/simpan', 'module_spj\spj_dinas\Manajemen@simpanPejabatDinas')->name('dinas.manajemen.pejabat.post');
});

Route::group(['middleware' => ['guest:admindinas']], function () {

    Route::get('/admin/dinas', 'module_spj\spj_dinas\admin\Dashboard_admin@index')->name('admindinas.dashboard');
    Route::get('/admin/dinas/penatausahaan/spj', 'module_spj\spj_dinas\admin\Penatausahaan@spjbpt')->name('admindinas.penatausahaan');
    Route::get('/admin/dinas/penatausahaan/rinciankegiatan/{id}', 'module_spj\spj_dinas\admin\Penatausahaan@rinciankeg')->name('admindinas.penatausahaan.rincian');
    Route::get('/admin/dinas/penatausahaan/list', 'module_spj\spj_dinas\admin\Penatausahaan@listrincianspjperkodek')->name('admindinas.penatausahaan.list.rincian');

    Route::get('/admin/dinas/penatausahaan/hapus', 'module_spj\spj_dinas\admin\Penatausahaan@hapusTransaksi')->name('admindinas.penatausahaan.rincian.delete');
    Route::post('/admin/dinas/penatausahaan/simpan', 'module_spj\spj_dinas\admin\Penatausahaan@simpanTransaksi')->name('admindinas.penatausahaan.rincian.post');
    Route::post('/admin/dinas/penatausahaan/ubah', 'module_spj\spj_dinas\admin\Penatausahaan@ubahTransaksi')->name('admindinas.penatausahaan.rincian.update');

});

//cetak
Route::get('/cetak/bku', 'module_cetak\Cetak@cetakBKU')->name('cetak.bku');
Route::get('/cetak/spj', 'module_cetak\Cetak@cetakSPJ')->name('cetak.spj');
Route::get('/cetak/kw', 'module_cetak\Cetak@cetakKW')->name('cetak.kw');
Route::get('/cetak/bpj', 'module_cetak\Cetak@cetakBpj')->name('cetak.bpj');
Route::get('/cetak/brp', 'module_cetak\Cetak@cetakBrp')->name('cetak.brp');

