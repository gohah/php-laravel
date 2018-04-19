<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Msg;
class LyanController extends Controller
{

    //获取页面
   public function add(){
        return view('msg.add');
   }

   //添加操作
  /* public function addPost(){
        //var_dump($_POST);exit;
        $data = ['title'=>$_POST['title'],'content'=>$_POST['content']];
        return DB::table('msgs')->insert($data) ? 'ok'  :  'fails';
   }
*/
   public function addPost(Request $req){
      $msg = new Msg();
      $msg->title = $_POST['title'];
      $msg->content = $_POST['content'];
      $req->file('pic')->move('D:/xampp/htdocs/myphp/blog/ddd/public','bb.png');
      return $msg->save() ? 'ok' : 'fail';
   }

   public function index(){
        //查询
/*        $data = DB::table('msgs')->get();
        return view('msg.index',['data'=>$data]);*/

        $data = Msg::where('id','>',1)->orderBy('id','asc')->skip(1)->take(1)->get();
        //$data = Msg::find(2);
        //var_dump($data);exit;
        return view('msg.index',['data'=>$data]);
   }

/*   public function del($id){
        $rs = DB::table('msgs')->where('id',$id)->delete();
        if($rs){
            return redirect('msg/index');
        }else{
            echo 'error';
        }
   }*/

   //修改
   /*public function up($id){
        if(empty($_POST)){
            $row = DB::table('msgs')->where('id',$id)->first();
            //var_dump($row);exit;
            return view('msg.up',['row'=>$row]);
        }else{
            $data = ['title'=>$_POST['title'],'content'=>$_POST['content']];
            $rs = DB::table('msgs')->where('id',$id)->update($data);
            if($rs){
                return redirect('msg/index');
            }else{
                echo '修改失败';
            }
        }

   }*/

   public function up(Request $req,$id){
      if(empty($_POST)){
        $row = Msg::find($id);
        return view('msg.up',['row'=>$row]);
      }else{
        //dd($req);
        //var_dump($req);
        $msg = Msg::find($id);
        $msg->title = $req->input('title');
        $msg->content = $req->content;
        $msg->pubtime = $req->input('pubtime',time());
        $rs = $msg->save();
        if($rs){
          return redirect('msg/index');
        }
      }
   }

   public function del($id){
      //$msg = Msg::find($id);
      return Msg::where('id',$id)->delete() ? 'ok' : 'fail';
   }


   public function show(){
      //查单行  find  first
      //$msg = Msg::find(3);
      //$msg = Msg::where('id','>',2)->first();

    //  查多行
      //$msg = Msg::all(['id','title']);
      //$msg = Msg::where('id','>',2)->select('id','title')->get();
      $msg = Msg::where('id','>',2)->get(['title']);
      var_dump($msg);

   }

}
