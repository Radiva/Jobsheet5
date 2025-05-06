<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WaliMuridController extends Controller
{
    public function index()
    {
        $wali = DB::table('wali_murid')->get();

        return view('wali', ['wali' => $wali]);
    }

    public function create()
    {
        return view('wali_form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_wali' => 'required',
            'kontak' => 'required'
        ]);

        $wali = DB::table('wali_murid')->insert([
            'nama_wali' => $request->nama_wali,
            'kontak' => $request->kontak
        ]);

        return redirect()->route('wali.index');
    }

    public function destroy($id)
    {
        $wali = DB::table('wali_murid')
            ->where('id', '=', $id)
            ->delete();

        return redirect()->route('wali.index');
    }

    public function edit($id)
    {
        $wali = DB::table('wali_murid')
            ->where('id', '=', $id)
            ->first();

        return view('wali_form', ['wali' => $wali]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_wali' => 'required',
            'kontak' => 'required'
        ]);

        $kelas = DB::table('wali_murid')
            ->where('id', '=', $id)
            ->update([
                'nama_wali' => $request->nama_wali,
                'kontak' => $request->kontak
            ]);

        return redirect()->route('wali.index');
    }
}
