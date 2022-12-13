<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\eskul;
use App\Models\dokumentasi;
use App\Models\berita;


class eskulController extends Controller
{
    public function index(Request $request){
        
        // $data = eskul::latest();

        // if(request('search')) {
        //     $data->where('nama_eskul','slug' , '%' .request('search'). '%');
        // }else{
        //     $data = eskul::paginate(5);

        // }

        if($request->has('search')){
                // $adminitc = DB::
            $adminitc = eskul::where('slug','like', '%' .$request->search. '%')->
            orWhere('nama_eskul','like', '%' .$request->search. '%')->paginate(2);

            $data = eskul::where('slug','like', '%' .$request->search. '%')->
            orWhere('nama_eskul','like', '%' .$request->search. '%')->paginate(2);
        }else{
            
            $adminitc = DB::select('select * from eskuls where id = 29 ');

            
            
            $data = eskul::paginate(2);

        }

        // dd($data);
        return view('admin.eskul', compact('data','adminitc')) ;
    }
    
    public function visimisisejarah(){

        $data = eskul::all();
        // dd($data);
        return view('layout.subnav.tentangkami.visi-misi-sejarah', compact('data')) ;
    }

    public function eskul(){

        $data = eskul::all();

        $dok = dokumentasi::all();

        $news = berita::all();
        // dd($data);
        return view('welcome', compact('data', 'dok', 'news')) ;
    }

    public function insertdataeskul(Request $request){
        $data = eskul::create($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->logo = $request->file('logo')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('eskul')->with('success',' Data Berhasil Di Tambahkan');
    }

    public function editeskul($id){
        $data = eskul::find($id);
        return view('admin.editeskul', compact('data'));
    }

    public function updateeskul(Request $request , $id){
        $data = eskul::find($id);
        $data->update($request->all());
        if($request->hasfile('logo')){
            $request->file('logo')->move('logoeskul/', $request->file('logo')->getClientOriginalName());
            $data->logo = $request->file('logo')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('eskul')->with('success',' Data Berhasil Di Update');
    }

    public function deleteeskul($id){
        $data = eskul::find($id);
        $data->delete();
        return redirect()->route('eskul')->with('success',' Data Berhasil Di Delete');
    }
}
