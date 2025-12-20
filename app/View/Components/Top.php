<?php 
namespace App\View\Components;
use  App\Services\TopService; 
use Illuminate\View\Component;
class Top extends Component{
   public $user;
 public  $url;
 public $name;
 public function __construct(TopService $topService){
    $this->user=$topService->userTop();
    
    $this->url=$this->user['url'];
    $this->name=$this->user['name'];
    
 }
 public function render(){
    return('components.top');
 }
}