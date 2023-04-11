<!--
    Nama : Fanny Angelia Valentina
    Kelas : PPTI 12
    NIM : 2502041161
 -->

<?php

use App\Http\Controllers\ProductController;
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

Route::get('/product', [ProductController::class, 'product']);
Route::get('/product/{name}', [ProductController::class, 'detail']);


