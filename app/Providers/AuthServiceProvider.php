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

        Gate::define('manage-users', function (User $user) {
            return $user->hasAnyRole(['admin']);
        });

        Gate::define('edit-users', function (User $user) {
            return $user->hasAnyRole(['admin', 'vendeur']);
        });

        Gate::define('is_admin', function (User $user) {
            return $user->isAdmin();
        });

        Gate::define('is_particulier', function (User $user) {
            return $user->hasAnyRole(['particulier', 'admin']);
        });

        Gate::define('is_pro', function (User $user) {
            return $user->hasAnyRole(['pro', 'admin']);
        });
    }
}
