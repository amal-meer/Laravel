<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = [
        'Content',
    ];

    public function owner(){

        return $this->belongsTo(User::class);

    }

    public function article(){

        return $this->belongsTo(Articles::class);

    }

}
