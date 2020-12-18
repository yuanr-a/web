@extends('layouts.app')

@section('content')
<div class="container py-5">
	<form>
  		<div class="shadow px-5 py-5">
			<h5>Basic Information</h5>
			<div class="form-row">
  			  <div class="form-group col-md-6">
  			    <label for="inputEmail4">First Name</label>
  			    <input type="email" class="form-control"  placeholder="First Name">
				 </div>
				 <div class="form-group col-md-6">
  			    <label for="inputEmail4">Last Name</label>
  			    <input type="email" class="form-control"  placeholder="Last Name">
  			  </div>
  			</div>
			<div class="form-group">
  		  		<label for="inputAddress2">Phone Number</label>
  		  		<input type="number" class="form-control" id="inputAddress2">
  			</div>
		</div>
		<div class="border px-5 py-5 mt-5">
			<h5>Login Credentials</h5>
			<div class="form-group">
  		  		<label for="inputAddress2">Email</label>
  		  		<input type="email" class="form-control" id="inputAddress2" placeholder="Email">
  			</div>
		  	<div class="form-row">
  			  <div class="form-group col-md-6">
  			    <label for="inputEmail4">Password</label>
  			    <input type="password" class="form-control" placeholder="Password">
  			  </div>
  			  <div class="form-group col-md-6">
  			    <label for="inputPassword4">Confirm Password</label>
  			    <input type="password" class="form-control" id="inputPassword4" placeholder="Confirm Password">
  			  </div>
  			</div>
		</div>
		<div class="border px-5 py-5 mt-5">
			<h5>Address Detail</h5>
			<div class="form-group">
  			  <label for="inputAddress">Address</label>
  			  <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  			</div>
  			<div class="form-group">
  			  <label for="inputAddress2">Address 2</label>
  			  <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  			</div>
  			<div class="form-row">
  			  <div class="form-group col-md-6">
  			    <label for="inputCity">City</label>
  			    <input type="text" class="form-control" id="inputCity">
  			  </div>
  			  <div class="form-group col-md-4">
  			    <label for="inputState">State</label>
  			    <select id="inputState" class="form-control">
  			      <option selected>Choose...</option>
  			      <option>...</option>
  			    </select>
  			  </div>
  			  <div class="form-group col-md-2">
  			    <label for="inputZip">Zip</label>
  			    <input type="text" class="form-control" id="inputZip">
  			  </div>
  			</div>
		</div>
		<button type="submit" class="btn text-white mt-4" style="background-color: #caa0d8">Save Changes</button>
	</form>
</div>
@endsection