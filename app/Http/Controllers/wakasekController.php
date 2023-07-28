<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\wakasek;


use Illuminate\Http\Request;

class wakasekController extends Controller
{
    
    public function index(){

        if (auth()->user()->role_id != 1) {
            # code...
            return back();
        }
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
        $existingCount = wakasek::count();
    
        if ($existingCount > 0) {
            return redirect()->route('wakasek')->with('error', 'Data tidak bisa di upload. Karena sudah ada data');
        }
        $data = wakasek::create($request->all());
        if($request->hasfile('foto_wakasek')){
            $nama_baru = Str::random(10) . '.' . $request->file('foto_wakasek')->extension();
            $request->file('foto_wakasek')->move('images/foto-wakasek/', $nama_baru);
            $data->foto_wakasek = $nama_baru;
            $data->save();
        }
        return redirect()->route('wakasek')->with('success',' Data Berhasil Di Tambahkan');
    }

    public function editwakasek($id){
        if (auth()->user()->role_id != 1) {
            # code...
            return back();
        }

        $data = wakasek::find($id);
        return view('admin.wakilkepalasekolah.editwakasek', compact('data'));
    }

    public function updatewakasek(Request $request , $id){
        $data = wakasek::find($id);
        if($request->hasfile('foto_wakasek')){
            if(File_exists(public_path('images/foto-wakasek/'.$data->foto_wakasek))){ //either you can use file path instead of $data->image
                unlink(public_path('images/foto-wakasek/'.$data->foto_wakasek));//here you can also use path like as ('uploads/media/welcome/'. $data->image)
            }
        }

        $data->update($request->all()); 
        if($request->hasfile('foto_wakasek')){
            $nama_baru = Str::random(10) . '.' . $request->file('foto_wakasek')->extension();
            $request->file('foto_wakasek')->move('images/foto-wakasek/', $nama_baru);
            $data->foto_wakasek = $nama_baru;
            $data->save();
        }
        return redirect()->route('wakasek')->with('success',' Data Berhasil Di Update');
    }

    public function deletewakasek($id){
        $data = wakasek::find($id);
        if (auth()->user()->role_id != 1) {
            # code...
            return back();
        }
        if(File_exists(public_path('images/foto-wakasek/'.$data->foto_wakasek))){ //either you can use file path instead of $data->image
            unlink(public_path('images/foto-wakasek/'.$data->foto_wakasek));//here you can also use path like as ('uploads/media/welcome/'. $data->image)
        }
        // unlink(public_path('images/foto-wakasek/'.$data->foto_wakasek));
        echo public_path('images/foto-wakasek/'.$data->foto_wakasek);

        $data->delete();
        return redirect()->route('wakasek')->with('success',' Data Berhasil Di Delete');
    }
}
