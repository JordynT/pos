<?php



Route::get('/', function(){
	return view('home');
});

Route::get('/customer/all', 'CustomerController@all' );

Route::get('/customer', 'CustomerController@index');

Route::get('/customer/edit/{id}', 'CustomerController@edit');

Route::get('/customer/update/{id}', 'CustomerController@update');

Route::get('/customer/{id}', 'CustomerController@detail');

Route::get('/customer/{id}/newinvoice', 'InvoiceController@newInvoice');

Route::get('/item/all', 'ItemController@all');

Route::get('/invoice/all', 'InvoiceController@all');

Route::get('/invoice/detail/{invoice_id}', 'InvoiceController@detail');
 
Route::get('/invoice/{item_id}/remove', 'InvoiceController@removeItem');



// Route::get('/customer')

// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);
