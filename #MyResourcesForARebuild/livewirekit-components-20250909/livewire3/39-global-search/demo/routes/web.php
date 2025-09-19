<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\ProjectsController;

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
    $designTemplate = request()->design === 'bootstrap' ? 'bootstrap_' : '';
    return view($designTemplate . 'welcome');
})->name('home');

Route::resource('users', UsersController::class)->only('index', 'show');
Route::resource('projects', ProjectsController::class)->only('index', 'show');
Route::resource('tasks', TasksController::class)->only('index', 'show');
