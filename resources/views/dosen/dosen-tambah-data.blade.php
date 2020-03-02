@extends('../master-layout')

@section('title')
	tambah data dosen
@endsection

@section('header')
	<h3> Tambah Dosen </h3>
@endsection

@section('content')

<form method="post" action="{{ route('dosen.simpan') }}">
	@csrf
	<div class="form-group">
		<label for="dosen">Nama Dosen</label>
		<input type="text" class="form-control" id='dosen' name='name_dosen' required="true">

	</div>
	@if (session()->has('errors'))
		
		<div class="form-group">
			<label for='nip'>NIP Dosen</label>
			<input type="text" name="nip_dosen" id='nip' class="form-control is-invalid" required="">

			<div class="invalid-feedback">
				<p>nip telah ada</p>
			</div>
		
		</div>
		
	@else 

	<div class="form-group">
		<label for="nip">NIP Dosen</label>
		<input type="text" name="nip_dosen" id='nip' class="form-control" required="">
	</div>

		 
	@endif
	<div class="row">
		<div class="col-4">
			<input type="submit" name="button" value="simpan" class="btn btn-primary">
		</div>
	</div>

</form>
@endsection
