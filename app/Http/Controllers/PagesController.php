<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function home() {
        $people = ['rob', 'ger', 'pedro', 'daniel'];    
        return view('welcome', compact('people'));
    }

    public function about() {
        return view('pages/about');
    }
    
}
