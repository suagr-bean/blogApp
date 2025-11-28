<?php
namespace App\Http\Controllers;
use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class RegisterController extends Controller{
  public function reg (Request $request){
    $data =["user"=>$request->user,
            "name"=>$request->name,
            "password"=>Hash::make($request->password)
  ];
   
   Register::create($data);//这里是用的model的名字
  }
  public function log(Request $request){
    
    
    $user=Register::where("user",$request->user)->first();
    
    
    
    if($user&&Hash::check($request->password,$user->password)){
       Auth::login($user);
      
      return redirect()->route("blog");
      

    } else{
     return redirect()->route("login")->with("失败");
    }
  }
}
?>