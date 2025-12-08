<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class comment extends Model{
  protected $table = 'comment';
  protected $fillable=["title","comment","username","blog_id"];
  public function blog(){
   return $this->belongsTo(Blog::class,'blog_id','id');
  }
}