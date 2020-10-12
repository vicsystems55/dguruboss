<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourReview extends Model
{
    public function users()
    {
        return $this->belongsTo('App\User');
    }

    public function tour_videos()
    {
        return $this->belongsTo('App\TourVideo');
    }
}
