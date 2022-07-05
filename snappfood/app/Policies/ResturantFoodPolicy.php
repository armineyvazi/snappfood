<?php

namespace App\Policies;

use App\Models\resturantowner\ResturantFoods;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\resturantowner\Restaurantowner;

class ResturantFoodPolicy
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
     * @param  \App\Models\ResturantFoods  $resturantFoods
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, ResturantFoods $resturantFoods)
    {
        return $user->role and $user->checkprofile_resturant;
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
     * @param  \App\Models\ResturantFoods  $resturantFoods
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, ResturantFoods $resturantFoods)
    {
        return $user->role and $user->checkprofile_resturant and (auth()->check() and Restaurantowner::find($resturantFoods->restaurantowner_id)->user()->first()->id==auth()->user()->id);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ResturantFoods  $resturantFoods
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, ResturantFoods $resturantFoods)
    {
        return $user->role and $user->checkprofile_resturant and (auth()->check() and Restaurantowner::find($resturantFoods->restaurantowner_id)->user()->first()->id==auth()->user()->id);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ResturantFoods  $resturantFoods
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, ResturantFoods $resturantFoods)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ResturantFoods  $resturantFoods
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, ResturantFoods $resturantFoods)
    {
        //
    }
}
