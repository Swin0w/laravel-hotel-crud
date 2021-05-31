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
    public function create(){
        return view('pages.new');
    }
    public function store (Request $request){
        $data = $request -> validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'role' => 'required|string',
            'ral' => 'required|integer'
        ]);
        $employee = Employee::create($data);
        return redirect() -> route('employees', $employee -> id);
    }
    public function edit($id) {
        $employees = Employee::findOrFail($id);
        return view ('pages.edit', compact('employees'));
    }
    public function destroy($id) {
        $employee = Employee::findOrFail($id);
        $employee -> delete();
        return redirect() -> route('employees');
    }
}
