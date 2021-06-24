<?php

namespace App\Http\Controllers;


use App\Variant;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $variant = Variant::all(); /*$sign means varibale */
        return view('supplier.supplier_all_variants', ['variants'=>$variant]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('supplier.supplier_add_variants');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $variant = new Variant();  /*object of product model*/

        $variant->name = request('name');   /*(roll,name,address sub form ka varibales hain)*/

        if ($variant->save()) {
            return redirect('supplier')->with('success', 'VARIANT SAVED SUCCESSFULLY...!' );
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
        //return $variant;
        $variant = Variant::find($id);
        return view('supplier.supplier_variant_edit')->with('variant',$variant);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(int $id)
    {
        $variant = Variant::find($id);
        $variant->name = request('name');   /*(roll,name,address sub form ka varibales hain)*/

        if ($variant->save()) {
            return redirect('supplier')->with('success', 'RECORD SAVED SUCCESSFULLY...!' );
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
        $variant = Variant::find($id);
        if ($variant->delete()) {
            return redirect('supplier')->with('success', 'Variant Has Been Deleted...!');
        }
    }
}
