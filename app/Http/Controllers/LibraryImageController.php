<?php

namespace App\Http\Controllers;

use App\Teacher;
use App\Course;
use App\Job;
use App\Atachments;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LibraryImageController extends Controller
{

    public function image(){

        $all_image = Atachments::all();
        return view('Dashboard.library_image.all_image',compact('all_image'));

    }

    public function __construct()
    {
        $this->middleware('auth');
    }

}
