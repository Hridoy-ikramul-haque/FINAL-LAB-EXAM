<?php
namespace App\Http\Controllers ;

// use GuzzleHttp\Psr7\Request;
// use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
// use Illuminate\Foundation\Bus\DispatchesJobs;
// use Illuminate\Foundation\Validation\ValidatesRequests;

use Illuminate\Http\Request ;//request object er value access korar jonno use kora hoi .



class loginController extends Controller
{
    public function loginView()
    {
        return view('login');
    }
    function verify(Request $request){



            $data = DB::table('employeers')
                ->where('username', $request->username)
                ->where('password', $request->password)
                ->get();
            if (count($data) > 0) {
                $request->session()->put('username', $request->username);

                if ($data[0]->username == 'admin') {
                    $request->session()->put('type', 'admin');
                }
                else {
                      $request->session()->put('type','employer');
                }

                       return redirect()->route('employer.index');
            } else {
                $request->session()->flash('msg', 'user invalid');
                return redirect()->route('login');
            }
        }


}






}
