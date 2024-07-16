<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterPasienController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/forms-validation', function () {
    return view('forms-validation');
});

Route::get('/tables-data', function () {
    return view('tables-data');
});
