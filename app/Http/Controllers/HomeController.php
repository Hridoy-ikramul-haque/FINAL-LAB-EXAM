<?php

namespace App\Http\Controllers ;

// use GuzzleHttp\Psr7\Request;
// use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
// use Illuminate\Foundation\Bus\DispatchesJobs;
// use Illuminate\Foundation\Validation\ValidatesRequests;

use Illuminate\Http\Request ;

class HomeController extends Controller {
    function homeindex(){
        // $data = ['name'=> 'hridoy' ,
        //           'id' => '17-33814-1' ,
        //   'department' =>  'cse'
                // ] ;
        return view ('Home')
        ->withname('hridoy')
        ->withid('17-33814-1')
        ->withdepartment('cse');
    }

    // function validations(Request $request){
    //     echo "your name:".$request->username;
    //     echo "Your password:".$request->password ;

    //     if($request->username == $request->password){
    //         return redirect('/home') ;
    //     }
    // }
}
