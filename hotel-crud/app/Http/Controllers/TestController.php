<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class TestController extends Controller
{
    public function employees(){
        $employees = Employee::all();
        return view('pages.employees', compact('employees'));
    }
    public function detail($id){
        $detail = Employee::findOrFail($id);
        return view('pages.detail', compact('detail'));
    }
}
