<?php

namespace App\Http\Controllers;
use App\Models\tentangweb;
use App\Models\namaanggota;


use Illuminate\Http\Request;

class tentangwebController extends Controller
{
    public function index(){

        $data = tentangweb::all();

        // dd($data);
        return view('admin.tentang-web-ini.tentangweb', compact('data')) ;
    }
    public function anggota(){

        $data = namaanggota::all();

        // dd($data);
        return view('admin.tentang-web-ini.tentanganggota', compact('data')) ;
    }
    

    public function tentangweb(){

        $data = tentangweb::all();

        $anggota = namaanggota::all();

        // dd($data);
        return view('layout.subnav.tentangkami.tentang-web-ini', compact('data','anggota')) ;
    }

    public function insertdatatentangweb(Request $request){
        $data = $request->all();
      
        if($request->hasfile('foto')){
            $data['foto'] = $request->file('foto')->move('logotentangweb/', $request->file('foto')->getClientOriginalName());
        }
        $data = tentangweb::create($data);
        
        return redirect()->route('tentangweb')->with('success',' Data Berhasil Di Tambahkan');
    }
    public function insertdatatentanganggota(Request $request){
        $data = tentanganggota::create($request->all());
        if($request->hasfile('foto')){
            $request->file('foto')->move('fotoanggota/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        
        return redirect()->route('tentanganggota')->with('success',' Data Berhasil Di Tambahkan');
    }

    public function edittentangweb($id){
        $data = tentangweb::find($id);
        return view('admin.tentang-web-ini.edittentangweb', compact('data'));
    }
    public function edittentanganggota($id){
        $data = tentanganggota::find($id);
        return view('admin.tentang-web-ini.edittentangwebanggota', compact('data'));
    }

    public function updatetentangweb(Request $request , $id){
        $data = tentangweb::find($id);
        $data->update($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logotentangweb/', $request->file('logo')->getClientOriginalName());
            $data->logo = $request->file('logo')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('tentangweb')->with('success',' Data Berhasil Di Update');
    }
    public function updatetentanganggota(Request $request , $id){
        $data = tentanganggota::find($id);
        $data->update($request->all());
        if($request->hasfile('foto')){
            $request->file('foto')->move('fotoanggota/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('tentanganggota')->with('success',' Data Berhasil Di Update');
    }

    public function deletetentangweb($id){
        $data = tentangweb::find($id);
        $data->delete();
        return redirect()->route('tentangweb')->with('success',' Data Berhasil Di Delete');
    }
    public function deletetentanganggota($id){
        $anggota = tentanganggota::find($id);
        $anggota->delete();
        return redirect()->route('tentanganggota')->with('success',' Data Berhasil Di Delete');
    }
    
}
