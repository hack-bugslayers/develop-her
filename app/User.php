<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password', 'status', 'first_name', 'last_name', 'contact_number', 'role_id', 'business_name', 'business_address', 'portfolio', 'credit_card_name', 'credit_card_number', 'activation_code'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role() {
        return $this->belongsTo('App\Role');
    }

    public function skills() {
        return $this->belongsToMany('App\Skill', 'skills_users', 'user_id', 'skill_id')->withTimestamps();
    }

    public function projectsDev() {
        return $this->belongsToMany('App\Project', 'projects_users', 'dev_id', 'project_id')->withTimestamps();
    }

    public function projectsClient() {
        return $this->belongsToMany('App\Project', 'projects_users', 'client_id', 'project_id')->withTimestamps();
    }

    public function ratings() {
        return $this->belongsToMany('App\Rating', 'ratings_users', 'rated_to', 'rating_id')->withPivot('value');
    }

    // public function feedbacks() {
    //     return $this->hasMany('App\Feedback', 'rated_to', 'feedback');
    // }

    public function feedbacksAsDev() {
        return $this->belongsToMany('App\Feedback', 'feedbacks', 'rated_to', 'feedback');
    }

    // public function feedbacksAsClient() {
    //     return $this->hasMany('App\Feedback', 'feedbacks', 'client_id', 'feedback');
    // }


}
