<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use  App\Models\person_data;
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
         'data'=>[
            'url'=>$url,
            'name'=>$request->name,
            'profile'=>$request->profile
         ] 
    ],200);
   }
}
