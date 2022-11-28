<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Ruangan;
use App\Models\Transaksi;
use App\Models\User;
use Carbon\Carbon;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Jadwal::all();
        return view('guest', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $data = Ruangan::where('id_user',null)->get();
        $data =Ruangan::all();
        return view('createguest', compact('data'));
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
            'numeric' =>':attribute harus diisi angka'
        ];
        $this->validate ($request,[
            'Nama' => 'required',     
            'NomorTelepon' => 'required|numeric',     
            'id_ruangan' => 'required',     
        ],$messages);
        
        Transaksi::create([
            'Nama' => $request->Nama,
            'NomorTelepon' => $request->NomorTelepon,
            'id_ruangan' => $request->id_ruangan,
            'token' => Str::random(10)                        
        ]);
        $data = Transaksi::latest()->first();
        $data1 = User::first();
        return redirect()->back()->with('success','Token Anda adalah ' . $data->token . ". Hubungi " . $data1->telp . " untuk melakukan pembayaran");
        

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Jadwal::where('waktuhingga', '<', Carbon::now())->each(function ($jadwal) {
            $jadwal->delete();
        });

        $jadwal = \App\Models\Jadwal::whereDate('Waktuhingga', '<=', now())->delete();

        $jadwal1 = \App\Models\Jadwal::whereRaw('DATEDIFF(NOW(), Waktuhingga) > 1')->delete();

    }
}
