<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
	public function home()
	{
		return view('welcome');
	}
	
    public function about()
    {
    	$people = ['james', 'jeffrey', 'dennis'];
    	return view('about', compact('people'));
    }
}
