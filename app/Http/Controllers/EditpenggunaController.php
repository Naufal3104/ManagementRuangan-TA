<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Pengguna;
use App\Models\Ruangan;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\RequiredIf;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class EditpenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Jadwal::all()->where('id_guest', '==', null);
        $data1 = Jadwal::all()->where('id_user', '==', null );
        return view('admin.editpengguna', compact('data', 'data1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Ruangan::all();
        $pengguna = Pengguna::all();
        $transaksi = Transaksi::all();
        return view('admin.addpengguna', compact('data','transaksi','pengguna'));
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
            'required' =>'Kolom :attribute harus diisi',
            'required_without' =>'Pilih salah satu pengguna',
            'prohibited_unless' =>'Hanya dapat memilih satu pengguna',
            'prohibited_if' =>'Guest ini belum melakukan konfirmasi ataupun pembayaran',
            'after' => 'Tanggal :attribute tidak boleh sebelum Waktu penggunaan'
        ];

        $this->validate ($request,[
            'id_ruangan' => 'required',
            'id_user' => 'required_without:id_guest',
            'id_guest' => 'prohibited_unless:id_user,==,null',
            'Waktupenggunaan' => 'required',
            'Waktuhingga' => 'required|after:Waktupenggunaan',
            'Acara' => 'required'         
        ],$messages);

        if(Transaksi::find($request->id_guest)->Status == null){
            return redirect()->back()->with('error', 'Guest ini belum melakukan konfirmasi ataupun pembayaran');
        }
        Jadwal::create([
            'id_ruangan' => $request->id_ruangan,                  
            'id_user' => $request->id_user,
            'id_guest' => $request->id_guest,
            'Waktupenggunaan' => $request->Waktupenggunaan,
            'Waktuhingga' => $request->Waktuhingga,
            'Acara' => $request->Acara,                    
        ]);
        return redirect('editpengguna');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Jadwal::find($id);
        return view('admin.showeditpengguna', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ruangan = Ruangan::all();
        $jadwal = Jadwal::find($id);
        return view('admin.updatepengguna', compact('ruangan','jadwal'));
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
            'required' =>'Kolom :attribute harus diisi',
            'required_without' =>'Pilih salah satu pengguna',
            'prohibited_unless' =>'Hanya dapat memilih satu pengguna',
            'after' => 'Tanggal :attribute tidak boleh sebelum Waktu penggunaan'
        ];
        $this->validate ($request,[
            'id_ruangan' => 'required',
            'id_user' => 'required_without:id_guest',
            'id_guest' => 'prohibited_unless:id_user,==,null',
            'Waktupenggunaan' => 'required',
            'Waktuhingga' => 'required|after:Waktupenggunaan',
            'Acara' => 'required'         
        ],$messages);

        $jadwal=Jadwal::find($id);
        $jadwal->id_ruangan = $request->id_ruangan;                  
        $jadwal->id_user = $request->id_user;                  
        $jadwal->id_guest = $request->id_guest;                  
        $jadwal->Waktupenggunaan = $request->Waktupenggunaan;                  
        $jadwal->Waktuhingga = $request->Waktuhingga;                  
        $jadwal->Acara = $request->Acara;                  
        $jadwal->save();
        return redirect('editpengguna');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Jadwal::find($id)->delete();
        return redirect('editpengguna');
    }
}
