@extends('layouts.app')

@section('content')
<div class="container py-5">
	<form class="shadow px-5 py-5">
		<h1 class="text-center font-weight-bold">Register New User</h1>
		<div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
				<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		</div>
		<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
				<label for="exampleInputPassword1">Confirm Password</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <small id="emailHelp" class="form-text text-muted">ToS</small>
		<button type="submit" class="btn text-white py-2 mt-2 w-100" style="background-color: #caa0d8">Register</button>
	</form>
</div>
@endsection