<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
    	'info',
    	'image_path'
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
