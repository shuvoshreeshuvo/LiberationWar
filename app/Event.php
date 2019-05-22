<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function period()
    {
    	return $this->belongsTo('App\Period');
    }
}
