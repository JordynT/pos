<?php namespace App\Http\Controllers;
use DB;
use App\Models\Item;

class ItemController extends Controller {

	public function all(){
		$items = Item::all();
		return view("allItems", ["items" => $items]);
	}

}