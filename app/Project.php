<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function type() {
        return $this->belongsTo('App\Type');
    }

    // this is just the relation of project to status table
    public function status() {
        return $this->belongsTo('App\Status');
    }

    public function entries() {
        return $this->hasMany('App\Entry');
    }

    public function skills() {
        return $this->belongsToMany('App\Skill', 'projects_skills', 'project_id', 'skill_id')->withTimestamps();
    }

    public function devs() {
        return $this->belongsToMany('App\User', 'projects_users', 'project_id', 'dev_id')->withTimestamps();
    }

    public function clients() {
        return $this->belongsToMany('App\User', 'projects_users', 'project_id', 'client_id')->withTimestamps();
    }

    // this if for status PIVOT table for entries and projects
    public function projectStatus() {
        return $this->belongsToMany('App\Status', 'projects_users', 'project_id', 'status_id')->withTimestamps();
    }

    public function feedbacks() {
        return $this->hasMany('App\Feedback');
    }

    public function files() {
        return $this->belongsToMany('App\File', 'files_projects')->withTimestamps();
    }

    public function messages() {
        return $this->hasMany('App\Message');
    }
}
