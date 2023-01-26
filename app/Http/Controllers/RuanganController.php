<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use Illuminate\Http\Request;

class RuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Ruangan::all();
        return view('admin.ruangan', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'required' =>':attribute harus diisi terlebih dahulu',
            'mimes' =>':attribute harus berupa foto'
        ];
        $this->validate ($request,[
            'Namaruangan' => 'required',         
            'foto' => 'required|mimes:jpg,jpeg,png,svg',         
        ],$messages);

        
        //ambil informasi file
        $file = $request->file('foto');

        //rename
        $nama_file = time()."_".$file->getClientOriginalName();

        //proses upload
        $tujuan_upload = './template/img';
        $file->move($tujuan_upload,$nama_file);

        
        Ruangan::create([
            'Namaruangan' => $request->Namaruangan,
            'foto' => $nama_file                  
        ]);
        return redirect('editruangan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Ruangan::find($id);
        return view('admin.editruangan', compact('data'));
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
        $messages = [
            'required' =>':attribute harus diisi terlebih dahulu'
        ];
        $this->validate ($request,[
            'Namaruangan' => 'required',         
        ],$messages);
        
        $ruangan=Ruangan::find($id);
        $ruangan->Namaruangan = $request->Namaruangan;
        $ruangan->save();
        return redirect('editruangan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Ruangan::find($id)->delete();
        return redirect('editruangan');
    }
}
