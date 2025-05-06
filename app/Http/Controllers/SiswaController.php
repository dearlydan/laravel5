<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = DB::table('siswas') // pakai nama tabel yg bener
            ->join('kelas', 'siswas.id_kelas', '=', 'kelas.id')
            ->join('wali_murids as wali', 'siswas.id_wali', '=', 'wali.id')
            ->select('siswas.*', 'kelas.nama_kelas', 'wali.nama_wali')
            ->get();

        return view('siswa', ['siswas' => $siswa]);
    }

    public function destroy($id)
    {
        $siswa =DB::table('siswas')
        ->where('id', '=', $id)
        ->delete();
        return redirect('/');
    }

    public function create()
    {
       $kelas = DB::table('kelas')->get();
       $wali = DB::table('wali_murids')->get();
       return view('siswa_form', ['wali'=> $wali,'kelas' => $kelas]);
    }

    public function store()
    {
        $request->validate([
            'nis' => 'required|uneque:siswa',
            'nama_siswa' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'id_kelas' => 'required',
            'wali_murid_id' => 'required',
        ]);

        DB::table('siswa')->insert([
            'nis' => $request->nis,
            'nama_siswa' => $request->nama_siswa,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'id_kelas' => $request->id_kelas,
            'wali_murid_id' => $request->wali_murid_id,
        ]);
    }
}
