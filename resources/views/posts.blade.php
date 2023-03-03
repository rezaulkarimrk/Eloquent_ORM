@extends('welcome')
@section('content')

<div>
	<ol>
		@php
		$user = App\Models\User::all()
		@endphp
		@foreach($user as $row)
		<li>{{$row->name}}</li>
		@endforeach
	</ol>
	
</div>

<table class="table table-border" >
	<thead>
		<tr>
			<th>ID</th>
			<th>Category</th>
			<th>Name</th>
			<th>Phone</th>
		</tr>
	</thead>
	<tbody>
		@foreach($post as $row)
		<tr>
			<th>{{$row->id}}</th>
			<th>{{$row->category->category_name}}</th>
			<th>{{$row->user->name}}</th>
			<th>{{$row->title}}</th>
		</tr>
		@endforeach
	</tbody>
</table>

@endsection