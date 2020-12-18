@extends('layouts.app')

@section('content')
	<div class="container-fluid my-5">
		<div class="container">
			<div id="carouselExampleIndicators" class="carousel slide mh-50" data-ride="carousel">
	  			<ol class="carousel-indicators">
	  			  	<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	  			  	<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	  			</ol>
	  			<div class="carousel-inner">
	  			  <div class="carousel-item active">
	  			    	<img class="d-block w-100" src="https://images.unsplash.com/photo-1598280361210-07c15c478f6c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="First slide">
						<div class="carousel-caption d-none d-md-block">
  						  <h2>Pink Dress</h2>
  						  <h4>IDR 2560K</h4>
  						</div> 
					</div>
	  			  <div class="carousel-item">
	  			   	<img class="d-block w-100" src="https://images.unsplash.com/photo-1469317835793-6d02c2392778?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1352&q=80" alt="Second slide">
						<div class="carousel-caption d-none d-md-block">
							<h2>Pink Dress</h2>
  						  <h4>IDR 2560K</h4>
  						</div> 
					</div>
	  			</div>
	  			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	  			  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	  			  <span class="sr-only">Previous</span>
	  			</a>
	  			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	  			  <span class="carousel-control-next-icon" aria-hidden="true"></span>
	  			  <span class="sr-only">Next</span>
	  			</a>
			</div>
			<div class="row mt-5">
				<div class="col-md-8">
					<img class="w-100" src="https://images.unsplash.com/photo-1521467752200-3bccf80f16ed?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="">
				</div>
				<div class="col-md-4 text-capitalize py-5">
					<h1>
						dear dresses, <br><br>
						have you been sitting pretty in the closet?<br><br>
						let's transform you into CASH!
					</h1>
					<div class="btn rounded-0 text-capitalize text-white font-weight-bold shadow-sm px-5 py-3" style="background-color: #caa0d8; margin-left: -15rem;">gak keliatan tulisannya</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 mt-5">
					<img class="w-100" src="https://images.unsplash.com/photo-1515934751635-c81c6bc9a2d8?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="">
				</div>
				<div class="col-md-4 mt-5">
					<img class="w-100" src="https://images.unsplash.com/photo-1532712938310-34cb3982ef74?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="">
				</div>
				<div class="col-md-4 mt-5">
					<img class="w-100" src="https://images.unsplash.com/photo-1465495976277-4387d4b0b4c6?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="">
				</div>
				<div class="col-md-4 mt-5">
					<img class="w-100" src="https://images.unsplash.com/photo-1520854221256-17451cc331bf?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="">
				</div>
				<div class="col-md-4 mt-5">
					<img class="w-100" src="https://images.unsplash.com/photo-1532712938310-34cb3982ef74?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="">
				</div>
				<div class="col-md-4 mt-5">
					<img class="w-100" src="https://images.unsplash.com/photo-1520854221256-17451cc331bf?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="">
				</div>
			</div>
			<div class="btn w-100 text-center text-capitalize text-white mt-5 py-3 rounded-0" style="background-color: #caa0d8; font-size: 1.25rem">
				"Selamat hari pernikahan, cintailah pasanganmu sampai nyawa ditarik dari tubuhmu"
			</div>
			<div class="row">
				<div class="col-md-4 mt-5">
					<img class="w-100" src="https://images.unsplash.com/photo-1515934751635-c81c6bc9a2d8?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="">
				</div>
				<div class="col-md-4 mt-5">
					<img class="w-100" src="https://images.unsplash.com/photo-1532712938310-34cb3982ef74?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="">
				</div>
				<div class="col-md-4 mt-5">
					<img class="w-100" src="https://images.unsplash.com/photo-1465495976277-4387d4b0b4c6?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="">
				</div>
			</div>
		</div>
	</div>
@endsection