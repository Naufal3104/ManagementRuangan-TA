<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Ruangan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home(){
        $admin=User::first();
        $data=Ruangan::all();
        $event=Event::all();
        return view('dashboard', compact('admin','data','event'));
    }

    public function admin(){
        $event = Event::simplePaginate(5);
        return view('admin.dashboard', compact('event'));
    }

    public function show($id)
    {
        $ruangan = Ruangan::find($id);
        return view('showruangan', compact('ruangan'));
    }

    public function destroy($id)
    {
        $waktu = date("Y-m-d h:i:00");
        $carbon =  Carbon::now();
        // $jadwal = Event::find($id)->whereDate('end', '<', $waktu)->delete();
        $jadwal = Event::find($id)->whereDate('end', '<', $carbon->subMonths(3))->delete();
        return redirect('/admin');
    }
}
