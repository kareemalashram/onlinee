<?php

namespace App\Http\Controllers;

use App\Teacher;
use App\Course;
use App\Job;
use App\User;
use App\Atachments;
use foo\bar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
{

    public function profile (){

        $user = Auth::user();
        return view('Dashboard.Profile.Profile',compact('user'));
    }


    public function profile_up(Request $request){

        $user = Auth::user();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->save();
        return back();

    }

    public function change_password(Request $request ){

        if (!Hash::check($request->get('password_old'),Auth::user()->getAuthPassword())){

            return back()->with('error','لا تتطابق كلمة المرور الحالية مع ما قدمته');
        }

        if (strcmp($request->get('password_old'),$request->get('password')) == 0 ){

            return back()->with('error','لا يمكن أن تكون كلمة المرور الحالية هي نفسها مع كلمة المرور الجديدة');
        }

        $request->validate([

           'password_old' => 'required',
           'password'     => 'required|string|min:3|confirmed',

        ]);

        $user = Auth::user();
        $user->password = bcrypt($request->get('password'));
        $user->save();

        return back()->with('message','تم تغير كلمة المرور بنجاح ');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

}
