<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    public function dogs()
    {
        return $this->hasMany('App\Dog');
    }

    public function countDogs()
    {
        return $this->dogs()->count();
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
