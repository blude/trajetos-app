<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Landmark extends Model
{
    /**
     * Get the category of the given landmark.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function landmark_category()
    {
        return $this->belongsTo('App\LandmarkCategory');
    }
}
