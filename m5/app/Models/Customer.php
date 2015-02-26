<?php

namespace App\Models;
use DB;

class Customer{

	
	public static function all(){	
		$sql = '
			SELECT *
			FROM customer
			';
		$customers = DB::select($sql);

		return $customers;
	}

	public static function detail($id){
		$sql = "
		SELECT * 
		FROM customer 
		WHERE id = :id
		";
		$customers = DB::select($sql , [":id"=>$id]);
		return $customers;
	}

	public static function edit($id){
		$sql = '
		SELECT * 
		FROM customer 
		WHERE id = :id
		';
		$customers = DB::select($sql, [":id"=>$id]);
		return $customers;
	}

}