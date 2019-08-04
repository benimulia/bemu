<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use DB;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function vcreate ()
    {
        return View('admin.news.create');
    }

    public function create (Request $request)
    {
        $news = new news();
        $news->judul = $request->input('judul');
        $news->keterangan = $request->input('keterangan');
        $news->isi = $request->input('isi');
        if ($request->file('file') !=null){
            $photo = $request->file('file');
            $extension = $photo-> getClientOriginalExtension();
            Storage::disk('public')->put($photo->getFileName().'.'.$extension, File::get($photo));
            
            $news->foto = $photo->getFileName().'.'.$extension;
        }
        $news->save();

        return redirect('/adminnews')->with(['status' => 'News berhasil ditambahkan']);
    }

    public function index()
    {
        $news = news::orderBy('created_at','DESC')->paginate(5);
        return view('admin.news.index')->with('news',$news);
    }

    public function Show($id)
    {
        $news = news::find($id);
        //$photo = news::select('foto')->where('id',$id);
       // $foto = Storage::get('foto',)
        return view ('admin.news.show', compact('news'));
    }
    public function delete($id)
    {
        $news = news::Find($id);
        // print_r($news->foto);exit;
        $photo =Storage::disk('local')->delete($news->foto);
        $news->delete();
        return redirect('/adminnews');
    }

    public function vedit($id)
    {
        $news = news::Find($id);
        return view ('admin.news.edit',compact('news'));
    }

    public function edit(Request $req, $id)
    {
        $news = news::Find($id);
        $news ->judul = $req->input('judul');
        $news ->keterangan = $req->input('keterangan');
        $news ->isi = $req->input('isi');
        if ($req->file('file') !=null){
            if(!isset($req->foto))
                    {
                     $photo = Storage::disk('local')->delete($news->foto);
                    }
            $photo = $req->file('file');
            $path = Storage::disk('local')->put('foto', $photo); //nama folder,file yang diinput
        // $name = $photo->getClientOriginalName();
        // $photo->move('foto',$name);
            $news->foto = $path;
        }

        $news->save();
        return redirect('/adminnews');

    }
}
 