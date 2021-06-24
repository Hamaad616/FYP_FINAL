<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
class NewsController extends Controller
{
	public function index()
	{
		$news = News::all();
		return view('admin.all_news', ['news'=>$news]);
	}

	public function create(){
	    return view('admin.news');
    }
    public function store(Request $request){

    	$news = new News();

    	$news->news = request('news');

    	if ($news->save())
    	{
    		return redirect('news')->with('success', 'News record saved successfully');
    	}
    	return back()->withInput();
    }

    public function destroy(News $news)
    {
    	if ($news->delete())
    	{
    		return redirect('news')->with('success', 'Record Delete successfully');
    	}
    }
}
