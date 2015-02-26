@extends('layout')

@section('mainContent')
<h1>you are on {{$customer->first_name}}'s page</h1>
<form action="/customer/update/{{$customer->id}}">
	First Name:<input type="text" value="{{$customer->first_name}}">
	Last Name:<input type="text" value="{{$customer->last_name}}">
	Email: <input type="text" value="{{$customer->email}}">
	<select>
		<option value="">Female</option>
		<option value="">Male</option>
	</select>
	<button>Update</button>
</form>
<div>
	<a href="/customer/all">Cancel</a>
</div>
@endsection