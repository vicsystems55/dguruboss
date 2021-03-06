<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role', 'reg_code', 'bio', 'address', 'avatar', 'phone', 'tournament'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function course()
    {
        return $this->hasMany('App\Course');
    }

    public function tutor_profile()
    {
        return $this->hasMany('App\TutorProfile');
    }

    public function tutor_bank()
    {
        return $this->hasOne('App\TutorBankDetail');
    }

    public function topics()
    {
        return $this->hasMany('App\Topic');
    }

    public function tour_videos()
    {
        return $this->hasMany('App\TourVideo');
    }

    public function reviews()
    {
        return $this->hasMany('App\TourReview');
    }

    
}
