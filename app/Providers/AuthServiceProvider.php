<?php

namespace App\Providers;



use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

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

        Gate::define('is_admin', function (User $user) {
            return $user->hasAnyRole(['admin']);
        });
        Gate::define('is_commercial', function (User $user) {
            return $user->hasAnyRole(['commercial']);
        });

        Gate::define('is_admin_commercial', function (User $user) {
            return $user->hasAnyRole(['admin','commercial']);
        });

        Gate::define('is_particulier', function (User $user) {
            return $user->hasAnyRole(['particulier']);
        });

        Gate::define('is_pro', function (User $user) {
            return $user->hasAnyRole(['pro']);
        });
        
    }
}
