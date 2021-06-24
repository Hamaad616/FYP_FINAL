<?php

namespace App\Http\Controllers;
use App\Category;
use App\News;
use App\Order;
use App\PersonalDetail;
use App\Requests;
use App\Slider;
use App\SocialLink;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Cart;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|Response|View
     */
    public function index()
    {

        $orders = auth()->user()->orders()->with('products')->get();

        return view('portal.my-orders')->with('orders', $orders);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Order $id
     * @return Application|Factory|RedirectResponse|View
     */
    public function show(Order $id)
    {
        if (auth()->id() !== $id->user_id) {
            return back()->withErrors('You do not have access to this!');
        }

        $products = $id->products;

        return view('portal.my-order')->with([
            'order' => $id,
            'products' => $products,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function trackOrder(){

        $categories = Category::all();
        $detail = PersonalDetail::first();
        $sociallink = SocialLink::all();
        $crousle = Slider::all();
        $news = News::all();
        $latest_time = Carbon::now();
        $orders = auth()->user()->orders()->with('products')->get();
        $cartCount = Cart::instance('default')->count();
        $reqs = Requests::where('user_id', '=', Auth::user()->id)->get();
        return view('portal.tracking', compact(['categories', 'detail','sociallink','news','orders','crousle', 'latest_time','cartCount','reqs']));
    }


}
