<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
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
}
