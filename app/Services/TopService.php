<?php
namespace App\Services;
use App\Models\person_data;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class TopService {

public function userTop(){//给顶部导航的

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
}}

   