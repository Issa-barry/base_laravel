<?php

namespace App\Http\Controllers;

 

 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store()
    {
      //    dd(request()->all());
      $data =  request()->validate([ 
          'name'    => 'required|min:3|max:30',
          'email'   => 'required|email',
          'message' => 'required'
          ]);

          Mail::to('wotapif@gmail.com')->send(new  ContactMail($data));
        
          return redirect('contact')->with('message', 'Votre message a bin été envoyé !');
        //   Mail::to('wotapif@gmail.com')->send(new  ContactMail(request()->except('_token')));

    }
}
