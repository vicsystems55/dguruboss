<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Course;

use Auth;

class CreateClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function publish_course(Request $request)
    {
        return back();
    }

    public function draft_course(Request $request)
    {
        return back();
    }

    
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'course_title' => 'max:100',
           
            'course_category' => 'max:120',
            'course_banner' => 'max:120',
            'course_fee' => 'max:120',
            'duration_value' => 'max:120',
            'duration_type' => 'max:120',

            
            
        ]);

        $course = new Course();

        $course->title = $request->course_title;
        $course->description = $request->course_description;
        $course->category = '$request->course_category';
        $course->banner = 'pix.png';
        $course->fee = $request->course_fee;
        $course->duration_value = $request->duration_value;
        $course->duration_type = $request->duration_type;

        $course->tutor_id = Auth::user()->id;

        $course->save();



        return redirect('/tutor/class-enrich/'.$course->id);
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
