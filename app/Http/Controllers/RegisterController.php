<?php
namespace App\Http\Controllers;
use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Services\UserService;
class RegisterController extends Controller{
  public function reg (Request $request){
    $data =["user"=>$request->user,
            "name"=>$request->name,
            "password"=>Hash::make($request->password)
  ];
   
   Register::create($data);//这里是用的model的名字
    return view('register',[
      'success'=>'注册成功'
    ]);
  }

  protected $userService;
  public function __construct(UserService $userService){
    $this->userService=$userService; //左边属性名
  }
  public function log(Request $request){//登录验证
    
    
    $user=Register::where("user",$request->user)->first();
    $name=$user->name;
    
    
    if($user&&Hash::check($request->password,$user->password)){
       Auth::login($user);
       
       if($user->name){
       $userData= $this->userService->userImage($user->name);
       dd($userData);
       }
      
       
      return redirect()->route('homepage');
      

    } else{
     return redirect()->route("login")->with("失败");
    }
  }
    
  public function layout(Request $request){//退出
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/home');
  }
   
   public function searchUser(){
      $user = Register::orderby('id','asc')->take(15)->get();

      return view ('user',compact('user'));
   }
}
?>