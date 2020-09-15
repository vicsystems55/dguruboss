<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Course;

class FrontPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontpage.index') ;
    }

 
    public function courses()
    {
        $courses = DB::table('courses')->get();

        return view('frontpage.courses',[
            'courses' => $courses
        ]);
    }

    public function course_session()
    {
        return view('frontpage.course_session');
    }

    public function course_details()
    {
        return view('frontpage.course_details');
    }

    public function contact()
    {
        return view('frontpage.contact');
    }

    public function blog()
    {
        return view('frontpage.blog');
    }

    public function blog_details()
    {
        return view('frontpage.blog_details');
    }

    public function about()
    {
        return view('frontpage.about');
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
