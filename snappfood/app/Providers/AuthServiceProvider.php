<?php

namespace App\Providers;

use App\Models\admin\Discounts;
use App\Models\admin\FoodsCategory;
use App\Models\admin\ResturantCategory;
use App\Models\Team;
use App\Policies\TeamPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Policies\DiscountsPolicy;
use App\Policies\FoodsCategoryPolicy;
use App\Policies\RestaurantCategoryPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Team::class => TeamPolicy::class,
        Discounts::class => DiscountsPolicy::class,
        FoodsCategory::class=>FoodsCategoryPolicy::class,
        ResturantCategory::class=>RestaurantCategoryPolicy::class,

    ];

    /**
    * Register any authentication / authorization services.
    *
    * @return void
    */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('restautant_not_confirm_inforamtion',fn(User $user)=> $user->role and $user->checkprofile_resturant==0);
        Gate::define('is_restaurant',fn(User $user)=> $user->role and $user->checkprofile_resturant);
        Gate::define('is_admin',fn(User $user)=> $user->isAdmin);
    }
}
