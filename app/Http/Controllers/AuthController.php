<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('form');
    }

    public function welcome(){
        return view('welcomeku');
    }

    public function welcome_post(Request $request){
        // dd($request->all());
        $fname = $request["fName"];
        $lname = $request["lName"];
        return view('welcomeku', ['fname' => $fname, 'lname'=>$lname]);
    }
}
