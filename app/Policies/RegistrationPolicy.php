<?php

namespace App\Policies;

use App\Models\User;

class RegistrationPolicy
{
    /**
     * Create a new policy instance.
     */
    public function dashboard(User $user)
    {
        return $user->role === 3;
    }
}
