<?php

namespace App\Http\Controllers;

use App\Models\Pelayan_kami;
use Illuminate\Http\Request;

class Pelayan_KamiController extends Controller
{
    // GET - Menampilkan daftar pelayan_kami
    public function index()
    {
        $pelayan_kamis = Pelayan_kami::all();
        return view('admin.pelayan_kami.index', compact('pelayan_kamis'));
    }

    // GET per ID - Menampilkan detail pelayan_kami
    public function show($id)
    {
        $pelayan_kami = Pelayan_kami::findOrFail($id);
        return view('admin.pelayan_kami.show', compact('pelayan_kami'));
    }

    // GET Create - Menampilkan form tambah pelayan_kami
    public function create()
    {
        return view('admin.pelayan_kami.form');
    }

    // POST - Menyimpan pelayan_kami baru
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|max:2048',
        ]);

        $imagePath = $request->file('gambar') 
            ? $request->file('gambar')->store('images', 'public') 
            : null;

        Pelayan_kami::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $imagePath,
        ]);

        return redirect()->route('pelayan_kami.index')->with('success', 'Pelayan_kami berhasil ditambahkan.');
    }

    // GET Edit - Menampilkan form edit pelayan_kami
    public function edit($id)
    {
        $pelayan_kami = Pelayan_kami::findOrFail($id);
        return view('admin.pelayan_kami.form', compact('pelayan_kami'));
    }

    // UPDATE - Menyimpan perubahan pada pelayan_kami
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|max:2048',
        ]);

        $pelayan_kami = Pelayan_kami::findOrFail($id);

        if ($request->file('gambar')) {
            $imagePath = $request->file('gambar')->store('images', 'public');
            $pelayan_kami->gambar = $imagePath;
        }

        $pelayan_kami->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('pelayan_kami.index')->with('success', 'Pelayan_kami berhasil diperbarui.');
    }

    // DELETE - Menghapus pelayan_kami
    public function destroy($id)
    {
        $pelayan_kami = Pelayan_kami::findOrFail($id);
        $pelayan_kami->delete();

        return redirect()->route('pelayan_kami.index')->with('success', 'Pelayan_kami berhasil dihapus.');
    }
}
