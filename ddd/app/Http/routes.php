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

 Route::get('/', function () {
    return view('welcome');
});
/*Route::get('/', function () {
    return 'hello world';
});


//如果我们访问相同的路由,它以第二次为准

//基础路由
//用get的请求方式,去请求user,用匿名函数响应我们请求信息
Route::get('user',function(){
	echo '123';
});

/*Route::get('admin/user',function(){
	echo '456';
});*/

//post
/*Route::post('admin/user',function(){
	echo 'itbool';
});

//多请求路由
Route::get('admin/login',function(){
	echo 'login';
});

Route::post('admin/login',function(){
	echo 'loginpost';
})*/

//match  
/*Route::match(['get','post'],'admin/login',function(){
	echo 'login';
});


//any 
Route::any('home/login',function(){
	echo 'home.login';
});*/


//路由传参
/*Route::get('Home/user/{id}',function($id){
	return 'user'.$id;
}); */

/*Route::get('user/{id}/{name}',function($id,$name){
	return 'user___' . $id .$name;
});*/


//传递可选参数
/*Route::get('good/{page?}',function($page = 1){
	return 'page' . $page;
});*/


//参数限制
/*Route::get('user/{name}',function($name){
	return 'user_'.$name;
})->where('name','[A-Za-z]*');*/
/*Route::get('user/{id}/{name}',function($id,$name){
	return 'user_' . $id .$name;
})->where(['id'=>'[1-9]*','name'=>'[A-Za-z]*']);*/



/*Route::get('test','Admin\TestController@test');*/
/*Route::get('add','MsgController@add');
Route::get('add1','MsgController@add1');
Route::get('up','MsgController@up');
Route::get('del','MsgController@del');
Route::get('show','MsgController@show');*/

Route::get('msg/index','LyanController@index');
Route::get('msg/add','LyanController@add');
Route::post('msg/add','LyanController@addPost');
Route::get('msg/del/{id}','LyanController@del');
Route::match(['get','post'],'msg/up/{id}','LyanController@up');


Route::get('test','MsgController@test');
Route::get('show','MsgController@show');

Route::get('test1','MsgController@test1');
Route::get('del','MsgController@del');


//Route::get('admin/login','模块/控制器/方法')


