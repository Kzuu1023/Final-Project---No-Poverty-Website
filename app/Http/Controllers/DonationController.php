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
      
            
    
  
  
      
      //   $donate = [
      //     'fullname' => $fullname,
      //     'phone' => $phone,
      //     'email' => $email,
      //     'donation' => $donation,
      //     'date' => $date,
      //     'message' => $msg
      // ];



    

      // Using foreach to print each item
      // foreach ($donate as $key => $value) {
      //     echo "$key: $value<br>"; // This will print key and value for each item in the array
        
      //  }



      $greetings = "Thank you {$donate->fullname} for the donation amount of ₱{$donate->donation_amount}";



    //   return response()->json([
    //     'message' => $greetings,
    //     'data' => $donate,
    //  ]);

     return redirect()->back()->with('message',"$greetings");

     
      }

      

}
