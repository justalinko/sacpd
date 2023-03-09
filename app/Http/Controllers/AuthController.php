<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Calon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function loginPost(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (auth()->attempt($credentials)) {
            return redirect()->intended('dashboard');
        }
        return redirect()->back()->with('error', 'Email atau password salah');
    }

    public function register()
    {
        return view('register');
    }

    public function registerPost(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password',
        ]);
        if($validate){
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'level' => 'calon'
            ];
            
            $user = User::create($data);
            /**
             * Create Calon
             */
            $calon = new Calon();
            $calon->user_id = $user->id;
            $calon->jabatan = $request->jabatan;
            $calon->nik = $request->nik;
            $calon->save();
            auth()->login($user);
            return redirect()->intended('dokumen');
        }else{
            return redirect()->back()->with('error', 'Gagal mendaftar');
        }
    }


    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
    public function profile()
    {
        $data['user'] = auth()->user();
        return view('profile',$data);
    }
    public function profilePost(Request $request)
    {
        $user = User::find(auth()->user()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        if($request->password){
            $user->password = bcrypt($request->password);
        }
        $user->save();
        return redirect()->back()->with('success', 'Berhasil mengubah data');
    }
}
