@extends('website.main.master')
@section('title','Student List')
@section('body')
<div class="container">
	<a href="{{route('student.create')}}" class="btn btn-primary">Add New Student</a>
	
	<table class="table">
		<thead>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Email</th>
				<th>Address</th>
				<th>Insert</th>
				<th>Update</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			@foreach($std as $student)
			<tr>
				<td>{{$student->id}}</td>
				<td>{{$student->name}}</td>
				<td>{{$student->email}}</td>
				<td>{{$student->address}}</td>
				<td>
					<a href="" class="btn btn-success">Insert</a>
					
				</td>
				<td>
					<a href="" class="btn btn-warning">Update</a>
					
				</td>
				<td>
					<a href="" class="btn btn-danger">Delete</a>
					
				</td>
				
			</tr>
			@endforeach
			
		</tbody>
	</table>
	<div class="d-flex justift-content-center align-items-center">
		<div>
			{{$std->links()}}
			
		</div>
			
		
	</div>
</div>
@endsection