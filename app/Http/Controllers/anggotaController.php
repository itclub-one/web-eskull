<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\anggota;
use App\Models\eskul;
use App\Models\role;

class anggotaController extends Controller
{
    public function index(Request $request ){
        $anggota = null;
        $data_eskul = eskul::all();
        $currentRole = role::where("role", "=", auth()->user()->role)->get();
        if(auth()->user()->role == "root"){
            $anggota = anggota::all();
        }else{
            if($request->has('search')){
                $anggota = anggota::where('id_eskul','=',$currentRole['eskul_id'])->where('nama_anggota','like', '%' .$request->search. '%')
                ->orWhere('id_eskul','like', '%' .$request->search. '%')->paginate(5);
            }
            $anggota = anggota::where('id_eskul','=',$currentRole['eskul_id'])->get();
            


            
        }
  
        // dd($data);
        return view('admin.anggota-eskul.anggota', compact('anggota', 'data_eskul')) ;
    }

    public function anggota(){

        $data = anggota::orderBy('tanggal_anggota', 'DESC')->paginate(9);
        
        // dd($data);
        return view('layout.subnav.anggota', compact('data')) ;
    }
    public function detail_anggota($slug){

        $detail = anggota::where('slug_anggota', $slug)->first();
        // dd($detail);
        return view('layout.subnav.detail-anggota', compact('detail')) ;
    }

    public function insertdataanggota(Request $request){
        $request->validate([
            'nis' => 'required|unique:anggotas',
            'nama_anggota' => 'required',
            'kelas_anggota' => 'required',
            'id_eskul' => 'required',
            'jurusan' => 'required',
        ]);
        $data = anggota::create($request->all());
        $data['slug_anggota'] = $data['nis'];
        $data->save();
        return redirect()->route('anggota')->with('success',' Data Berhasil Di Tambahkan');
    }

    public function editanggota($id){
        $data = anggota::find($id);
        $data_eskul = eskul::all();
        return view('admin.anggota-eskul.editanggota', compact('data','data_eskul'));
    }

    public function updateanggota(Request $request , $id){
        $request->validate([
            'nis' => 'required|unique:anggotas',
            'nama_anggota' => 'required',
            'kelas_anggota' => 'required',
            'id_eskul' => 'required',
            'jurusan' => 'required',
            'slug_anggota' => 'required',
        ]);
        $data = anggota::find($id);
        $data->slug_anggota = Str::slug($request->get('judul_anggota'));
    
        $data->update($request->all());
        
        $data->save();
        return redirect()->route('anggota')->with('success',' Data Berhasil Di Update');
    }

    public function deleteanggota($id){
        $data = anggota::find($id);  

        $data->delete();
        return redirect()->route('anggota')->with('success',' Data Berhasil Di Delete');
    }
}
