<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = DB::table('kelas')->get();

        return view('kelas', ['kelas' => $kelas]);
    }

    public function create()
    {
        return view('kelas_form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kelas' => 'required'
        ]);

        $kelas = DB::table('kelas')->insert([
            'nama_kelas' => $request->nama_kelas
        ]);

        return redirect()->route('kelas.index');
    }

    public function destroy($id)
    {
        $kelas = DB::table('kelas')
            ->where('id', '=', $id)
            ->delete();

        return redirect()->route('kelas.index');
    }

    public function edit($id)
    {
        $kelas = DB::table('kelas')
            ->where('id', '=', $id)
            ->first();

        return view('kelas_form', ['kelas' => $kelas]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kelas' => 'required'
        ]);

        $kelas = DB::table('kelas')
            ->where('id', '=', $id)
            ->update([
                'nama_kelas' => $request->nama_kelas
            ]);

        return redirect()->route('kelas.index');
    }
}
