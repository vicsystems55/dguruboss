<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'title', 'description', 'category', 'fee', 'tutor_id', 'duration', 'banner', 'status'
    ];


    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function topics()
    {
        return $this->HasMany('App\Topic');
    }
}
