@extends('../master-layout')

@section('title')
Mata Kuliah
@endsection

@section('header')
<h3> Mata Kuliah </h3>
@endsection

@section('content')
	<input class="btn btn-primary" type="button" onclick="location.href='{{ route('matkul.create') }}'" value="Tambah Matkul" style="float: right;">
	<table class="table table-stripped table-bordered">
		<thead>
			<th>No</th>
			<th>Nama Mata Kuliah</th>
			<th>Nama Dosen</th>
			<th>condition</th>
		</thead>
		
		<tbody>
			@foreach($data as $index => $d)

				<tr>
					<td>{{ $index+1 }}</td>
					<td>{{ $d->mata_kuliah }}</td>
					<td>{{ $d->nama_dosen }}</td>
					<td>
						<div class="row">
							<div class='col-4'>
								<input type="button" onclick="location.href='{{ route('matkul.edit', $d->id_matkul ) }}'" name="edit" value="update" class="btn btn-warning">
							</div>
							<div class="col-4">
								<form method='post' action="{{ route('matkul.hapus', $d->id_matkul)}}" >
									@csrf
									<input type="submit" name="delete" value="hapus"  class="btn btn-danger">
								</form>
							</div>
						</div>

					</td>
				</tr>

			@endforeach

		</tbody>
	</table>

@endsection