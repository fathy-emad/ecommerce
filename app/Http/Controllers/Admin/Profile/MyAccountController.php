<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;


class MyAccountController extends Controller
{
    public function edit(): View
    {
        return view('admin.profile.myAccount.edit');
    }
}
