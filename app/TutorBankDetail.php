<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TutorBankDetail extends Model
{
    //
    protected $fillable = [
        'bank_name', 'bank_code', 'user_id', 'account_name', 'account_no'
    ];


    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
