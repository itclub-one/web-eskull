<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\berita;


class beritaController extends Controller
{
    public function index(Request $request ){

        
        if($request->has('search')){
            $data = berita::where('judul_berita','like', '%' .$request->search. '%')->paginate(5);
        }else{
            $data = berita::orderBy('tanggal_berita', 'DESC')->paginate(5);
        }
        // dd($data);
        return view('admin.news.berita', compact('data')) ;
    }

    public function berita(){

        $data = berita::orderBy('tanggal_berita', 'DESC')->paginate(9);
        $berita_terbaru = berita::orderBy('tanggal_berita', 'DESC')->limit(1)->get();
        $berita_terbaru2 = berita::orderBy('tanggal_berita', 'DESC')->skip(1)->take(2)->get();
        // dd($data);
        return view('layout.subnav.berita', compact('data','berita_terbaru','berita_terbaru2')) ;
    }
    public function detail_berita($slug){

        $detail = berita::where('slug_berita', $slug)->first();
        // dd($detail);
        return view('layout.subnav.detail-berita', compact('detail')) ;
    }

    public function insertdataberita(Request $request){
        $data = berita::create([
            'judul_berita' => $request->judul_berita,
            'tanggal_berita' => $request->tanggal_berita,
            'foto_berita' => $request->foto_berita,
            'slug_berita' => Str::slug($request->judul_berita). '-' . uniqid(), // Tambahkan nilai slug
        ]);
        if($request->hasfile('foto_berita')){
            $nama_baru = Str::random(10) . '.' . $request->file('foto_berita')->extension();
            $request->file('foto_berita')->move('images/foto-berita/', $nama_baru);
            $data->foto_berita = $nama_baru;
            
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
        $data->slug_berita = Str::slug($request->get('judul_berita')) . '-' . uniqid();

        if($request->hasfile('foto_berita')){
            if(File_exists(public_path('images/foto-berita/'.$data->foto_berita))){ //either you can use file path instead of $data->image
                unlink(public_path('images/foto-berita/'.$data->foto_berita));//here you can also use path like as ('uploads/media/welcome/'. $data->image)
            }
        }

        $data->update($request->all());
        if($request->hasfile('foto_berita')){ 
           
            
            $nama_baru = Str::random(10) . '.' . $request->file('foto_berita')->extension();
            $request->file('foto_berita')->move('images/foto-berita/', $nama_baru);
            $data->foto_berita = $nama_baru;
            $data->save();
        }
        return redirect()->route('berita')->with('success',' Data Berhasil Di Update');
    }

    public function deleteberita($id){
        $data = berita::find($id);  
        if (auth()->user()->role != 'root') {
            return redirect()->route('berita')->with('error', ' Data Gagal Di Delete');
        }

        if(File_exists(public_path('images/foto-berita/'.$data->foto_berita))){ //either you can use file path instead of $data->image
            unlink(public_path('images/foto-berita/'.$data->foto_berita));//here you can also use path like as ('uploads/media/welcome/'. $data->image)
        }
        // unlink(public_path('images/foto-berita/'.$data->foto_berita));
        echo public_path('images/foto-berita/'.$data->foto_berita);

        $data->delete();
        return redirect()->route('berita')->with('success',' Data Berhasil Di Delete');
    }
}
