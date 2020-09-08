<?php
namespace App\Http\Controllers ;

// use GuzzleHttp\Psr7\Request;
// use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
// use Illuminate\Foundation\Bus\DispatchesJobs;
// use Illuminate\Foundation\Validation\ValidatesRequests;

use Illuminate\Http\Request ;//request object er value access korar jonno use kora hoi .

class loginController extends Controller {
    function index(){
        return view ('login') ;
    }

    function validations(Request $request){
        // echo $request->username ;
        // echo $request-> password ;
        echo "your name:".$request->username;
        echo "Your password:".$request->password ;

        if($request->username == $request->password){
            return redirect('/home') ;
        }
    }
}
