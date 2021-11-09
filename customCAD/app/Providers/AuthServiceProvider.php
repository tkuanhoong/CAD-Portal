<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\Response;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('admin-panel', function($user){
            return $user->hasRole('admin') 
                    ? Response::allow()
                    : Response::deny('You must be an admin to access this page');
        });
        Gate::define('manage-users', function($user){
            return $user->hasRole('admin') 
                    ? Response::allow()
                    : Response::deny('You must be an admin to access this page');
        });
        Gate::define('edit-users', function($user){
            return $user->hasRole('admin') 
                    ? Response::allow()
                    : Response::deny('You must be an admin to access this page');
        });
        Gate::define('delete-users', function($user){
            return $user->hasRole('admin') 
                    ? Response::allow()
                    : Response::deny('You must be an admin to access this page');
        });
        Gate::define('manage-events', function($user){
            return $user->hasRole('admin') 
                    ? Response::allow()
                    : Response::deny('You must be an admin to access this page');
        });
        Gate::define('manage-contacts', function($user){
            return $user->hasRole('admin') 
                    ? Response::allow()
                    : Response::deny('You must be an admin to access this page');
        });
        Gate::define('manage-pages', function($user){
            return $user->hasRole('admin') 
                    ? Response::allow()
                    : Response::deny('You must be an admin to access this page');
        });
    }
}
