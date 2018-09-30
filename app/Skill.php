<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    public function users() {
        return $this->belongsToMany('App\User', 'skills_users', 'skill_id', 'user_id')->withTimestamps();
    }

    public function projects() {
        return $this->belongsToMany('App\Project', 'projects_skills', 'skill_id', 'project_id')->withTimestamps();
    }
}
