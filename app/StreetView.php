<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StreetView extends Model
{
    public function point()
    {
        return $this->belongsTo('App\Point');
    }
}
