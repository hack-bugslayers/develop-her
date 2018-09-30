<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Update extends Model
{
    public function likes()
    {
        return $this->hasMany('App\LikesUpdate');
    }

    public function comments()
    {
        return $this->hasMany('App\CommentsUpdate');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
