<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruangan;
use App\Models\Pengguna;
use App\Models\Jadwal;

class PenggunaController extends Controller
{
    public function home()
    {
        $data=Ruangan::all();
        return view('user', compact('data'));
    }

    public function buat()
    {
        $data=Ruangan::all();
        return view('ruangan',compact('data'));
    }

    public function simpan(Request $request)
    {
        $messages = [
            'required' =>':attribute harus diisi',
            'numeric' =>':attribute harus diisi angka',
            'min' =>':attribute minimal :min karakter',
        ];
        $this->validate ($request,[
            'id_ruangan' => 'required|numeric',         
            'id_user' => 'required|numeric',         
            'Waktupenggunaan' => 'required',         
            'Waktuhingga' => 'required',
            'Acara' => 'required'                 
        ],$messages);

            Jadwal::create([
            'id_ruangan' => $request->id_ruangan,         
            'id_user' => $request->id_user,         
            'Waktupenggunaan' => $request->Waktupenggunaan,         
            'Waktuhingga' => $request->Waktuhingga,
            'Acara' => $request->Acara 
        ]);
        // dd($data);
        return redirect('/user');
    }

    public function create()
    {
        return view('createuser');
    }

    public function store(Request $request)
    {
            $messages = [
                'required' =>':attribute harus diisi',
                'numeric' =>':attribute harus diisi angka',
                'min' =>':attribute minimal harus :min karakter',
            ];
            $this->validate ($request,[
                'Namapengguna' => 'required',         
                'Nomortelepon' => 'required|numeric',         
                'nisn' => 'required|min:3',         
                'jeniskelamin' => 'required',         
                'alamat' => 'required',         
            ],$messages);
    
                Pengguna::create([
                'Namapengguna' => $request->Namapengguna,
                'Nomortelepon' => $request->Nomortelepon,
                'nisn' => $request->nisn,
                'jeniskelamin' => $request->jeniskelamin,   
                'alamat' => $request->alamat,   
            ]);
            $data = Pengguna::latest()->first();
            // dd($data);
            return redirect()->back()->with('success','Registrasi berhasil');
    }

    public function show($id)
    {
        $data=Ruangan::find($id);
        return view('showroom', compact('data'));
    }
}
