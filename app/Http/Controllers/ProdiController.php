<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function show()
    {
        $list_prodi = Prodi::all();
        return view('prodi.show', ['list_prodi' => $list_prodi]);
    }

    public function create()
    {
        $prodi = new Prodi();

        return view('prodi.form', [
            'prodi' => $prodi
        ]);
    }

    public function store(Request $request)
    {
        if ($request->id) {
            Prodi::find($request->id)->update($request->all());
            return redirect(route('prodi.show'))->with('pesan', 'Data berhasil diupdate');
        } else {
            Prodi::create($request->all());
            return redirect(route('prodi.show'))->with('pesan', 'Data berhasil disimpan');
        }
    }

    public function edit($id)
    {
        $prodi = Prodi::find($id);
        return view('prodi.form', compact('prodi'));
    }

    public function update(Request $request, $id)
    {
        $prodi = Prodi::find($id);
        $prodi->update($request->all());
        return redirect(route('prodi.show'))->with('pesan', 'Data berhasil diupdate');
    }

    public function view($id)
    {
        $prodi = Prodi::find($id);
        return view('prodi.view', ['prodi' => $prodi]);
    }

    public function destroy($id): RedirectResponse
    {
        Prodi::find($id)->delete();
        return redirect(route('prodi.show'))->with('pesan', 'Data berhasil dihapus');
    }
}
