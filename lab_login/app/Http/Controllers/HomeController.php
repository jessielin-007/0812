<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class HomeController extends Controller
{
    function index() {

        $userName = Session::get("userName", "Guest");
        return view("home.index", compact("userName"));
    }
    function secret() {
        $userName = Session::get("userName", "Guest");
        if($userName == "Guest"){
            Session::put("returnTo", "/home/secert");
            return redirect("/member/login");
        }
        return view("home.secret");
    }

}
