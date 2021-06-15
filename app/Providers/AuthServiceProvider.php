<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Models\Post;
use App\Policies\PostPolicy;
use Illuminate\Support\Facades\Auth;
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        Post::class=>PostPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

      Gate::define('store-category',function(User $user){
        return Auth::user()->role === 'admin' ;
      });
      Gate::define('update-category',function(User $user){
        return Auth::user()->role === 'admin' ;
      });
      Gate::define('destroy-category',function(User $user){
        return Auth::user()->role === 'admin' ;
      });
    }
}
