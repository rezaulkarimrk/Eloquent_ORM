@extends('welcome')
@section('content')

<table class="table table-border" >
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
		</tr>
	</thead>
	<tbody>
		@foreach($phone as $row)
		<tr>
			<th>{{$row->id}}</th>
			<th>{{$row->users->name}}</th>
			<th>{{$row->users->email}}</th>
			<th>{{$row->phone}}</th>
		</tr>
		@endforeach
	</tbody>
</table>

@endsection