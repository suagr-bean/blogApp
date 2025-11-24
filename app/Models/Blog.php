<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model{
    protected $table = 'blog';
    public $timestamps = false;
    protected $fillable=['title','content','time'];//批量填充
}
    


