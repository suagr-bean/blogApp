<?php
namespace App\Http\Controllers;
use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Services\PersonService;
class RegisterController extends Controller{
  protected $person;
  public function __construct(PersonService $personService){
    $this->person=$personService;
  }
  public function reg (Request $request){
    $data =["user"=>$request->user,
            "name"=>$request->name,
            "password"=>Hash::make($request->password)
  ];
    $reg= Register::create($data);//这里是用的model的名字
  
    $name=$request->name;
    $img=$request->file('img');
    $profile=$request->profile;
   $savePerson= $this->person->saveperson($name,$profile,$img);
    if($savePerson&&$reg){
 return view('login',[
      'success'=>'注册成功'
    ]);
  } else{
    return view('register');
  }
  }


  public function log(Request $request){//登录验证
    
    
    $user=Register::where("user",$request->user)->first();
    $name=$user->name;
    
    
    if($user&&Hash::check($request->password,$user->password)){
       Auth::login($user); 
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
