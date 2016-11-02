<?php namespace App\Http\Controllers;

use View;
use App\Product;
Use App\Categories;


class ProductsController extends Controller {

public function ShowAll() {
    $products = Product::orderBy('id')->get();

    return View::make('pages.products')
               ->with('products', $products);
}        


public function ShowProductsById($id){
    $ids = Product::with('product_images')->where('id', $id)->get()->first();

    return View::make('pages.products')
               ->with('ids', $ids);
              // dd($guidesslugs);
		}
	}
