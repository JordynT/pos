@extends('layout')

@section('mainContent')
	<table border=2>
		<th>Details</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>New Invoice</th>
		<th>Edit</th>
		<th>Remove</th>
		@foreach($customers as $customer)
			<tr><td><a href="/customer/{{$customer->id}}">{{$customer->id}}</a></td>
			<td>{{$customer->first_name}}</td>
			<td>{{$customer->last_name}}</td>
			<td><a href="/customer/{{$customer->id}}/newinvoice">New Invoice</a></td>
			<td><a href="/customer/edit/{{$customer->id}}">Edit</a></td>
			<td><a href="#">Remove</a></td></tr>
		@endforeach
	</table>
	<div>
	<a href="#">Add new Customer</a>
	</div>
@endsection