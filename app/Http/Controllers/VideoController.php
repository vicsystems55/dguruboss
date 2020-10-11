<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;

use Youtube;

use Auth;

use App\TourVideo;
 
class VideoController extends Controller
{
    
    public function store(Request $request)
    {

        try {
            //code...
            $video = Youtube::upload($request->file('video')->getPathName(), [
                'title'       => $request->input('title'),
                'description' => $request->input('description')
            ]);

            $video_url = $video->getVideoId();
        } catch (\Throwable $th) {
            //throw $th;

            $video_url = 'null';
        }
       

        $tour_video = new TourVideo;
        
        $tour_video->tournament_id = 1;

        $tour_video->user_id = $request->input('user_id');

        $tour_video->tour_video_url = $video_url;

        $tour_video->title = $request->input('title');

        $tour_video->description = $request->input('description');


        $tour_video->save();

        


 
        return view('edu.pages.upload_success');
    }
}