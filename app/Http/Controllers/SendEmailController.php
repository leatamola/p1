<?php

namespace App\Http\Controllers;
Use App\Mail\MessageReceived;
Use App\Mail\ContactFormMail;
use App\Category_model;

use Illuminate\Support\Facades\Mail;


class SendEmailController extends Controller
{


  public function create(){
    $categories = Category_model::all();
    return view('frontEnd.contact',compact('categories'));
  }

  public function store(){
    $data = request()->validate([
      'name'=>'required',
      'email'=>'required|email',
      'subject'=>'required',
      'message'=>'required',
    ]);

    Mail::to('test@test.com')->send(new ContactFormMail($data));

    return redirect('contacto')->with('message',' muy pronto estaremos en contacto.');

  }
}
