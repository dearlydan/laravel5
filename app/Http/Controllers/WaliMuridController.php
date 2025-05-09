<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WaliMuridController extends Controller
{
    public function index()
    {
        $wali_murids = DB::table('wali_murids')->get();

        return view('wali_murid', ['wali' => $wali_murids]);

    }

    public function create()
    {
        return view('wali_murid_form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_wali' => 'required',
            'kontak' => 'required',
        ]);

        DB::table('wali_murids')->insert([
            'nama_wali' => $request->nama_wali,
            'kontak' => $request->kontak,
        ]);

        return redirect()->route('wali.index');
    }

    public function edit($id)
    {
        $wali_murid = DB::table('wali_murids')->where('id', $id)->first();
    
        return view('wali_murid_form', compact('wali_murid'));
    }
    

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_wali' => 'required',
            'kontak' => 'required',
        ]);

        DB::table('wali_murids')->where('id', $id)->update([
            'nama_wali' => $request->nama_wali,
            'kontak' => $request->kontak,
        ]);

        return redirect()->route('wali.index');
    }

    public function destroy($id)
    {
        DB::table('wali_murids')->where('id', $id)->delete();
        return redirect()->route('wali.index');
    }
}
