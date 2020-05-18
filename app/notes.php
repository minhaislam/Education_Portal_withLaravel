<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notes extends Model
{
   public function courses()
    {
    	return $this->belongsTo('App\Courses');
    }
    public function students()
    {
    	return $this->belongsTo('App\Students');
    }
}
