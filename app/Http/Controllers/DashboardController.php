<?php

namespace App\Http\Controllers;

use App\Teacher;
use App\Course;
use App\Job;
use App\Atachments;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){

        return view('Dashboard.homedash');
    }

    public function add_teacher(Request $request){

        if ($request->post()){

            $name    = $request->post('name');
            $email   = $request->post('email');
            $phone   = $request->post('phone');
            $job     = $request->post('job');
            $address = $request->post('address');
            $auther  = Auth::user()->id;

            Teacher::create([

                'name'  => $name,
                'email' => $email,
                'phone' => $phone,
                'job'   =>  $job,
                'address' => $address,
                'auther'  => $auther,

            ]);

        }

        $job_data = Job::all();

        return view('Dashboard.teacher.add_teacher',compact('job_data'));
    }

    public function add_job(Request $request){

        $job_data = Job::all();

        if ($request->post()){


            $job          = $request->post('job');
            $description  = $request->post('description');


           $data =   Job::create([

                'job'   =>  $job,
                'description'  => $description,

            ]);

           if ($data){
               return [

                   'done' => 1,
                   'job' => $job,
                   'description' => $description,


               ];
           }else {
               return ['done' => 0];
           }

        }

        return view('Dashboard.teacher.add_teacher',compact('job_data'));
    }

    public function edit_teacher(Request $request , $id){


        if ($request->post()) {

            $name = $request->post('name');
            $email = $request->post('email');
            $phone = $request->post('phone');
            $job = $request->post('job');
            $address = $request->post('address');

            $sql_teacher = Teacher::find($id);
            $sql_teacher->name    = $name;
            $sql_teacher->email   = $email;
            $sql_teacher->phone   = $phone;
            $sql_teacher->job     = $job;
            $sql_teacher->address = $address;
            $sql_teacher->save();


        }



        $teacher = Teacher::where('id',$id)->get()->first();
        $job_data     = Job::all();

        return view('Dashboard.teacher.edit_teacher',compact('teacher','job_data'));
    }

    public function show_teacher(){

        $teacher = Teacher::paginate(3);

        return view('Dashboard.teacher.show_teacher',compact('teacher'));
    }

    public function information_teacher (){

        $teachers = Teacher::all();

        return view('Dashboard.teacher.information_teacher',compact('teachers'));

    }

    public function info_teacher($id) {

        $teachers = Teacher::where('id',$id)->get()->first();

        return view('Dashboard.teacher.info_teacher',compact('teachers'));
    }

    public function delet_job($id){

        $sql = Job::where('id',$id)->get()->first()->delete();

        if ($sql){

            return ['set'=> 1 ];

        }else{

            return ['set'=> 0 ];

        }


    }

    public function delete_teacher($id){

        $sql = Teacher::where('id',$id)->get()->first()->delete();

        if ($sql){

            return ['set'=> 1 ];

        }else{

            return ['set'=> 0 ];

        }


    }

    public function add_courses(Request $request){


        if ($request->post()){



            $image = $request->file('image');
            $exe      = ['pdf','jpg','jpeg','png'];

            if ($image != null){

            $img_exe  = $image->getClientOriginalExtension();
            $img_name = $image->getClientOriginalName();
            $img_size = $image->getSize();
            $rand = date('dmy').rand(111111,999999);
            $target_file = 'uploads/image';

            $img_full = $rand. '.'.$img_exe;


            if (in_array($img_exe , $exe)){

                $request->image->move(public_path($target_file),$img_full);
                $img_map = $target_file.'/'.$img_full;

                $img_id = Atachments::insertGetId([

                    'old_name'     => $img_name ,
                    'new_name'     => $img_full ,
                    'path'         => $img_map ,
                    'type'         => $img_exe ,
                    'size'         => $img_size ,
                    'user_id'      => Auth::user()->id ,
                ]);



            }else {
                dd('Error');
            }

            } else
            {
                $img_id = null;
            }





            $name         = $request->post('name');
            $description  = $request->post('description');
            $price        = $request->post('price');
            $teacher        = $request->post('teacher');
            $auther       = Auth::user()->id;
            $image        = $img_map;

            Course::create([

                'name'        => $name,
                'description' => $description,
                'price'       => $price,
                'teacher'     => $teacher,
                'auther'      => $auther,
                'image'      => $img_id,

            ]);




        }




        $teacher = Teacher::all();

        return view('Dashboard.courses.add_courses',compact('teacher'));
    }


    public function edit_courses(Request $request , $id){


        if ($request->post()) {



            $sql_courses = Course::find($id);
            $image = $request->file('image');
            $exe      = ['pdf','jpg','jpeg','png'];

            if ($image != null){

                $img_exe  = $image->getClientOriginalExtension();
                $img_name = $image->getClientOriginalName();
                $rand = date('dmy').rand(111111,999999);
                $target_file = 'uploads/image';

                $img_full = $rand. '.'.$img_exe;

                if (in_array($img_exe , $exe)){

                    $request->image->move(public_path($target_file),$img_full);
                    $img_map = $target_file.'/'.$img_full;

                }else {
                    dd('Error');
                }

                $sql_courses->image       = $img_map;
            }


            $name            = $request->post('name');
            $description     = $request->post('description');
            $price           = $request->post('price');
            $teacher         = $request->post('teacher');


            $sql_courses->name          = $name;
            $sql_courses->description   = $description;
            $sql_courses->price         = $price;
            $sql_courses->teacher       = $teacher;

            $sql_courses->save();


        }


        $courses = Course::where('id',$id)->get()->first();
        $teacher     = Teacher::all();

        return view('Dashboard.courses.edit_courses',compact('courses','teacher'));
    }

    public function delete_courses($id){

        $sql = Course::where('id',$id)->get()->first()->delete();

        if ($sql){

            return ['set'=> 1 ];

        }else{

            return ['set'=> 0 ];

        }


    }


    public function show_courses(Request $request){

        if (isset($_GET['active'])){

          $active  = $_GET['active'];
          $id_course  = $_GET['id_course'];

          $sql = Course::find($id_course);

         if ($active == 0){

            $sql->status  = 1 ;
         }else {
             $sql->status = 0;
         }

        $sql->save();

        }


        $courses = Course::all()->sortByDesc('id');

        return view('Dashboard.courses.show_courses',compact('courses'));
    }


    public function __construct()
    {
        $this->middleware('auth');
    }

}
