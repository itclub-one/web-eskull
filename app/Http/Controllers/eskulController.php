<?php

namespace App\Http\Controllers;

use App\Models\role;
use App\Models\User;
use App\Models\eskul;
use App\Models\berita;
use App\Models\dokumentasi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class eskulController extends Controller
{
    public function index(Request $request){

        $eskul = null;
        $data_eskul = eskul::all();

        if ($request->has('search')) {
            if (auth()->user()->role_id == 1) {
                $eskul = eskul::where('nama_eskul', 'like', '%' . $request->search . '%')
                    ->orWhere('slug', 'like', '%' . $request->search . '%')->paginate(10);
            } else {
                $eskul = eskul::where('id_eskul', '=', auth()->user()->id_eskul)->where('nama_eskul', 'like', '%' . $request->search . '%')
                    ->orWhere('id', 'like', '%' . $request->search . '%')->paginate(10);
            }
        } else {
            if (auth()->user()->role_id == 1) {
                $eskul = eskul::paginate(2);
            } else {

                $eskul = eskul::where('id', '=', auth()->user()->id_eskul)->get();
            }
        }
        
        
        return view('admin.eskul', compact(
            'eskul',
        )) ;
    }
    public function visimisisejarah(){

        $data = eskul::all();
        // dd($data);
        return view('layout.subnav.tentangkami.visi-misi-sejarah', compact('data')) ;
    }

    public function eskul(){

        $data = eskul::all();
        $total_eskul = $data->count();
        
        $dok = dokumentasi::inRandomOrder()->limit(8)->get();

        $news1 = berita::inRandomOrder()->limit(1)->get();
        $news = berita::inRandomOrder()->limit(3)->get();
        $news2 = berita::inRandomOrder()->limit(5)->get();
        // dd($data);
        return view('welcome', compact('data', 'dok', 'news','news1','news2','total_eskul')) ;
    }
    
    public function eskul_all(){

        $data = eskul::orderBy('id','ASC')->paginate(12);

        $total = eskul::all();
        $total_eskul = $total->count();
        
        return view('layout.eskul.list-eskul', compact('data','total_eskul')) ;
    }

    public function insertdataeskul(Request $request){
        $request->validate([
            'nama_eskul' => 'required',
            'logo' => 'required',
            'pembina' => 'required',
            'ketua' => 'required',
            'wakilketua' => 'required',
            'jadwal_kumpulan' => 'required',
            'visi' => 'required',
            'misi_eskul' => 'required',
            'program_kerja' => 'required',
            'nama_instagram' => 'required',
            'sekbid' => 'required',
        ]);
        $data = eskul::create([
            'nama_eskul' => $request->nama_eskul,
            'sekbid' => $request->sekbid,
            'pembina' => $request->pembina,
            'logo' => $request->logo,
            'ketua' => $request->ketua,
            'wakilketua' => $request->wakilketua,
            'jadwal_kumpulan' => $request->jadwal_kumpulan,
            'visi' => $request->visi,
            'misi_eskul' => $request->misi_eskul,
            'program_kerja' => $request->program_kerja,
            'nama_instagram' => $request->nama_instagram,
            'slug' => Str::slug($request->nama_eskul). '-' . uniqid(), // Tambahkan nilai slug
        ]);
        
        if($request->hasfile('logo')){
            $nama_baru = Str::random(10) . '.' . $request->file('logo')->extension();
            $request->file('logo')->move('images/logo-eskul/', $nama_baru);
            $data->logo = $nama_baru;
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
        $data->slug = Str::slug($request->get('nama_eskul')) . '-' . uniqid();

        if($request->hasfile('logo')){
            if(File_exists(public_path('images/logo-eskul/'.$data->logo))){ //either you can use file path instead of $data->image
                unlink(public_path('images/logo-eskul/'.$data->logo));//here you can also use path like as ('uploads/media/welcome/'. $data->image)
            }
        }
        $data->update($request->all());
        if($request->hasfile('logo')){
            if(File_exists(public_path('images/logo-eskul/'.$data->logo))){ //either you can use file path instead of $data->image
                unlink(public_path('images/logo-eskul/'.$data->logo));//here you can also use path like as ('uploads/media/welcome/'. $data->image)
             }
             $nama_baru = Str::random(10) . '.' . $request->file('logo')->extension();
             $request->file('logo')->move('images/logo-eskul/', $nama_baru);
             $data->logo = $nama_baru;
             $data->save();
        }
        return redirect()->route('eskul')->with('success',' Data Berhasil Di Update');
    }

    public function deleteeskul($id){
        $data = eskul::find($id);
        if (auth()->user()->role_id != 1) {
            return redirect()->route('eskul')->with('error', ' Data Gagal Di Delete');
        }
        if(File_exists(public_path('images/logo-eskul/'.$data->logo))){ //either you can use file path instead of $data->image
            unlink(public_path('images/logo-eskul/'.$data->logo));//here you can also use path like as ('uploads/media/welcome/'. $data->image)
        }
        // unlink(public_path('images/logo-eskul/'.$data->logo));
        echo public_path('images/logo-eskul/'.$data->logo);
        $data->delete();
        return redirect()->route('eskul')->with('success',' Data Berhasil Di Delete');
    }
}
