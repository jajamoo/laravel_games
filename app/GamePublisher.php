<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GamePublisher extends Model
{
    protected $fillable = [
        'name',
        'address',
        'email',
        'phone_number',
    ];

    public function games()
    {
        return $this->hasMany(Game::class);
    }
}
