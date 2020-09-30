<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    public function userImage(){
        $imagepath = ($this->image) ? '/images/profile/' .$this->image : 'http://woogle-env.eba-5fphmdmm.us-east-2.elasticbeanstalk.com/images/noPhoto.png';
        return $imagepath;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname', 'lname', 'oname', 'gender','email', 'password', 'image', 'phone', 'p_email'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_users', 'user_id', 'course_id');
    }

    public function payments(){
        return $this->hasMany(Payment::class);
    }

    public function results(){
        return $this->hasMany(Userresult::class);
    } 
}
