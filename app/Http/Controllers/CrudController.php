<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = DB::table('mahasiswas')->get();

        return view('home1')->with('data', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Mahasiswa adalah sebuah model yang telah dibuat didalam folder App\Mahasiswa
        //fungsinya adalah untuk menghubungkan kedalam database
        $mahasiswa = new Mahasiswa;
        $mahasiswa->nama = $request->nama; // menyimpan sebuah data kedalam field nama dengan inputan yang memiliku atribute name='nama'
        $mahasiswa->nim = $request->nim;
        $mahasiswa->universitas = $request->universitas;
        $mahasiswa->jenkel = $request->jenkel;
        $mahasiswa->save(); // menyimpan sebuah data kedalam database
        return redirect('crud')->with('success', 'successed add data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // mengambil sebuah data dari database dengan id = paramater($id)
        //parameter ini berasal dar 
         $show = Mahasiswa::findOrFail($id);

        return view('update-data', compact('show')); //memparse sebuah data d
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // membuat validasi user tidak boleh kosong(required)
        //nama,nim,universitas,jenkel adalah sebuah atribut name yang berada dalam form inputan
       $request->validate([
        'nama' => 'required',
        'nim' => 'required|numeric',
        'universitas' => 'required',
        'jenkel' => 'required',
       ]);

       //namun pada variable data 'nama','nim','universitas','jenkel' merupakan sebuh field yang berada dalam database
       //$request yang digunakan pada variable data adalah sebuah inputan yang berasal dari user untuk disimpan kedalam field
        $data = [
            'nama' => $request->nama,
            'nim' => $request->nim,
            'universitas' => $request->universitas,
            'jenkel'=> $request->jenkel,
        ];
        //variable update digunakan untuk mengubah data dengan menggunakan id yang sebelumnya telah ada
        $update = Mahasiswa::where('id', $id)->update($data);

       return redirect('crud')->with('success', 'data telah terupdate !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       

    }

    public function delete($id)
    {
        // sebuah fungsi untuk menemukan data menggunakan parameter $id
      $mahasiswa = Mahasiswa::findOrFail($id);
      $mahasiswa->delete();//menghapus sebuah data

      return redirect('/crud')->with('success', 'data telah terhapus');
    }
}
