<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    protected $fillable = [
        'owner','title', 'content',
    ];

    public function owner(){

        return $this->belongsTo(User::class);

    }

    public function comments(){

        return $this->hasMany(User::class);

    }

}
