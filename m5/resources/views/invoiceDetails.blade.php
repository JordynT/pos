@extends('layout')

@section('mainContent')

<h1>Invoice Details</h1>

<table border=1>
	<th>Quantity</th>
	<th>Item</th>
	<th>Price</th>
	<th>Sub-total</th>
	<th>Remove</th>
		@foreach($invoice as $row)
			<tr><td>{{$row->quantity}}</td>
			<td>{{$row->name}}</td>
			<td>{{$row->price}}</td>
			<td>{{$row->total}}</td>
			<td><a href="/invoice/{{$row->item_id}}/remove">Remove</a></td></tr>
		@endforeach	
		<tr></tr>
		<tr></tr>
		<tr>
			<th>Total</th>
			<td></td>
			<td></td>
			<td>{{$subtotal}}</td>
		</tr>
</table>
<form action="" method="POST">
Quantity:<input type="number" min=0 name="quantity">
<select>
	@foreach($items as $item)
		<option value="{{$item->id}}" name="{{$item->name}}">{{$item->name}}</option>
	@endforeach
</select>
<button>Add</button>
</form>
@endsection