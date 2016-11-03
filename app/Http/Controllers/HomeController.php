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



	 
	
  
 