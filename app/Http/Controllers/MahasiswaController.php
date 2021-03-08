<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
use App\Mhs;

class MahasiswaController extends Controller
{
    //

    public function ajax($nim){
       
        //$data = Mahasiswa::all();
        $data = Mahasiswa::where('nim', $nim)->first();
        //dd($data);


        //return response()->json($data, 200);
        return json_encode($data);
    }

    public function simpan_data (Request $request){
    //    dd($request->all());

    $data = new Mhs;

    $data->nim = $request->nim;
    $data->nama = $request->nama;
    $data->jeniskelamin = $request->jeniskelamin;
    $data->jurusan = $request->jurusan;
    $data->notelp = $request->notelp;
    $data->email = $request->email;
    $data->alamat = $request->alamat;

    $data->save();

    return redirect()->back()->with('ok');
    
  

        
    } 
}
