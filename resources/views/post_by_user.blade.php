@extends('welcome')
@section('content')
<h1>Rezaul All Posts</h1>

<table class="table table-border" >
	<thead>
		<tr>
			<th>ID</th>
			<th>Category</th>
			<th>Name</th>
			<th>Title</th>
		</tr>
	</thead>
	<tbody>
		@foreach($posts as $row)
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