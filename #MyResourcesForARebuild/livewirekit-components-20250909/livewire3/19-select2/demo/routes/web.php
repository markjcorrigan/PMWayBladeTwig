<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::redirect('/', 'products')->name('tailwind');
Route::redirect('bootstrap', 'products?design=bootstrap')->name('bootstrap');

Route::resource('products', ProductController::class)->only('index', 'create', 'edit');
