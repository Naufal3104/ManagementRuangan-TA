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
        $ruangan=Ruangan::all();
        $event=Event::all();
        return view('dashboard', compact('admin','ruangan','event'));
    }

    public function admin(){
        $data1 = Event::all();
        return view('admin.dashboard', compact('data1'));
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
