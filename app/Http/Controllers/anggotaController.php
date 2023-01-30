<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\anggota;
use App\Models\eskul;


class anggotaController extends Controller
{
    public function index(Request $request ){

        if($request->has('search')){

            $adminmpk = anggota::where('id_eskul','=','1')->get();
            $adminosis = anggota::where('id_eskul','=','2')->get();
            $adminirma = anggota::where('id_eskul','=','3')->get();
            $adminpks = anggota::where('id_eskul','=','4')->get();
            $adminpramukaputra = anggota::where('id_eskul','=','5')->get();
            $adminpramukaputri = anggota::where('id_eskul','=','6')->get();
            $adminpaskibra = anggota::where('id_eskul','=','7')->get();
            $adminvolly = anggota::where('id_eskul','=','8')->get();
            $adminfutsalputra = anggota::where('id_eskul','=','9')->get();
            $adminfutsalputri = anggota::where('id_eskul','=','10')->get();
            $adminsepakbola = anggota::where('id_eskul','=','11')->get();
            $adminbasket = anggota::where('id_eskul','=','12')->get();
            $adminhockey = anggota::where('id_eskul','=','13')->get();
            $adminbadminton = anggota::where('id_eskul','=','14')->get();
            $adminkarate = anggota::where('id_eskul','=','15')->get();
            $admintaekwondo = anggota::where('id_eskul','=','16')->get();
            $adminsilat = anggota::where('id_eskul','=','17')->get();
            $admintarungderajat = anggota::where('id_eskul','=','18')->get();
            $adminkir = anggota::where('id_eskul','=','19')->get();
            $adminkopsis = anggota::where('id_eskul','=','20')->get();
            $adminpmr = anggota::where('id_eskul','=','21')->get();
            $adminsenitari = anggota::where('id_eskul','=','22')->get();
            $adminmarchingband = anggota::where('id_eskul','=','23')->get();
            $adminsenikriya = anggota::where('id_eskul','=','24')->get();
            $adminpaduansuara = anggota::where('id_eskul','=','25')->get();
            $adminkarawitan = anggota::where('id_eskul','=','26')->get();
            $adminteater = anggota::where('id_eskul','=','27')->get();
            $adminsenimusik = anggota::where('id_eskul','=','28')->get();
            $adminitclub = anggota::where('id_eskul','=','29')->get();
            $adminbroadcast = anggota::where('id_eskul','=','30')->get();
            $adminenglishclub = anggota::where('id_eskul','=','31')->get();
            $adminkoreanclub = anggota::where('id_eskul','=','32')->get();
            $adminjapanclub = anggota::where('id_eskul','=','33')->get();
            $admindeutschclub = anggota::where('id_eskul','=','34')->get();


            $data = anggota::where('nama_anggota','like', '%' .$request->search. '%')
                ->orWhere('id_eskul','like', '%' .$request->search. '%')->paginate(5);

            $data_eskul = eskul::all();

        }else{
            $adminmpk = anggota::where('id_eskul','=','1')->get();
            $adminosis = anggota::where('id_eskul','=','2')->get();
            $adminirma = anggota::where('id_eskul','=','3')->get();
            $adminpks = anggota::where('id_eskul','=','4')->get();
            $adminpramukaputra = anggota::where('id_eskul','=','5')->get();
            $adminpramukaputri = anggota::where('id_eskul','=','6')->get();
            $adminpaskibra = anggota::where('id_eskul','=','7')->get();;
            $adminvolly = anggota::where('id_eskul','=','8')->get();
            $adminfutsalputra = anggota::where('id_eskul','=','9')->get();
            $adminfutsalputri = anggota::where('id_eskul','=','10')->get();
            $adminsepakbola = anggota::where('id_eskul','=','11')->get();
            $adminbasket = anggota::where('id_eskul','=','12')->get();
            $adminhockey = anggota::where('id_eskul','=','13')->get();
            $adminbadminton = anggota::where('id_eskul','=','14')->get();
            $adminkarate = anggota::where('id_eskul','=','15')->get();
            $admintaekwondo = anggota::where('id_eskul','=','16')->get();
            $adminsilat = anggota::where('id_eskul','=','17')->get();
            $admintarungderajat = anggota::where('id_eskul','=','18')->get();
            $adminkir = anggota::where('id_eskul','=','19')->get();
            $adminkopsis = anggota::where('id_eskul','=','20')->get();
            $adminpmr = anggota::where('id_eskul','=','21')->get();
            $adminsenitari = anggota::where('id_eskul','=','22')->get();
            $adminmarchingband = anggota::where('id_eskul','=','23')->get();
            $adminsenikriya = anggota::where('id_eskul','=','24')->get();
            $adminpaduansuara = anggota::where('id_eskul','=','25')->get();
            $adminkarawitan = anggota::where('id_eskul','=','26')->get();
            $adminteater = anggota::where('id_eskul','=','27')->get();
            $adminsenimusik = anggota::where('id_eskul','=','28')->get();
            $adminitclub = anggota::where('id_eskul','=','29')->get();
            $adminbroadcast = anggota::where('id_eskul','=','30')->get();
            $adminenglishclub = anggota::where('id_eskul','=','31')->get();
            $adminkoreanclub = anggota::where('id_eskul','=','32')->get();
            $adminjapanclub = anggota::where('id_eskul','=','33')->get();
            $admindeutschclub = anggota::where('id_eskul','=','34')->get();



            $data = anggota::orderBy('created_at', 'DESC')->paginate(5);
            $data_eskul = eskul::all();
        }
        // dd($data);
        return view('admin.anggota-eskul.anggota', compact(
            'data',
            'data_eskul',
            'adminmpk',
            'adminosis',
            'adminirma',
            'adminpks',
            'adminpramukaputra',
            'adminpramukaputri',
            'adminpaskibra',
            'adminvolly',
            'adminfutsalputra',
            'adminfutsalputri',
            'adminsepakbola',
            'adminbasket',
            'adminhockey',
            'adminbadminton',
            'adminkarate',
            'admintaekwondo',
            'adminsilat',
            'admintarungderajat',
            'adminkir',
            'adminkopsis',
            'adminpmr',
            'adminsenitari',
            'adminmarchingband',
            'adminsenikriya',
            'adminpaduansuara',
            'adminkarawitan',
            'adminteater',
            'adminsenimusik',
            'adminitclub',
            'adminbroadcast',
            'adminenglishclub',
            'adminkoreanclub',
            'adminjapanclub',
            'admindeutschclub',
            )) ;
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
            'slug_anggota' => 'required',
        ]);
        $data = anggota::create($request->all());
        
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
