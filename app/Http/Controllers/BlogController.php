<?php
namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;
class BlogController extends Controller{
    public function read(){
      $data= Blog::all();
      return view('blog',compact('data'));
    }
    public function creates(Request $request){
      $data = [
          'title' => $request->input('title'),
            'content' => $request->input('content'),
              'time' => $request->input('time')
              ];
           Blog::create($data);  
           
     }
   public function update(Request $request){//根据id查询数据
    if($request->isMethod('get')){
      return view('update');
    } else if($request->isMethod('post')){
      
      $seach =$request->input("id");
      
      $data=Blog::find($seach);
      
      return view('update',['data'=>$data]);
    }
   }
   public function change(Request $request){
    //修改数据
    $id=$request->id;
    $time=$request->time;
    $update= Blog::find($id);
    $update->title=$request->title;
    $update->time=$request->time;
    $update->content=$request->content;
    $update->save();

   }
    
}

