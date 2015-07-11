<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Neighborhood extends Model
{
    /**
     * Get the bus stops associated with the given neighborhood.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bus_stops()
    {
        return $this->hasMany('App\BusStop');
    }
}
