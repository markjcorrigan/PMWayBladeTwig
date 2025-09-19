<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\BoostrapInvoicesController;

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

Route::redirect('/', 'invoices')->name('tailwind');
Route::redirect('bootstrap', 'bootstrap/invoices')->name('bootstrap');

Route::resource('invoices', InvoicesController::class)->only('index', 'create', 'edit');
