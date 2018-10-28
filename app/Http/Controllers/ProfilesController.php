<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class ProfilesController extends Controller
{
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Profile::all();
        //Profile::find($id);
        // $profile = Profile::where('user_id', $id)->get();
        //SELECT * FROM profiles WHERE user_id=$id LIMIT 1
        $profile = Profile::where('user_id', $id)->first();
       return view('profiles.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd( $request->file('image_path') );
        $filename = $request->file('image_path')->getClientOriginalName();
        // dd($filename);
        $path = public_path().'/img';
        $request->file('image_path')->move($path, $filename);

        //write in db
        $profile = Profile::find($id);

        $profile->image_path = $filename;

        $profile->save();

        return redirect()->back();
    }

}
