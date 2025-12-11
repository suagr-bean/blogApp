<?php
namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
class BlogController extends Controller{

    
    public function read($id=null){ 
      // dd(Blog::find(12));
      //根据目录去数据库里找那条数据
       $data=Blog::latest()->with('comments')->get();
       
       if($id){
        $list=Blog::with('comments')->find($id);
         $dataSeach=$list;
       }else{
        $last=Blog::orderBy('id','desc')->with('comments')->first();

        //$data=Blog::with('comments')->get(); //with带的是model定义的方法名同时查评论
        $dataSeach=$last;
        
       }
      
      return view('home',compact('data','dataSeach'));
    }
    public function creates(Request $request){//增加数据
      $data = [
          'title' => $request->input('title'),
            'content' => $request->input('content'),
              'time' => $request->input('time'),
            
              'name'=>$request->input("userName")
              ];
           Blog::create($data);  
         return view('create');
     }
  
   public function update(Request $request){
    //修改数据
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
    $blog=Blog::findOrfail($id);
    $blog->comments()->delete ();
    $blog->delete ();
    return redirect->route('/homepage') ;
   }
  }

