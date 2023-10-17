<?php

use App\Http\Livewire\ReportList;
use App\Http\Livewire\CreateReport;
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
    return view('welcome');
});

Route::get('/create-report', CreateReport::class)->name('create-report');
Route::get('/report-list', ReportList::class)->name('report-list');