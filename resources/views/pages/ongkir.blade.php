@extends('layouts.app')

@section('content')
<div class="container py-5">
	<div class="border px-5 py-5">
		<h1 class="text-center font-weight-bold mb-5">Ongkos Kirim</h1>
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">Tujuan</th>
		      <th scope="col">Estimasi Biaya</th>
		    </tr>
		  </thead>
		  <tbody>
				<tr>
				  <td>Luar Negeri</td>
				  <td>IDR 60.000 - IDR 200.000</td>
				</tr>
				<tr>
				  <td>Jawa</td>
				  <td>IDR 10.000 - IDR 30.000</td>
				</tr>
				<tr>
				  <td>Sumatera</td>
				  <td>IDR 20.000 - IDR 50.000</td>
				</tr>
				<tr>
				  <td>Kalimantan</td>
				  <td>IDR 10.000 - IDR 30.000</td>
				</tr>
				<tr>
				  <td>Papua</td>
				  <td>IDR 30.000 - IDR 60.000</td>
				</tr>
				<tr>
				  <td>Sulawesi</td>
				  <td>IDR 25.000 - IDR 50.000</td>
				</tr>
		  </tbody>
		</table>
	</div>
</div>
@endsection