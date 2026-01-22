<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashaboardController extends Controller
{
    public function index(){
        return view('layout/dashboard');
    }
}
