<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;


class StudentController extends Controller
{
    //
    public function index(){
        $student = student::all();
        return view('students.index', ['students'=>$student]);
    }
    public function create(){
        $student = student::all();
        return view('students.create');
    }
    public function store(Request $request){
        $data = $request->validate([
            'adm' => 'required',
            'fname' => 'required',
            'lname' => 'required',
            'course' => 'required',
            'faculty' => 'required',
            'fees' => 'required|numeric',

        ]);
        $newstudent = student::create($data);
        return redirect(route('student.index'));
    }  
    public function edit(student $student){
       return view('students.edit', ['student' => $student]);
    } 
    public function update(student $student, Request $request){
        $data = $request->validate([
            'adm' => 'required',
            'fname' => 'required',
            'lname' => 'required',
            'course' => 'required',
            'faculty' => 'required',
            'fees' => 'required|numeric',

        ]);

        $student->update($data);
    return redirect(route('student.index'));

    }
    public function destroy(student $student){
        $student->delete();
        return redirect(route('student.index'));
    }
}
