<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategorikehilangan;

class kategorikehilanganController extends Controller
{
    public function index()
    {
        $kategorikehilangan = kategorikehilangan::all();
        return view('admin.kategori_kehilangan.index', compact('kategorikehilangan'));
    }

    public function store(request $request)
    {
        $this->validate($request, [
            'nama_kehilangan'     => 'required|min:4',
            'persyaratan'     => 'required|min:4',
    ]);

    kategorikehilangan::create([
        'nama_kehilangan'     => $request->nama_kehilangan,
        'persyaratan'     => $request->persyaratan,
    ]);

    //redirect to index
    return redirect()->back()->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(kategorikehilangan $kategori_kehilangan)
    {
        return view('admin.kategori_kehilangan.edit', compact('kategori_kehilangan'));
    }

    public function update(Request $request, kategorikehilangan $kategorikehilangan)
    {
        //validate form
        $this->validate($request, [
            'nama_kehilangan'     => 'required|min:5',
            'persyaratan'     => 'required',
        ]);

        //check if image is uploaded

            $kategorikehilangan->update([
                'nama_kehilangan'     => $request->nama_kehilangan,
                'persyaratan'     => $request->persyaratan,
            ]);
        return redirect()->back()->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy(kategorikehilangan $kategori_kehilangan)
    {
        //delete berita
        $kategori_kehilangan->delete();

        //redirect to index
        return redirect()->back()->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
