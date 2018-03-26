<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home()
    {
    	return 'home';
    }

    public function about()
    {
    	return 'about';
    }

    public function help()
    {
    	return 'help';
    }
}
