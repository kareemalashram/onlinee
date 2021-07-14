<?php

namespace App\Http\Middleware;

use Closure;

use http\Env\Request;
use Illuminate\Support\Facades\Auth;
use App\Menu;

class MenusRole
{



    public function handle($request, Closure $next)
    {



        $c_user = Auth::User()->role;
        $rout_name = \Request::route()->getName();
        $menus = Menu::where([['active',1],['route_name',$rout_name]])->first();
        $protection = [];

        foreach (Menu::all() as $item ) {

            $rout_name = $item->route_name;
            array_push($protection,$rout_name);
        }


        if (in_array($rout_name,$protection)){

            $user_role = @json_decode($menus->user_role);
            if (@in_array($c_user,$user_role)){
                return $next($request);

             } else {
          return  redirect()->back();
            }
        }else{

            return $next($request);
        }


    }
















}

