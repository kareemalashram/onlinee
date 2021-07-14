<?php

namespace App\Http\Controllers;

use App\Teacher;
use App\Course;
use App\Job;
use Illuminate\Http\Request;

class HomePageController extends Controller
{


    public function courses(){


        $course = Course::where('status',1)->get()->sortByDesc('id');

        return view('page.courses.courses',compact('course'));

    }

    public function single_courses($id){

        $courses = Course::where('id','=',$id)->get()->first();
        return view('page.courses.single_courses',compact('courses'));

    }


    public function teacher(){

        $teachers = Teacher::all()->sortByDesc('id')->take(4);

        return view('page.teachers.teachers',compact('teachers'));

    }

    public function single_teacher($id){

        $teachers = Teacher::where('id','=',$id)->get()->first();
        return view('page.teachers.single_teachers',compact('teachers'));

    }







}
