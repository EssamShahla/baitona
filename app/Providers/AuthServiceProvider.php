<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
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

        // Register permissions
        Gate::before(function ($user) {
            foreach ($user->roles as $role) {
                foreach ($role->permissions as $permission) {
                    Gate::define($permission->name, function ($user) use ($permission) {
                        return $user->hasPermissionTo($permission);
                    });
                }
            }
        });
    }
}
