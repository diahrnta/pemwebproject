<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use App\Models\Dosen;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    // Menampilkan daftar Dosen
    public function show()
    {
        $list_dosen = Dosen::all();
        return view('dosen.show', ['list_dosen' => $list_dosen]);
    }

    // Menampilkan form menambah data Dosen 
    public function create()
    {
        $dosen = new Dosen();
        $list_prodi = Prodi::all();

        return view('dosen.form', [
            'dosen' => $dosen,
            'list_prodi' => $list_prodi,
        ]);
    }

    // Menyimpan data Dosen baru atau mengupdate yang sudah ada
    public function store(Request $request)
    {
        if (Dosen::where('nidn', $request->nidn)->first()) {
            Dosen::where('nidn', $request->nidn)->update($request->except('_token'));
            $message = 'Data berhasil diupdate';
        } else {
            Dosen::create($request->except('_token'));
            $message = 'Data berhasil ditambahkan';
        }
        return redirect(route('dosen.show'))->with('pesan', $message);
    }

    public function edit($nidn)
    {
        $dosen = Dosen::where('nidn', $nidn)->first();
        $list_prodi = Prodi::all();
        return view('dosen.form', compact('dosen', 'list_prodi'));
    }

    // Mengupdate data Dosen yang diubah
    public function update(Request $request, $nidn)
    {
        $dosen = Dosen::where('nidn', $nidn)->first();
        $dosen->update($request->all());
        return redirect(route('dosen.show'))->with('pesan', 'Data berhasil diupdate');
    }

    // Menampilkan detail data Dosen
    public function view($nidn)
    {
        $dosen = Dosen::where('nidn', $nidn)->first();
        return view('dosen.view', ['dosen' => $dosen]);
    }

    // Menghapus data Dosen
    public function destroy($nidn): RedirectResponse
    {
        Dosen::where('nidn', $nidn)->delete();
        return redirect(route('dosen.show'))->with('pesan', 'Data berhasil dihapus');
    }
}
