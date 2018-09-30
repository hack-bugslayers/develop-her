<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function projects() {
        return $this->hasMany('App\Project');
    }

    public function entry() {
        return $this->belongsTo('App\Entry');
    }

    public function statusProject() {
        return $this->belongsToMany('App\Project', 'projects_users', 'status_id', 'project_id')->withTimestamps();
    }
}
