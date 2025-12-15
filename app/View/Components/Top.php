<?php 
namespace App\View\Components;
use  App\Services\UserService; 
use Illuminate\View\Component;
class Top extends Component{
   public $user;
 public  $url;
 public $name;
 public function __construct(UserService $userService){
    $this->user=$userService->userImage();
    
    $this->url=$this->user['url'];
    $this->name=$this->user['name'];
    
 }
 public function render(){
    return('components.top');
 }
}