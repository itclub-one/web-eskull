<?php

namespace App\Http\Controllers;

use App\Models\administrator;
use App\Models\anggota;
use App\Models\pendaftaran;
use Illuminate\Support\Str;
use App\Models\eskul;
use Illuminate\Http\Request;
use App\Exports\daftarCalonAnggota;
use App\Models\role;
use Maatwebsite\Excel\Facades\Excel;

class pendaftaranController extends Controller
{
    public function index(Request $request ){

        $pendaftaran = null;
        $data_eskul = eskul::all();
        $on = administrator::all();
        $currentRole = role::where("role", "=", auth()->user()->role)->first();

        if ($request->has('search')) {
            if (auth()->user()->role == "root") {
                $pendaftaran = pendaftaran::where('nama_calon_anggota', 'like', '%' . $request->search . '%')
                    ->orWhere('id_eskul', 'like', '%' . $request->search . '%')->paginate(5);
            } else {
                $pendaftaran = pendaftaran::where('id_eskul', '=', $currentRole['eskul_id'])->where('nama_calon_anggota', 'like', '%' . $request->search . '%')
                    ->orWhere('id_eskul', 'like', '%' . $request->search . '%')->paginate(5);
            }
        } else {
            if (auth()->user()->role == "root") {
                $pendaftaran = pendaftaran::paginate(10);
            } else {

                $pendaftaran = pendaftaran::where('id_eskul', '=', $currentRole['eskul_id'])->get();
            }
        }
        // dd($data);
        return view('admin.pendaftaran-eskul.pendaftaran', compact(
            'on',
            'pendaftaran',
            )) ;
    }

    public function pendaftaran_eskul(){

        $data = pendaftaran::all();
        $on = administrator::all();
        $data_eskul = eskul::all();
        
        // dd($data);
        return view('layout.subnav.pendaftaran-eskul.pendaftaran', compact('data','data_eskul','on')) ;
    }
    public function list_eskul(){

        $data = eskul::all();
        // dd($detail);
        return view('layout.subnav.pendaftaran-eskul.list-eskul', compact('data')) ;
    }
    public function detail_pendaftaran($slug){

        $data = eskul::with('pendaftaran')->get()
            ->where('slug', $slug)->first();
        // dd($data);
        return view('layout.subnav.pendaftaran-eskul.detail-pendaftaran', compact('data')) ;
    }

    public function insertdatapendaftaran(Request $request){
        $request->validate([
            'nis' => 'required|unique:pendaftarans',
            'nama_calon_anggota' => 'required',
            'kelas_calon_anggota' => 'required',
            'jurusan' => 'required',
            'id_eskul' => 'required',
            'alasan' => 'required',
            'email' => 'required|unique:pendaftarans',
            'no_wa' => 'required',
        ]);
        $data = pendaftaran::create($request->all());
        
        $data->save();
        return redirect()->route('list_eskul')->with('success',' Data Berhasil Di Tambahkan');
    }
    public function export() 
    {
            return Excel::download(new daftarCalonAnggota, 'daftar-calon-anggota.xlsx');
    }
    public function insertdatapendaftarantopendaftaran(Request $request){

        $data = anggota::create($request->all());
        
        $data->save();
        return redirect()->route('pendaftaran')->with('success',' Data Berhasil Di Pindahkan ke Anggota');
    }
    public function add_pendaftaran(Request $request , $id){
        $data = administrator::find($id);
    
        $data->update($request->all());
        
        $data->save();
        return redirect()->route('pendaftaran')->with('success',' Pendaftaran dibuka/ditutup');
    }

    public function editpendaftaran($id){
        $data = pendaftaran::find($id);
        $data->delete();
        $data_eskul = eskul::all();
        return view('admin.pendaftaran-eskul.editpendaftaran', compact('data','data_eskul'));
    }

    public function updatependaftaran(Request $request , $id){
        $data = pendaftaran::find($id);
    
        $data->update($request->all());
        
        $data->save();
        return redirect()->route('pendaftaran')->with('success',' Data Berhasil Di Update');
    }

    public function deletependaftaran($id){
        $data = pendaftaran::find($id);  

        $data->delete();
        return redirect()->route('pendaftaran')->with('success',' Data Berhasil Di Tolak');
    }
}
