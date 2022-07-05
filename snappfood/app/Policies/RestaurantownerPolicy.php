<?php

namespace App\Policies;

use App\Models\resturantowner\Restaurantowner;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RestaurantownerPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Restaurantowner  $restaurantowner
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Restaurantowner $restaurantowner)
    {
        return $user->role and $user->checkprofile_resturant==0;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->role and $user->checkprofile_resturant;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Restaurantowner  $restaurantowner
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Restaurantowner $restaurantowner)
    {
        return $user->role and $user->checkprofile_resturant and (auth()->check() and $restaurantowner->user_id==auth()->user()->id);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Restaurantowner  $restaurantowner
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Restaurantowner $restaurantowner)
    {
        return $user->role and $user->checkprofile_resturant and (auth()->check() and $restaurantowner->user_id==auth()->user()->id);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Restaurantowner  $restaurantowner
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Restaurantowner $restaurantowner)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Restaurantowner  $restaurantowner
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Restaurantowner $restaurantowner)
    {
        //
    }
}
