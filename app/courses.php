<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
     public function notes()
    {
    	return $this->hasMany('App\Notes');
    }
}
