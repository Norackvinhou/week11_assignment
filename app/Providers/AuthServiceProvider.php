<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Models\Post;
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('store-categories', function(User $user){
            return Auth::user()->role === "admin" ; 
        });
        Gate::define('update-categories', function(User $user){
            return Auth::user()->role === "admin" ; 
        });
        Gate::define('delete-categories', function(User $user){
            return Auth::user()->role === "admin" ; 
        });
    }
}
