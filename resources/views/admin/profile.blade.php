@extends('admin.layout.master')
@section('content_admin')
{{--<table class="table">
	<tr>
		<td>Name</td>
		<td>{{$profile['name']}}</td>
	</tr>
	<tr>
		<td>Email</td>
		<td>{{$profile['email']}}</td>
	</tr>
	<tr>
		<td>Birthday</td>
		<td>{{$profile['birthday']}}</td>
	</tr>
	<tr>
		<td>Address</td>
		<td>{{$profile['address']}}</td>
	</tr>
	<tr>
		<td>Age</td>
		<td>{{$profile['age']}}</td>
	</tr>
</table>--}}
<pre>
	{{print_r($profile)}}
</pre>
@endsection