<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index(){
        $datasiswa = Siswa::all();
        return view('siswa.index', ['datasiswa' => $datasiswa]);
    }

    public function tambah(){
        return view('siswa.tambah');
    }

    public function entri(Request $request){
        $data = $request->validate([
            'foto' => 'required',
            'NIS' => 'required|numeric',
            'nama' => 'required',
            'kelamin' => 'required',
            'program_keahlian' => 'required',
        ]);
        // $csrfToken = csrf_token();
        // dd($data)
        $newSiswa = Siswa::create($request->all());
        $newSiswa->nis = $request->NIS;
        $newSiswa->save();
        
        // $newSiswa->nis = $request->NIS;
        // $newSiswa->save();


        return redirect(route('siswa.index'));

    }

    public function ubah(Siswa $datasiswa){
        return view('siswa.ubah', ['siswa' => $datasiswa]);
    }

    public function perbarui(Siswa $datasiswa, Request $request){
        $data = $request->validate([
            'foto' => 'required',
            'NIS' => 'required|numeric',
            'nama' => 'required',
            'kelamin' => 'required',
            'program_keahlian' => 'required',
        ]);

        $datasiswa->update($data);
        $datasiswa->nis = $request->NIS;
        $datasiswa->update();
        // $data=Siswa::where('nis',$request->nis)->get();
        // $data->update([
        //     $data->foto = $request->foto,
        //     $data->nis = $request->nis,
        //     $data->nama = $request->nama,
        //     $data->kelamin = $request->kelamin,
        //     $data->program_keahlian = $request->program_keahlian
        // ]);

        return redirect(route('siswa.index'))->with("success", "Data siswa telah diperbarui");
    }

    public function hapus(Siswa $datasiswa){
        $datasiswa->delete();
        return redirect(route('siswa.index'))->with('success', 'Data siswa telah dihapus');
    }
}
