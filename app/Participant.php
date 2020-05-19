<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $guarded = [];

    public function quiz()
    {
        return $this->belongsTo('\App\Quiz');
    }
}
