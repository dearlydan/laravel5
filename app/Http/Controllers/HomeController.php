<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\WaliMurid;
use App\Models\Kelas;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function siswa()
    {
        $siswas = Siswa::all();
        return view('siswa', compact('siswas'));
    }

    public function waliMurid()
    {
        $wali_murids = WaliMurid::all();
        return view('wali_murid', compact('wali_murids'));
    }

    public function kelas()
    {
        $kelas = Kelas::all();
        return view('kelas', compact('kelas'));
    }
}