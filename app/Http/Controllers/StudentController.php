<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StudentController extends Controller
{
    public function addstudent(){
        return view('add-student');
    }
    public function savestudent(Request $request){
        DB::table('students')->insert([
            'name'=>$request->name,
            'email'=>$request->email
        ]);
        return back()->with('student_add','Student added succesfully');
    }
    public function studentslist(){
        $students = DB::table('students')->get();
        return view('student-list',compact('students'));
    }
    public function editstudent($id){
       
    }
    public function delstudent($id){
       
    }

}
