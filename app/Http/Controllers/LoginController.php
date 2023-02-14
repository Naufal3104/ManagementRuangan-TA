<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'name' =>['required'],
            'password' =>['required']
        ]);

        if (Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'name|password' => 'Username atau Password salah'
            ])->onlyInput('email');
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/');
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    }
    
    public function register(){
        return view('register');
    }

    public function create(Request $request)
    {   
        $messages = [
            'required' =>':attribute harus diisi terlebih dahulu',
            'numeric' =>':attribute harus diisi angka',
            'email' =>':attribute harus berupa @gmail,@yahoo etc.',
            'min' => ':attribute harus :min karakter'
        ];
        $this->validate ($request,[
            'name' => 'required|min:5',     
            'email' => 'required|email',     
            'password' => 'required|min:5',     
            'telp' => 'required|min:9|numeric'     
        ],$messages);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'telp' => $request->telp,
            'password' =>Hash::make($request->password)
        ]);
        return redirect()->back()->with('success','Registrasi berhasil');
    }
}

// App\Models\User::create([
//     'name' => 'admin',
//     'email' => 'admin@gmail.com',
//     'telp' => '81554336723',
//     'password' => bcrypt('admin')
// ]);

// return Validator::make($data, [
//     'name' => ['required', 'string', 'max:255'],
//     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
//     'password' => ['required', 'string', 'min:8', 'confirmed'],
// ]);