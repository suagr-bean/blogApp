<?php
namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
class BlogController extends Controller{

    
    public function read($number=null){ //根据目录去数据库里找那条数据
       $data=Blog::with('comments')->latest('number')->get();
       if($number){
        $list=Blog::with('comments')->where("number",$number)->first();
         $dataSeach=collect([$list]);
       }else{
        
        //$data=Blog::with('comments')->get(); //with带的是model定义的方法名同时查评论
        $dataSeach=$data;
       }
      return view('home',compact('data','dataSeach'));
    }
    public function creates(Request $request){//增加数据
      $data = [
          'title' => $request->input('title'),
            'content' => $request->input('content'),
              'time' => $request->input('time'),
              'number'=>$request->input("number"),
              'name'=>$request->input("userName")
              ];
           Blog::create($data);  
           
     }
   public function update(Request $request){//根据id查询数据
    if($request->isMethod('get')){
      return view('update');
    } else if($request->isMethod('post')){
      
      $seach =$request->input("number");
      
     $data=Blog::where("number",$seach)->first();
       
      return view('update',['data'=>$data]);
    }
   }
   public function change(Request $request){
    //修改数据
    $number=$request->number;
    $time=$request->time;
   $update= Blog::where("number",$number)->first();
    
    
    $update->title=$request->title;
    $update->time=$request->time;
    $update->content=$request->content;
    $update->number=$request->number;
    $update->save();
   }
   public function delete(){
    //Blog::find()->delete();
   }
}

