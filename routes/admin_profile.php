<?php

use App\Http\Controllers\Admin\Profile\ {
    MyAccountController
};

use Illuminate\Support\Facades\Route;

Route::prefix('profile')->name('profile.')->group(function (){

    //my account routes
    Route::prefix('my-account')->name('my-account.')->group(function (){
        Route::get('edit', [MyAccountController::class, 'edit'])->name('edit');
    });

});






