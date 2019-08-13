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
    
}
