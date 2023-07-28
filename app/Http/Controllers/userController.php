<?php

namespace App\Http\Controllers;

use App\Models\role;
use App\Models\User;
use App\Models\eskul;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class userController extends Controller
{
    public function index(Request $request){
        if (auth()->user()->role_id != 1) {
            # code...
            return back();
        }
        if($request->has('search')){
            $data = user::where('name','like', '%' .$request->search. '%')->
            orWhere('email','like', '%' .$request->search. '%')->paginate(5);
        }else{
            $data = user::with('roles')->paginate(5);
        }

        return view('admin.user.user', compact('data'));
    }

    
    public function register(){
        $RoleUser = auth()->user()->role_id ;

        if ($RoleUser == 1) {
            // Check if the eskul record with the given id exists
            $role = role::all();
        } else {
            $roles = role::where('id','=',auth()->user()->role_id)->first();
            $role = collect([$roles]);
        }

        if ($RoleUser == 1) {
            // Check if the eskul record with the given id exists
            $data_eskul = eskul::all();
        } else {
            $eskul = eskul::where('id','=',auth()->user()->id_eskul)->first();
            $data_eskul = collect([$eskul]);
        }
        // dd($data_eskul);

        return view('admin.validation.register',compact('role','data_eskul'));
    }

    public function registeruser(Request $request){
        $data = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => $request->role_id,
            'foto' => $request->foto,
            'id_eskul' => $request->id_eskul,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60) ,
        ]);

        if($request->hasfile('foto')){
            $nama_baru = Str::random(10) . '.' . $request->file('foto')->extension();
            $request->file('foto')->move('images/foto-user/', $nama_baru);
            $data->foto = $nama_baru;
            $data->save();
        }
        return redirect()->route('users')->with('success',' Data Berhasil Di Tambahkan');

    }
    public function registerusernew(Request $request, $id){
        $data_eskul = eskul::find($id);
        if (User::where('id_eskul', '=', $data_eskul->id)->count() > 0 || auth()->user()->role_id != 1) {
            # code...
            return back()->with('error','User sudah terdaftar');
        }
        $data = User::create([
            'name' => $data_eskul->nama_eskul,
            'email' => Str::slug($data_eskul->nama_eskul) . '@smknegeri1garut.sch.id',
            'role_id' => 1,
            'foto' => $data_eskul->logo,
            'id_eskul' => $data_eskul->id,
            'password' => bcrypt('Cimanuk309A'),
            'remember_token' => Str::random(60) ,
        ]);

        if ($data_eskul->logo) {
            $file_path = 'images/logo-eskul/' . $data_eskul->logo;
        
            if (file_exists($file_path)) {
                $nama_baru = Str::random(10) . '.' . pathinfo($file_path, PATHINFO_EXTENSION);
                $new_file_path = 'images/foto-user/' . $nama_baru;
        
                copy($file_path, $new_file_path);
        
                $data->foto = $nama_baru;
                $data->save();
            }
        }
        return redirect()->route('users')->with('success',' Data Berhasil Di Tambahkan');

    }

    public function edituser($id){
        $RoleUser = auth()->user()->role_id ;
        if ($RoleUser != 1) {
            # code...
            return back();
        }
        $data = user::find($id);

        
        if ($RoleUser == 1) {
            // Check if the eskul record with the given id exists
            $role = role::all();
        } else {
            $roles = role::where('id','=',auth()->user()->role_id)->first();
            $role = collect([$roles]);
        }

        if ($RoleUser == 1) {
            // Check if the eskul record with the given id exists
            $data_eskul = eskul::all();
        } else {
            $eskul = eskul::where('id','=',auth()->user()->id_eskul)->first();
            $data_eskul = collect([$eskul]);
        }
        return view('admin.user.edituser', compact('data','role','data_eskul'));
    }

    public function updateuser(Request $request , $id){
        $data = user::find($id);
        if($request->hasfile('foto')){
            if(File_exists(public_path('images/foto-user/'.$data->foto))){ //either you can use file path instead of $data->image
                unlink(public_path('images/foto-user/'.$data->foto));//here you can also use path like as ('uploads/media/welcome/'. $data->image)
            }
        }
        $data->update([
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => $request->role_id,
            // 'foto' => $request->foto,
            // 'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);
        if($request->hasfile('foto')){
            $nama_baru = Str::random(10) . '.' . $request->file('foto')->extension();
            $request->file('foto')->move('images/foto-user/', $nama_baru);
            $data->foto = $nama_baru;
            $data->save();
        }

        
        return redirect()->route('users')->with('success',' Data Berhasil Di Update');
    }

    public function editpassword($id){
        if (auth()->user()->role_id != 1) {
            # code...
            return back();
        }
        $data = user::find($id);
        return view('admin.user.editpassword', compact('data'));
    }

    public function updatepassword(Request $request , $id){
        $data = user::find($id);
        $data->update([
            
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);

        return redirect()->route('users')->with('success',' Data Berhasil Di Update');

    }

    public function backtoedituser()
    {

        return redirect()->route('users');
    }

    public function deleteuser($id){
        if (auth()->user()->role_id != 1) {
            # code...
            return back();
        }
        $data = user::find($id);
        if (auth()->user()->role_id != 1) {
            return redirect()->route('users')->with('error', ' Data Gagal Di Delete');
        }
        if(File_exists(public_path('images/foto-user/'.$data->foto))){ //either you can use file path instead of $data->image
            unlink(public_path('images/foto-user/'.$data->foto));//here you can also use path like as ('uploads/media/welcome/'. $data->image)
        }
        // unlink(public_path('images/foto-user/'.$data->foto));
        echo public_path('images/foto-user/'.$data->foto);

        $data->delete();
        return redirect()->route('users')->with('success',' Data Berhasil Di Delete');
    }
}
