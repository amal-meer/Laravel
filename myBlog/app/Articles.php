<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    protected $fillable = [
        'user_id','title', 'content',
    ];

    public function owner(){

        return $this->belongsTo(User::class);

    }

    public function comments(){

        return $this->hasMany(Comments::class);

    }

}
