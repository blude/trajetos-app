<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{

    protected $fillable = [
        'lat',
        'lon',
        'point_type_id'
    ];

    /**
     * A point has a point type.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function point_type() {
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

    /**
     * The point can be a bus stop.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function bus_stop()
    {
        return $this->hasOne('App\BusStop');
    }

    /**
     * The point can be a landmark.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function landmark()
    {
        return $this->hasOne('App\Landmark');
    }

    /**
     * The point can be a street view.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function street_view()
    {
        return $this->hasOne('App\StreetView');
    }

    /**
     * The point can be a turn.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function turn()
    {
        return $this->hasOne('App\Turn');
    }

    /**
     * Get a list of trip ids associated with the current point.
     *
     * @return array
     */
    public function getTripListAttribute()
    {
        return $this->trips->lists('id')->all();
    }

}
