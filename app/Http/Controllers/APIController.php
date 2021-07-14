<?php

namespace App\Http\Controllers;

use App\Teacher;
use App\Job;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class APIController extends Controller
{


    public function get_job(){

        $job = Job::all();
        return response($job);

    }



    public function __construct()
    {
        $this->middleware('auth');
    }

}
