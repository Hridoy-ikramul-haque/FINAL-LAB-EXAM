<?php

namespace App\Http\Controllers;

use App\employeer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeerController extends Controller
{

    public function index(Request $request)
    {
        $users=DB::table('employeers')
            ->get();
        return view('employer.index')->with('users',$users);
    }


    public function create()
    {

    }


    public function store(Request $request)
    {

    }


    public function show(employeer $employeer)
    {
        return view('employee');
    }


    public function edit(employeer $employeer)
    {

    }


    public function update(Request $request, employeer $employeer)
    {

    }


    public function destroy(employeer $employeer)
    {

    }
}
