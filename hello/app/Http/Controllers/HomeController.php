<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        return view('home.index');
    }

    function sayHello(Request $request) {
        // dd($request);
        // dd($request->input("userName"));
        // dd($request->userName);
        //return "Hello! " . $request->userName;
        return view("home.hello")->withWho($request->userName);
    }
}
