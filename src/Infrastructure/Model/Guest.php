<?php

namespace Infrastructure\Model;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    public function answers()
    {
        return $this->belongsToMany(Answer::class);
    }
}
