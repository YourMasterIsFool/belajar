@extends('../master-layout')

@section('title')
	Dosen
@endsection

@section('header')
	<h3> Dosen </h3>
@endsection

@section('content')

@if (session()->has('success'))
		<div class="alert alert-success">

			{{ session()->get('success') }}
		</div>
	@endif

<div class='invalid-feedback'>
	
</div>
	<br>
	<input class="btn btn-primary" type="button" onclick="location.href='{{ route('dosen.create') }}'" value="Tambah Dosen" style="float: right;">

	<table class="table table-bordered">
		<thead>
			<th>no</th>
			<th>Nama</th>
			<th>NIP</th>
			<th>condition</th>
		</thead>
		<tbody>
			@foreach($data as $index => $data )
			<tr>
				<td>{{ $index+1 }}</td>
				<td>{{ $data->nama_dosen }}</td>
				<td>{{ $data->nip }}</td>
				<td>
					<div class="row">
						<div class="col-4">
							<input type="submit" onclick="location.href='/crud/dosen/edit/{{ $data->id_dosen }}'" name="" class="btn btn-warning" value="update">
						</div>

					</div>
				</td>
			</tr>
			@endforeach

		</tbody>

	</table>
@endsection