<?php

namespace App\Policies;

use App\Models\User;

class LegalPolicy
{
    /**
     * Create a new policy instance.
     */
    public function dashboard(User $user)
    {
        return $user->role === 2;
    }
}
