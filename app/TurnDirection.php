<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TurnDirection extends Model
{
    /**
     * Get the turns associated with the given turn direction.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function turns()
    {
        return $this->hasMany('App\Turn');
    }
}
