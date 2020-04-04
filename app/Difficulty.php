<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Difficulty extends Model
{
    public function courses(){
        return $this->belongsToMany(Course::class);
    }
}
