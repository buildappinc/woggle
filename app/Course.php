<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = [];

    public function courseImage(){
        $imagepath = ($this->image) ? '/storage/' .$this->image : 'http://woogle-env.eba-5fphmdmm.us-east-2.elasticbeanstalk.com/images/imageplaceholder.png';
        return $imagepath;
    }

   public function topics()
   {
       return $this->hasMany(Topic::class);
   }

   public function users()
   {
       return $this->belongsToMany(User::class, 'course_user', 'course_id', 'user_id');
   }
}
