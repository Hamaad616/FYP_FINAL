<?php

namespace App\Http\Controllers;

use App\Bulk;
use App\Contact;
use App\Mail\ContactMail;
use App\PersonalDetail;
use App\Category;
use App\Requests;
use App\Sales;
use App\SocialLink;
use App\Slider;
use App\Product;
use App\News;
use App\Variant;
use App\VariantValue;
use App\Image;
use App\Video;
use Cart;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use App\User;
use phpDocumentor\Reflection\Types\Integer;

class PortalController extends Controller
{

    public function __construct(){
        $this->middleware('role:User|Admin|CEO|Qualified Supplier');
    }

    public function portal()
    {
        $categories = Category::all();
        $detail     = PersonalDetail::all();
        $sociallink = SocialLink::all();
        $news = News::all();
        return view('layout.portal', compact(['sociallink','detail','categories', 'news']));
    }

    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function index_portal(Request $request){

        $detail      = PersonalDetail::first();
        $adddetails  = PersonalDetail::all();
        $categories =  Category::all();



        //return $categories[0]->products;
        $new_arrivals = Product::where('new',1)->where('status',1)->get();
        $sales        = Product::where('sale',1)->where('status',1)->get();
        $features     = Product::where('feature', 1)->where('status',1)->get();
        $category     = Product::where('category', 1)->where('status', 1)->get();
        //return $variant = $products[4]->variants;
       // return $products[4]->variants[0]->values;
       /* return $sliders;*/
       $sociallink = SocialLink::all();
       $news = News::all();
       $sliders = Slider::all();
       $cartCount = Cart::instance('default')->count();
        $wishCount = Cart::instance('wishlist')->count();
        $reqs = Requests::where('user_id', '=', Auth::user()->id)->get();
        return view('portal.index_portal', compact(['sliders','category','adddetails','new_arrivals','sociallink','reqs','features','sales','categories','detail','news', 'cartCount','wishCount']));

    }

    public function contact()
    {
        $categories = Category::all();
        $detail = PersonalDetail::first();
        $sociallink = SocialLink::all();
        $news = News::all();
        $cartCount = Cart::instance('default')->count();
        $wishCount = Cart::instance('wishlist')->count();
        $reqs = Requests::where('user_id', '=', Auth::user()->id)->get();
    	return view('portal.contact', compact(['sociallink','detail','categories', 'news','cartCount', 'reqs','wishCount']));
    }

    public function storeContact(){

        $data = new Contact();
        $data->user_id = auth()->user() ? auth()->user()->id : null;
        $data->name = request('name');
        $data->email = request('email');
        $data->subject = request('subject');
        $data->message = request('message');
        $data->phone = request('phone');
        $data->save();
        if($data->save()){
            return back()->with('success', 'Thank You for reaching us, we will reach to you shortly!');
        }
    }


    public function showproducts()
    {
        $categories =   Category::all();
        $detail     =   PersonalDetail::first();
        $sociallink =   SocialLink::all();
        $categories =   Category::all();
        $new_arrivals = Product::where('new',1)->where('status',1)->get();
        $news = News::all();
    	return view('portal.showproducts', compact(['sociallink','new_arrivals','detail','categories', 'news']));
    }

    public function product_detail($id)
    {
        $news = News::all();
        $categories = Category::all();
        $detail = PersonalDetail::first();
        $product = Product::find($id);
        $products = Product::all();
        $variants = Variant::all();
        $values = VariantValue::first();
        $images = Image::all();
        $sociallink =SocialLink::all();
        $sales = Product::where('sale',1)->where('status',1)->get();
        $cartCount = Cart::instance('default')->count();
        $wishCount = Cart::instance('wishlist')->count();
        $reqs = Requests::where('user_id', '=', Auth::user()->id)->get();
    	return view('portal.product_detail', compact(['sales','product','images','sociallink','detail','categories','products','variants','values', 'news', 'reqs','cartCount','wishCount']));
    }

    public function shoplist()
    {   $news = News::all();
        $categories = Category::all();
        $detail = PersonalDetail::first();
        $sociallink = SocialLink::all();
    	return view('portal.shoplist', compact(['sociallink','detail','categories', 'news']));
    }

    public function shop_grid()
    {
        $news = News::all();
        $detail = PersonalDetail::first();
        $sociallink = SocialLink::all();

            $categories = Category::all();
        $cartCount = Cart::instance('default')->count();
        $wishCount = Cart::instance('wishlist')->count();
        $reqs = Requests::where('user_id', '=', Auth::user()->id)->get();

        return view('portal.shop_grid', compact(['sociallink','categories','detail', 'news','cartCount','reqs', 'wishCount']));
    }

    public function shop_grid_id($id)
    {
        $news = News::all();
        $detail = PersonalDetail::first();
        $sociallink = SocialLink::all();

            $category = Category::find($id);
            $categories = Category::all();
        $cartCount = Cart::instance('default')->count();
        $wishCount = Cart::instance('wishlist')->count();
        $reqs = Requests::where('user_id', '=', Auth::user()->id)->get();
        return view('portal.shop_grid_id', compact(['sociallink','category','categories','detail', 'news','cartCount','reqs', 'wishCount']));

    }

    public function video_show()
    {
        $news = News::all();
        $categories = Category::all();
        $detail = PersonalDetail::first();
        $videos = Video::all();
        $sociallink = SocialLink::all();
        $cartCount = Cart::instance('default')->count();
        $wishCount = Cart::instance('wishlist')->count();
        $reqs = Requests::where('user_id', '=', Auth::user()->id)->get();
        return view('portal.video_show', compact(['videos','sociallink','detail', 'categories', 'news','cartCount','reqs','wishCount']));
    }


//     public function search(){

//         $q = Input::get ( 'search' );
//         $news = News::all();
//         $detail      = PersonalDetail::first();
//         $sliders     = Slider::all();
//         $adddetails  = PersonalDetail::all();
//         $categories = Category::all();

//         if(isset($q))
//         {
//             $products = Product::where('product_name','like','%'.$q.'%')->where('status',1)->get();
//         //return $variant = $products[4]->variants;
//        // return $products[4]->variants[0]->values;
//        /* return $sliders;*/

//         return view('portal.search', compact(['sliders','adddetails','sociallink','categories','detail','products','news']));

//     }
// }

        protected function userSettings($name)
    {
        $categories = Category::all();
        $user_name = User::find($name);
        $user = auth()->user();
        return view('portal.settings', compact(['categories', 'user_name', 'user']));
    }

        protected function userProileSettings()
        {
                $user = auth()->user();
                return view('portal.update_profile', compact(['user']));
        }

        protected function userRequests()
        {

            $requests = Requests::where('user_id', '=', Auth::user()->id)->get();
            $bulks = Bulk::where('user_id', '=', Auth::user()->id)->get();
            $users = auth()->user();
            return view('portal.requests', compact(['requests', 'users','bulks']));
        }

       public function showOrders()
        {
            // $orders = auth()->user()->orders; // n + 1 issues

            $orders = auth()->user()->orders()->with('products')->get(); // fix n + 1 issues

            return view('portal.showorders')->with('orders', $orders);
        }





}
