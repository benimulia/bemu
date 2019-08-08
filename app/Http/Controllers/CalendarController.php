<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calendar;

class CalendarController extends Controller
{
    public function vcreate (Request $request)
    {
        return view('admin.event.create');
    }

    public function create (Request $request)
    {
    	$events = new Calendar();
    	$events->nama = $request->input('judul');
    	$events->tempat = $request->input('tpt');
    	$events->pembuat = $request->input('keterangan');
    	$events->deskripsi = $request->input('isi');
    	$menitAwal= str_pad($request->input('menitAwal'),2,"0",STR_PAD_LEFT);
    	$menitAkhir = str_pad($request->input('menitAkhir') ,2,"0",STR_PAD_LEFT);
    	$jamAkhir = str_pad($request->input('jamAkhir') ,2,"0",STR_PAD_LEFT);
    	$jamAwal = str_pad($request->input('jamAwal'),2,"0",STR_PAD_LEFT);
    	$events->jamAwal = $jamAwal ;
    	$events->menitAwal = $menitAwal;
	    $events->jamAkhir = $jamAkhir;
	    $events->menitAkhir = $menitAkhir;
    	$events->tanggalAwal = $request->input('tglaw') ;
    	$events->tanggalAkhir = $request->input('tglak') ;
    	$events->save();
        
        return redirect('/adminevents')->with(['status' => 'Event berhasil ditambahkan']);
    }
    public function index()
    {
    	$events = Calendar::all();
        return view('admin.event.index')->with('events',$events);
    }

    public function vedit($id)
    {
        $events = Calendar::Find($id);
        return view ('admin.event.edit',compact('events'));
    }

     public function edit(Request $request, $id)
    {
        $events = Calendar::Find($id);
        $events->nama = $request->input('judul');
    	$events->tempat = $request->input('tpt');
    	$events->pembuat = $request->input('keterangan');
    	$events->deskripsi = $request->input('isi');
    	$menitAwal= str_pad($request->input('menitAwal'),2,"0",STR_PAD_LEFT);
    	$menitAkhir = str_pad($request->input('menitAkhir') ,2,"0",STR_PAD_LEFT);
    	$jamAkhir = str_pad($request->input('jamAkhir') ,2,"0",STR_PAD_LEFT);
    	$jamAwal = str_pad($request->input('jamAwal'),2,"0",STR_PAD_LEFT);
    	$events->jamAwal = $jamAwal ;
    	$events->menitAwal = $menitAwal;
	    $events->jamAkhir = $jamAkhir;
	    $events->menitAkhir = $menitAkhir;
    	$events->tanggalAwal = $request->input('tglaw') ;
    	$events->tanggalAkhir = $request->input('tglak') ;
    	$events->save();

        return redirect('/adminevents')->with(['status' => 'Event berhasil diedit']);
    }

    public function delete($id)
    {
        $events = Calendar::Find($id);
        // print_r($news->foto);exit;
        $events->delete();
        return redirect('/adminevents')->with(['status' => 'Event berhasil dihapus']);
    }

    public function show($id)
    {
        $events = Calendar::Find($id);
        return view ('admin.event.show', compact('events'));
    }
}
