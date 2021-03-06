<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\UserResource;

use App\User;

class StudentPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        //
        return view('student.home');
    }

    public function resources()
    {
        //
        return view('student.browseclasses');
    }

    public function profile()
    {
        //
        return view('student.profile');
    }

    public function myclasses()
    {
        //
        return view('student.myclasses');
    }

    public function projects()
    {
        //
        return view('student.projects');
    }

    public function reports()
    {
        //
        return view('student.reports');
    }

    public function wallet()
    {
        //
        return view('student.wallet');
    }

    public function notifications()
    {
        //
        return view('student.notifications');
    }

    public function singleclass()
    {
        //
        return view('student.singleclass');
    }

    public function onecourse()
    {
        //
        return view('onecourse');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function users()
    {
        $users = User::get(); 

        return UserResource::collection($users);
    }

    public function oneuser($id)
    {
        $users = User::find($id); 

        return UserResource::collection($users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
