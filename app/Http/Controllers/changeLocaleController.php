<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class changeLocaleController extends Controller
{
    public function changeLocale($locale): RedirectResponse
    {
        session()->put('locale', $locale);
        return redirect()->back();
    }
}
