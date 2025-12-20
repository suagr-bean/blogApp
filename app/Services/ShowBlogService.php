<?php 
namespace App\Services;
use App\Models\Blog;
class ShowBlogService{
    public function readBlog(){
       $data=Blog::orderBy('id','desc')->with('comments')->first();
       return $data;
    }
    public function readIdBlog($id){
        if($id){
            $data=Blog::find($id)->with('comments');
            return $data;
        } else{
            return null;
        }
    }
}