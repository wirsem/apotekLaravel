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
<div class="row justify-content-center">
	@foreach ($drugs as $drug)
	<div class="col-md-4">
	<div class="card" style="width: 18rem;">
		<img class="card-img-top" src="{{ url('public/images')}}/{{$drug->icon}}" alt="...">
		<div class="card-body">
			<h5 class="card-title">Card title</h5>
			<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			<a href="#" class="btn btn-primary">Go somewhere</a>
		</div>
		</div>
	</div>
	@endforeach
</div>
@stop