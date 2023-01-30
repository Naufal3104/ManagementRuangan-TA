<?php

namespace App\Http\Controllers;
use App\Models\Ruangan;
use App\Models\Pengguna;
use App\Models\Event;
use DateTime;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdmindashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data1 = Event::all();
        return view('admin.dashboard', compact('data1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $data1=Pengguna::find($id);
        return view('admin.showroom', compact('data', 'data1'));
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
        $waktu = date("Y-m-d h:i:00");
        $carbon =  Carbon::now();
        // dd($waktu);
        $jadwal = Event::find($id)->whereDate('end', '<', $waktu)->delete();
        // $jadwal = Event::find($id)->whereDate('end', '<', $carbon->subYears(1))->get()->delete();
        return redirect('/admin');
    }
    
}
