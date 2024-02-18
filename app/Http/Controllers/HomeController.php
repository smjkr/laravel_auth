<?php

namespace App\Http\Controllers;

use http\Env\Url;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('home');
    }
}
