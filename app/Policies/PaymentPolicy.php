<?php

namespace App\Policies;

use App\Models\User;


/**
 * Class PaymentPolicy
 * @package App\Policies
 */
class PaymentPolicy extends EntityPolicy
{
    /**
     * @param User $user
     * @return bool
     */
    public function create(User $user)
    {
        return $this->createPermission($user, ENTITY_PAYMENT);
    }
}
