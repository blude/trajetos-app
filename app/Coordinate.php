<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coordinate extends Model
{
    protected $fillable = [
        'lat',
        'lon'
    ];

    /**
     * Get the trips associated with the given point.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function trips() {
        return $this->belongsToMany('App\Trip')->withTimestamps();
    }

    /**
     * A coordinate has a coordinate type.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function coordinate_type() {
        return $this->belongsTo('App\CoordinateType');
    }

    /**
     * Get a list of trip ids associated with the current coordinate.
     *
     * @return array
     */
    public function getTripListAttribute()
    {
        return $this->trips->lists('id')->all();
    }
}
