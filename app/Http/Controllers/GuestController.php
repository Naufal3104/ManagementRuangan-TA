<?php

namespace App\Http\Controllers;

use App\Models\Event;
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
        $event = Event::simplePaginate(8);
        return view('guest', compact('event'));

        // dd(Carbon::now()->diffForHumans());
        // dd(date("Y-m-d h:i:00 "));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $data = Ruangan::where('id_user',null)->get();
        $ruangan =Ruangan::all();
        return view('createguest', compact('ruangan'));
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
            'numeric' =>':attribute harus diisi angka',
            'min' =>':attribute minimal harus :min karakter',
            'date' =>':attribute harus berupa tahun-bulan-tanggal'
        ];
        $this->validate ($request,[
            'Nama' => 'required',     
            'NomorTelepon' => 'required|numeric|min:10',     
            'id_ruangan' => 'required',     
            'alamat' => 'required',     
            'tanggal_penggunaan' => 'required|date',     
        ],$messages);
        Transaksi::create([
            'Nama' => $request->Nama,
            'NomorTelepon' => $request->NomorTelepon,
            'id_ruangan' => $request->id_ruangan,
            'alamat' => $request->alamat,
            'tanggal_penggunaan' => $request->tanggal_penggunaan,
            'token' => Str::random(10)                        
        ]);
        $transaksi = Transaksi::latest()->first();
        $admin = User::first();
        return redirect()->back()->with('success','Token Anda adalah ' . $transaksi->token . ". Hubungi 0" . $admin->telp . " untuk melakukan konfirmasi dan pembayaran");
        

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
        // $current = date("Y-m-d h:i:00d");

        // Jadwal::find($id)->where('waktuhingga', '<', $current)->delete();

        // $jadwal = \App\Models\Jadwal::whereDate('Waktuhingga', '<=', date("Y-m-d h:i:00 "))->delete();

        // $jadwal1 = \App\Models\Jadwal::whereRaw('DATEDIFF(NOW(), Waktuhingga) > 1')->delete();

    }
}
