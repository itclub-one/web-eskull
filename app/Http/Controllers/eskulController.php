<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Eskul;
use App\Models\dokumentasi;
use App\Models\berita;


class eskulController extends Controller
{
    public function index(Request $request){

        $data = Eskul::all();


        return view('admin.eskul', compact('data')) ;
    }

    public function visimisisejarah(){

        $data = Eskul::all();
        // dd($data);
        return view('layout.subnav.tentangkami.visi-misi-sejarah', compact('data')) ;
    }

    public function eskul(){

        $data = Eskul::all();

        $dok = dokumentasi::all();

        $news = berita::all();

        return view('welcome', compact('data', 'dok', 'news')) ;
    }

    public function insertdataeskul(Request $request){
        $data = Eskul::create($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->logo = $request->file('logo')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('eskul')->with('success',' Data Berhasil Di Tambahkan');
    }

    public function editeskul($id){
        $data = Eskul::find($id);
        return view('admin.editeskul', compact('data'));
    }

    public function updateeskul(Request $request , $id){
        $data = Eskul::find($id);
        $data->update($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->logo = $request->file('logo')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('eskul')->with('success',' Data Berhasil Di Update');
    }

    public function deleteeskul($id){
        $data = Eskul::find($id);
        $data->delete();
        return redirect()->route('eskul')->with('success',' Data Berhasil Di Delete');
    }
}
