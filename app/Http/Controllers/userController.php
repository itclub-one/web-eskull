<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;



class userController extends Controller
{
    public function index(Request $request){
        if($request->has('search')){
            $data = user::where('slug','like', '%' .$request->search. '%')->
            orWhere('nama_eskul','like', '%' .$request->search. '%')->paginate(5);
        }else{
            $data = user::paginate(5);
        }

        return view('admin.user.user', compact('data'));
    }

    public function register(){
        return view('admin.validation.register');
    }

    public function registeruser(Request $request){
        $data = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'foto' => $request->foto,
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

    public function edituser($id){
        $data = user::find($id);
        return view('admin.user.edituser', compact('data'));
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
            'role' => $request->role,
            // 'foto' => $request->foto,
            'password' => bcrypt($request->password),
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
        $data = user::find($id);

        if(File_exists(public_path('images/foto-user/'.$data->foto))){ //either you can use file path instead of $data->image
            unlink(public_path('images/foto-user/'.$data->foto));//here you can also use path like as ('uploads/media/welcome/'. $data->image)
        }
        // unlink(public_path('images/foto-user/'.$data->foto));
        echo public_path('images/foto-user/'.$data->foto);

        $data->delete();
        return redirect()->route('users')->with('success',' Data Berhasil Di Delete');
    }
}
