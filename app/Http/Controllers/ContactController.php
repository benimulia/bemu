<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Contact;
use Mail;
class ContactController extends Controller
{
   
  public function contact()
  {
  return view('contact');
  }
  public function contactPost(Request $request) 
  {
    $this->validate($request, [ 'name' => 'required', 'email' => 'required|email', 'message' => 'required' ]);
    Contact::create($request->all()); 
   
    Mail::send('email',
    array(
        'name' => $request->get('name'),
        'email' => $request->get('email'),
        'user_message' => $request->get('message')
         ), function($message)
     {
         $message->from('bemufeedback@gmail.com');
         $message->to('bemu@students.ukdw.ac.id', 'Admin')->subject('Bemu Feedback');
     });
    return back()->with('success', 'Thanks for contacting us!'); 
  }
}

