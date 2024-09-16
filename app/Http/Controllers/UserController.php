<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(Request $request)
    {
        // $username = $request->input('username');
        // echo $username;
        echo "hello";
    }
    public function reigster(Request $request)
    {
        // echo "hello";
        echo $request->input('username');
        echo $request->input('password');
        echo $request->input('cpassword');
    }
    function test()
    {
        // echo "works";
        return view('register');
    }
}
