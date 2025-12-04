<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class comment extends Model{
  protected $table = 'comment';
  protected $fillable=["title","comment","username"];
  public function blog(){
   return $this->belongsTo(Blog::class,'title','title');
  }
}