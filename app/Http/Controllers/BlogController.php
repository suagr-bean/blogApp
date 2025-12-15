<?php
namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Services\UserService;
use Illuminate\Support\Facades\Auth;
class BlogController extends Controller{

    protected  $userSect;
    public function __construct(UserService $userService){
      $this->userSect=$userService;
    }
    public function read($id=null){ 
         
       $data=Blog::latest()->with('comments')->get();
       
       if($id){//根据id查特定文章数据
        $list=Blog::with('comments')->find($id);
         $dataSeach=$list;
         
      }else{
        $last=Blog::orderBy('id','desc')->with('comments')->first();
        $dataSeach=$last;
       }
        $viewdata=[
          'data'=>$data,'dataSeach'=>$dataSeach
        ];
      return view('home',$viewdata);
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

