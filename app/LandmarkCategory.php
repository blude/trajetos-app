<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LandmarkCategory extends Model
{
    public function landmarks()
    {
        $this->hasMany('App\Landmark');
    }
}
