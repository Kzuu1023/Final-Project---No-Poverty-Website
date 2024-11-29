<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Models\AdminUser;


class AdminController extends Controller
{
    //
      public function store(Request $request) {

        // dd($request->all());

         $request->validate([
          'email' => 'required|email|max:255',
          'password' => 'required|string|min:8|regex:/[A-Z]/|regex:/[a-z]/|regex:/[0-9]/|regex:/[@$!%*?&]/',
           ]);
  
  
           //insert a value from input
      $admin = AdminUser::create([
        'email' => $request->email,
        'password' => $request->password,
        
    ]);
      
        
      $greetings = "Welcome {$admin->email}";


     return redirect()->back()->with('message',"$greetings");

     
      }

      

}
