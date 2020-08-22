<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TutorProfile extends Model
{
    protected $fillable = [
        'avatar', 'user_id', 'nationality', 'state_residence', 'address', 'phone', 'expertise', 'bio', 'status'
    ];


    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
