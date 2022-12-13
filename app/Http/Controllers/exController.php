<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eskul;


    class exController extends Controller
{
    public function ex($id){

        $data = Eskul::find($id);
        // dd($data);
        if(!$data){
            abort(404);
        }
        return view('layout.eskul.skul', compact('data')) ;
    }
}
