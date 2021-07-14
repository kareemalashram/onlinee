<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () { return view('home');});
//
//Route::get('/teachers', function () {
//    return view('teachers');
//});

Route::get('/','HomeController@index')->name('home');

Route::get('/dashboard','DashboardController@dashboard')->name('dashboard');

Route::group(['middleware' => ['MenusRole']] ,function(){


    Route::any('/dashboard/add_teacher','DashboardController@add_teacher')->name('add_teacher');
    Route::get('/dashboard/show_teacher','DashboardController@show_teacher')->name('show_teacher');
    Route::any('/dashboard/edit_teacher/{id}','DashboardController@edit_teacher')->name('edit_teacher');
    Route::post('/dashboard/delete_teacher/{id}','DashboardController@delete_teacher')->name('delete_teacher');
    Route::get('/dashboard/information_teacher','DashboardController@information_teacher')->name('information_teacher');
    Route::get('/dashboard/info_teacher/{id}','DashboardController@info_teacher')->name('info_teacher');


});





Route::any('/dashboard/add_courses','DashboardController@add_courses')->name('add_courses');
Route::get('/dashboard/show_courses','DashboardController@show_courses')->name('show_courses');
Route::any('/dashboard/edit_courses/{id}','DashboardController@edit_courses')->name('edit_courses');
Route::post('/dashboard/delete_courses/{id}','DashboardController@delete_courses')->name('delete_courses');







Route::any('/dashboard/add_teachers','DashboardController@add_job')->name('add_job');
Route::get('/dashboard/api','APIController@get_job')->name('get_job');
Route::post('/dashboard/delete_job/{id}','DashboardController@delet_job')->name('delete_job');


Route::get('/dashboard/all_image','LibraryImageController@image')->name('image');




Route::get('/courses','HomePageController@courses')->name('courses');
Route::any('/single_courses/{id}','HomePageController@single_courses')->name('single_courses');
Route::post('/register_student/{course_id}','StudentController@register_student')->name('register_student');


Route::get('/show_register/','StudentController@show_register')->name('show_register');



Route::get('/teacher','HomePageController@teacher')->name('teacher');
Route::any('/single_teacher/{id}','HomePageController@single_teacher')->name('single_teacher');
Route::any('/single_teacher/{id}','HomePageController@single_teacher')->name('single_teacher');




Route::any('/profile','ProfileController@profile')->name('profile');
Route::any('/profile_up','ProfileController@profile_up')->name('profile_up');
Route::any('/change_password','ProfileController@change_password')->name('change_password');



Route::get('/dashboard/menu','AdminController@menu')->name('menu');
Route::post('/add_menu','AdminController@add_menus')->name('add_menus');
Route::get('/dashboard/edit_menu/{id}','AdminController@edit_menus')->name('edit_menus');
Route::get('/dashboard/show_menu','AdminController@show_menu')->name('show_menu');







Auth::routes();



