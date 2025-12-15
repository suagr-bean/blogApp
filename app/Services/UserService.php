<?php
namespace App\Services;
use App\Models\person_data;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class UserService {

public function userImage(){

    $user=Auth::check();
    if($user){
        $username=Auth::user()->name;
    $data =person_data::where('name',$username)->first();
    if($data){
         $name=$data->name;
        $url= Storage::disk('public')->url($data->image);
        return ['url'=>$url,'name'=>$name];
    } else{
        return ['url'=>'','name'=>''];
    }
} else{
  return ['url'=>'','name'=>''];
}
}

   public function show($name) {
      
      if($name){
        $personData=person_data::where('name',$name)->first();
        if($personData){
          return $personData;
        } else{
          return  new person_data();//返回一个空对象
        }
        
     } else{
       return  new person_data();
     } 
   }
   public function showcontent($name){
    if($name){
     $Content =Blog::where("name",$name)->get();
     if($Content){
      return $Content;
     } else{
      return new Blog();
     }
    }
     
   }

}