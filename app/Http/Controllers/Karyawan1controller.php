<?php

namespace App\Http\Controllers;

use App\Models\karyawan1;
use Illuminate\Http\Request;

class Karyawan1controller extends Controller
{
    public function create()
    {
       return view('createPage');
    }

    public function store(Request $request)
    {
        karyawan1::create([
            'namaKaryawan' => $request->namaKaryawan,
            'umurKaryawan' => $request->umurKaryawan,
            'alamat' => $request->alamat,
            'noTelp' => $request->noTelp,
        ]);

        return redirect('/');
    }

    public function gets(){
        $karyawans = karyawan1::all();
        return view('welcome', compact('karyawans'));
    }


    public function getKaryawan(){
        $karyawans = karyawan1::all();
        return view('viewKaryawan', compact('karyawans'));
    }

    public function EditKaryawanById($id) {
        $karyawans = karyawan1::find($id);
        return view('update', compact('karyawans'));
    }

    public function updateKaryawan(Request $request, $id) {
        $karyawan1 ::find($id)->update([
            'namaKaryawan' => $request->namaKaryawan,
            'umurKaryawan' => $request->umurKaryawan,
            'alamat' => $request->alamat,
            'noTelp' => $request->noTelp,
        ]);
        return redirect(route('getKaryawan'));
    }

    public function deleteKaryawan($id){
        karyawan1::destroy($id);
        return redirect(route('getKaryawan'));
    }
}
