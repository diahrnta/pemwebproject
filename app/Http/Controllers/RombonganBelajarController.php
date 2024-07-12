<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\RombonganBelajar;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class RombonganBelajarController extends Controller
{
    public function show()
    {
        $list_rombel = RombonganBelajar::all();
        return view('rombel.show', ['list_rombel' => $list_rombel]);
    }

    public function create()
    {
        $rombel = new RombonganBelajar();
        $list_dosen = Dosen::all();

        return view('rombel.form', [
            'rombel' => $rombel,
            'list_dosen' => $list_dosen,
        ]);
    }

    public function store(Request $request)
    {
        $request['thn_masuk'] = date('Y', strtotime($request->thn_masuk));
        if ($request->id) {
            RombonganBelajar::find($request->id)->update($request->except('_token'));
            return redirect(route('rombel.show'))->with('pesan', 'Data berhasil diupdate');
        } else {
            RombonganBelajar::create($request->except('_token'));
            return redirect(route('rombel.show'))->with('pesan', 'Data berhasil disimpan');
        }
    }

    public function edit($id)
    {
        $rombel = RombonganBelajar::find($id);
        $list_dosen = Dosen::all();
        return view('rombel.form', compact('rombel', 'list_dosen'));
    }

    public function update(Request $request, $id)
    {
        $rombel = RombonganBelajar::find($id);
        $rombel->update($request->all());
        return redirect(route('rombel.show'))->with('pesan', 'Data berhasil diupdate');
    }

    public function view($id)
    {
        $rombel = RombonganBelajar::find($id);
        return view('rombel.view', ['rombel' => $rombel]);
    }

    public function destroy($id): RedirectResponse
    {
        RombonganBelajar::find($id)->delete();
        return redirect(route('rombel.show'))->with('pesan', 'Data berhasil dihapus');
    }
}
