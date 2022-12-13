<?php

namespace App\Http\Controllers;
use App\Models\wakasek;


use Illuminate\Http\Request;

class wakasekController extends Controller
{
    public function index(){

        $data = wakasek::all();
        // dd($data);
        return view('admin.wakilkepalasekolah.wakasek', compact('data')) ;
    }

    public function wakasek(){

        $data = wakasek::all();
        // dd($data);
        return view('layout.subnav.tentangkami.wakil-kepala-sekolah', compact('data')) ;
    }

    public function insertdatawakasek(Request $request){
        $data = wakasek::create($request->all());
        if($request->hasfile('foto_wakasek')){
            $request->file('foto_wakasek')->move('foto/', $request->file('foto_wakasek')->getClientOriginalName());
            $data->foto_wakasek = $request->file('foto_wakasek')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('wakasek')->with('success',' Data Berhasil Di Tambahkan');
    }

    public function editwakasek($id){
        $data = wakasek::find($id);
        return view('admin.wakilkepalasekolah.editwakasek', compact('data'));
    }

    public function updatewakasek(Request $request , $id){
        $data = wakasek::find($id);
        $data->update($request->all());
        if($request->hasfile('foto_wakasek')){
            $request->file('foto_wakasek')->move('foto/', $request->file('foto_wakasek')->getClientOriginalName());
            $data->foto_wakasek = $request->file('foto_wakasek')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('wakasek')->with('success',' Data Berhasil Di Update');
    }

    public function deletewakasek($id){
        $data = wakasek::find($id);
        $data->delete();
        return redirect()->route('wakasek')->with('success',' Data Berhasil Di Delete');
    }
}
