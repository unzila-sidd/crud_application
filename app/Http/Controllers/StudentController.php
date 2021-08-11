<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function addstudent(){
        return view('add-student');
    }
    public function savestudent(){
    }

}
