<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoordinateType extends Model
{

    protected $fillable = [
        'name',
        'description'
    ];

    /**
     * Get the coordinates associated with the given coordinate type.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function coordinates() {
        return $this->hasMany('App\Coordinate');
    }

}
