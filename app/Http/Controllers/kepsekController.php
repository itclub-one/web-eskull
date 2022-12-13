<?php

namespace App\Http\Controllers;
use App\Models\kepsek;


use Illuminate\Http\Request;

class kepsekController extends Controller
{
    public function index(){

        $data = kepsek::all();
        // dd($data);
        return view('admin.kepalasekolah.kepsek', compact('data')) ;
    }

    public function kepsek(){

        $data = kepsek::all();
        // dd($data);
        return view('layout.subnav.tentangkami.kepala-sekolah', compact('data')) ;
    }

    public function insertdatakepsek(Request $request){
        $data = kepsek::create($request->all());
        if($request->hasfile('foto_kepsek')){
            $request->file('foto_kepsek')->move('foto/', $request->file('foto_kepsek')->getClientOriginalName());
            $data->foto_kepsek = $request->file('foto_kepsek')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('kepsek')->with('success',' Data Berhasil Di Tambahkan');
    }

    public function editkepsek($id){
        $data = kepsek::find($id);
        return view('admin.kepalasekolah.editkepsek', compact('data'));
    }

    public function updatekepsek(Request $request , $id){
        $data = kepsek::find($id);
        $data->update($request->all());
        if($request->hasfile('foto_kepsek')){
            $request->file('foto_kepsek')->move('foto/', $request->file('foto_kepsek')->getClientOriginalName());
            $data->foto_kepsek = $request->file('foto_kepsek')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('kepsek')->with('success',' Data Berhasil Di Update');
    }

    public function deletekepsek($id){
        $data = kepsek::find($id);
        $data->delete();
        return redirect()->route('kepsek')->with('success',' Data Berhasil Di Delete');
    }
}
