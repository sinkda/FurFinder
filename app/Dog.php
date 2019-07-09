<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    public function organization()
    {
        return $this->belongsTo('App\Organization');
    }

    public function readableBreed()
    {
        if (!strpos($this->breed, '-'))
            return ucfirst($this->breed);

        [$primary, $secondary] = explode('-', $this->breed);
        return ucfirst($secondary) . ' ' . ucfirst($primary);
    }

}
