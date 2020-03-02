<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DosenController extends Controller
{
    public function index(Request $request){
    	$data = DB::table('dosen')->get();
    	return view('dosen.dosen-home', compact("data"));
    }

    public function simpan(Request $request){

    	$request->validate([
    		'name_dosen' => 'required',
    		'nip_dosen' => 'required',
    	]);
    	$name_dosen = $request->input('name_dosen');
    	$nip_dosen = $request->input('nip_dosen');
    	$check = DB::table('dosen')->where('nip', $nip_dosen)->first();
    	if($check == null){
    		DB::statement('
    		insert into dosen (nama_dosen, nip) values (?,?)
    		',[$name_dosen, $nip_dosen]);
    	
    		return redirect('/crud/dosen/home')->with('success', 'berhasil menambahkan data dosen');	
    	}
    	else{
    		$error = '1';
    		return redirect('crud/dosen/create')->with('errors', 'erorbung');
    	}
    }

    public function create(Request $request){
    
  		return view('dosen.dosen-tambah-data');

    }

    public function edit($id){

    	$data = DB::table('dosen')->where('id_dosen', $id)->first();


    	return view('dosen.dosen-edit-data', compact("data"));
    }
    public function update(Request $request, $id){
    	$nama_dosen = $request->input('name_dosen');
    	$nip_dosen = $request->input('nip_dosen');
    	DB::statement("update dosen set nama_dosen=?, nip=? where id_dosen=?", [$nama_dosen, $nip_dosen, $id]);

    	return redirect('crud/dosen/home')->with('success', 'data telah terupdate');
    }
}
