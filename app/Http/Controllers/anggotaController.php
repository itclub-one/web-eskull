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
        $data_eskul = eskul::all();
        $currentRole = role::where("role", "=", auth()->user()->role)->first();

        if ($request->has('search')) {
            if (auth()->user()->role == "root") {
                $anggota = anggota::where('nama_anggota', 'like', '%' . $request->search . '%')
                    ->orWhere('id_eskul', 'like', '%' . $request->search . '%')->paginate(5);
            } else {
                $anggota = anggota::where('id_eskul', '=', $currentRole['eskul_id'])->where('nama_anggota', 'like', '%' . $request->search . '%')
                    ->orWhere('id_eskul', 'like', '%' . $request->search . '%')->paginate(5);
            }
        } else {
            if (auth()->user()->role == "root") {
                $anggota = anggota::paginate(10);
            } else {

                $anggota = anggota::where('id_eskul', '=', $currentRole['eskul_id'])->paginate(10);
            }
        }

        // dd($data);
        return view('admin.anggota-eskul.anggota', compact('anggota', 'data_eskul', 'currentRole'));
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
            'nis' => 'required|unique:anggotas',
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
        $currentRole = role::where("role", "=", auth()->user()->role)->first();
        $data = anggota::find($id);
        $data_eskul = eskul::all();
        return view('admin.anggota-eskul.editanggota', compact('data', 'data_eskul','currentRole'));
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
