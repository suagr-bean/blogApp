<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model{
    protected $table = 'blog';
    public $timestamps = false;
    protected $fillable=['title','content','time','number','name'];//批量填充
    public function  comments(){ //一对多
        return 
        $this->hasMany(comment::class,'number','number');
    }
}
    

