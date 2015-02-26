@extends('layout')

@section('mainContent')
	<h1>Invoices</h1>
	<table border=2>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Total</th>
		<th>Details</th>
		@foreach($invoices as $invoice)
		<tr><td>{{$invoice->first_name}}</td>
		<td>{{$invoice->last_name}}</td>
		<td>{{$invoice->total}}</td>
		<td><a href="/invoice/detail/{{$invoice->invoice_id}}">Details</a></td></tr>
		@endforeach

	</table>
@endsection