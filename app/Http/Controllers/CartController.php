<?php

namespace App\Http\Controllers;

use App\Bulk;
use App\Category;
use App\Image;
use App\News;
use App\PersonalDetail;
use App\Product;
use App\Requests;
use App\Slider;
use App\SocialLink;
use App\Variant;
use App\VariantValue;
use Gloudemans\Shoppingcart\Facades\Cart;
use http\Env\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Coupon;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return string
     */



    public function __construct(){
        $this->middleware('role:User|Admin|CEO|Qualified Supplier');
    }

    public function portal()
    {

//        $categories = Category::all();
//        $detail     = PersonalDetail::all();
//        $sociallink = SocialLink::all();
//        $news = News::all();
//        return view('layout.portal', compact(['adddetails', 'sociallink','detail','categories', 'news']));
    }


    public function index()
    {
//        dd(Cart::content(), getNumbers()->get('discount'),getNumbers()->get('newSubtotal'),getNumbers()->get('newTax'),getNumbers()->get('newTotal'));
        $news = News::all();
        $categories = Category::all();
        $detail = PersonalDetail::first();
        $products = Product::all();
        $images = Image::all();
        $cartCount = Cart::instance('default')->count();
        $reqs = Requests::where('user_id', '=', Auth::user()->id)->get();
        $sociallink =SocialLink::all();
        return view('portal.cart', compact(['images','sociallink','detail','categories','products', 'news', 'reqs','cartCount']))->with([
            'discount' => getNumbers()->get('discount'),
            'newSubtotal' => getNumbers()->get('newSubtotal'),
            'newTax' => getNumbers()->get('newTax'),
            'newTotal' => getNumbers()->get('newTotal')
        ]);
    }

    public function indexBulk($id)
    {
        $bulks = Bulk::all()->where('id', '=', $id);
        $b_id = Bulk::find($id);
        $p_id = Product::all()->where('id', '=', $b_id->product_id);

        $news = News::all();
        $categories = Category::all();
        $detail = PersonalDetail::first();
        $products = Product::all();
        $images = Image::all();
        $cartCount = Cart::instance('default')->count();
        $reqs = Requests::where('user_id', '=', Auth::user()->id)->get();
        $sociallink =SocialLink::all();
        return view('portal.cart_bulk', compact(['images','sociallink','detail','categories','products', 'news', 'reqs','cartCount','bulks','p_id']))->with([
            'discount' => getBulkNumbers($id)->get('discount'),
            'newSubtotal' => getBulkNumbers($id)->get('newSubtotal'),
            'newTax' => getBulkNumbers($id)->get('newTax'),
            'newTotal' => getBulkNumbers($id)->get('newTotal')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $item
     * @return RedirectResponse
     */
    public function store(Request $item): RedirectResponse
    {
        $duplicates = Cart::instance('default')->search(function ($cartItem, $rowId) use ($item){
            return $cartItem->id == $item->id;
        });

        if($duplicates->isNotEmpty()){
            return redirect()->route('cart.index')->with('success_message', 'Item is already in your cart!');
        }

        Cart::instance('default')->add($item->id, $item->name, 1, $item->price)
            ->associate(Product::class);

        return redirect()->route('cart.index')->with('success_message', 'Item was added to your cart!');
    }


    public function storeBulk(Request $item,$id): RedirectResponse
    {
        $bulks = Bulk::all()->where('id', '=', $id);
        $b_id = Bulk::find($id);
        $p_id = Product::all()->where('id', '=', $b_id->product_id);

        $duplicates = Cart::instance('bulk')->search(function ($cartItem, $rowId) use ($item){
            return $cartItem->id == $item->id;
        });

        if($duplicates->isNotEmpty()){
            return redirect()->back()->with('success_message', 'Item is already in your cart!');
        }

        Cart::instance('bulk')->add($item->id, $item->name, 1, $item->amount_desired)
            ->associate(Product::class);


            return redirect()->route('bulk.index')->with('success_message', 'Item was added to your cart!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $id
     * @return JsonResponse
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'quantity' => 'required|numeric|between:1,5'
        ]);

        if ($validator->fails()) {
            session()->flash('errors', collect(['Quantity must be between 1 and 5.']));
            return response()->json(['success' => false], 400);
        }

        if ($request->quantity > $request->productQuantity) {
            session()->flash('errors', collect(['We currently do not have enough items in stock.']));
            return response()->json(['success' => false], 400);
        }

        Cart::update($id, $request->quantity);

        session()->flash('success_message', 'Quantity was updated successfully!');
        return response()->json(['success' => true]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        Cart::instance('default')->remove($id);
        return back()->with("success_message", "Item Removed Successfully!");
    }

    public function bulkDestroy($id)
    {
        Cart::instance('bulk')->remove($id);
        return back()->with("success_message", "Item Removed Successfully!");
    }


    /**
     * Switch items for shopping cart to Save for later
     *
     *
     * @param $id
     * @return RedirectResponse
     */
    public function SaveForLater($id): RedirectResponse
    {
        $item = Cart::get($id);
        Cart::remove($id);
        $duplicates = Cart::instance('saveForLater')->search(function ($cartItem, $rowId) use ($id){
            return $rowId == $id;
        });

        if($duplicates->isNotEmpty()){
            return redirect()->route('cart.index')->with('success_message', 'Item is already saved for Later!');
        }

        Cart::instance('saveForLater')->add($item->id, $item->name, 1, $item->price)->associate(Product::class);
        return redirect()->route('cart.index')->with('success_message', 'Item was saved for Later!');
    }

    public function BulkSaveForLater($id): RedirectResponse
    {
        $item = Cart::get($id);
        Cart::remove($id);
        $duplicates = Cart::instance('saveForLater')->search(function ($cartItem, $rowId) use ($id){
            return $rowId == $id;
        });

        if($duplicates->isNotEmpty()){
            return redirect()->route('bulk.index')->with('success_message', 'Item is already saved for Later!');
        }

        Cart::instance('saveForLater')->add($item->id, $item->name, 1, $item->price)->associate(Product::class);
        return  redirect()->back()->with('success_message', 'Item was saved for Later!');

    }

}
