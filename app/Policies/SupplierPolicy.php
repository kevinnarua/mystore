<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class SupplierPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function delete(user $user)
    {
        return ($user->sebagai=='owner'
                ?Response::Allow()
                :Response::deny('You Must be a super administrator.'));
    }
}
