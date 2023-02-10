<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Ruangan;

class EventController extends Controller
{
    public function index(Request $request)
    {
    	if($request->ajax())
    	{
    		$data = Event::whereDate('start', '>=', $request->start)
                       ->whereDate('end',   '<=', $request->end)
                       ->get(['id', 'title', 'start', 'end']);
            return response()->json($data);
    	}

		$ruangan = Ruangan::all();
    	return view('calender',compact('ruangan'));
    }

    public function action(Request $request)
    {
		if($request->ajax())
    	{
    		// if($request->type == 'add')
    		// {
    		// 	$event = Event::create([
    		// 		'title'		=>	$request->title,
    		// 		'id_ruangan'=>	$request->id_ruangan,
    		// 		'id_user'	=>	$request->id_user,
    		// 		'title'		=>	$request->title,
    		// 		'start'		=>	$request->start,
    		// 		'end'		=>	$request->end
    		// 	]);

    		// 	return response()->json($event);
    		// }

    		if($request->type == 'update')
    		{
    			$event = Event::find($request->id)->update([
    				'title'		=>	$request->title,
    				'start'		=>	$request->start,
    				'end'		=>	$request->end
    			]);

    			return response()->json($event);
    		}

    		// if($request->type == 'delete')
    		// {
    		// 	$event = Event::find($request->id)->delete();

    		// 	return response()->json($event);
    		// }
    	}
		$messages = [
            'required' =>':attribute harus diisi terlebih dahulu',
            'numeric' =>':attribute harus diisi angka',
            'date' =>':attribute harus berupa tahun-bulan-tanggal'
        ];
        $this->validate ($request,[
            'title' => 'required',     
            'id_ruangan' => 'required',     
            'id_user' => 'required',     
            'start' => 'required',     
            'end' => 'required',     
        ],$messages);

        Event::create([
            'title' => $request->title,
            'id_ruangan' => $request->id_ruangan,
            'id_user' => $request->id_user,
            'start' => $request->start,
            'end' => $request->end,
        ]);

		return redirect()->back();

    }

	public function list_event()
	{
		$event = Event::simplePaginate(5);
		return view('listevent',compact('event'));
	}

	public function show($id)
	{
		$event = Event::find($id);
		return view('showlistevent', compact('event'));
    }
}
