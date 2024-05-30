<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function form(){
    return view('contact.form');
    }
   public function send(Request $request)
   {
    $data = $request->validate([
        'name' => 'required|string',
        'subject' => 'required|string',
        'email' => 'required|email',
        'phone' => 'required|numeric',
        'message' => 'required|string']);

        Mail::to('info@tmcorporacion.cl')->send(new ContactForm($data));
        return back()->with('data', $data)->with('message',['sucsess', 'Message sent succesfully']);
   }
}
