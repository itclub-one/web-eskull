<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\eskul;


class exController extends Controller
{
    public function ex($id){

        $data = eskul::find($id);
        // dd($data);
        return view('layout.eskul.skul', compact('data')) ;
    }
}
