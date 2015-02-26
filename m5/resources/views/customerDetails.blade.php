@extends('layout')

@section('mainContent')
<h1>you are on {{$customer->first_name}}'s page</h1>

	<p><strong>First Name:</strong>{{$customer->first_name}}</p>
	<p><strong>Last Name:</strong> {{$customer->last_name}}</p>
	<p><strong>Email:</strong> {{$customer->email}}</p>
	<p><strong>Gender:</strong> {{$customer->gender}}</p>
	
@endsection