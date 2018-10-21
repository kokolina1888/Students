<?php

namespace App\Http\Controllers;

use App\Course;
use App\Lecture;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	// $course = Course::all();
    	// $course = Course::find(11);
    	// $course = Course::findOrFail(1);

    	// return $course->lectures;

    	$lecture = Lecture::find(3);
    	// return $lecture->course->description;
    	// return view('home');
    }
}
