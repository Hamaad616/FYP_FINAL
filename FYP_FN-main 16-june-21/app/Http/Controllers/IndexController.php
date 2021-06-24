<?php

namespace App\Http\Controllers;

use App\Category;
use App\Contact;
use App\News;
use App\PersonalDetail;
use App\Product;
use App\Requests;
use App\seller_requests;
use App\SocialLink;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use App\Variant;
use App\VariantValue;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{

    public function portal()
    {
        $categories = \App\Category::all();
        $detail     = \App\PersonalDetail::first();
        $sociallink = \App\SocialLink::all();
        $news = News::all();
        return view('customer.index', compact(['sociallink','detail','categories', 'news']));
    }

    public function index_portal(Request $request){
        $detail      = \App\PersonalDetail::first();
        $sliders     = \App\Slider::all();
        $adddetails  = \App\PersonalDetail::all();
         $categories = \App\Category::all();

        //return $categories[0]->products;
        $new_arrivals = \App\Product::where('new',1)->where('status',1)->get();
        $sales        = \App\Product::where('sale',1)->where('status',1)->get();
        $features     = \App\Product::where('feature', 1)->where('status',1)->get();
        $category     = \App\Product::where('category', 1)->where('status', 1)->get();
        //return $variant = $products[4]->variants;
       // return $products[4]->variants[0]->values;
       /* return $sliders;*/
       $sociallink = \App\SocialLink::all();
       $news = News::all();
    	return view('customer.index', compact(['sliders','adddetails','new_arrivals','sociallink','features','sales','categories','detail','news']));

    }

    public function contact()
    {
        $categories = \App\Category::all();
        $detail = \App\PersonalDetail::first();
        $sociallink = \App\SocialLink::all();
        $news = News::all();
    	return view('customer.contact', compact(['sociallink','detail','categories', 'news']));
    }

    public function contactStore(Request $data)
    {
        Contact::create([

            'name' => $data['name'],
            'email' => $data['email'],
            'subject' => $data['subject'],
            'phone' => $data['phone'],
            'message' => $data['message']
        ]);

        return back()->with('success', 'Successfully sent your request to our Administration');
    }


    public function showproducts()
    {
        $categories =   \App\Category::all();
        $detail     =   \App\PersonalDetail::first();
        $sociallink =   \App\SocialLink::all();
        $categories =   \App\Category::all();
        $new_arrivals = \App\Product::where('new',1)->where('status',1)->get();
        $news = News::all();
    	return view('customer.showproducts', compact(['sociallink','new_arrivals','detail','categories', 'news']));
    }

    public function product_detail($id)
    {
        $news = News::all();
        $categories = \App\Category::all();
        $detail = \App\PersonalDetail::first();
        $product = \App\Product::find($id);
        $products = \App\Product::all();
        $variants = Variant::all();
        $values = \App\VariantValue::all();
        $images = \App\Image::all();
        $sociallink =\App\SocialLink::all();
    	return view('customer.product_detail', compact(['product','images','sociallink','detail','categories','products','variants','values', 'news']));
    }

    public function prod_detail($id)
    {
        $news = News::all();
        $categories = \App\Category::all();
        $detail = \App\PersonalDetail::first();
        $product = \App\Product::find($id);
        $products = \App\Product::all();
        $variants = Variant::all();
        $values = \App\VariantValue::all();
        $images = \App\Image::all();
        $sociallink =\App\SocialLink::all();
        return view('customer.product_detail', compact(['product','images','sociallink','detail','categories','products','variants','values', 'news']));
    }

    public function shoplist()
    {   $news = News::all();
        $categories = \App\Category::all();
        $detail = \App\PersonalDetail::first();
        $sociallink = \App\SocialLink::all();
    	return view('customer.shoplist', compact(['sociallink','detail','categories', 'news']));
    }

    public function shop_grid()
    {
        $news = News::all();
        $detail = \App\PersonalDetail::first();
        $sociallink = \App\SocialLink::all();
        $categories = \App\Category::all();
        $variants = Variant::all();
        $values = VariantValue::all();
        return view('customer.shop_grid', compact(['sociallink','categories','detail', 'news', 'variants', 'values']));
    }

    public function shop_grid_id($id)
    {
        $news = News::all();
        $detail = PersonalDetail::first();
        $sociallink = SocialLink::all();

        $category_id = Category::find($id);
        $cats = Category::all();
        return view('customer.shop_grid_id', compact(['sociallink','category_id','cats','detail', 'news']));

    }

    public function video_show()
    {
        $news = News::all();
        $categories = \App\Category::all();
        $detail = \App\PersonalDetail::first();
        $videos = \App\Video::all();
        $sociallink = \App\SocialLink::all();
        return view('customer.video_show', compact(['videos','sociallink','detail', 'categories', 'news']));
    }


    public function search($query){

        $news = News::all();
        $detail      = \App\PersonalDetail::first();
        $sliders     = \App\Slider::all();
        $adddetails  = \App\PersonalDetail::all();
         $categories = \App\Category::all();
        //return $categories[0]->products;
        $products = \App\Product::where('product_name','like','%'.$query.'%')->where('status',1)->get();
        //return $variant = $products[4]->variants;
       // return $products[4]->variants[0]->values;
       /* return $sliders;*/
       $sociallink = \App\SocialLink::all();

        return view('customer.search', compact(['sliders','adddetails','sociallink','categories','detail','products', 'news']));
    }

    public function about()
    {
        $categories = \App\Category::all();
        $detail     = \App\PersonalDetail::first();
        $sociallink = \App\SocialLink::all();
        $news = News::all();
        return view('customer.about', compact(['categories', 'detail', 'sociallink', 'news']));

    }


    public function showPage()
    {
        $categories = \App\Category::all();
        $detail     = \App\PersonalDetail::first();
        $sociallink = \App\SocialLink::all();
        $news = News::all();
        $sliders     = \App\Slider::all();
        $adddetails  = \App\PersonalDetail::all();
        return view('customer.become_seller', compact(['sliders','adddetails', 'sociallink','detail','categories', 'news']))->with('user', auth()->user());

    }

    public function saveSellerRequests(Request $request)
    {

        $req = new Requests();
        $req->user_id = auth()->user() ? auth()->user()->id : null;
        $req->name = request('name');
        $req->email = request('email');
        $req->reason = request('reason');
        $req->company_name = request('company_name');
        $req->quantity = request('quantity');
        $req->phone = request('phone');
        $file = $request->file('filename');
        $file_path = 'public/upload/';
        if(isset($file))
        {
            $file_name = $file->getClientOriginalName();

            //File::makeDirectory($file_path, $mode = 0777, true, true);

            $file->move($file_path, $file_name);

            $req->filename = $file_name;

        }
        $req->save();
        if($req->save()){
            return back()->with('success_message', 'Request sent successfully');
        }

    }



}
