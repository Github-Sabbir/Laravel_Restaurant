<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('Frontend.index');
    }
    public function book()
    {
        return view('Frontend.book');
    }
    public function about()
    {
        return view('Frontend.about');
    }
    public function menu()
    {
        return view('Frontend.menu');
    }
}
