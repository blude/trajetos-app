<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turn extends Model
{
    /**
     * Get the direction of the given turn.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function turn_direction()
    {
        return $this->belongsTo('App\TurnDirection');
    }

    /**
     * Get the point of the given turn.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function point()
    {
        return $this->belongsTo('App\Point');
    }
}
