<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\kepsek;


use Illuminate\Http\Request;

class kepsekController extends Controller
{
    public function index(){

        $data = kepsek::all();
        // dd($data);
        if (auth()->user()->role_id != 1) {
            # code...
            return back();
        }
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
            $nama_baru = Str::random(10) . '.' . $request->file('foto_kepsek')->extension();
            $request->file('foto_kepsek')->move('images/foto-kepsek/', $nama_baru);
            $data->foto_kepsek = $nama_baru;
            $data->save();
        }
        return redirect()->route('kepsek')->with('success',' Data Berhasil Di Tambahkan');
    }

    public function editkepsek($id){
        if (auth()->user()->role_id != 1) {
            # code...
            return back();
        }
        $data = kepsek::find($id);
        return view('admin.kepalasekolah.editkepsek', compact('data'));
    }

    public function updatekepsek(Request $request , $id){
        $data = kepsek::find($id);

        if($request->hasfile('foto_kepsek')){
            if(File_exists(public_path('images/foto-kepsek/'.$data->foto_kepsek))){ //either you can use file path instead of $data->image
                unlink(public_path('images/foto-kepsek/'.$data->foto_kepsek));//here you can also use path like as ('uploads/media/welcome/'. $data->image)
            }
        }

        $data->update($request->all()); 
        if($request->hasfile('foto_kepsek')){
            $nama_baru = Str::random(10) . '.' . $request->file('foto_kepsek')->extension();
            $request->file('foto_kepsek')->move('images/foto-kepsek/', $nama_baru);
            $data->foto_kepsek = $nama_baru;
            $data->save();
        }
        return redirect()->route('kepsek')->with('success',' Data Berhasil Di Update');
    }

    public function deletekepsek($id){
        $data = kepsek::find($id);
        if (auth()->user()->role_id != 1) {
            # code...
            return back();
        }
        if(File_exists(public_path('images/foto-kepsek/'.$data->foto_kepsek))){ //either you can use file path instead of $data->image
            unlink(public_path('images/foto-kepsek/'.$data->foto_kepsek));//here you can also use path like as ('uploads/media/welcome/'. $data->image)
        }
        // unlink(public_path('images/foto-kepsek/'.$data->foto_kepsek));
        echo public_path('images/foto-kepsek/'.$data->foto_kepsek);

        $data->delete();
        return redirect()->route('kepsek')->with('success',' Data Berhasil Di Delete');
    }
}
