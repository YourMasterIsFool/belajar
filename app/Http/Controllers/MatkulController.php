<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Matkul;
use App\Dosen;

class MatkulController extends Controller
{
    public function index(Request $request){
    	
    	$data = Dosen::with('matkul')->get();
    	
    	return view('matkul.matkul-home',['data'=>$data]);
    }

    Public function create(Request $request){
    	
    	$dosen = DB::table('dosen')->get();
    	return view('matkul.matkul-create-data',['dosen'=>$dosen]);

    }

    public function simpan(Request $request){

    	$request->validate([
    		'nama_matkul'=> 'required',
    		'pilih_dosen'=> 'required',
    	]);

    	$nama_matkul=$request->input('nama_matkul');
    	$pilih_dosen = $request->input('pilih_dosen');
		DB::statement('insert into matkul (mata_kuliah, dosen_id) values (?, ?)',[$nama_matkul,$pilih_dosen]);
		return redirect('/crud/matkul/home')->with('success', 'berhasil menambah mata kuliah');
    }

    public function hapus($id){

    	$hapus = DB::delete('delete from matkul where id_matkul=?',[$id]);
    	return redirect('/crud/matkul/home')->with('success', 'berhasil menghapus data');
    }

    public function edit($id){
    	$dosen = DB::table('dosen')->get();
    	$data = DB::table('matkul')->where('id_matkul',$id)->first();

    	return view('matkul.matkul-edit-data',['dosen'=>$dosen, 'data'=>$data ]);

    }

    public function update(Request $request, $id){

    	$request->validate([
    		'mata_kuliah'=> 'required',
    		'pilih_dosen'=> 'required',
    	]);

    	$nama_matkul = $request->input('mata_kuliah');
    	$pilih_dosen = $request->input('pilih_dosen');

    	DB::statement('update matkul set mata_kuliah=? , dosen_id=? where id_matkul=?',[$nama_matkul, $pilih_dosen, $id]);

    	return redirect('/crud/matkul/home')->with('succes', 'berhasil merubah data');
    }
}

