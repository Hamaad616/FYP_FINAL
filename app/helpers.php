<?php

use App\Bulk;
use Gloudemans\Shoppingcart\Facades\Cart;

use Carbon\Carbon;

function currentPrice($price): string
{
    return number_format($price/100 , 2, '.', ',' );
}

function presentDate($date)
{
    return Carbon::parse($date)->format('M d, Y');
}


function getNumbers()
{
    $tax = config('cart.tax')/ 100;;
    $discount = session()->get('coupon')['discount'] ?? 0;
    $code = session()->get('coupon')['name'] ?? null;
    $newSubtotal = (Cart::instance('default')->subtotal() - $discount);

    $newTax = $newSubtotal * $tax;
    $newTotal = $newSubtotal * (1 + $tax);

    return collect([
        'tax' => $tax,
        'discount' => $discount,
        'code' => $code,
        'newSubtotal' => $newSubtotal,
        'newTax' => $newTax,
        'newTotal' => $newTotal,
    ]);
}



function getBulkNumbers($id)
{
    $b_id = \App\Bulk::all()->where('id', '=', $id);
    $bid = Bulk::find($id);
    $p_id = \App\Product::all()->where('id', '=',$bid->product_id);
    foreach ($b_id as $bulk)
        foreach ($p_id as $product)
    $tax = config('cart.tax')/ 100;
        $Subtotal = (($bulk->quantity)*($bulk->desired_amount));
    $discount = session()->get('coupon')['discount'] ?? 0;
    $code = session()->get('coupon')['name'] ?? null;
    $newSubtotal = ((($bulk->quantity)*($bulk->desired_amount)) - $discount);
    $newTax = $newSubtotal * $tax;
    $newTotal = $newSubtotal * (1 + $tax);
    $quantity = $bulk->quantity;
    $slug = $product->slug;
    $product_id = $product->id;





    return collect([
        'tax' => $tax,
        'discount' => $discount,
        'code' => $code,
        'Subtotal'=>$Subtotal ,
        'newSubtotal' => $newSubtotal,
        'newTax' => $newTax,
        'newTotal' => $newTotal,
        'quantity'=>$quantity,
        'b_id'=>$b_id,
        'slug'=>$slug,
        'product_id'=>$product_id
    ]);
}


function getStockLevel($quantity)
{
    if ($quantity > setting('site.stock_threshold', 5)) {
        $stockLevel = '<div class="badge badge-success">In Stock</div>';
    } elseif ($quantity <= setting('site.stock_threshold', 5) && $quantity > 0) {
        $stockLevel = '<div class="badge badge-warning">Low Stock</div>';
    } else {
        $stockLevel = '<div class="badge badge-danger">Not available</div>';
    }

    return $stockLevel;
}
