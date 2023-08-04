<?php

namespace App\Http\Controllers;

use App\Models\role;
use App\Models\eskul;
use App\Models\anggota;
use App\Models\pendaftaran;
use Illuminate\Support\Str;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Models\administrator;
use App\Exports\PendaftaranExport;
use Maatwebsite\Excel\Facades\Excel;

class pendaftaranController extends Controller
{
    public function index(Request $request ){

        $pendaftaran = null;
        $data_eskul = eskul::all();
        $on = administrator::all();

        if ($request->has('search')) {
            if (auth()->user()->role_id == 1) {
                $pendaftaran = pendaftaran::where('nama_calon_anggota', 'like', '%' . $request->search . '%')
                    ->orWhere('id_eskul', 'like', '%' . $request->search . '%')->orderBy('updated_at','DESC')->paginate(5);
            } else {
                $pendaftaran = pendaftaran::where('id_eskul', '=', auth()->user()->id_eskul)->where('nama_calon_anggota', 'like', '%' . $request->search . '%')
                    ->orWhere('id_eskul', 'like', '%' . $request->search . '%')->orderBy('updated_at','DESC')->paginate(5);
            }
        } else {
            if (auth()->user()->role_id == 1) {
                $pendaftaran = pendaftaran::orderBy('updated_at','DESC')->paginate(10);
            } else {

                $pendaftaran = pendaftaran::where('id_eskul', '=', auth()->user()->id_eskul)->orderBy('updated_at','DESC')
                ->paginate(10);
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

        $data = eskul::paginate(12);
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
            'nis' => 'required',
            'nama_calon_anggota' => 'required',
            'kelas_calon_anggota' => 'required',
            'jurusan' => 'required',
            'id_eskul' => 'required',
            'alasan' => 'required',
            'email' => 'required',
            'no_wa' => 'required|numeric',
        ]);
        $exist = pendaftaran::where('id_eskul','=',$request->id_eskul)->where('nis','=',$request->nis)->first();
        $eskul = eskul::where('id','=',$request->id_eskul)->first();
        if ($exist) {
            # code...
            return back()->with('error','Anda tidak bisa daftar dua kali di ekstrakurikuler '.$eskul->nama_eskul);
        }
        $data = pendaftaran::create($request->all());
        
        $data->save();

        

        // Create a notification when a new pendaftaran is added
        $notificationMessage = 'Ada Pendaftar baru: ' . $data->nama_calon_anggota . ' ' .$data->kelas_calon_anggota.'-'.$data->jurusan;
        $notificationUrl = '/pendaftaran-eskul/detail/' . $data->id; // Replace with the correct URL for pendaftaran details
        $notification = new Notification([
            'id_eskul' => $data->id_eskul, // Adjust this to the user receiving the notification
            'message' => $notificationMessage,
            'url' => $notificationUrl,
            'read' => false, // Mark as unread by default
        ]);
        $notification->save();
        return redirect()->route('pendaftaran_eskul')->with('success',' Anda telah mendaftar ekstrakurikuler '. $eskul->nama_eskul);
    }
    public function export() 
    {
        return Excel::download(new PendaftaranExport, 'Pendaftaran-eskul.xlsx');
    }
    public function insertdatapendaftarantopendaftaran(Request $request,$id){
        $pendaftar = pendaftaran::find($id);
        $eskul = eskul::where('id','=',$pendaftar->id_eskul)->first();
        $exist = anggota::where('id_eskul', '=', $pendaftar->id_eskul)->where('nis','=',$pendaftar->nis)->first();
        if (isset($exist) && $exist->count() > 0) {
            $pendaftar->delete();
            return back()->with('error', 'Data Sudah terdaftar diekstrakurikuler ' . $eskul->nama_eskul);
        }
        $data = anggota::create($request->all());
        
        $data->save();
        $pendaftar->delete();
        return redirect()->route('pendaftaran')->with('success',' Data Berhasil Di Pindahkan ke Anggota');
    }
    public function add_pendaftaran(Request $request , $id){
        $data = administrator::find($id);
    
        $data->update($request->all());

        if ($data->on == 0) {
            $message = 'Pendaftaran ditutup';
            $status = 'error';
        } else {
            $message = 'Pendaftaran dibuka';
            $status = 'success';
            # code...
        }
        
        
        $data->save();
        return redirect()->route('pendaftaran')->with($status,$message);
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
