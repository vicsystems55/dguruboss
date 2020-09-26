<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Youtube;
 
class VideoController extends Controller
{
    
    public function store(Request $request)
    {
        $video = Youtube::upload($request->file('video')->getPathName(), [
            'title'       => $request->input('title'),
            'description' => $request->input('description')
        ]);
 
        return "Video uploaded successfully. Video ID is ". $video->getVideoId();
    }
}