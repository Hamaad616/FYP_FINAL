<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class SupplierCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all(); /*$sign means varibale */
        return view('supplier.category_all', ['categories'=>$category]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supplier.category_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $cat = new Category();  /*object of product model*/

        $cat->name = request('category');
        $cat->article = request('article');

        if ($cat->save()) {
            return redirect('SupplierCategory')->with('success', 'CATEGORY RECORD SAVED SUCCESSFULLY...!' );
        }

        return back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('supplier.category_edit', ['category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $category = Category::find($id);

        $category->name = request('category');

        if ($category->save())
        {
            return redirect('SupplierCategory')->with('success', 'Category RECORD SAVED SUCCESSFULLY...!' );
        }
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        if ($category->delete())
        {
            return redirect('SupplierCategory')->with('success', 'Category Record Has Been Deleted...!');
        }
    }
}
