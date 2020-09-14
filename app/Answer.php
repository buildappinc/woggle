<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    //

    public function answers()
    {
        return $this->belongsTo(Question::class);
    }
}
