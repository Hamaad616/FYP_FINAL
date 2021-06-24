<?php

namespace App\Http\Controllers;

use App\Variant;
use App\VariantValue;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class SupplierVariantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $varval = VariantValue::all(); /*$sign means varibale */

        return view('supplier.variantvalue_view', ['variant_value'=>$varval]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $variants = \App\Variant::all();
        return view('supplier.variantvalue_add',['variants'=>$variants]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(Request $request)
    {
        $varval = VariantValue::where('name',request('name'))->first();
        if(!$varval)
        {
            $varval = new VariantValue();  /*object of product model*/
            $varval->variant_id = request('variant_id');
            $varval->name = request('name');


            if ($varval->save()) {
                return redirect('supp_variant_value')->with('success', 'VARIANT VALUE SAVED SUCCESSFULLY...!' );
            }
        }
        return back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $value = VariantValue::find($id);
        $variants = Variant::all();
        return view('supplier.variantvalue_edit', ['value'=>$value], compact(['variants']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     * @return Response
     */
    public function update($id)
    {
        $value = VariantValue::find($id);
        $value->variant_id = request('variant_id');
        $value->name = request('name');   /*(roll,name,address sub form ka varibales hain)*/

        if ($value->save()) {
            return redirect('supp_variant_value')->with('success', 'RECORD SAVED SUCCESSFULLY...!' );
        }

        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $value = VariantValue::find($id);
        if ($value->delete())
        {
            return redirect('supp_variant_value')->with('success', 'Variant Value Has Been Deleted...!');
        }
    }
}
