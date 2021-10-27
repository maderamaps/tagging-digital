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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\dashboard::class, 'dashboard'])->name('home');
Route::get('/view', [App\Http\Controllers\dashboard::class, 'view'])->name('view');

Route::post('/filter_list', [App\Http\Controllers\dashboard::class, 'filter_list'])->name('filter_list');


Route::post('/add_surat', [App\Http\Controllers\dashboard::class, 'add_surat'])->name('add_surat');
Route::post('/release_surat', [App\Http\Controllers\dashboard::class, 'release_surat'])->name('release_surat');
Route::get('/get_surat', [App\Http\Controllers\dashboard::class, 'get_surat'])->name('get_surat');
Route::get('/delete_surat', [App\Http\Controllers\dashboard::class, 'delete_surat'])->name('delete_surat');

Route::get('/peralatan', [App\Http\Controllers\dashboard::class, 'peralatan'])->name('peralatan');
Route::post('/peralatan_add', [App\Http\Controllers\dashboard::class, 'peralatan_add'])->name('peralatan_add');
Route::get('/peralatan_delete/{id}', [App\Http\Controllers\dashboard::class, 'peralatan_delete'])->name('peralatan_delete');

Route::post('/print_page', [App\Http\Controllers\dashboard::class, 'print_page'])->name('print_page');


