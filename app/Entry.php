<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    public function project() {
        return $this->hasOne('App\Project');
    }

    public function status() {
        return $this->hasOne('App\Status');
    }

    public function files() {
        return $this->belongsToMany('App\File')->withTimestamps();
    }
}
