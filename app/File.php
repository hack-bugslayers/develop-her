<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    public function projects() {
        return $this->belongsToMany('App\Project', 'files_projects')->withTimestamps();
    }

    public function entries() {
        return $this->belongsToMany('App\Entry')->withTimestamps();
    }
}
