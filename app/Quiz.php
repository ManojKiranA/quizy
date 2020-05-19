<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('\App\User');
    }

    public function questions()
    {
        return $this->hasMany('\App\Question');
    }

    public function participants()
    {
        return $this->hasMany('\App\Participant');
    }
}
