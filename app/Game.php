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
        'publisher_email',
        'release_date',
        'image',
    ];

    public function publisher()
    {
        return $this->hasOne(GamePublisher::class);
    }
}
