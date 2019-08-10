<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
   
   public function contactPost(Request $request)
   {
       $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required'
        ]);
       Contact::create($request->all());
       return back()->with('success', 'Thanks for contacting us!');
   }
}
