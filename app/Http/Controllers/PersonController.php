<?php

namespace App\Http\Controllers;
use App\Services\PersonShowService;
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
   public function __construct(PersonShowService $personShowService){
      $this->persondata=$personShowService;
   }

   public function show(Request $request){
     
      $name=$request->name;
      $data=$this->persondata->showTitle($name);
      $content=$this->persondata->showContent($name);
      
    return view("Person",compact("data","content"));
   }
}
