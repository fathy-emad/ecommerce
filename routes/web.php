<?php

use App\Http\Controllers\changeLocaleController;
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

Route::view('/', 'web.website');

Route::get('/changeLocale/{locale}', [changeLocaleController::class, 'changeLocale'])->name('changeLocale');

//Route::get('/dashboard', function () {
//    return view('dashboard');
//
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::name('web.')->group(function (){

    require __DIR__.'/web_auth.php';
});


