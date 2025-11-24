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
               // 会将数据直接输出到页面，并终止后续代码执行
            
     Blog::create($data);
      
    }
    public function delete (){
      Blog::destroy(2,3,4);

    }
}

