<?php

namespace App\Providers;

use App\Models\Team;
use App\Models\User;
use App\Policies\TeamPolicy;
use App\Models\admin\Discounts;
use App\Policies\DiscountsPolicy;
use App\Models\admin\FoodsCategory;
use Illuminate\Support\Facades\Gate;
use App\Policies\FoodsCategoryPolicy;
use App\Policies\ResturantFoodPolicy;
use App\Models\admin\ResturantCategory;
use App\Policies\RestaurantownerPolicy;
use App\Policies\RestaurantCategoryPolicy;
use App\Models\resturantowner\ResturantFoods;
use App\Policies\ReportAdminControllerPolicy;
use App\Models\resturantowner\Restaurantowner;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

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
        Restaurantowner::class=>RestaurantownerPolicy::class,
        ResturantFoods::class=>ResturantFoodPolicy::class,
        User::class=>ReportAdminControllerPolicy::class,

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
