@extends('website.main.master')
@section('title','Add new student')
@section('body')
<button class="btn btn-warning"><a href="{{route('student.index')}}">Back</a></button>
<div class="row">
	<div class="col-sm-2"></div>
	<div class="col-sm-6">
		
		<form class="form-horizontal" role="form" method="post" action="">
			<div class="form-group">
				<label class="control-label col-sm-2" >Name:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control"  placeholder="Enter Fullname" name="name">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" >Email:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control"  placeholder="Enter Email" name="email">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" >Address:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control"  placeholder="Enter Address" name="address">
				</div>
			</div>
			
			
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-success" name="submit">Submit</button>
				</div>
			</div>
		</form>
		<div class="col-sm-4"></div>
	</div>
	@endsection