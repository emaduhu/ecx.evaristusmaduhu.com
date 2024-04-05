<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\Participant;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //Permission | Simple Role
        //Role
        Gate::define('admin', function (User $user):bool{
            Log::info($user->is_admin);
            return (bool) $user->is_admin;
        });

        //Permission
        Gate::define('participant.delete', function (User $user):bool{
            return (bool) $user->is_admin;
        });

        //Permission
        Gate::define('participant.edit', function (User $user):bool{
            return (bool)$user->is_admin;
        });
    }
}
