<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eskul;


    class exController extends Controller
{
    public function ex($id){

        $data = Eskul::find($id);
        // dd($data);
        if (!$data) {
            abort(404);
        }
        $meta = array(
            'title' => $data->nama_eskul . ' - ' . config('app.name'),
            'description' => "Eskul " . $data->nama_eskul . " di " . config('app.name'),
            'image' => asset('logoeskul/' . $data->logo),
            'site_name' => $data->nama_eskul,
        );
        return view('layout.eskul.skul', compact('data', 'meta'));
    }
}
