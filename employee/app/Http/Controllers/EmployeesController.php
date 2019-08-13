<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Employee;

class EmployeesController extends Controller
{
    function index(){
        //return "hello";
        //return view("employees/index");

        $employeeList = Employee::all();
        return view("employees.index", compact('employeeList'));
    }

    function edit($id){
        // dd($id);
        $emp = Employee::find($id);
        //dd($emp);
        return view("employees.edit", compact('emp'));
    }

    function update(Request $request){
        //dd($request->employeeId);
        $emp = Employee::find($request->employeeId);
        
        $emp->email = $request->email;
        $emp->save();
        return redirect("/employees");
    }
    
    
}
