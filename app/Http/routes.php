<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//throw new \Exception('Tracy works!');

Route::get('/', function () {
    return view('index');

});

Route::get('hello',function(){
	return view('home.war.hello');
});


/*
page10:
Route::get('hello',function(){
	return view('home.hello');
});


Route::get('hello/{name?}',['as'=>"hello_name",function($name = 'everybody'){
	return "hello hong,".$name;
}]);



v2,ok
Route::group(['prefix' => 'admin'],function(){
	
	Route::get('account',function(){
		return 'admin account';
	});

	Route::get('dashboard',function(){
		return 'admin dashboard';
	});
});

v1,ok
Route::get('admin/account',function(){
	return 'admin account';
});

Route::get('admin/dashboard',function(){
	return 'admin dashboard';
});




Route::get('hello_1/{id?}',function($id = '123'){
	return "id:".$id;
})
->where('id','[0-9]+');


Route::get('hello/{id?}',function($id = '123'){
	return "id:".$id;
});
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
