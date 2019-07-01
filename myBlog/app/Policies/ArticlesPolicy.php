<?php

namespace App\Policies;

use App\User;
use App\Articles;
use Illuminate\Auth\Access\HandlesAuthorization;

class ArticlesPolicy
{
    use HandlesAuthorization;
    
    public function update(User $user, Articles $articles)
    {
        return $user->id == $articles->user_id;
    }
}
