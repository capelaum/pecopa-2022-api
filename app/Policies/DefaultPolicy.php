<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class DefaultPolicy
{
    use HandlesAuthorization;

    /**
     * @param User $user
     * @param string $ownerId
     * @param string $action
     * @return bool|Response
     */
    public function isRequestUser(User $user, string $ownerId, string $action): Response|bool
    {
        if ($user->id !== $ownerId) {
            return $this->denyWithStatus(
                401,
                "Você não tem permissão para {$action}"
            );
        }

        return true;
    }
}
