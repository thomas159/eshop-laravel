<?php namespace App\Http\Controllers;

use View;

/*
class GuidesController extends Controller {

public function ShowAll() {
    $categorys = Guide::orderBy('id')->get();

    return View::make('pages.nav')
               ->with('categorys', $categorys);
}        


public function ShowByGuidesSlug($guidesslug){
    $guidesslugs = Guide::where('guidesslug', $guidesslug)->get()->first();


    return View::make('pages.guides')
               ->with('guidesslugs', $guidesslugs);
               dd($guidesslugs);
		}
	}
