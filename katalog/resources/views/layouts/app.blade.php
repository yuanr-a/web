<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Scripts -->
		<script src="{{ asset('js/app.js') }}" defer></script>
			
		<!-- Styles -->
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">

		<!-- FontAwesome -->
		<script src="https://kit.fontawesome.com/fc749af579.js" crossorigin="anonymous"></script>
		<title>Belle Dress</title>
	</head>
	<body class="bg-white">
		<div class="text-center text-white py-3 text-uppercase font-italic" style="background-color: #caa0d8">
			our stores are open 9am - 5pm !
		</div>
		<nav class="navbar navbar-light bg-light">
			<div class="container justify-content-end">
				<ul class="nav">
					<li class="nav-item px-2 text-center">
						<a class="nav-link text-secondary" href="./profile">Account</a>
					</li>
					<li class="nav-item px-2 text-center">
						<a class="nav-link text-secondary" href="./cart">Cart</a>
					</li>
					<li class="nav-item px-2 text-center">
						<form class="form-inline my-2 my-lg-0">
							<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
						</form>
					</li>
				</ul>
			</div>
		</nav>
		<header class="text-center my-5">
			<a href="./" class="text-dark" style="text-decoration: none">
				<h1 class="display-4">Belle Dresscode</h1>
			</a>
		</header>
		<nav class="text-capitalize" style="font-size: 1rem;">
			<ul class="nav justify-content-center">
					<li class="nav-item">
					<a class="nav-link text-secondary" href="">new</a>
					</li>
					<li class="nav-item">
					<a class="nav-link text-secondary dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">rent</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</li>
					<li class="nav-item">
					<a class="nav-link text-secondary dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">buy</a>
								<div class="dropdown-menu">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
					</li>
					<li class="nav-item">
					<a class="nav-link text-secondary dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">bridal</a>
								<div class="dropdown-menu">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
					</li>
					<li class="nav-item">
					<a class="nav-link text-secondary" href="">kids</a>
					</li>
					<li class="nav-item">
					<a class="nav-link text-secondary" href="">designer</a>
					</li>
					<li class="nav-item">
					<a class="nav-link text-secondary" href="">accesories</a>
					</li><li class="nav-item">
					<a class="nav-link text-danger" href="">sale</a>
					</li><li class="nav-item">
					<a class="nav-link text-secondary" href="">gift card</a>
					</li>
					<li class="nav-item">
					<a class="nav-link text-secondary" href="">stores</a>
					</li>
			</ul>
		</nav>
		@yield('content')
		<footer class="bg-light">
			<div class="container py-4">
				<div class="row mt-3">
					<div class="col-md-4">
					<a href="" class="nav-link px-0 py-2 text-secondary"><i class="fab fa-instagram"></i> belledresscode.id</a>
					<a href="" class="nav-link px-0 py-2 text-secondary"><i class="fab fa-facebook-f"></i> Belle Dresscode</a>
					<a href="" class="nav-link px-0 py-2 text-secondary"><i class="far fa-envelope"></i> belledresscode@gmail.com</a>
					</div>
					<div class="col-md-4">
					<a href="./cekongkir" class="nav-link px-0 py-2 text-secondary">Cek Ongkos Kirim</a>
					</div>
					<div class="col-md-4">
						<form>
								<div class="form-group">
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
										<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
								</div>
								<button type="submit" class="btn text-white" style="background-color: #caa0d8">Subsribe</button>
						</form>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>