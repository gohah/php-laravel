<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Msg;
use App\Test;
use Cache;
class MsgController extends Controller{


	public function show(){
/*		$msg = Msg::find(2);
		var_dump($msg);*/
		$test = Test::find(2);
		var_dump($test);
	}


	public function test(){
		//进行存储缓存
		//Cache::put('key1','val1',10);

		//add
/*		$a = Cache::add('key2','val2',10);
		var_dump($a);*/

		//forever 永久存储缓存
		Cache::forever('布尔教育','laravel');
	}

	public function test1(){
		//取缓存  get
/*		$a = Cache::get('布尔教育1','123');
		var_dump($a);*/

/*		$a = Cache::get('key3',function(){
			Cache::put('key3','val3',10);
		});
		var_dump($a);*/
		//pull  取出在删除
		$b = Cache::pull('key3');
		var_dump($b);
	}

	public function del(){
		//执行删除 操作  返回值 true 或 false
/*		$d = Cache::forget('key1');
		var_dump($d);*/
/*		$d  = Cache::flush();
		var_dump()*/
		if(Cache::has('布尔教育')){
			Cache::forget('布尔教育');
		}else{
			echo 'error';
		}
	}

}


?>