<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{

    protected $fillable = [
        'name',
        'route_id'
    ];

    /**
     * A trip is part of a route.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function route() {
        return $this->belongsTo('App\Route');
    }

    /**
     * Get the points associated with the given trip.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function points() {
        return $this->belongsToMany('App\Point')->withTimestamps();
    }

    /**
    * Return the full name of the trip, including it's route number.
    *
    * @return string
    */
    public function fullName() {
        return $this->route->number . ' - ' . $this->name;
    }

}
