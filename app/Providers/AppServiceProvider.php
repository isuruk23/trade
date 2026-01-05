<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::if('kycPending', function () {
        $user = auth()->user();

        // Only check for logged-in non-admin users
        if (!$user || $user->role === 'admin') {
            return false; // Admins are never blocked
        }

        // KYC missing OR pending OR null status → blocked
        return !$user->kyc || $user->kyc->status === null || $user->kyc->status === 'pending';
    });
    }
}
