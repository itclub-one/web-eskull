<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\anggota;
use App\Models\eskul;
use App\Models\role;
use App\Exports\AnggotaExport;
use Maatwebsite\Excel\Facades\Excel;


class anggotaController extends Controller
{
    public function index(Request $request)
    {
        $anggota = null;
        if (auth()->user()->role_id == 1) {
            // Check if the eskul record with the given id exists
            $data_eskul = eskul::all();
        } else {
            $eskul = eskul::where('id','=',auth()->user()->id_eskul)->first();
            $data_eskul = collect([$eskul]);
        }

        if ($request->has('search')) {
            $query = anggota::where('nama_anggota', 'like', '%' . $request->search . '%');
            if (auth()->user()->role_id != 1) {
                $query->where('id_eskul', auth()->user()->id_eskul);
            }
            $anggota = $query->paginate(5);
        } else {
            if (auth()->user()->role_id == 1) {
                $anggota = anggota::paginate(10);
            } else {
                $anggota = anggota::where('id_eskul', auth()->user()->id_eskul)->paginate(10);
            }
        }
        

        // dd($data);
        return view('admin.anggota-eskul.anggota', compact('anggota', 'data_eskul'));
    }

    public function anggota()
    {

        $data = anggota::orderBy('tanggal_anggota', 'DESC')->paginate(9);

        // dd($data);
        return view('layout.subnav.anggota', compact('data'));
    }
    public function detail_anggota($slug)
    {

        $detail = anggota::where('nis', $slug)->first();
        // dd($detail);
        return view('layout.subnav.detail-anggota', compact('detail'));
    }

    public function insertdataanggota(Request $request)
    {
        $request->validate([
            'nis' => 'required',
            'nama_anggota' => 'required',
            'kelas_anggota' => 'required',
            'jurusan' => 'required',
            'id_eskul' => 'required',
        ]);
        $data = anggota::create($request->all());
        $data->save();
        return redirect()->route('anggota')->with('success', ' Data Berhasil Di Tambahkan');
    }

    public function editanggota($id)
    {   
        $data = anggota::find($id);
        if (auth()->user()->role_id == 1) {
            $data_eskul = eskul::all();
            # code...
        } else {
            $data_eskul = eskul::where('id','=',auth()->user()->id_eskul)->first();
            # code...
        }
        
        return view('admin.anggota-eskul.editanggota', compact('data', 'data_eskul'));
    }

    public function updateanggota(Request $request, $id)
    {
        $request->validate([
            'nis' => 'required',
            'nama_anggota' => 'required',
            'kelas_anggota' => 'required',
            'id_eskul' => 'required',
            'jurusan' => 'required',
            'email' => 'required',
            'no_wa' => 'required',
            
        ]);
        $data = anggota::find($id);

        $data->update($request->all());

        $data->save();
        return redirect()->route('anggota')->with('success', ' Data Berhasil Di Update');
    }

    public function deleteanggota($id)
    {
        $data = anggota::find($id);
        if (auth()->user()->id != $data['id_eskul']) {
            return redirect()->route('anggota')->with('error', ' Data Gagal Di Hapus');
        }
        $data->delete();
        return redirect()->route('anggota')->with('error', ' Data Berhasil Di Hapus');
    }

    public function export() 
    {
        return Excel::download(new AnggotaExport, 'Anggota-'.auth()->user()->name.'-'.date('d-m-Y').'.xlsx');
    }
}
