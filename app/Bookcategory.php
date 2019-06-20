<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookcategory extends Model
{
    public function book()
    {
    	return $this->hasMany('App\Book');
    }
}
