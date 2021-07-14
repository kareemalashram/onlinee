<?php

namespace App\Http\Controllers;

use App\Students;
use App\Teacher;
use App\Course;
use App\Job;
use App\User;
use App\Atachments;
use foo\bar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class StudentController extends Controller
{





    public function show_register (){


        $students = Students::all();
        return view('Dashboard.students.register_student',compact('students'));

    }






    public function register_student(Request $request , $course_id){

        if ($request->post()){

            $data = $request->all();
            $data['course_id'] = $course_id;
            $results = Students::create($data);

            if ($results){

                return ['status' => true ];
            } else {

                return ['status' => false];
            }

        }


    }



    public function __construct()
    {
        $this->middleware('auth');
    }

}
