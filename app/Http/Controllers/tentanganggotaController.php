<?php

namespace App\Http\Controllers;
use App\Models\tentangweb;
use App\Models\namaanggota;


use Illuminate\Http\Request;

class tentanganggotaController extends Controller
{
    public function index(){

        $data = namaanggota::all();

        // dd($data);
        return view('admin.tentang-web-ini.tentangweb', compact('data')) ;
    }
    public function anggota(){

        $data = namaanggota::all();

        // dd($data);
        return view('admin.tentang-web-ini.tentanganggota', compact('data')) ;
    }
    


    public function insertdatatentanganggota(Request $request){
        $data = namaanggota::create($request->all());
        if($request->hasfile('foto')){
            $request->file('foto')->move('fotoanggota/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        
        return redirect()->route('tentanganggota')->with('success',' Data Berhasil Di Tambahkan');
    }


    public function edittentanganggota($id){
        $data = namaanggota::find($id);
        return view('admin.tentang-web-ini.edittentangwebanggota', compact('data'));
    }


    public function updatetentanganggota(Request $request , $id){
        $data = namaanggota::find($id);
        $data->update($request->all());
        if($request->hasfile('foto')){
            $request->file('foto')->move('fotoanggota/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('tentanganggota')->with('success',' Data Berhasil Di Update');
    }


    public function deletetentanganggota($id){
        $anggota = namaanggota::find($id);
        $anggota->delete();
        return redirect()->route('tentanganggota')->with('success',' Data Berhasil Di Delete');
    }
    
}
