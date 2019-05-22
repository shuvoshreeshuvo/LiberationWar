<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ff_title extends Model
{
    public function freedom_fighters()
    {
    	return $this->hasMany('App\Freedom_fighter');
    }
}

