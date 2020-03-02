@extends('../master-layout')

@section('title')
Mata Kuliah
@endsection

@section('header')
	<h3>Mata Kuliah</h3>	
@endsection

@section('content')

<form method="post"  action="{{ route('matkul.simpan') }}">
	@csrf
	<div class="form-group">
		<label for='matkul'>Nama Mata Kuilah</label>
		<input type="text" class="form-control" name="nama_matkul" id="matkul" required="">
	</div>
	
	<div class="form-group">
		<label for='select_dosen'>Nama Dosen</label>
		<select class="form-control" id='select_dosen' name='pilih_dosen'>
			@foreach($dosen as $d)		
			<option value="{{ $d->id_dosen }}"> {{ $d->nama_dosen }}</option>
			@endforeach

		</select>

	</div>
	<div class="row">
		<div class="col-6">
			<button type="submit" class="btn btn-primary"> create </button>	
				
		</div>
	</div>
	

</form>
@endsection