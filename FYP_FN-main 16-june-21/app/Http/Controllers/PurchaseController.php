<?php

namespace App\Http\Controllers;

use App\Purchase;
use App\Sales;
use App\Vendor;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Vendor $vendor)
    {
         $purchases = Purchase::all();
         $vendors = Vendor::all();
        return view('dash.all_purchase', compact(['purchases', 'vendors']));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = \App\Category::all();
        $variants = \App\Variant::all();
        $values = \App\VariantValue::all();
        $products = \App\Product::all();
        $vendors = \App\Vendor::all();
         return view('dash.add_purchase', compact(['categories','variants','values', 'products', 'vendors']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $purchase = new Purchase();
        $purchase->vendor_id = $request->input('vendor_id');
        $purchase->vendor_name = $request->input('vendor_name');
        $purchase->amount_receive = $request->input('amount_received');
        $purchase->number_of_products = $request->input('number_of_products');
        $purchase->cost = $request->input('cost');
        $purchase->price = $request->input('price');
        $purchase->profit = ($request->input('cost') * $request->input('number_of_products')) - ($request->input('price') * $request->input('number_of_products'));

        if ($purchase->save())
        {
            return redirect('purchase')->with('success', 'Purchase Record Saved Successfully');
        }
        return back()->withInput();
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
        $purchases = Purchase::find($id);
        return view('dash.edit_purchase', ['purchases'=>$purchases]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $purchase = Purchase::find($id);
        $purchase->vendor_id = $request->input('vendor_id');
        $purchase->vendor_name = $request->input('vendor_name');
        $purchase->amount_receive = $request->input('amount_received');
        $purchase->cost = $request->input('cost');
        $purchase->profit = $request->input('profit');
        $purchase->profit = (int)$request->input('cost') - $request->input('price');

        if ($purchase->save())
        {
            return redirect('purchase')->with('success', 'Purchase Record Saved Successfully');
        }
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $purchase = Purchase::find($id);
        if ($purchase->delete())
        {
            return redirect('purchase')->with('success', 'Purchase Record Delete Successfully');
        }
    }
}
