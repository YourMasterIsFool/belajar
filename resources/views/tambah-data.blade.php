@extends('master-layout')
@section('title')
	tambah data
@endsection
@section('content')
	<form method='post' action="{{ route ('crud.store') }}">
		@csrf

		<div class='row'>
			<div class='col-3'>
				<div class='form-group'>
					<input id='name' name="nama" class='form-control' placeholder="isi nama"> 
					
				</div>
			</div>
		</div>

		<div class='row'>
				<div class='col-3'>
					<div class='form-group'>
						<input id='nim' name="nim" class='form-control' placeholder="nim" type="number"> 
						
					</div>
				</div>
		</div>

		<div class='row'>
			<div class='col-3'>
				<div class='form-group'>
					<input id='universitas' name="universitas" class='form-control' placeholder="universitas">

					
				</div>
			</div>
		</div>

		<div class='row'>
			<div class='col-3'>
				<div class='form-group'>
					<label for='select'> Jenis Kelamin </label>
					<select class='form-control' id='select' name="jenkel"> 
						<option>laki-laki</option>
						<option>perempuan</option>
					</select> 
				</div>
			</div>
		</div>

		<button type="submit" class="btn btn-primary"> tambah data</button>
	</form>
@endsection