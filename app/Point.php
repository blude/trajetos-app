<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{

    /**
     * A point has a point type.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type() {
        return $this->belongsTo('App\PointType');
    }

    /**
     * Get the trips associated with the given point.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function trips() {
        return $this->belongsToMany('App\Trip')->withTimestamps();
    }

}
