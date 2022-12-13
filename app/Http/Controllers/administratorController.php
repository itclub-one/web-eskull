<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\administrator;

class administratorController extends Controller
{
    public function index(){

        $data = administrator::all();
        // dd($data);
        return view('admin.administrator', compact('data')) ;
    }
}