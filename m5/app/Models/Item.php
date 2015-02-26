<?php

namespace App\Models;
use DB;

class Item{
	
	public static function all(){
		$sql = "
			SELECT *
			FROM item
			";
		$items = DB::select($sql);

		return $items;

	}

}