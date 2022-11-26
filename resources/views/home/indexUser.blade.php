{{-- Nanti taro codingan home user di sini --}}
@extends('templates/appUser')
@section('title', 'Home User | Apotek Firdan Farma')
@section('subtitle', 'Home User')
@section('content')
<!-- Content Row -->
<div class="row">
	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-primary shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
						Total Obat</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800">{{ $drug }}</div>
					</div>
					<div class="col-auto">
						<i class="fas fa-fw fa-pills fa-2x"></i>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Pending Requests Card Example -->
	{{-- <div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-warning shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
						Total Users</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800">{{ $user }}</div>
					</div>
					<div class="col-auto">
						<i class="fas fa-fw fa-users fa-2x"></i>
					</div>
				</div>
			</div>
		</div>
	</div> --}}
</div>
<div class="row g-5">
	@foreach ($drugs as $drug)
	<div class="col-md-4">
	<div class="card" >
		<img class="card-img-top" width="400" height="400" src="{{ asset('storage/images/' .$drug->icon) }}" alt="...">
		<div class="card-body">
			<h3 class="card-title">{{$drug->name_drug}}</h3>
			<p class="card-text">
				<strong>Produsen :</strong> {{$drug->producer}} <br>
				<strong>Harga :</strong> Rp. {{number_format ($drug->price)}} <br>
				<strong>Stok :</strong> {{$drug->stock}} <br>
			</p>
		
		</div>
		</div>
	</div>
	@endforeach
</div>
@stop