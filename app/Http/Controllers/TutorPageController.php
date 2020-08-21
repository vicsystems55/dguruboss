<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\CoursesResource;

use Paystack;

use App\User;

use App\Course;

use App\ClassCategory;

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

    public function loadcourses()
    {
        $courses = Course::get(); 

        return CoursesResource::collection($courses);
    }

    public function addclasses()
    {
        $class_category = ClassCategory::get();
        return view('tutor.classadd', [
            'class_category' => $class_category
        ]);
    }

    public function unpaidmember()
    {
        //
        return view('tutor.unpaid');
    }

    public function justpaid()
    {
        $paymentDetails = Paystack::getPaymentData();


        return 'paid';
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

    public function one_class($id)
    {
        //
        return view('tutor.one_class');
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
