<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home(){
        $data=User::first();
        return view('dashboard', compact('data'));
    }

    public function admin(){
        $data1 = Event::all();
        return view('admin.dashboard', compact('data1'));
    }

    public function destroy($id)
    {
        $waktu = date("Y-m-d h:i:00");
        $carbon =  Carbon::now();
        $jadwal = Event::find($id)->whereDate('end', '<', $waktu)->delete();
        // $jadwal = Event::find($id)->whereDate('end', '<', $carbon->subYears(1))->get()->delete();
        return redirect('/admin');
    }
}
