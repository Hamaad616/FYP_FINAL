<?php

namespace App\Http\Controllers;

use App\Variant;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use App\VariantValue;
use Illuminate\View\View;

class VariantValueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $varval = VariantValue::all(); /*$sign means varibale */

        return view('admin.variantvalue_view', ['variant_value'=>$varval]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $variants = \App\Variant::all();
        return view('admin.variantvalue_add',['variants'=>$variants]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
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
                return redirect('variant_value')->with('success', 'VARIANT VALUE SAVED SUCCESSFULLY...!' );
            }
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
     * @param $id
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        $val = VariantValue::find($id);
        $value = VariantValue::where('id', '=', $val->id)->get();
        $variants = Variant::all();
        return view('admin.variantvalue_edit', ['value'=>$value], ['variants' => $variants]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $value = VariantValue::find($id);
        $value->variant_id = request('variant_id');
        $value->name = request('name');   /*(roll,name,address sub form ka varibales hain)*/

       if ($value->save()) {
            return redirect('variant_value')->with('success', 'RECORD SAVED SUCCESSFULLY...!' );
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
        $value = VariantValue::find($id);
        if ($value->delete())
        {
            return redirect('variant_value')->with('success', 'Variant Value Has Been Deleted...!');
        }
    }
}
