<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LandmarkCategory extends Model
{
    /**
     * Get the landmarks associated with the given category.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function landmarks()
    {
        return $this->hasMany('App\Landmark');
    }
}
