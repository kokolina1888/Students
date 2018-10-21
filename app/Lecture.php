<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{

	protected $fillable = [
		'name', 
		'number_of_hours', 
		'course_id'
	];

    public function course()
    {
    	return $this->belongsTo('App\Course');
    }
}
