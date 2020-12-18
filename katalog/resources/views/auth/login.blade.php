@extends('layouts.app')

@section('content')
<div class="container py-5">
	<form class="shadow px-5 py-5">
		<h1 class="text-center font-weight-bold">Login</h1>
		<div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
				<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		</div>
		<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
		</div>
		<div class="form-check">
				<input type="checkbox" class="form-check-input" id="exampleCheck1">
				<label class="form-check-label" for="exampleCheck1">Remember me</label>
		</div>
		<button type="submit" class="btn text-white py-2 mt-2 w-100" style="background-color: #caa0d8">Login</button>
		<small id="emailHelp" class="form-text text-muted mt-">Don't have account yet? <a href="./register">Register here</a></small>

	</form>
</div>
@endsection