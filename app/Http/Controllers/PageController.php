<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index(){
        return view('index');
    }
    public function jadwalkuliah(){
        return view('jadwal_kuliah');
    }
    public function kontakteman(){
        return view('kontak_teman');
    }

}
