<?php

namespace App\Http\Controllers;

use App\Category;
use App\Image;
use App\News;
use App\PersonalDetail;
use App\Product;
use App\Requests;
use App\SocialLink;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishListController extends Controller
{
    //

    public function __construct(){
        $this->middleware('role:User|Admin|CEO|Qualified Supplier');
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
        $wishCount = Cart::instance('wishlist')->count();
        $reqs = Requests::where('user_id', '=', Auth::user()->id)->get();
        $sociallink =SocialLink::all();
        return view('portal.wishlist', compact(['images','sociallink','detail','categories','products', 'news', 'reqs','cartCount','wishCount']))->with([
            'discount' => getNumbers()->get('discount'),
            'newSubtotal' => getNumbers()->get('newSubtotal'),
            'newTax' => getNumbers()->get('newTax'),
            'newTotal' => getNumbers()->get('newTotal')
        ]);
    }

    public function store(Request $item): RedirectResponse
    {
        $duplicates = Cart::instance('wishlist')->search(function ($cartItem, $rowId) use ($item){
            return $cartItem->id == $item->id;
        });

        if($duplicates->isNotEmpty()){
            return redirect()->route('wishlist.index')->with('success_message', 'Item is already in your wishlist!');
        }

           Cart::instance('wishlist')->add($item->id, $item->name, 1, $item->price)
            ->associate(Product::class);
        return redirect()->route('wishlist.index')->with('success_message', 'Item was added to your cart!');
    }

    public function destroy($id): RedirectResponse
    {
        Cart::instance('wishlist')->remove($id);
        return back()->with("success_message", "Item Removed Successfully!");
    }
}
