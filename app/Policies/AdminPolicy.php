<?php

namespace App\Policies;

use App\Models\User;

class AdminPolicy
{
    /**
     * Create a new policy instance.
     */
    public function dashboard(User $user)
    {
        return $user->role === 1;
    }
}
