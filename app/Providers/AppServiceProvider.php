<?php

namespace App\Providers;

use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\ParallelTesting;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     * Merges custom payment methods and their admin config into Bagisto's config system.
     */
    public function register(): void
    {
        // QR payment methods — merged into Bagisto's payment_methods config key
        $this->mergeConfigFrom(app_path('Config/payment-methods.php'), 'payment_methods');

        // Admin UI fields for QR payment methods — merged into Bagisto's system config
        $this->mergeConfigFrom(app_path('Config/system.php'), 'system');

        // Debugbar IP gate (existing logic)
        $allowedIPs = array_map('trim', explode(',', config('app.debug_allowed_ips', '')));
        $allowedIPs = array_filter($allowedIPs);

        if (empty($allowedIPs)) {
            return;
        }

        if (in_array(Request::ip(), $allowedIPs)) {
            Debugbar::enable();
        } else {
            Debugbar::disable();
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        ParallelTesting::setUpTestDatabase(function (string $database, int $token) {
            Artisan::call('db:seed');
        });

        // Inject QR payment panel above "Proceed to Checkout" on the cart page.
        // Fires via view_render_event('bagisto.shop.checkout.cart.summary.proceed_to_checkout.before').
        Event::listen('bagisto.shop.checkout.cart.summary.proceed_to_checkout.before', function () {
            return view('payment.cart-qr-panel')->render();
        });
    }
}
