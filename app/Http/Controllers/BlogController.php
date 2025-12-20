<?php
namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Services\ShowBlogService;
use Illuminate\Support\Facades\Auth;
class BlogController extends Controller{

   protected $blogservices;
   public function __construct(ShowBlogService $show){
    $this->blogservices=$show;
   }
    public function read($id=null){ 
        if($id==null) {
         $data=$this->blogservices->readBlog();
        }else {
          $data=$this->blogservices->readIdBlog($id);
        }
     return view('home',compact("data"));
    }

    public function creates(Request $request){//增加文章数据
      $data = [
          'title' => $request->input('title'),
            'content' => $request->input('content'),
              'time' => $request->input('time'),
            
              'name'=>$request->input("userName")
              ];
           Blog::create($data);  
         return view('home');
     }
  
   public function update(Request $request){
    //修改数据 这里也要加身份验证
    $id=$request->id;
    $time=$request->time;
    $title=$request->title;
    $content=$request->content;
    
    
    $update=Blog::find($id);
   
     if($request->filled('title')){
      $update->title=$request->title;
     
     }
     if($request->filled('time')){
      $update->time=$request->time;
       
     }
     if($request->filled('content')){
      $update->content=$request->content;
     }
     $update->save();
      return redirect()->back();
   }
  

   public function destroy($id){
    //这里要验证用户身份
    $blog=Blog::findOrfail($id);
    $blog->comments()->delete ();
    $blog->delete ();
    return redirect->route('/homepage') ;
   }
  }

