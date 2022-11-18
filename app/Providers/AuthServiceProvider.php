<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\Guess;
use App\Models\User;
use App\Policies\DefaultPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        User::class => DefaultPolicy::class,
        Guess::class => DefaultPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->registerPolicies();
    }
}
