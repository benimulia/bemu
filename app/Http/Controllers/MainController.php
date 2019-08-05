<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

use Illuminate\Support\Facades\DB;
class MainController extends Controller
{
    //HALAMAN UTAMA
    public function utama()
    {
        
        $news = news::orderBy('created_at','DESC')->take(5)->get();
        return view('welcome',array('news' =>$news));
    }

    // FITUR NEWS
    public function news()
    {
        $news = news::orderBy('created_at','DESC')->paginate(3);
        return view('user.news', array('news' =>$news, 'coba'=>$news));
    }

    public function showNews($id){
        $n = news::Find($id);
        return view('user.shownews',compact('n'));
    }
}
