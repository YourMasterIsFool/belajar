@extends('master-layout')

@section('content')

	<form method='post' action="{{ URL('crud/update/'. $show->id ) }}">
		@csrf

		<div class='row'>
			<div class='col-3'>
				<div class='form-group'>
					<input id='name' name="nama" class='form-control' value="{{ $show->nama }}"> 
					
				</div>
			</div>
		</div>

		<div class='row'>
				<div class='col-3'>
					<div class='form-group'>
						<input id='nim' name="nim" class='form-control' value="{{ $show->nim}}" required="numeric" type="number"> 
						
					</div>
				</div>
		</div>

		<div class='row'>
			<div class='col-3'>
				<div class='form-group'>
					<input id='universitas' name="universitas" class='form-control' value="{{ $show->universitas }}">

					
				</div>
			</div>
		</div>

		<div class='row'>
			<div class='col-3'>
				<div class='form-group'>
					<label for='select'> Jenis Kelamin </label>
					<select class='form-control' id='select' name="jenkel" > 
						<option>laki-laki</option>
						<option>perempuan</option>
					</select> 
				</div>
			</div>
		</div>

		<button type="submit" class="btn btn-success"> Update data</button>
	</form>
@endsection