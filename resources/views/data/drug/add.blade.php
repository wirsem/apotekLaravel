@extends('templates/app')
@section('title', 'Data Obat | Apotek Firdan Farma')
@section('subtitle', 'Tambah Obat')
@section('content')
<!-- DataTales Example -->
<div class="card shadow mb-4">
	<form action="/drug/store" method="post" enctype="multipart/form-data">
		<div class="card-body">
			@csrf
			<input type="file" name="icon" class="d-block mb-3">
			@error('icon') <small class="text-danger"> {{ $message }} </small> @enderror
			<div class="row">
				<div class="form-group col-md-6">
					<label class="form-label">Kode</label>
					<input type="text" class="form-control" name="code" />
					@error('code') <small class="text-danger"> {{ $message }} </small> @enderror
				</div>
				
			</div>
			<div class="form-group">
				<label class="form-label">Nama Obat</label>
				<input type="text" class="form-control" name="name_drug" />
				@error('name_drug') <small class="text-danger"> {{ $message }} </small> @enderror
			</div>
			<div class="form-group">
				<label class="form-label">Produsen</label>
				<input type="text" class="form-control" name="producer" />
				@error('producer') <small class="text-danger"> {{ $message }} </small> @enderror
			</div>
			<div class="row">
				<div class="form-group col-md-6">
					<label class="form-label">Stok</label>
					<input type="number" class="form-control" name="stock" />
					@error('stock') <small class="text-danger"> {{ $message }} </small> @enderror
				</div>
				<div class="form-group col-md-6">
					<label class="form-label">Harga</label>
					<input type="number" class="form-control" name="price" />
					@error('price') <small class="text-danger"> {{ $message }} </small> @enderror
				</div>
			</div>
		</div>
		<div class="card-footer">
			<button type="submit" class="btn btn-primary">Tambah</button>
			<a href="/drug" class="btn btn-secondary">Kembali</a>
		</div>
	</form>
</div>
@stop