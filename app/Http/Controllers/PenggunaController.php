<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruangan;
use App\Models\Pengguna;
use App\Models\Jadwal;

class PenggunaController extends Controller
{
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
            $pengguna = Pengguna::latest()->first();
            // dd($data);
            return redirect()->back()->with('success','<strong>Token User anda adalah ' . $pengguna->id . '</strong');
    }

}
