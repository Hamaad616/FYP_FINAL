<?php

namespace App\Http\Controllers;

use App\Bulk;
use App\Category;
use App\Image;
use App\News;
use App\Order;
use App\PersonalDetail;
use App\Product;
use App\OrderProduct;
use App\Mail\OrderPlaced;
use App\SocialLink;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\CheckoutRequest;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Coupon;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Cartalyst\Stripe\Exception\CardErrorException;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|Response|\Illuminate\View\View
     */

    public function index()
    {
        $news = News::all();
        $categories = Category::all();
        $detail = PersonalDetail::first();
        $products = Product::all();
        $images = Image::all();
        $sociallink =SocialLink::all();
        return view('portal.checkout', compact(['images','sociallink','detail','categories','products', 'news']))->with([

            'discount' => getNumbers()->get('discount'),
            'newSubtotal' => getNumbers()->get('newSubtotal'),
            'newTax' => getNumbers()->get('newTax'),
            'newTotal' => getNumbers()->get('newTotal')

        ]);
    }

    public function bulkCheckout($id)
    {

        $bulks = Bulk::all()->where('id', '=', $id);
        $bulk = Bulk::find($id);
        $prods = Product::all()->where('id', '=',  $bulk->product_id);
        $news = News::all();
        $categories = Category::all();
        $detail = PersonalDetail::first();
        $products = Product::all();
        $images = Image::all();
        $sociallink =SocialLink::all();
        return view('portal.bulkcheckout', compact(['images','sociallink','detail','categories','products', 'news','bulks','prods']))->with([

            'discount' => getNumbers()->get('discount'),
            'newSubtotal' => getNumbers()->get('newSubtotal'),
            'newTax' => getNumbers()->get('newTax'),
            'newTotal' => getNumbers()->get('newTotal')

        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param CheckoutRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CheckoutRequest $request)
    {
        // Check race condition when there are less items available to purchase
        if ($this->productsAreNoLongerAvailable()) {
            return back()->withErrors('Sorry! One of the items in your cart is no longer avialble.');
        }


        $contents = Cart::instance('default')->content()->map(function ($item) {
            return $item->model->slug.', '.$item->qty;
        })->values()->toJson();

        try {
            $charge = Stripe::charges()->create([
                'amount' => getNumbers()->get('newTotal'),
                'currency' => 'USD',
                'source' => $request->stripeToken,
                'description' => 'Order',
                'receipt_email' => $request->email,
                'metadata' => [
                    'contents' => $contents,
                    'quantity' => Cart::instance('default')->count(),
                    'discount' => collect(session()->get('coupon'))->toJson(),
                ],
            ]);

          $order =  $this->addToOrdersTables($request, null);
          Mail::send(new OrderPlaced($order));

            // decrease the quantities of all the products in the cart
            $this->decreaseQuantities();

            Cart::instance('default')->destroy();
            session()->forget('coupon');

            return redirect()->route('confirmation.index')->with('success_message', 'Thank you! Your payment has been successfully accepted!');
        } catch (CardErrorException $e) {
            $this->addToOrdersTables($request, $e->getMessage());
            return back()->withErrors('Error! ' . $e->getMessage());
        }
    }



    public function storeBulk(CheckoutRequest $request, $id)
    {



        $contents = Cart::instance('bulk')->content()->map(function ($item) use ($id) {
            return getBulkNumbers($id)->get('slug').', '.getBulkNumbers($id)->get('quantity');
        })->values()->toJson();



        try {
            $charge = Stripe::charges()->create([
                'amount' => getBulkNumbers($id)->get('newTotal'),
                'currency' => 'USD',
                'source' => $request->stripeToken,
                'description' => 'Order',
                'receipt_email' => $request->email,
                'metadata' => [
                    'contents' => $contents,
                    'quantity' => getBulkNumbers($id)->get('quantity'),
                    'discount' => collect(session()->get('coupon'))->toJson(),
                ],
            ]);

            $order =  $this->addBulkQueryToOrdersTables($request,$id, null);
            Mail::send(new OrderPlaced($order));


            Cart::instance('bulk')->destroy();
            session()->forget('coupon');

            return redirect()->route('confirmation.index')->with('success_message', 'Thank you! Your payment has been successfully accepted!');
        } catch (CardErrorException $e) {
            $this->addBulkQueryToOrdersTables($request,$id, $e->getMessage());
            return back()->withErrors('Error! ' . $e->getMessage());
        }
    }






//    public function bulkStore(CheckoutRequest $request, $id)
//    {
//        // Check race condition when there are less items available to purchase
//        if ($this->productsAreNoLongerAvailable()) {
//            return back()->withErrors('Sorry! One of the items in your cart is no longer avialble.');
//        }
//
////
////       $b_id= Bulk::find($id);
////        $contents = Product::all()->where('id', '=', $b_id->product_id)->map(function ($item, $id) {
////            $b_id= Bulk::all()->where('id', '=', $id);
////            foreach ($b_id as $bi)
////            return $item->slug.', '.$bi->quantity;
////        })->values()->toJson();
//
//        try {
//            $charge = Stripe::charges()->create([
//                'amount' => getNumbers()->get('newTotal'),
//                'currency' => 'USD',
//                'source' => $request->stripeToken,
//                'description' => 'Order',
//                'receipt_email' => $request->email
//            ]);
//
//            $order =  $this->addBulkQueryToOrdersTables($request,$id, null);
//            Mail::send(new OrderPlaced($order));
//
//            return redirect()->route('confirmation.index')->with('success_message', 'Thank you! Your payment has been successfully accepted!');
//        } catch (CardErrorException $e) {
//            $this->addBulkQueryToOrdersTables($request,$id, $e->getMessage());
//            return back()->withErrors('Error! ' . $e->getMessage());
//        }
//    }




    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
//    public function paypalCheckout(Request $request)
//    {
//        // Check race condition when there are less items available to purchase
//        if ($this->productsAreNoLongerAvailable()) {
//            return back()->withErrors('Sorry! One of the items in your cart is no longer avialble.');
//        }
//
//        $gateway = new \Braintree\Gateway([
//            'environment' => config('services.braintree.environment'),
//            'merchantId' => config('services.braintree.merchantId'),
//            'publicKey' => config('services.braintree.publicKey'),
//            'privateKey' => config('services.braintree.privateKey')
//        ]);
//
//        $nonce = $request->payment_method_nonce;
//
//        $result = $gateway->transaction()->sale([
//            'amount' => round(getNumbers()->get('newTotal') / 100, 2),
//            'paymentMethodNonce' => $nonce,
//            'options' => [
//                'submitForSettlement' => true
//            ]
//        ]);
//
//        $transaction = $result->transaction;
//
//        if ($result->success) {
//            $order = $this->addToOrdersTablesPaypal(
//                $transaction->paypal['payerEmail'],
//                $transaction->paypal['payerFirstName'].' '.$transaction->paypal['payerLastName'],
//                null
//            );
//
//            Mail::send(new OrderPlaced($order));
//
//            // decrease the quantities of all the products in the cart
//            $this->decreaseQuantities();
//
//            Cart::instance('default')->destroy();
//            session()->forget('coupon');
//
//            return redirect()->route('confirmation.index')->with('success_message', 'Thank you! Your payment has been successfully accepted!');
//        } else {
//            $order = $this->addToOrdersTablesPaypal(
//                $transaction->paypal['payerEmail'],
//                $transaction->paypal['payerFirstName'].' '.$transaction->paypal['payerLastName'],
//                $result->message
//            );
//
//            return back()->withErrors('An error occurred with the message: '.$result->message);
//        }
//    }

    protected function addToOrdersTables($request, $error)
    {
        // Insert into orders table
        $order = Order::create([
            'user_id' => auth()->user() ? auth()->user()->id : null,
            'billing_email' => $request->email,
            'billing_name' => $request->name,
            'billing_address' => $request->address,
            'billing_city' => $request->city,
            'billing_province' => $request->province,
            'billing_postalcode' => $request->postalcode,
            'billing_phone' => $request->phone,
            'billing_name_on_card' => $request->name_on_card,
            'billing_discount' => getNumbers()->get('discount'),
            'billing_discount_code' => getNumbers()->get('code'),
            'billing_subtotal' => getNumbers()->get('newSubtotal'),
            'billing_tax' => getNumbers()->get('tax'),
            'billing_total' => getNumbers()->get('newTotal'),
            'error' => $error,
        ]);

        // Insert into order_product table
        foreach (Cart::instance('default')->content() as $item) {
            OrderProduct::create([
                'order_id' => $order->id,
                'product_id' => $item->model->id,
                'quantity' => $item->qty,
            ]);
        }

        return $order;


    }

    protected function addBulkQueryToOrdersTables($request,$id, $error)
    {

        // Insert into orders table
        $or = Order::create([
            'user_id' => auth()->user() ? auth()->user()->id : null,
            'billing_email' => $request->email,
            'billing_name' => $request->name,
            'billing_address' => $request->address,
            'billing_city' => $request->city,
            'billing_province' => $request->province,
            'billing_postalcode' => $request->postalcode,
            'billing_phone' => $request->phone,
            'billing_name_on_card' => $request->name_on_card,
            'billing_discount' => getBulkNumbers($id)->get('discount'),
            'billing_discount_code' => getBulkNumbers($id)->get('code'),
            'billing_subtotal' => getBulkNumbers($id)->get('newSubtotal'),
            'billing_tax' => getBulkNumbers($id)->get('tax'),
            'billing_total' => getBulkNumbers($id)->get('newTotal'),
            'error' => $error,
        ]);

        // Insert into order_product table
        foreach (Cart::instance('bulk')->content() as $item) {
            OrderProduct::create([
                'order_id' => $or->id,
                'product_id' => getBulkNumbers($id)->get('product_id'),
                'quantity' => getBulkNumbers($id)->get('quantity'),
            ]);
        }

        return $or;


    }



    protected function addToOrdersTablesPaypal($email, $name, $error)
    {
        // Insert into orders table
        $order = Order::create([
            'user_id' => auth()->user() ? auth()->user()->id : null,
            'billing_email' => $email,
            'billing_name' => $name,
            'billing_discount' => getNumbers()->get('discount'),
            'billing_discount_code' => getNumbers()->get('code'),
            'billing_subtotal' => getNumbers()->get('newSubtotal'),
            'billing_tax' => getNumbers()->get('newTax'),
            'billing_total' => getNumbers()->get('newTotal'),
            'error' => $error,
            'payment_gateway' => 'paypal',
        ]);

        // Insert into order_product table
        foreach (Cart::content() as $item) {
            OrderProduct::create([
                'order_id' => $order->id,
                'product_id' => $item->model->id,
                'quantity' => $item->qty,
            ]);
        }

        return $order;
    }

    protected function decreaseQuantities()
    {
        foreach (Cart::content() as $item) {
            $product = Product::find($item->model->id);

            $product->update(['quantity' => $product->quantity - $item->qty]);
        }
    }

    protected function productsAreNoLongerAvailable()
    {
        foreach (Cart::content() as $item) {
            $product = Product::find($item->model->id);
            if ($product->quantity < $item->qty) {
                return true;
            }
        }

        return false;
    }

    protected function bulkProductsAreNoLongerAvailable()
    {
        return false;
    }
}
