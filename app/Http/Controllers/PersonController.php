<?php

namespace App\Http\Controllers;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use Illuminate\Support\Facades\Storage;
class PersonController extends Controller
{
   public function savedata(Request $request){
    
    $image=$request->file("image");
    $path=$image->store('image','public');
    $savedata=person_data::create([
       'name'=>$request->name,
        'image'=>$path,
        'profile'=>$request->profile
    ]); 
    Log:info("数据库保存成功");

    $url=Storage::disk("public")->url($path);
    return response()->json([
        'message'=>"成功",
    ],200);
   }
  
   protected $persondata ;
   public function __construct(UserService $userService){
      $this->persondata=$userService;
   }

   public function show(Request $request){
     
      $name=$request->name;
      $data=$this->persondata->show($name);
      $content=$this->persondata->showcontent($name);
      
     return view("PersonSet",compact("data","content"));
   }
}
