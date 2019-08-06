<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function create (Request $request)
    {
        return view('admin.event.create');
    }
    public function index()
    {
        return view('admin.event.index');
    }
}
