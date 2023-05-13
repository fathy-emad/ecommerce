<?php

use App\Http\Controllers\Admin\systemAdministrator\ {
    PermissionsController
};

use Illuminate\Support\Facades\Route;

Route::prefix('systemAdministrator')->name('systemAdministrator.')->group(function (){

    //my account routes
    Route::prefix('permissions')->name('permissions.')->group(function (){

        Route::get('create', function (){ return view('admin.systemAdministrator.permissions.create'); })
            ->name('create');

    });

});
