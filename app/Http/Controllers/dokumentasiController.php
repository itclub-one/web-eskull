<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\dokumentasi;
use App\Models\eskul;


class dokumentasiController extends Controller
{
    public function index(Request $request){

        if($request->has('search')){
            $data = dokumentasi::where('nama_kegiatan','like', '%' .$request->search. '%')->paginate(5);
            $data = dokumentasi::orWhere('penyelenggara','like', '%' .$request->search. '%')->paginate(5);
            // dd($data);
            $data_eskul = eskul::all();
        }else{
            $data = dokumentasi::orderBy('id', 'DESC')->paginate(5);
            $data_eskul = eskul::all();
        }
        // dd($data);
        return view('admin.dok.dokumentasi', compact('data','data_eskul')) ;
    }

    public function dok(){

        $data = dokumentasi::paginate(5);
        // dd($data);
        return view('layout.dokumentasi', compact('data')) ;
    }

    public function dokumentasi(){

        $data = dokumentasi::orderBy('id','DESC')->paginate(12);
        // dd($data);
        return view('layout.subnav.dokumentasi', compact('data')) ;
    }
    
    public function detail_dokumentasi($slug){

        $detail = dokumentasi::where('slug_dokumentasi', $slug)->first();
        // dd($detail);
        return view('layout.subnav.detail-dokumentasi', compact('detail')) ;
    }
    

    public function insertdatadokumentasi(Request $request){
        $data = dokumentasi::create($request->all());
        if($request->hasfile('logo')){
            $nama_baru = Str::random(10) . '.' . $request->file('logo')->extension();
            $request->file('logo')->move('images/dokumentasi/logo-dokumentasi/', $nama_baru);
            $data->logo = $nama_baru;
            
            $data->save();
        
        }if($request->hasfile('foto_kegiatan')){
            $nama_baru = Str::random(10) . '.' . $request->file('foto_kegiatan')->extension();
            $request->file('foto_kegiatan')->move('images/dokumentasi/foto-kegiatan/', $nama_baru);
            $data->foto_kegiatan = $nama_baru;
            
            $data->save();
        }
        return redirect()->route('dokumentasi')->with('success',' Data Berhasil Di Tambahkan');
    }

    public function editdokumentasi($id){
        $data = dokumentasi::find($id);
        $data_eskul = eskul::all();

        return view('admin.dok.editdokumentasi', compact('data','data_eskul'));
    }

    public function updatedokumentasi(Request $request , $id){
        $data = dokumentasi::find($id);
        if($request->hasfile('logo')){
            if(File_exists(public_path('images/dokumentasi/logo-dokumentasi/'.$data->logo))){ //either you can use file path instead of $data->image
                unlink(public_path('images/dokumentasi/logo-dokumentasi/'.$data->logo));//here you can also use path like as ('uploads/media/welcome/'. $data->image)
            }
        }
        if($request->hasfile('foto_kegiatan')){
            if(File_exists(public_path('images/dokumentasi/foto-kegiatan/'.$data->foto_kegiatan))){ //either you can use file path instead of $data->image
                unlink(public_path('images/dokumentasi/foto-kegiatan/'.$data->foto_kegiatan));//here you can also use path like as ('uploads/media/welcome/'. $data->image)
            }
        }
        $data->update($request->all());
        if($request->hasfile('logo')){
            if(File_exists(public_path('images/dokumentasi/logo-dokumentasi'.$data->logo))){ //either you can use file path instead of $data->image
            unlink(public_path('images/dokumentasi/logo-dokumentasi'.$data->logo));//here you can also use path like as ('uploads/media/welcome/'. $data->image)
         }
            $nama_baru = Str::random(10) . '.' . $request->file('logo')->extension();
            $request->file('logo')->move('images/dokumentasi/logo-dokumentasi/', $nama_baru);
            $data->logo = $nama_baru;
            
            $data->save();
        
        }if($request->hasfile('foto_kegiatan')){
            if(File_exists(public_path('images/dokumentasi/foto-kegiatan'.$data->foto_kegiatan))){ //either you can use file path instead of $data->image
            unlink(public_path('images/dokumentasi/foto-kegiatan'.$data->foto_kegiatan));//here you can also use path like as ('uploads/media/welcome/'. $data->image)
         }
            $nama_baru = Str::random(10) . '.' . $request->file('foto_kegiatan')->extension();
            $request->file('foto_kegiatan')->move('images/dokumentasi/foto-kegiatan/', $nama_baru);
            $data->foto_kegiatan = $nama_baru;
            
            $data->save();
        }
        return redirect()->route('dokumentasi')->with('success',' Data Berhasil Di Update');
    }

    public function deletedokumentasi($id){
        $data = dokumentasi::find($id);
        if(File_exists(public_path('images/dokumentasi/logo-dokumentasi'.$data->logo))){ //either you can use file path instead of $data->image
            unlink(public_path('images/dokumentasi/logo-dokumentasi'.$data->logo));//here you can also use path like as ('uploads/media/welcome/'. $data->image)
        }
        if(File_exists(public_path('images/dokumentasi/foto-kegiatan'.$data->foto_kegiatan))){ //either you can use file path instead of $data->image
            unlink(public_path('images/dokumentasi/foto-kegiatan'.$data->foto_kegiatan));//here you can also use path like as ('uploads/media/welcome/'. $data->image)
        }
        // unlink(public_path('images/dokumentasi/logo-dokumentasi'.$data->foto_kegiatan));
        echo public_path('images/dokumentasi/logo-dokumentasi'.$data->foto_kegiatan);
        echo public_path('images/dokumentasi/foto-kegiatan'.$data->foto_kegiatan);
        $data->delete();
        return redirect()->route('dokumentasi')->with('success',' Data Berhasil Di Delete');
    }
}
