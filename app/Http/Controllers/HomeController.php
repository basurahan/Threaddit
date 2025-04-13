<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Constants\DrawerItems;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $section = $request->path();
        if (in_array($section, DrawerItems::paths()))
        {
            return view('home');
        }
        else 
        {
            return redirect()->route('home', ['section' => 'home']);
        }
    }
}
