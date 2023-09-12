<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class form1Controller extends Controller
{
    function index() {
   return view('form1.index');
    }

    function form1Submit(Request $request) {
             $request->validate([
                'name' => 'required|string|min:3|max:20',
                'email' => 'required|email',
                'age' => 'required',
                'password' => 'required'
             ]);

           //  DB::statement('INSERT INTO (A , B , G) VALUES (? , ? ) ');

          /* DB::insert('courses' ,
           [

           ]);*/

          /* Category::create([
            'name' => $request->name ,
           ]);*/

           User::create([
            'name' => $request->name ,
            'age' => $request->age ,
            'email' => $request->email ,
            'password' => Hash::make($request->password) ,
           ]);

           return redirect()->back() ;

     }


     function form2() {
        return view('form2.index');
     }

     function form2Submit(Request $request) {
      // dd($request->file('album'));
        // $name = time() . rand() . $request->file('image')->getClientOriginalName();
        /* $ex = 'form1_' . time() .  '_' . rand() . '.' . $request->file('image')->getClientOriginalExtension();
         $request->file('image')->move(public_path('uploads') , $ex);*/

        /* foreach($request->file('album') as $i){
            $ex = 'form1_' . time() .  '_' . rand() . '.' . $i->getClientOriginalExtension();
            $i->move(public_path('uploads') , $ex);
         }*/
     }



}
