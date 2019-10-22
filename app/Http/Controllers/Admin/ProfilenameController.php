<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfilenameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $profilenames=Profilename::all();
        return view('admin.profilename.index',compact('profilenames'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.profilename.create');
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


        $profilename = new Profilename();
        $profilename->title = $request->username;
        $profilename->year = $request->emailaddress;
        $profilename->type = $request->phonenumber;

        $profilename->save();
        return redirect()->route('profilename.index')->with('successMsg','Profilename Succesfully Saved');

    }


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
         $profilename=Profilename::find($id);
        return view('admin.profilename.edit',compact('profilename'));
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


        $profilename = new Profilename();
        $profilename->title = $request->username;
        $profilename->year = $request->emailaddress;
        $profilename->type = $request->phonenumber;

        $profilename->save();
        return redirect()->route('profilename.index')->with('successMsg','Profilename Succesfully Updated');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profilename=Profilename::find($id);
        $profilename->delete();  
         return redirect()->back()->with('successMsg','Content Succesfully Deleted');

    }
}
