<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\CourseSubscription;

use Auth;

use App\Course;

use App\Tournament;

class FrontPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tour_courses = DB::table('tournaments')->get();
        $_courses = DB::table('courses')->get();
        return view('edu.pages.index4',[
            'tour_courses' => $tour_courses,
            '_courses' => $_courses
        ]) ;
    }

    public function events()
    {
        $tour_courses = DB::table('tournaments')->get();
        $_courses = DB::table('courses')->get();
        return view('edu.pages.events',[
            'tour_courses' => $tour_courses,
            '_courses' => $_courses
        ]) ;
    }

    public function event_single($id)
    {
        $tour_courses = DB::table('tournaments')->get();
        $_courses = DB::table('courses')->get();
        return view('edu.pages.event_single',[
            'tour_courses' => $tour_courses,
            '_courses' => $_courses
        ]) ;
    }


    public function teachers()
    {
        $tour_courses = DB::table('tournaments')->get();
        $_courses = DB::table('courses')->get();
        return view('edu.pages.teachers',[
            'tour_courses' => $tour_courses,
            '_courses' => $_courses
        ]) ;
    }

    public function teacher_single($id)
    {
        $user_data = DB::table('users')->where('id', $id)->first();
        return view('edu.pages.teacher_single',[
            'user_data' => $user_data
        ]) ;
    }

    
    

 
    public function courses()
    {
        $courses = DB::table('courses')->get();

        return view('edu.pages.courses',[
            'courses' => $courses
        ]);
    }

    public function course_single($id)
    {
        $courses = DB::table('courses')->get();

        return view('edu.pages.course_single',[
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
        return view('edu.pages.contact');
    }

    public function blog()
    {
        return view('edu.pages.blog');
    }


    public function blog_single($id)
    {
        return view('edu.pages.blog_single');
    }

    public function about()
    {
        return view('edu.pages.about');
    }


    public function tour()
    {
        return view('edu.pages.tour_setup');
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
