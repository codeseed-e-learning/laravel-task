<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\demo;
class HomeController extends Controller
{
    //
    function index()
    {
        $data = [
            "name" => "Amit Kasabe",
            "username" => "amit.kasabe12@gmail.com"
        ];
        print_r(json_encode($data));
    }

    public function login(Request $request)
    {
        $name = $request->input('username');
        $email = $request->input('email');
        
     
    }

    public function showForm(Request $request)
    {
        echo view('app');
    }
}
