<?php

namespace App\Policies;

use App\Models\User;

/**
 * Class BankAccountPolicy.
 */
class BankAccountPolicy extends EntityPolicy
{
    /**
     * @param User $user
     * @param $item
     *
     * @return bool
     */
    public function edit(User $user, $item)
    {
        return $user->hasPermission('admin');
    }

    /**
     * @param User  $user
     * @param mixed $item
     *
     * @return bool
     */
    public function create(User $user)
    {
        return $user->hasPermission('admin');
    }
}
