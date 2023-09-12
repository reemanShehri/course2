<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class Site2Controller extends Controller
{
   function index() {
        return view('site2.index');
   }

   function about()  {
   return view('site2.about') ;
   }

   function post_msg(Request $request) {
      //  dd($request) ; //
        $name = $request->name ;
        $email = $request->email ;
        $msg = $request->msg ;
        // return redirect()->route('view') ;
        return view('site2.req' , compact('msg' , 'name' , 'email') ) ;
   }

   function view() {
    return view('site2.req') ;
   }



}
