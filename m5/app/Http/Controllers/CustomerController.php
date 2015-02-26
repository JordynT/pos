<?php namespace App\Http\Controllers;

use DB;
use App\Models\Customer;

class CustomerController extends Controller {

	
	// public function __construct()
	// {
	// 	$this->middleware('auth');
	// }


	public function index(){


		$foo = new Customer();
		return $foo->bar();
	}

	
	public function all(){
		$customers = Customer::all();
		return view("allCustomers", ["customers" => $customers]);
	}

	public function detail($id){
		$customers = Customer::detail($id);
		return view("customerDetails", ['customer'=>$customers[0]]);
	}

	public function edit($id){
		$customers = Customer::edit($id);
		return view("editCustomer", ['customer'=>$customers[0]]);	

	}
	

}
