<? php
namespace App\Services;
use   App\Models\person_data;
class UserService {

public function userImage($name){
    $data =person_data::where('name',$name)->first();
    if($data){
        return $data;
    } else{
        return null;
    }
}

}