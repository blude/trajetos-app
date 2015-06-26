<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $fillable = [
        'name',
        'route_id'
    ];

    public function route() {
        $this->belongsTo('App\Route');
    }
}
