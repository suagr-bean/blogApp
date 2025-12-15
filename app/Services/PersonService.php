<?php
namespace App\Services;
use  App\Models\person_data;
class PersonService{
    public function savePerson($name,$profile,$img);
      $image=file("img");
    $path=$image->store('image','public');
    $save=person_data::create([
        'name'=>$name,
        'path'=>$path,
        'profile'=>profile
    ]);
    if(save){
       return true;
    } else{
      return false;
    }
}