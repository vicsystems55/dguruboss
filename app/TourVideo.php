<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourVideo extends Model
{
    public function users()
    {
        return $this->belongsTo('App\User');
    }

    public function tournaments()
    {
        return $this->belongsTo('App\Tournament');
    }

    public function tour_reviews()
    {
        return $this->hasMany('App\TourReview');
    }
}
