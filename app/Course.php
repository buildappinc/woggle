<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = [];

   public function topics()
   {
       return $this->hasMany(Topic::class);
   }
}
