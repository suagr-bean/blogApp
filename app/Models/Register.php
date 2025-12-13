<?php
namespace App\Models;
use illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\Authenticatable;          // 接口
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;  // trait
class register extends Model implements Authenticatable{
    use AuthenticatableTrait;
    protected $table ="register";
    protected $fillable=["user","name","password"];
    protected $hidden=['password'];
    public function person_data(){
        return $this->hasOne(person_data::class);
    }
}
?>