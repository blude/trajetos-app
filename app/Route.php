<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $fillable = [
        'number',
        'name'
    ];

    public function trips() {
        return $this->hasMany('App\Trip');
    }
}
