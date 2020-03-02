@extends('../master-layout')

@section('title')
	tambah data dosen
@endsection

@section('header')
	<h3> Tambah Dosen </h3>
@endsection

@section('content')


<form method="POST" action="{{ route('dosen.update', $data->id_dosen) }}">
	@csrf
	<div class="form-group">
		<label for="dosen">Nama Dosen</label>
		<input type="text" class="form-control" id='dosen' name='name_dosen' required="true", value="{{ $data->nama_dosen }}">

	</div>
	<div class="form-group">
		<label for="nip">NIP Dosen</label>
		<input type="text" name="nip_dosen" id='nip' class="form-control" required="" value="{{ $data->nip }}">
	</div>

	<div class="row">
		<div class="col-4">
			<input type="submit" name="button" value="update" class="btn btn-success">
		</div>
	</div>

</form>
@endsection
