<?php

namespace App\Http\Controllers;
use App\Models\berita;

use Illuminate\Http\Request;

class contactpersonController extends Controller
{
    public function contactperson(){

        $data = berita::all();
        // dd($data);
        return view('layout.subnav.contact', compact('data')) ;
    }
}
