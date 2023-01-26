<?php

namespace App\Http\Controllers;

use App\Models\Event;
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
        $data = Event::all()->where('id_transaksi', '==', null);
        $data1 = Event::all()->where('id_user', '==', null );
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
            'id_user' => 'required_without:id_transaksi',
            'id_transaksi' => 'prohibited_unless:id_user,==,null',
            'start' => 'required',
            'end' => 'required|after:Waktupenggunaan',
            'title' => 'required'         
        ],$messages);
        
        if(!empty($request->input('id_transaksi'))) {
            if(Transaksi::find($request->id_transaksi)->Status == null){
                return redirect()->back()->with('error', 'Guest ini belum melakukan konfirmasi ataupun pembayaran');
            }
        }

        Event::create([
            'id_ruangan' => $request->id_ruangan,                  
            'id_user' => $request->id_user,
            'id_transaksi' => $request->id_transaksi,
            'start' => $request->start,
            'end' => $request->end,
            'title' => $request->title,                    
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
        $data = Event::find($id);
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
        $event = Event::find($id);
        return view('admin.updatepengguna', compact('ruangan','event'));
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
            'id_user' => 'required_without:id_transaksi',
            'id_transaksi' => 'prohibited_unless:id_user,==,null',
            'start' => 'required',
            'end' => 'required|after:Waktupenggunaan',
            'title' => 'required'         
        ],$messages);

        $event=Event::find($id);
        $event->id_ruangan = $request->id_ruangan;                  
        $event->id_user = $request->id_user;                  
        $event->id_transaksi = $request->id_transaksi;                  
        $event->start = $request->start;                  
        $event->end = $request->end;                  
        $event->title = $request->title;                  
        $event->save();
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
        $data=Event::find($id)->delete();
        return redirect('editpengguna');
    }
}
