<?php

namespace App\Http\Controllers;

use App\Models\mobilbaherindo;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    // Tampilkan daftar mobil pakai view 'car.blade.php'
    public function index()
    {
        $mobil = mobilbaherindo::all();
        return view('formcar.create', compact('mobil')); // file: resources/views/car.blade.php
    }

     public function show($id)
{
    $mobil = mobilbaherindo::findOrFail($id);
    return view('formcar.show', compact('mobil'));
}

    // Tampilkan form tambah mobil (view di formcar/create.blade.php)
    public function create()
    {
        return view('formcar.create'); // file: resources/views/formcar/create.blade.php
    }

    // Simpan data mobil baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_mobil'   => 'required|string|max:255',
            'harga_mobil'  => 'required|numeric',
            'tahun_mobil'  => 'required|integer|min:1900|max:' . date('Y'),
            'km_mobil'     => 'required|numeric',
            'gambar_mobil' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('gambar_mobil')) {
            $validated['gambar_mobil'] = $request->file('gambar_mobil')->store('uploads/mobil', 'public');
        }

         mobilbaherindo::create($validated);
        return redirect('car.index');
    }

    // Tampilkan form edit mobil
    public function edit($id)
    {
        $mobil = mobilbaherindo::findOrFail($id);
        return view('formcar.edit', compact('mobil'));
    }

    // Update data mobil
    public function update(Request $request, $id)
    {
        $mobil = mobilbaherindo::findOrFail($id);

        $validated = $request->validate([
            'nama_mobil'   => 'required|string|max:255',
            'harga_mobil'  => 'required|numeric',
            'tahun_mobil'  => 'required|integer|min:1900|max:' . date('Y'),
            'km_mobil'     => 'required|numeric',
            'gambar_mobil' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('gambar_mobil')) {
            if ($mobil->gambar_mobil && file_exists(public_path('storage/' . $mobil->gambar_mobil))) {
                unlink(public_path('storage/' . $mobil->gambar_mobil));
            }
            $validated['gambar_mobil'] = $request->file('gambar_mobil')->store('uploads/mobil', 'public');
        }

        $mobil->update($validated);

        return redirect()->route('car.index')->with('success', 'Mobil berhasil diperbarui!');
    }

    // Hapus data mobil
    public function destroy($id)
    {
        $mobil = mobilbaherindo::findOrFail($id);

        if ($mobil->gambar_mobil && file_exists(public_path('storage/' . $mobil->gambar_mobil))) {
            unlink(public_path('storage/' . $mobil->gambar_mobil));
        }

        $mobil->delete();

        return redirect()->route('car.index')->with('success', 'Mobil berhasil dihapus!');
    }
}
