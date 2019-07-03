<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function mail(Request $request){
        //dd($request);
        $data = array(
            'name' => $request->name,
            'lastname' => $request->lastname,
            'corporation' => $request->corporation,
            'email' => $request->email,
            'message' => $request->message
        );
        Mail::to('webarts.paraguay@gmail.com')->send(new ContactMail($data));
        return redirect()->back()->with('success', 'mensaje enviado');
    }
}
