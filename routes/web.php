<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','MainController@utama') ;

Auth::routes();

//Verifikasi Email
Auth::routes(['verify' => true]);

//ADMIN
//Routing Ke Halaman Login
Route::get('/bemulogin', function(){
    return view('auth.login');
    });
//Routing Ke Halaman Register
Route::get('/bemuregister', function(){
    return view('auth.register');
    });

Route::get('/dashboard', function()
{return view('layouts.adminlayout');})->middleware('auth','verified');

//news
Route::get('/adminnews','newsController@index')->middleware('auth');
Route::get('/adminnews/show/{id}','newsController@Show')->middleware('auth');
Route::get('/adminnews/create','newsController@vcreate')->middleware('auth');
Route::post('/adminnews/create', 'newsController@create')->middleware('auth');
Route::get('/adminnews/delete/{id}','newsController@delete')->middleware('auth');
Route::get('/adminnews/edit/{id}','newsController@vedit')->middleware('auth');
Route::post('/adminnews/edit/{id}','newsController@edit')->middleware('auth');

//events
Route::get('/adminevents','CalendarController@index')->middleware('auth');
Route::get('/adminevents/create', 'CalendarController@vcreate')->middleware('auth');
Route::post('/adminevents/create', 'CalendarController@create')->middleware('auth');
Route::get('/adminevents/edit/{id}','CalendarController@vedit')->middleware('auth');
Route::post('/adminevents/edit/{id}','CalendarController@edit')->middleware('auth');
Route::get('/adminevents/delete/{id}','CalendarController@delete')->middleware('auth');
Route::get('/adminevents/show/{id}','CalendarController@show')->middleware('auth');

//announcements
Route::get('/adminannouncements','announcementsController@index')->middleware('auth');
Route::get('/adminannouncements/show/{id}','announcementsController@Show')->middleware('auth');
Route::get('/adminannouncements/create','announcementsController@vcreate')->middleware('auth');
Route::post('/adminannouncements/create', 'announcementsController@create')->middleware('auth');
Route::get('/adminannouncements/delete/{id}','announcementsController@delete')->middleware('auth');
Route::get('/adminannouncements/edit/{id}','announcementsController@vedit')->middleware('auth');
Route::post('/adminannouncements/edit/{id}','announcementsController@edit')->middleware('auth');


///////////////////////////////////////////////////////////////////////////////////////

//USER
Route::get('/news','MainController@news');
Route::get('/news/{id}','MainController@showNews');

Route::get('/announcements','MainController@announcements');
Route::get('/announcements/{id}','MainController@showAnnouncements');