<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Profile extends Model
{
    //protected $primaryKey = 'id';
    protected $table = 'user_profiles';
    protected $fillable = ['user_id'];
}
