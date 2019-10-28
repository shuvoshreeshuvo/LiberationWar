<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profiles=Profile::all();
        return view('admin.profile.index',compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'username' => 'required',
            'emailaddress' => 'required',
            'phonenumber' => 'required',
        ]);


        $profile = new Profile();
        $profile->username = $request->username;
        $profile->emailaddress = $request->emailaddress;
        $profile->phonenumber= $request->phonenumber;

        $profile->save();
        return redirect()->route('Profile.index')->with('successMsg','Profile Succesfully Saved');

    }



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
    $profile=Profile::find($id);
    return view('admin.profile.edit',compact('profile'));
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
    $this->validate($request,[
        'username' => 'required',
        'emailaddress' => 'required',
        'phonenumber' => 'required',
    ]);


    $profile = new Profile();
    $profile->username = $request->username;
    $profile->emailaddress = $request->emailaddress;
    $profile->phonenumber = $request->phonenumber;

    $profile->save();
    return redirect()->route('Profile.index')->with('successMsg','Profile Succesfully Updated');

}


/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function destroy($id)
{
    $profile=Profile::find($id);
    $profile->delete();
    return redirect()->back()->with('successMsg','Profile Succesfully Deleted');


}
}
