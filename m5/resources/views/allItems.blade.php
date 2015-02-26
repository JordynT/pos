@extends('layout')


@section('mainContent')
	<table border=2>
		<th>Name</th>
		<th>Price</th>
		<th>Edit</th>
		<th>Remove</th>
	@foreach($items as $item)
	<tr><td>{{$item->name}}</td>
	<td>{{$item->price}}</td>
	<td><a href="#">Edit</a></td>
	<td><a href="#">Remove</a></td></tr>
	@endforeach
		

	</table>	
			
	<div>
		<a href="#"> Add new Item</a>
	</div>
@endsection