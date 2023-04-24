<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;

class changeLocaleController extends Controller
{
    public function changeLocale($locale): RedirectResponse
    {
        session()->put('locale', $locale);
        return redirect()->back();
    }
}
