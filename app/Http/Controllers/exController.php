<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\eskul;


class exController extends Controller
{
    public function ex($slug){

        $data = eskul::with('dokumentasi')->get()
            ->where('slug', $slug)->first();
        // dd($data);
        return view('layout.eskul.skul', compact('data')) ;
    }
}
