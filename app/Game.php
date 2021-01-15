<?php

namespace App;

//created this model
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'title',
        'publisher',
        'developer',
        'release_date',
        'image',
    ];

    public function publisher()
    {
        return $this->hasOne(Publisher::class);
    }
}
