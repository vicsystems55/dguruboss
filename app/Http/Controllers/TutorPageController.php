<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutorPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        //
        return view('tutor.home');
    }

    public function allclasses()
    {
        //
        return view('tutor.allclasses');
    }

    public function addclasses()
    {
        //
        return view('tutor.addclasses');
    }

    

    public function addclass(Request $request)
    {
        //
        
    }

    public function profile()
    {
        //
        return view('tutor.profile');
    }

    public function reports()
    {
        //
        return view('tutor.reports');
    }

    public function gurulibrary()
    {
        //
        return view('tutor.gurulibrary');
    }

    public function wallet()
    {
        //
        return view('tutor.wallet');
    }

    public function notifications()
    {
        //
        return view('tutor.notifications');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
