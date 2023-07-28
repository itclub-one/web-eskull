<?php

namespace App\Http\Controllers;

use App\Models\eskul;
use App\Models\berita;
use Illuminate\Support\Str;
use Illuminate\Http\Request;


class beritaController extends Controller
{
    public function index(Request $request ){
        $userRole = auth()->user()->role_id;

        // Base query to retrieve 'berita' data
        $dataQuery = berita::query();
    
        if ($request->has('search')) {
            // Search query for 'judul_berita' column
            $searchTerm = '%' . $request->search . '%';
            $dataQuery->where('judul_berita', 'like', $searchTerm);
        }
    
        if ($userRole != 1) {
            // Add condition to filter by 'id_eskul' if user's role is not '0' (admin)
            $dataQuery->where('id_eskul', auth()->user()->id_eskul);
        }
    
        // Retrieve paginated data (max 5 items per page)
        $data = $dataQuery->orderBy('tanggal_berita', 'DESC')->paginate(5);
    
        if ($userRole == 1) {
            // Get all 'eskul' records if user is admin
            $data_eskul = eskul::all();
        } else {
            // Get 'eskul' record for the authenticated user
            $eskul = eskul::find(auth()->user()->id_eskul);
            $data_eskul = $eskul ? collect([$eskul]) : collect();
        }
    
        return view('admin.news.berita', compact('data', 'data_eskul'));
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
            'deskripsi' => $request->deskripsi,
            'id_eskul' => $request->id_eskul,
            'sub_judul' => Str::limit($request->judul_berita,30),
            'sub_deskripsi' => Str::limit($request->deskripsi,100),
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
        if (auth()->user()->role_id == 1) {
            // Get all 'eskul' records if user is admin
            $data_eskul = eskul::all();
        } else {
            // Get 'eskul' record for the authenticated user
            $eskul = eskul::find(auth()->user()->id_eskul);
            $data_eskul = $eskul ? collect([$eskul]) : collect();
        }
        return view('admin.news.editberita', compact('data','data_eskul'));
    }

    public function updateberita(Request $request , $id){
        $data = berita::find($id);
        $data->slug_berita = Str::slug($request->get('judul_berita')) . '-' . uniqid();
        $data->sub_deskripsi = Str::limit($request->deskripsi,100);
        $data->sub_judul = Str::limit($request->judul_berita,30);



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
        if (auth()->user()->role_id != 'root') {
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
