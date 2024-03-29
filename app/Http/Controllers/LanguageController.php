<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;

class LanguageController extends Controller
{
	public function index(string $locale): RedirectResponse
	{
		session()->put('locale', $locale);
		return redirect()->back();
	}
}
