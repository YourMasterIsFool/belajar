@extends('master-layout')

@section('content')
	
	<p> Mahasiswa </p>


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
						<input id='univ' name="univ" class='form-control' placeholder="isi nama univertas"> 
						
					</div>
				</div>
		</div>

		<div class='row'>
			<div class='col-3'>
				<div class='form-group'>
					<input id='umur' name="umur" class='form-control' placeholder="isi umur">

					
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
		
@endsection