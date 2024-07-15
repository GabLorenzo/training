<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function saveStudent(Request $request){
        if($request->id){
            $new = Student::find($request->id);
        }else{
            $new = new Student;
        }

        $new->name = $request->name;
        $new->course = $request->course;
        $res = $new->save();
        return $res;
    }
    public function getStudents(){
        return Student::all();
    }
    public function deleteStudent(Request $request){
        Student::where('id', $request->id)->delete();
        return 1;
    }
}

