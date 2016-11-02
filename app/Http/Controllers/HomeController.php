<?php namespace App\Http\Controllers;

Use View;
Use App\Categories;
Use App\Product;



class HomeController extends Controller {

protected $layout = 'layouts.default';

	public function ShowAll()
	{
		return view('pages.home');
	}

}

 View::composer('*', function($view)
        {
        $view->with('categories', Categories::where('parent_id',NULL)->orderBy('id')->get());
        });

   View::composer(array('includes.categories'), function($view)
        {
        $view->with('categories', Categories::where('parent_id',NULL)->orderBy('id')->get());
        });

	 
	
   View::composer(array('pages.home'), function($view)
        {
        $view->with('product', Product::where('is_top','1')->orderBy('id')->get());
        });

 