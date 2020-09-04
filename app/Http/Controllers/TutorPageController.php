<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\CoursesResource;

use Carbon\Carbon;

use DB;

use Paystack;

use App\User;

use App\Course;

use App\ClassCategory;

use App\TutorProfile;

use App\Topic;

use Auth;

class TutorPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
       
        $tutor_profile = TutorProfile::where('user_id', Auth::user()->id)->first();

        $tutor_class = Course::where('tutor_id', Auth::user()->id)->first();

        $tutor_regcourse = Course::where('tutor_id', Auth::user()->id)->get();
        
            if($tutor_profile === null){
                $profile = "not-updated";
            }
            else{
                $profile = "updated";
            }

            if($tutor_class === null){
                $class = "not-updated";
            }
            else{
                $class = "updated";
            }

            return view('tutor.home', [

                "profile" => $profile,
                "tutor_regcourse" => $tutor_regcourse,
                "class" => $class
            ]);

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
        

       $class_categories = DB::table('class_categories')->get();

        return view('tutor.classadd', [
            'class_category' => $class_categories
           
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
    public function update_profile()
    {
        //
        return view('tutor.update_profile');
    }

    public function regprofile()
    {
        //  $this->validate($request, [
        //     'title' => ['required', 'string', 'max:50'],
        //     'description' => ['required', 'string', 'max:255'],
        //     'category' => ['required', 'string', 'max:200'],
        //     'fee' =>['required', 'numeric'],
        //     'duration' => ['required','numeric'],
        //     'banner' => 'required|mimes:jpeg,jpg,png,gif|max:10024',
            

        // ]);

        
        $img_file = $request->file('tutor_avatar');

        $new_name = rand().".".$img_file->getClientOriginalExtension();

        $img_size = $img_file->getSize();
  
        $img_file->move(public_path("tutor_avatar"), $new_name);

        TutorProfile::create([
            'bio' => $request->bio,
            'phone' => $request->phone,
            'home_address' => $request->home_address,
            'state_res' => $request->state_res,
            'user_id' => Auth::user()->id,// the person currently logged in is 
            'duration' => $request->duration .' weeks',
            'banner' => $new_name,
            'requirements' => 'no requirements',
            'status' => 'not-acitve',
           
        ]);
    }

    public function profile()
    {
        $tutor_profile = TutorProfile::where('user_id', Auth::user()->id)->first();
        $user = User::where('id', Auth::user()->id)->first();
      
                return view('tutor.profile',
                [
                    'user' => $user
                ]
            );
            

        
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

    public function one_class_edit($id)
    {
        //
        return view('tutor.one_class_edit');
    }

    public function class_enrich($id)
    {
        //

        

        $course_details = DB::table('courses')->where('id', $id)->first();
        
        $topics = DB::table('topics')->where('course_id', $id)->get();

        return view('tutor.classenrich',[

            
            'course_details' => $course_details,
            'topics' => $topics
        ]);
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
