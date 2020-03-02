@extends('../master-layout')

@section('title')
edit
@endsection

@section('header')
	<h3>Mata Kuliah</h3>
@endsection

@section('content')
<form method="post" action="{{ route('matkul.update', $data->id_matkul)}}">
	@csrf
	<div class="form-group">
		<label for ='matkul'>Mata Kuliah </label>
		<input name="mata_kuliah" id='matkul' type="text" class="form-control" value="{{ $data->mata_kuliah }}" required="">
	</div>

	<div class="form-group">
		<label for='select'> Pilih Dosen </label>
		<select id='select' name="pilih_dosen" class="form-control">
			@foreach($dosen as $d)
			<option value="{{ $d->id_dosen }}"> 
				{{ $d->nama_dosen}}
			</option>
			@endforeach
		</select>
	</div>

	<button type="submit" class="btn btn-primary"> update </button>
</form>	
@endsection 