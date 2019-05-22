<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Freedom_fighter extends Model
{
    public function ff_title()
    {
    	return $this->belongsTo('App\Ff_title');
    }
}
