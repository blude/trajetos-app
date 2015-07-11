<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusStop extends Model
{
    /**
     * Get the point of the given bus stop.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function point()
    {
        return $this->belongsTo('App\Point');
    }

    /**
     * Get the neighborhood of the given bus stop.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function neighborhood()
    {
        return $this->belongsTo('App\Neighborhood');
    }
}
