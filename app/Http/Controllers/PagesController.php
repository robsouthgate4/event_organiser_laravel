<?php

namespace App\Http\Controllers;


class PagesController extends Controller
{
    public function home() {
        $people = ['rob', 'ger', 'pedro', 'daniel'];    
        return view('welcome', compact('people'));
    }

    public function about() {
        return 'About page';
    }
    
}
