<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use App\Models\Mahasiswa;
use App\Models\RombonganBelajar;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function show()
    {
        $list_mahasiswa = Mahasiswa::all();
        return view('mahasiswa.show', ['list_mahasiswa' => $list_mahasiswa]);
    }

    public function create()
    {
        $mahasiswa = new Mahasiswa();
        $list_prodi = Prodi::all();
        $list_rombel = RombonganBelajar::all();

        return view('mahasiswa.form', [
            'mahasiswa' => $mahasiswa,
            'list_prodi' => $list_prodi,
            'list_rombel' => $list_rombel,
        ]);
    }

    public function store(Request $request)
    {
        $data = [
            'nim' => $request->nim_,
            'nama' => $request->nama,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'ipk' => $request->ipk,
            'prodi_id' => $request->prodi_id,
            'rombel_id' => $request->rombel_id
        ];

        if (Mahasiswa::where('nim', $request->nim_)->first()) {
            Mahasiswa::where('nim', $request->nim_)->update($data);
            return redirect(route('mahasiswa.show'))->with('pesan', 'Data berhasil diupdate');
        } else {
            Mahasiswa::create($data);
            return redirect(route('mahasiswa.show'))->with('pesan', 'Data berhasil disimpan');
        }
    }

    public function edit($nim)
    {
        $mahasiswa = Mahasiswa::where('nim', $nim)->first();
        $list_prodi = Prodi::all();
        $list_rombel = RombonganBelajar::all();
        return view('mahasiswa.form', compact('mahasiswa', 'list_prodi', 'list_rombel'));
    }

    public function update(Request $request, $nim)
    {
        $mahasiswa = Mahasiswa::where('nim', $nim)->first();
        $mahasiswa->update($request->all());
        return redirect(route('mahasiswa.show'))->with('pesan', 'Data berhasil diupdate');
    }

    public function view($nim)
    {
        $mahasiswa = Mahasiswa::where('nim', $nim)->first();
        return view('mahasiswa.view', ['mahasiswa' => $mahasiswa]);
    }

    public function destroy($nim): RedirectResponse
    {
        Mahasiswa::where('nim', $nim)->delete();
        return redirect(route('mahasiswa.show'))->with('pesan', 'Data berhasil dihapus');
    }
}
