<?php
namespace App\Services;
use App\Models\person_data;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
class PersonShowService{
 public function showTitle($name) {
 if($name){
    $personData=person_data::where('name',$name)->first();
if($personData){
    return $personData;
} else{
    return  new person_data();//返回一个空对象
 }
 } else{
    return new person_data();
 }

}
public function showContent($name){
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
    