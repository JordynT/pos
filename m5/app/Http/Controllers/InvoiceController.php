<?php namespace App\Http\Controllers;
use DB;
use App\Models\Invoice;
use App\Models\Item;

class InvoiceController extends Controller {
	
	public function all(){
		$invoices = Invoice::all();
		return view('allInvoices', ['invoices' => $invoices]);
	}

	public function detail($id){
		$invoice = Invoice::getInvoiceDetail($id);
		$subtotal = 0;
		foreach($invoice as $row){
			$subtotal += $row->total;
		}

		$items = Item::all();
		return view('invoiceDetails', ['invoice' => $invoice, "subtotal" => $subtotal, "items" => $items]);
	}

	public function newInvoice($id){
		$invoice_id = Invoice::newInvoice($id);
		return redirect('invoice/detail/' . $invoice_id);
	}

	

}