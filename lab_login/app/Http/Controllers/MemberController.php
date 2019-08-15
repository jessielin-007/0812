<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class MemberController extends Controller
{

    function logout() {
        Session::forget("userName");
        return redirect("/home/index");
   }
    function login() {
        $request = new \stdClass();
        $request->txtUserName =="";
        $request->txtPassword =="";
        // $request = (object) ["txtUserName"=>"", "txtPassword"=>""];
        return view("member.login", compact("request"));
    }
    function postLogin(Request $request) {
        if ($request->txtUserName == ''){
            return view("member.login", compact("request"));
        }
        if ($request->txtPassword == ''){
            return view("member.login", compact("request"));
        }
        // setCookie()
        Session::put("userName", $request->txtUserName);
        $gotoUrl = Session::get("returnTo", "/home/index");
        Session::forget("returnTo");
        return redirect($gotoUrl);

    }
}
