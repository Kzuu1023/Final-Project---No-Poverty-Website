<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Models\SubscribeUser;

class SubscribeController extends Controller
{
    //

    public function store(Request $request) {


         $request->validate([
          'firstname'  => 'required|string|max:255',
          'lastname' => 'required|string|max:255',
          'email' => 'required|email|max:255',
           ]);
   

        //    dd($request->all());

        $subs = SubscribeUser::create([
            'fname' => $request->firstname,
            'lname' => $request->lastname,
            'email' => $request->email,

    ]);
      
    $greetings = "Thank you for subscribing! Receive updates straight to your inbox!";

    return redirect()->back()->with('message',"$greetings");

    
    }
}
