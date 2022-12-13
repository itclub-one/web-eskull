<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\berita;


class beritaController extends Controller
{
    public function index(Request $request ){

        if($request->has('search')){
            $data = berita::where('judul_berita','like', '%' .$request->search. '%')->paginate(5);
        }else{
            $data = berita::paginate(5);
        }
        // dd($data);
        return view('admin.news.berita', compact('data')) ;
    }

    public function berita(){

        $data = berita::all();
        // dd($data);
        return view('layout.subnav.berita', compact('data')) ;
    }

    public function insertdataberita(Request $request){
        $data = berita::create($request->all());
        if($request->hasfile('foto_berita')){
            $request->file('foto_berita')->move('fotoberita/', $request->file('foto_berita')->getClientOriginalName());
            $data->foto_berita = $request->file('foto_berita')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('berita')->with('success',' Data Berhasil Di Tambahkan');
    }

    public function editberita($id){
        $data = berita::find($id);
        return view('admin.news.editberita', compact('data'));
    }

    public function updateberita(Request $request , $id){
        $data = berita::find($id);
        $data->update($request->all());
        if($request->hasfile('foto_berita')){
            $request->file('foto_berita')->move('fotoberita/', $request->file('foto_berita')->getClientOriginalName());
            $data->foto_berita = $request->file('foto_berita')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('berita')->with('success',' Data Berhasil Di Update');
    }

    public function deleteberita($id){
        $data = berita::find($id);
        $data->delete();
        return redirect()->route('berita')->with('success',' Data Berhasil Di Delete');
    }
}
