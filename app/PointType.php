<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PointType extends Model
{

    protected $fillable = [
        'label'
    ];

    /**
     * Get the points associated with the given point type.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function points() {
        return $this->hasMany('App\Point');
    }

}
