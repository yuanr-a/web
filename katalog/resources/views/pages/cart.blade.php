@extends('layouts.app')

@section('content')
<div class="container py-5">
	<div class="row mt-3">
		<div class="col-md-7 shadow px-5 py-5">
			<h5>Shipping Address</h5>
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
			<h5>Sub Total</h5>
			<table class="table table-hover">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Item</th>
			      <th scope="col">Price</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row">1</th>
			      <td>Cart</td>
			      <td>IDR 3.550.000</td>
			    </tr>
			    <tr>
			      <th scope="row">2</th>
			      <td>Shpping Cost</td>
			      <td>IDR 50.000</td>
			    </tr>
			  </tbody>
			</table>
			<h5>Total<span class="float-right">IDR 3.600.000</span></h5>
			<button class="btn text-center w-100 mt-3 text-white font-weight-bold py-3" style="background-color: #caa0d8">Continue Payment</button>
		</div>
		<div class="col-md-5 border px-5 py-5">
			<h5>Your Cart</h5>
			<table class="table table-hover">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Item Name</th>
			      <th scope="col">Quantity</th>
			      <th scope="col">Price</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row">1</th>
			      <td>YEU</td>
			      <td>2</td>
			      <td>IDR 500.000</td>
			    </tr>
			    <tr>
			      <th scope="row">2</th>
			      <td>YEUYEU</td>
			      <td>1</td>
			      <td>IDR 2.550.000</td>
			    </tr>
			  </tbody>
			</table>
		</div>
	</div>
</div>
@endsection