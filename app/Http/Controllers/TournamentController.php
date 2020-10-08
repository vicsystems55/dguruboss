<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tournament;

use Auth;

class TournamentController extends Controller
{
    public function create_tournament(Request $request)
    {

        $tournament = new Tournament();
        $tournament->title = $request->title;
        $tournament->description = $request->description;
        $tournament->category = 'tournament course';
        $tournament->banner = 'pix.png';
        $tournament->fee = 0;
        $tournament->duration_value = 7;
        $tournament->video_url = $request->video_url;
        $tournament->tutor_id = Auth::user()->id;

        

        $tournament->save();

        return back();
    }
}
