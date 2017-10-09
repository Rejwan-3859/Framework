<?php

///*
//|--------------------------------------------------------------------------
//| Web Routes
//|--------------------------------------------------------------------------
//|
//| Here is where you can register web routes for your application. These
//| routes are loaded by the RouteServiceProvider within a group which
//| contains the "web" middleware group. Now create something great!
//|
//*/
//
//Route::get('/', function () {
//    return view('welcome');
//});
//
//
//Route::get('/front/demo', function () {
//    return view('front.welcome');
//
//});
//Route::get('/hagol', function () {
//   return[
//       'name'=> 'Rijwan Sharif',
//       'email'=>'rijuphp05@gmail.com',
//       'phone'=> '01679287808'
//   ];
//
//});
//
//Route::get('/dibi',function(){
//    return[
//        '0'=>[
//            'name'=> 'tanvir',
//            'email'=> 'tanvir@gmail.com',
//            'phone'=> '017837237823'
//        ],
//        '1'=>[
//          'name'=> 'rijwan',
//          'email'=> 'tsjhb@cb.com',
//          'phone'=> '01379832333'
//    ]
//    ];
//
//});





Route::get('/', 'StudentController@index');

Route::get('/Services', 'StudentController@Services');
Route::get('/portfolio', 'StudentController@portfolio');
Route::get('/about', 'StudentController@about');
Route::get('/team', 'StudentController@team');
Route::get('/contact', 'StudentController@contact');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'CategoryController@index');
Route::get('/add-category', 'CategoryController@AddCategory');
Route::get('/manage-category', 'CategoryController@ManageCategory');