<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use App\Models\Jadwal;
use App\Models\Pengguna;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Ruangan::all();
        return view('user', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createuser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $messages = [
                'required' =>':attribute harus diisi',
                'numeric' =>':attribute harus diisi angka',
                'min' =>':attribute minimal :min karakter',
            ];
            $this->validate ($request,[
                'Namapengguna' => 'required',         
                'Nomortelepon' => 'required|numeric',         
                'NISN' => 'required|min:3',         
                'JK' => 'required',         
                'Alamat' => 'required',         
            ],$messages);
    
                Pengguna::create([
                'Namapengguna' => $request->Namapengguna,
                'Nomortelepon' => $request->Nomortelepon,
                'NISN' => $request->NISN,
                'JK' => $request->JK,   
                'Alamat' => $request->Alamat,   
            ]);
            $data = Pengguna::latest()->first();
            // dd($data);
            return redirect()->back()->with('success','Token User Anda adalah ' . $data->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        public function show($id)
        {
            $data=Ruangan::find($id);
            return view('showroom', compact('data'));
        }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
