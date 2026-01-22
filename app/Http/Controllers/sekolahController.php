<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sekolahController extends Controller
{
    public function siswa(){
        return view('layout.siswa');
    }
    public function guru(){
        return view('layout.guru');
    }
    public function kelas(){
        return view('layout.kelas');
    }
}
