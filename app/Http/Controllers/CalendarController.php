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
    	$events->nama= $request->input('judul');
    	$events->tempat = $request->input('tpt');
    	$events->pembuat = $request->input('keterangan');
    	$events->deskripsi = $request->input('isi');
    	$events->jamAwal = $request->input('jamAwal') . ":" . $request->input('menitAwal');
    	if ( $request->input('jamAkhir') != NULL || $request->input('menitAkhir') != NULL)
	    	$events->jamAkhir = $request->input('jamAkhir') . ":" . $request->input('menitAkhir');
    	else
    		$events->jamAkhir = "Selesai";
    	$events->tanggalAwal = $request->input('tgl') ;
    	$events->tanggalAkhir = $request->input('tgl') ;
    	$events->save();
        
        return redirect('/adminevents')->with(['status' => 'Event berhasil ditambahkan']);
    }
    public function index()
    {
    	// $events = $events:all();
        return view('admin.event.index');
    }
}
