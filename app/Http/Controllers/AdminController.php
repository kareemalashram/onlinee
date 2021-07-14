<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class AdminController extends Controller
{


    public function menu () {


        return view('Dashboard.admin.add_menus');

    }


    public function add_menus(Request $request){

        if ($request->post()){

            Menu::create([
                'name'      => $request->post('name'),
                'route_name'     => $request->post('route_name'),
                'menu'      => $request->post('menu'),
                'user_role' => json_encode(( $request->post('role'))),
                'list'      => $request->post('list'),
            ]);

            return ['sql' => $request->all()];
        }

        return view('Dashboard.admin.add_menus',compact('add_menus'));


    }

    public function edit_menus(){

//        if ($request->post()){
//
//
//        }



        return view('Dashboard.admin.edit_menus');


    }



    public  function show_menu(){

        $manus = Menu::all();
        return view('Dashboard.admin.show_menus',compact('manus'));

    }





    public function __construct()
    {
        $this->middleware('auth');
    }

}
