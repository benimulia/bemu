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
        $events = Calendar::orderBy('tanggalAwal','ASC')->get();

        return view('welcome',array('news' =>$news , 'announcements'=>$announcements, 'events' =>$events ));
    }

    // FITUR NEWS
    public function news()
    {
        $news = news::orderBy('created_at','DESC')->paginate(3);
        $announcements = announcements::orderBy('created_at','DESC')->take(3)->get();
        $events = Calendar::orderBy('tanggalAwal','ASC')->get();
        return view('user.news', array('news' =>$news, 'coba'=>$news, 'announcements'=>$announcements,'events' =>$events));
    }

    public function showNews($id){
        $n = news::Find($id);
        $announcements = announcements::orderBy('created_at','DESC')->take(3)->get();
        $events = Calendar::orderBy('tanggalAwal','ASC')->get();
        return view('user.shownews', array('n' =>$n, 'announcements'=>$announcements,'events' =>$events));
    }

    // FITUR ANNOUNCEMENT
    public function announcements()
    {
        $announcements = Announcements::orderBy('created_at','DESC')->paginate(3);
        $news = news::orderBy('created_at','DESC')->take(3)->get();
        $events = Calendar::orderBy('tanggalAwal','ASC')->get();
        return view('user.announcements', array('announcements' =>$announcements, 'coba'=>$announcements, 'events' =>$events, 'news' => $news));
    }

    public function showAnnouncements($id){
        $announcements = announcements::Find($id);
        return view('user.showannouncements',compact('announcements'));
    }

    // FITUR EVENT
    public function events()
    {
        $events = Calendar::orderBy('tanggalAwal','ASC')->get();
        $announcements = announcements::orderBy('created_at','DESC')->take(3)->get();
        return view('user.events', array('events' =>$events, 'announcements'=>$announcements));
    }


    // FITUR ORGANISASI
    public function organisasi()
    {
        $organisasi = organisasi::all();
        return view('user.organisasi', compact('organisasi'));
    }

    // FITUR CONTACT
    public function contact()
    {
        $announcements = announcements::orderBy('created_at','DESC')->take(3)->get();
        $events = Calendar::orderBy('tanggalAwal','ASC')->get();
        return view('user.contact', array( 'announcements'=>$announcements, 'events' =>$events ));
    }

    //FITUR DOWNLOAD
    public function downloadcenter()
    {
        $announcements = announcements::orderBy('created_at','DESC')->take(3)->get();
        $events = Calendar::orderBy('tanggalAwal','ASC')->get();
        return view('user.downloadcenter', array( 'announcements'=>$announcements, 'events' =>$events ));
    }

}
