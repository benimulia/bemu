<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Announcements;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use DB;
use Illuminate\Support\Str;

class AnnouncementsController extends Controller
{
    public function vcreate ()
    {
        return View('admin.announcements.create');
    }

    public function create (Request $request)
    {
        $announcements = new announcements();
        $announcements->judul = $request->input('judul');
        $announcements->isi = $request->input('isi');
        $announcements->save();

        return redirect('/adminannouncements')->with(['status' => 'Announcements berhasil ditambahkan']);
    }

    public function index()
    {
        $announcements = announcements::orderBy('created_at','DESC')->paginate(5);
        return view('admin.announcements.index')->with('announcements',$announcements);
    }

    public function Show($id)
    {
        $announcements = announcements::find($id);
        return view ('admin.announcements.show', compact('announcements'));
    }
    public function delete($id)
    {
        $announcements = announcements::Find($id);
        $announcements->delete();
        return redirect('/adminannouncements');
    }

    public function vedit($id)
    {
        $announcements = announcements::Find($id);
        return view ('admin.announcements.edit',compact('announcements'));
    }

    public function edit(Request $request, $id)
    {
        $announcements = announcements::Find($id);
        $announcements->judul = $request->input('judul');
        $announcements->isi = $request->input('isi');
        $announcements->save();
        
        return redirect('/adminannouncements')->with(['status' => 'Announcements berhasil diedit']);

    }
}
