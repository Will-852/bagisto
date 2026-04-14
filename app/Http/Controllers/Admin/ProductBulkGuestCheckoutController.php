<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Webkul\Attribute\Models\Attribute;
use Webkul\Core\Models\CoreConfig;
use Webkul\Product\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductBulkGuestCheckoutController extends Controller
{
    /**
     * Show the bulk guest checkout management page.
     */
    public function index()
    {
        if (! bouncer()->hasPermission('catalog.products.guest-checkout')) {
            abort(403);
        }

        $guestAttr    = Attribute::where('code', 'guest_checkout')->first();
        $globalConfig = CoreConfig::where('code', 'sales.checkout.shopping_cart.allow_guest_checkout')->first();

        $globalEnabled = $globalConfig?->value == 1;

        // Per-product status
        $products = Product::with(['attribute_values'])->get()->map(function ($product) use ($guestAttr) {
            $attrValue = DB::table('product_attribute_values')
                ->where('product_id', $product->id)
                ->where('attribute_id', $guestAttr?->id)
                ->value('boolean_value');

            return [
                'id'            => $product->id,
                'sku'           => $product->sku,
                'name'          => $product->name ?? $product->sku,
                'guest_enabled' => (bool) $attrValue,
            ];
        });

        return view('admin.bulk-guest-checkout', compact('globalEnabled', 'products'));
    }

    /**
     * Bulk toggle guest checkout for all products.
     */
    public function bulkUpdate(Request $request)
    {
        if (! bouncer()->hasPermission('catalog.products.guest-checkout')) {
            abort(403);
        }

        $enable = (bool) $request->input('enable', 1);

        $guestAttr = Attribute::where('code', 'guest_checkout')->first();

        if (! $guestAttr) {
            return back()->with('error', 'guest_checkout attribute not found.');
        }

        $products = Product::all();
        foreach ($products as $product) {
            DB::table('product_attribute_values')->updateOrInsert(
                ['product_id' => $product->id, 'attribute_id' => $guestAttr->id],
                ['boolean_value' => $enable ? 1 : 0, 'channel' => null, 'locale' => null]
            );
        }

        // Also sync the global config
        CoreConfig::updateOrCreate(
            ['code' => 'sales.checkout.shopping_cart.allow_guest_checkout', 'channel_code' => 'default', 'locale_code' => null],
            ['value' => $enable ? 1 : 0]
        );

        $msg    = $enable ? '已為全部 ' . $products->count() . ' 件產品開啟訪客結帳' : '已為全部 ' . $products->count() . ' 件產品關閉訪客結帳';
        $action = $enable ? 'enabled' : 'disabled';

        return back()->with('success', $msg);
    }

    /**
     * Toggle a single product's guest checkout.
     */
    public function toggleProduct(Request $request, int $productId)
    {
        if (! bouncer()->hasPermission('catalog.products.guest-checkout')) {
            return response()->json(['success' => false, 'message' => 'Unauthorized.'], 403);
        }

        $guestAttr = Attribute::where('code', 'guest_checkout')->first();

        if (! $guestAttr) {
            return response()->json(['success' => false, 'message' => 'guest_checkout attribute not found.'], 422);
        }

        $current = DB::table('product_attribute_values')
            ->where('product_id', $productId)
            ->where('attribute_id', $guestAttr->id)
            ->value('boolean_value');

        $newValue = $current ? 0 : 1;

        DB::table('product_attribute_values')->updateOrInsert(
            ['product_id' => $productId, 'attribute_id' => $guestAttr->id],
            ['boolean_value' => $newValue, 'channel' => null, 'locale' => null]
        );

        return response()->json([
            'success'  => true,
            'enabled'  => (bool) $newValue,
            'message'  => $newValue ? '已開啟' : '已關閉',
        ]);
    }
}
