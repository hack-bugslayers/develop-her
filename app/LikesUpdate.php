<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LikesUpdate extends Model
{
    public function updates()
    {
        return $this->belongsTo('App\Update');
    }
}
