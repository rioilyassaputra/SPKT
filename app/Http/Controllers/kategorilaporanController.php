<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriLaporan;

class kategorilaporanController extends Controller
{
    public function index()
    {
        $kategoriLaporan = KategoriLaporan::all();
        $kategori_laporan = KategoriLaporan::all();
        return view('admin.kategori_laporan.index', compact('kategoriLaporan', 'kategori_laporan') );
    }

    public function store(request $request)
    {
        $this->validate($request, [
            'nama_kategori_laporan'     => 'required|min:4',
    ]);

    KategoriLaporan::create([
        'nama_kategori_laporan'     => $request->nama_kategori_laporan,
    ]);

    //redirect to index
    return redirect()->back()->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(KategoriLaporan $kategori_laporan)
    {
        return view('admin.kategori_laporan.edit', compact('kategori_laporan'));
    }

    public function update(Request $request, KategoriLaporan $kategori_laporan)
    {
        //validate form
        $this->validate($request, [
            'nama_kategori_laporan'     => 'required|min:5',
        ]);

            $kategori_laporan->update([
                'nama_kategori_laporan'     => $request->nama_kategori_laporan,
            ]);
        return redirect()->route('kategori-laporan.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy(kategoriLaporan $kategori_laporan)
    {
        //delete berita
        $kategori_laporan->delete();

        //redirect to index
        return redirect()->back()->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
