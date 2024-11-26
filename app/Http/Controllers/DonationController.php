<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Models\DonationUser;


class DonationController extends Controller
{
    //
      public function store(Request $request) {

        // dd($request->all());

         $request->validate([
          'fname'  => 'required|string|max:255',
          'phone_number' => 'required|string|max:20',
          'email' => 'required|email|max:255',
          'donation_amount' => 'required|numeric',
           
           ]);
  
  
      $donate = DonationUser::create([
        'fullname' => $request->fname,
        'phone_number' => $request->phone_number,
        'email' => $request->email,
        'donation_amount' => $request->donation_amount,
        'message' => $request->message
    ]);
      
        
      $greetings = "Thank you {$donate->fullname} for the donation amount of ₱{$donate->donation_amount}";


     return redirect()->back()->with('message',"$greetings");

     
      }

      

}
