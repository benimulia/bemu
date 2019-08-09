<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organisasi;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use DB;
use Illuminate\Support\Str;

class OrganisasiController extends Controller
{
    public function index()
    {
        $organisasi = Organisasi::orderBy('created_at','DESC')->paginate(5);
        return view ('admin.organisasi.index', compact ('organisasi'));
    }

    public function vCOrganisasi()
    {
        return view('admin.organisasi.create');
    }
    public function cOrganisasi(Request $req)
    {
        $organisasi = new Organisasi();
        $organisasi ->nama_organisasi = $req->input('nama_organisasi');
        $organisasi ->sejak = $req->input('sejak');
        $organisasi ->ketua_organisasi = $req->input('ketua_organisasi');
        $organisasi ->kontak = $req->input('kontak');
        if ($req->file('file') !=null){
            $photo = $req->file('file');
            $extension = $photo-> getClientOriginalExtension();
            Storage::disk('public')->put($photo->getFileName().'.'.$extension, File::get($photo));
            
            $organisasi->foto_organisasi = $photo->getFileName().'.'.$extension;
        }
        $organisasi ->save();
        //kurang foto
        return redirect('/adminorganisasi')->with(['status' => 'Organisasi berhasil ditambahkan']);
    }

    public function vEOrganisai($id)
    {
        $organisasi=Organisasi::Find($id);
        return view('admin.organisasi.edit',compact('organisasi'));
    }
    public function eOrganisasi(Request $req,$id)
    {
        $organisasi = Organisasi::Find($id);
        $organisasi ->nama_organisasi = $req->input('nama_organisasi');
        $organisasi ->sejak = $req->input('sejak');
        $organisasi ->ketua_organisasi = $req->input('ketua_organisasi');
        $organisasi ->kontak = $req->input('kontak');
        if ($req->file('file') !=null){
            $photo = $req->file('file');
            $extension = $photo-> getClientOriginalExtension();
            Storage::disk('public')->put($photo->getFileName().'.'.$extension, File::get($photo));
            
            $organisasi->foto_organisasi = $photo->getFileName().'.'.$extension;
        }
        $organisasi ->save();
        return redirect('/adminorganisasi')->with(['status' => 'Organisasi berhasil diedit']);
    }

    public function dOrganisasi($id)
    {
        $organisasi=Organisasi::Find($id);
        $photo = Storage::disk('public')->delete($organisasi->foto_organisasi);
        $organisasi->delete();
        return redirect('/adminorganisasi');
    }
    public function sOrganisasi($id)
    {
        $organisasi=Organisasi::Find($id);
        return view('admin.organisasi.show',compact('organisasi'));
    }
}
