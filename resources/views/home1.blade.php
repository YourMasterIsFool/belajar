@extends('master-layout')

@section('title')
	Mahasiswa
@endsection

@section('header')

<h3>Mahasiswa</h3>

@endsection
@section('content')
	@if (session()->has('success'))
		<div class="alert alert-success">

			{{ session()->get('success') }}
		</div>
	@endif
	<br>
	<input class="btn btn-primary" type="button" onclick="location.href='crud/tambah_data'" value="Tambah" style="float: right;">
	<br>
	<table class="table table-bordered">
		<thead>
			<th>no</th>
			<th>Nama</th>
			<th>Nim</th>
			<th>Universitas</th>
			<th>Jenkel</th>
			<th>condition</th>

		</thead>
		<tbody>
			@foreach($data as $d)
			<tr>
				<td>{{ $d->id }}</td>
				<td>{{ $d->nama }}</td>
				<td>{{ $d->nim }}</td>
				<td>{{ $d->universitas }}</td>
				<td>{{ $d->jenkel }}</td>
				<td>
					<div class="row">
						<div class="col-3">
							<form method="get" action="">
								<input class="btn btn-success" type="button" onclick="location.href='crud/edit/{{ $d->id }}'" value="update">


							</form>
						</div>

						<div class="col-1"></div>
						
						<div class="col-3">
							<form action="{{ route('crud.delete', $d->id)}}" method="POST">
								@csrf
								
								<input class="btn btn-danger" type="submit" name="delete" value="delete">

							</form>
						</div>
					</div>
					
				</td>
			</tr>
			@endforeach
		</tbody>

	</table>

@endsection