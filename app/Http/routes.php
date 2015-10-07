<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', 'WelcomeController@index');
Route::get('/', array('as'=>'lhome',function(){
	//自己定义的主页面
	$hi="你好";
	$obje="the wold!";
	return View::make('home.index')->with(array('hi'=>$hi,'obje'=>$obje));

}));

//l_001
Route::get('l001',array('as'=>'l001',function(){
	$first_name="Xiang";
	$last_name="Thomas";
	return View::make('learn.l_001')->with(array('first_name' => $first_name, 'last_name'=>$last_name));

}));

//l_002
Route::get('l002',array('as'=>'l002',function(){
	$sex="male";
	$age="34";
	$data=array('sex' => $sex,
				'age' => $age);
	return View::make('learn.l_002',$data);

}));

//l_003
Route::get('l003',array('as'=>'l003',function(){
	$data=array('sex' => '男','age' => '34岁',1,2,3,4,5,6,7,8,9,0);
	return View::make('learn.l_003')->with('data',$data);

}));

//l_004
Route::get('l004',array('as'=>'l004',function(){
	return View::make('learn.l_004');
}));

Route::post('l004',array('as'=>'l004',function(){
	return View::make('learn.l_004');
}));

//l_005
Route::get('l005',array('as' =>'l005',function(){
	return View::make('learn.l_005');
}));

Route::get('home', 'HomeController@index');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
