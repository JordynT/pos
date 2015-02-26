<?php

namespace App\Models;
use DB;

class Invoice {
	
	public static function all(){
		$sql = '
		 SELECT customer.first_name,
		 customer.last_name,
		 invoice_id, 
		 invoice_item.item_id,
		 SUM(invoice_item.quantity * item.price) AS total 
		 FROM invoice
		 LEFT JOIN customer ON(customer.id = invoice.customer_id)
		 LEFT JOIN invoice_item ON(invoice_item.invoice_id = invoice.id)
		 LEFT JOIN item ON(item.id = invoice_item.item_id)
		 GROUP BY invoice_id
		 ';

		$invoices = DB::select($sql);
		return $invoices;
	}

	public static function getInvoiceDetail($id){
		$sql = '
			SELECT item.name, 
			price, 
			quantity, 
			(quantity*price) as total, 
			invoice_item.invoice_id as invoice_id, 
			invoice_item.item_id as item_id
			FROM invoice_item
			JOIN item ON(item.id = invoice_item.item_id)
			WHERE invoice_id = :ID
			';
		$invoice = DB::select($sql, [':ID' => $id]);
		return $invoice;
	}

	public static function newInvoice($id){
		$sql = "
			INSERT INTO invoice 
			(customer_id) VALUES (:cid)
		";

		DB::insert($sql, [':cid' => $id]);
		$pdo = DB::getPdo();
		
		$invoice_id = $pdo->lastInsertId();
		return $invoice_id;
	}


	public static function removeItem(){
		$sql = "
			DELETE
			FROM invoice_item
			WHERE invoice_id = :invoice_id
			AND item_id = :item_id
			";
		$items = DB::delete($sql, ["invoice_id" => $invoice_id, "item_id" => $item_id]);
		return $items;
	}

	public static function addItem(){
		$sql = "

		";
		$items = DB::insert($sql, );
		return $items;
	}

}