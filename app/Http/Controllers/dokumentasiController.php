<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\dokumentasi;
use App\Models\eskul;
use App\Models\role;

class dokumentasiController extends Controller
{
    public function index(Request $request)
    {

        // Assuming 'dokumentasi' and 'eskul' are the correct model names

        // Get the authenticated user's role
        $userRole = auth()->user()->role;

        // Base query to retrieve 'dokumentasi' data
        $dataQuery = dokumentasi::query();

        if ($request->has('search')) {
            // Search query for 'nama_kegiatan' and 'penyelenggara' columns
            $searchTerm = '%' . $request->search . '%';
            $dataQuery->where(function ($query) use ($searchTerm) {
                $query->where('nama_kegiatan', 'like', $searchTerm)
                    ->orWhere('penyelenggara', 'like', $searchTerm);
            });
        }

        if ($userRole != 0) {
            // Add condition to filter by 'penyelenggara' if user's role is not '0' (admin)
            $dataQuery->where('penyelenggara', auth()->user()->id_eskul);
        }

        // Retrieve paginated data (max 5 items per page)
        $data = $dataQuery->orderBy('id', 'DESC')->paginate(5);

        if ($userRole == 0) {
            // Check if the eskul record with the given id exists
            $data_eskul = eskul::all();
        } else {
            $eskul = eskul::where('id','=',auth()->user()->id_eskul)->first();
            $data_eskul = collect([$eskul]);
        }

        // dd($data);
        return view('admin.dok.dokumentasi', compact('data', 'data_eskul'));
    }

    public function dok()
    {

        $data = dokumentasi::paginate(5);
        // dd($data);
        return view('layout.dokumentasi', compact('data'));
    }

    public function dokumentasi()
    {

        $data = dokumentasi::orderBy('id', 'DESC')->paginate(12);
        // dd($data);
        return view('layout.subnav.dokumentasi', compact('data'));
    }

    public function detail_dokumentasi($slug)
    {

        $detail = dokumentasi::where('slug_dokumentasi', $slug)->first();
        // dd($detail);
        return view('layout.subnav.detail-dokumentasi', compact('detail'));
    }


    public function insertdatadokumentasi(Request $request)
    {
        
        $request->validate([
            'nama_kegiatan' => 'required',
            'penyelenggara' => 'required',
            'foto_kegiatan' => 'required',
        ]);
        
        $data = dokumentasi::create([
            'nama_kegiatan' => $request->nama_kegiatan,
            'penyelenggara' => $request->penyelenggara,
            'foto_kegiatan' => $request->foto_kegiatan,
            'slug_dokumentasi' => Str::slug($request->nama_kegiatan). '-' . uniqid(), // Tambahkan nilai slug
        ]);
        if ($request->hasfile('foto_kegiatan')) {
            $nama_baru = Str::random(10) . '.' . $request->file('foto_kegiatan')->extension();
            $request->file('foto_kegiatan')->move('images/dokumentasi/foto-kegiatan/', $nama_baru);
            $data->foto_kegiatan = $nama_baru;

            $data->save();
        }
        return redirect()->route('dokumentasi')->with('success', ' Data Berhasil Di Tambahkan');
    }

    public function editdokumentasi($id)
    {
        
        $data = dokumentasi::find($id);
        $foto = $data->foto_kegiatan;
        // dd($data->foto_kegiatan);
        $currentRole = role::where("role", "=", auth()->user()->role)->first();

                $data_eskul = eskul::all();
        

        return view('admin.dok.editdokumentasi', compact('data', 'data_eskul','foto'));
    }

    public function updatedokumentasi(Request $request, $id)
    {
        $data = dokumentasi::find($id);
        $data->slug_dokumentasi = Str::slug($request->get('nama_kegiatan')) . '-' . uniqid();

        if ($request->hasfile('logo')) {
            if (File_exists(public_path('images/dokumentasi/logo-dokumentasi/' . $data->logo))) { //either you can use file path instead of $data->image
                unlink(public_path('images/dokumentasi/logo-dokumentasi/' . $data->logo)); //here you can also use path like as ('uploads/media/welcome/'. $data->image)
            }
        }
        if ($request->hasfile('foto_kegiatan')) {
            if (File_exists(public_path('images/dokumentasi/foto-kegiatan/' . $data->foto_kegiatan))) { //either you can use file path instead of $data->image
                unlink(public_path('images/dokumentasi/foto-kegiatan/' . $data->foto_kegiatan)); //here you can also use path like as ('uploads/media/welcome/'. $data->image)
            }
        }
        $data->update($request->all());
        if ($request->hasfile('logo')) {
            if (File_exists(public_path('images/dokumentasi/logo-dokumentasi' . $data->logo))) { //either you can use file path instead of $data->image
                unlink(public_path('images/dokumentasi/logo-dokumentasi' . $data->logo)); //here you can also use path like as ('uploads/media/welcome/'. $data->image)
            }
            $nama_baru = Str::random(10) . '.' . $request->file('logo')->extension();
            $request->file('logo')->move('images/dokumentasi/logo-dokumentasi/', $nama_baru);
            $data->logo = $nama_baru;

            $data->save();
        }
        if ($request->hasfile('foto_kegiatan')) {
            if (File_exists(public_path('images/dokumentasi/foto-kegiatan' . $data->foto_kegiatan))) { //either you can use file path instead of $data->image
                unlink(public_path('images/dokumentasi/foto-kegiatan' . $data->foto_kegiatan)); //here you can also use path like as ('uploads/media/welcome/'. $data->image)
            }
            $nama_baru = Str::random(10) . '.' . $request->file('foto_kegiatan')->extension();
            $request->file('foto_kegiatan')->move('images/dokumentasi/foto-kegiatan/', $nama_baru);
            $data->foto_kegiatan = $nama_baru;

            $data->save();
        }
        return redirect()->route('dokumentasi')->with('success', ' Data Berhasil Di Update');
    }

    public function deletedokumentasi($id)
    {
        $data = dokumentasi::find($id);
        if (auth()->user()->role != 0) {
            # code...
            if (auth()->user()->id_eskul != $data['penyelenggara']) {
                return redirect()->route('dokumentasi')->with('error', ' Data Gagal Di Delete');
            }
        }
        if (auth()->user()->role == 0 || auth()->user()->id_eskul == $data['penyelenggara']) {
            # code...
            if (File_exists(public_path('images/dokumentasi/logo-dokumentasi' . $data->logo))) { //either you can use file path instead of $data->image
                unlink(public_path('images/dokumentasi/logo-dokumentasi' . $data->logo)); //here you can also use path like as ('uploads/media/welcome/'. $data->image)
            }
            if (File_exists(public_path('images/dokumentasi/foto-kegiatan' . $data->foto_kegiatan))) { //either you can use file path instead of $data->image
                unlink(public_path('images/dokumentasi/foto-kegiatan' . $data->foto_kegiatan)); //here you can also use path like as ('uploads/media/welcome/'. $data->image)
            }
            // unlink(public_path('images/dokumentasi/logo-dokumentasi'.$data->foto_kegiatan));
            echo public_path('images/dokumentasi/logo-dokumentasi' . $data->foto_kegiatan);
            echo public_path('images/dokumentasi/foto-kegiatan' . $data->foto_kegiatan);
            $data->delete();
            return redirect()->route('dokumentasi')->with('success', ' Data Berhasil Di Delete');
        }
    }
}
