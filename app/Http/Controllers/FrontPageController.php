<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\CourseSubscription;

use Auth;

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

    public function course_session($id)
    {
        $user_sub = DB::table('course_subscriptions')->where('user_id', Auth::user()->id)->get();

        $course_data = DB::table('courses')->where('id', $id)->get();

        if ($user_sub->count() == 0) {
            return "you have not bought this course";
        }
        else{
            return view('frontpage.course_session',[
                'course_data' => $course_data
            ]);
        }

        
    }

    public function course_details($id)
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
