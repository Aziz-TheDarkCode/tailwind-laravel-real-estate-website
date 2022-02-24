<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }
   
    public function registration(Request $request)
    {
         $this->validate($request,[
             'name' => ['required','max:255'],
             'email' => ['required','max:255','email'],
             'password' => ['required','confirmed']
         ]);
        // $validatedData = $request->validate([
        //     'name' => 'required',
        //     'email'=> 'required',
        // ]);


        // dd($request);    
    }
}
