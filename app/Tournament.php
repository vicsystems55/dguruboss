<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    public function tour_videos()
    {
        return $this->HasMany('App\TourVideo');
    }
}
