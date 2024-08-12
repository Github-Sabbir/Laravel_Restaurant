<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackendControllerer extends Controller
{   
    public function backIndex()
    {
        return view('backend.backIndex');
    }
    public function blank()
    {
        return view('backend.blank');
    }
    public function button()
    {
        return view('backend.button');
    }
    public function chart()
    {
        return view('backend.chart');
    }
    public function element()
    {
        return view('backend.element');
    }
    public function error()
    {
        return view('backend.error');
    }
    public function form()
    {
        return view('backend.form');
    }
    public function signin()
    {
        return view('backend.signin');
    }
    public function signup()
    {
        return view('backend.signup');
    }
    public function table()
    {
        return view('backend.table');
    }
    public function typography()
    {
        return view('backend.typography');
    }
    public function widget()
    {
        return view('backend.widget');
    }
}