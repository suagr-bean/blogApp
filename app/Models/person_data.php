<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class person_data extends Model
{
   protected $table='person_data';
   protected $fillable=['name','profile','image'];
   public function registers(){
    return $this->belongsTo(register::class);
   }
}
