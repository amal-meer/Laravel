<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = [
        'user_id','articles_id','Content',
    ];

    public function owner(){

        return $this->belongsTo(User::class);

    }

    public function article(){

        return $this->belongsTo(Articles::class);

    }

}
