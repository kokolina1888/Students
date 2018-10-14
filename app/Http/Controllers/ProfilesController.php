<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfilesController extends Controller
{
    public function index()
    {
    	
    	// $users = User::all();

    	// return $users;

    	// $user = User::find(1);

    	// return $user->profile;

    	$profile = \App\Profile::find(1);

    	return $profile->user;
    	
    	// return view('profile');
    }
}
