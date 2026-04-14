<?php

use App\Http\Controllers\Admin\ProductBulkGuestCheckoutController;
use Illuminate\Support\Facades\Route;
use Webkul\Core\Http\Middleware\NoCacheMiddleware;

/*
|--------------------------------------------------------------------------
| Custom Admin Routes
|--------------------------------------------------------------------------
| Extends Bagisto admin without modifying core package files.
| Middleware 'admin' = BouncerMiddleware (Bagisto admin auth).
*/

Route::group([
    'middleware' => ['web', 'admin', NoCacheMiddleware::class],
    'prefix'     => config('app.admin_url'),
], function () {

    // Bulk Guest Checkout Management
    Route::get(
        '/catalog/products/guest-checkout',
        [ProductBulkGuestCheckoutController::class, 'index']
    )->name('admin.products.guest-checkout.index');

    Route::post(
        '/catalog/products/guest-checkout/bulk',
        [ProductBulkGuestCheckoutController::class, 'bulkUpdate']
    )->name('admin.products.guest-checkout.bulk');

    Route::post(
        '/catalog/products/{productId}/guest-checkout/toggle',
        [ProductBulkGuestCheckoutController::class, 'toggleProduct']
    )->name('admin.products.guest-checkout.toggle');
});
