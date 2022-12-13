<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dokumentasi;
use Illuminate\Support\Str;


class dokumentasiController extends Controller
{
    public function index(Request $request){

        if($request->has('search')){
            $data = dokumentasi::where('nama_kegiatan','like', '%' .$request->search. '%')->paginate(5);
            $data = dokumentasi::orWhere('penyelenggara','like', '%' .$request->search. '%')->paginate(5);
        }else{
            $data = dokumentasi::paginate(5);
        }
        // dd($data);
        return view('admin.dok.dokumentasi', compact('data')) ;
    }

    public function dok(){

        $data = dokumentasi::paginate(5);
        // dd($data);
        return view('layout.dokumentasi', compact('data')) ;
    }

    public function dokumentasi(){

        $data = dokumentasi::paginate(50);
        // dd($data);
        return view('layout.subnav.dokumentasi', compact('data')) ;
    }



    public function insertdatadokumentasi(Request $request){
        $data = dokumentasi::create($request->all());
        if($request->hasfile('logo')) {
            $random = Str::random(12);
            $request->file('logo')->move('logodokumentasi/', $random . '.' . $request->file('logo')->getClientOriginalExtension());
            $data->logo = $request->file('logo')->getClientOriginalName();
            $data->save();
        }if($request->hasfile('foto_kegiatan')) {
            $random = Str::random(12);
            $request->file('foto_kegiatan')->move('fotokegiatan/', $random . '.' . $request->file('foto_kegiatan')->getClientOriginalExtension());
            $data->foto_kegiatan = $request->file('foto_kegiatan')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('dokumentasi')->with('success',' Data Berhasil Di Tambahkan');
    }

    public function editdokumentasi($id){
        $data = dokumentasi::find($id);
        return view('admin.dok.editdokumentasi', compact('data'));
    }

    public function updatedokumentasi(Request $request , $id){
        $data = dokumentasi::find($id);
        $data->update($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logodokumentasi/', $request->file('logo')->getClientOriginalName());
            $data->logo = $request->file('logo')->getClientOriginalName();
            $data->save();
        }elseif($request->hasfile('foto_kegiatan')){
            $request->file('foto_kegiatan')->move('fotokegiatan/', $request->file('fotokegiatan')->getClientOriginalName());
            $data->foto_kegiatan = $request->file('foto_kegiatan')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('dokumentasi')->with('success',' Data Berhasil Di Update');
    }

    public function deletedokumentasi($id){
        $data = dokumentasi::find($id);
        $data->delete();
        return redirect()->route('dokumentasi')->with('success',' Data Berhasil Di Delete');
    }
}
