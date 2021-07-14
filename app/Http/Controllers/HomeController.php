<?php

namespace App\Http\Controllers;

use App\Teacher;
use App\Course;
use Carbon\Carbon;

use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function index()
    {
        $course = Course::where('status',1)->get();
        $teachers = Teacher::all()->sortByDesc('id')->take(4);;
        return view('indexx',compact('teachers','course'));
    }



}
