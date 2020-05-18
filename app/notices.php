<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notices extends Model
{
	public function courses()
    {
    	return $this->belongsTo('App\Courses');
    }
}
