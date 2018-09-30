<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    public function users() {
        return $this->belongsToMany('App\User', 'ratings_users', 'rating_id', 'user_id')->withTimestamps();
    }
}
