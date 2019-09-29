<?php

namespace App\Policies;

use App\Models\UserEntity\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\UserEntity\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\UserEntity\User  $user
     * @param  \App\Models\UserEntity\User  $model
     * @return mixed
     */
    public function view(User $user)
    {
        return $user->roll==='admin';
//        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\UserEntity\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\UserEntity\User  $user
     * @param  \App\Models\UserEntity\User  $model
     * @return mixed
     */
    public function update(User $user, User $model)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\UserEntity\User  $user
     * @param  \App\Models\UserEntity\User  $model
     * @return mixed
     */
    public function delete(User $user, User $model)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\UserEntity\User  $user
     * @param  \App\Models\UserEntity\User  $model
     * @return mixed
     */
    public function restore(User $user, User $model)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\UserEntity\User  $user
     * @param  \App\Models\UserEntity\User  $model
     * @return mixed
     */
    public function forceDelete(User $user, User $model)
    {
        //
    }
}
