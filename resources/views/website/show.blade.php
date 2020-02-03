@extends('website.main.master')
@section('title',' student details')
@section('body')
<div class="container">
	<h2>{{$student->name}}'s Details</h2>
	
	<table class="table table-condensed">
		<thead>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Email</th>
				<th>Address</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>{{$student->id}}</td>
				<td>{{$student->name}}</td>
				<td>{{$student->email}}</td>
				<td>{{$student->address}}</td>
			</tr>
			
		</tbody>
	</table>
</div>
<button class="btn btn-warning"><a href="{{route('student.index')}}">Student List</a></button>
@endsection