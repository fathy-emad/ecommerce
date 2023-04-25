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


Route::get('/changeLocale/{locale}', [changeLocaleController::class, 'changeLocale'])->name('changeLocale');

//Route::get('/routes', function () {
//
//    $routes = collect(Route::getRoutes())->map(function ($route) { return $route->methods()[0] . " / " . $route->uri();});
//
//
//    Route::current()->uri();
//
//   foreach ($routes AS $route) {
//       var_dump($route);
//   }
//});

//Route::fallback(function () {
//
//});

Route::name('web.')->group(function (){

    Route::view('/', 'web.website')->name('website');

    require __DIR__.'/web_auth.php';
});

Route::prefix('admin')->name('admin.')->group(function (){

    Route::view('dashboard', 'admin.dashboard')->name('dashboard')->middleware('auth:admin');

    require __DIR__.'/admin_auth.php';
});


