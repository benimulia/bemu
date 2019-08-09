<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Announcements;
use App\Calendar;
use App\Organisasi;

use Illuminate\Support\Facades\DB;
class MainController extends Controller
{
    //HALAMAN UTAMA
    public function utama()
    {
        $news = news::orderBy('created_at','DESC')->take(5)->get();
        $announcements = announcements::orderBy('created_at','DESC')->take(3)->get();
        $events = Calendar::all();
        return view('welcome',array('news' =>$news , 'announcements'=>$announcements, 'events' =>$events ));
    }

    // FITUR NEWS
    public function news()
    {
        $news = news::orderBy('created_at','DESC')->paginate(3);
        $announcements = announcements::orderBy('created_at','DESC')->take(3)->get();
        return view('user.news', array('news' =>$news, 'coba'=>$news, 'announcements'=>$announcements));
    }

    public function showNews($id){
        $n = news::Find($id);
        $announcements = announcements::orderBy('created_at','DESC')->take(3)->get();
        return view('user.shownews', array('n' =>$n, 'announcements'=>$announcements));
    }

    // FITUR ANNOUNCEMENT
    public function announcements()
    {
        $announcements = Announcements::orderBy('created_at','DESC')->paginate(3);
        return view('user.announcements', array('announcements' =>$announcements, 'coba'=>$announcements));
    }

    public function showAnnouncements($id){
        $n = announcements::Find($id);
        return view('user.showannouncements',compact('n'));
    }

    // FITUR EVENT
    public function events()
    {
        $events = Calendar::all();
        return view('user.events', array('events' =>$events));
    }

    public function showEvents($id){
        $events = Calendar::Find($id);
        return view('user.showevents',compact('events'));
    }

    // FITUR ORGANISASI
    public function organisasi()
    {
        $organisasi = organisasi::all();
        return view('user.organisasi', compact('organisasi'));
    }
}
