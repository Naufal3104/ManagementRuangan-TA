<?php

namespace App\Http\Controllers;
use App\Models\Jadwal;
use App\Models\Ruangan;
use Illuminate\Http\Request;

class AdmineditController extends Controller
{
    public function index()
    {
        $data = Ruangan::all();
        $data1 = Jadwal::all();
        return view('admin.dashboard', compact('data','data1'));
    }
    
    public function destroy($id)
    {
        $jadwal = Jadwal::find($id)->whereDate('Waktuhingga', '<=', date("Y-m-d h:i:00 "))->delete();
        return redirect('/admin');
    }
}
