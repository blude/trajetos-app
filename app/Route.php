<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{

    protected $fillable = [
        'number',
        'name'
    ];

    /**
    * Return the full name of the route, including it's number.
    *
    * @return string
    */
    public function fullName() {
        return $this->number . ' - ' . $this->name;
    }

    /**
     * A route can have many trips.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function trips() {
        return $this->hasMany('App\Trip');
    }

    /**
     * Delete related trips when deleting a given route.
     *
     * @return void
     */
    public static function boot() {
        parent::boot();

        static::deleted(function($route) {
            $route->trips()->delete();
        });
    }

}
