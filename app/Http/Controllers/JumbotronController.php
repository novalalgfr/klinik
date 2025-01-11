<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jumbotron;

class JumbotronController extends Controller
{
    // GET - Menampilkan daftar jumbotron
    public function index()
    {
        $jumbotrons = Jumbotron::all();
        return view('admin.jumbotron.index', compact('jumbotrons'));
    }

    // GET per ID - Menampilkan detail jumbotron
    public function show($id)
    {
        $jumbotron = Jumbotron::findOrFail($id);
        return view('admin.jumbotron.show', compact('jumbotron'));
    }

    // GET Create - Menampilkan form tambah jumbotron
    public function create()
    {
        return view('admin.jumbotron.form');
    }

    // POST - Menyimpan jumbotron baru
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

        Jumbotron::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $imagePath,
        ]);

        return redirect()->route('jumbotron.index')->with('success', 'Jumbotron berhasil ditambahkan.');
    }

    // GET Edit - Menampilkan form edit jumbotron
    public function edit($id)
    {
        $jumbotron = Jumbotron::findOrFail($id);
        return view('admin.jumbotron.form', compact('jumbotron'));
    }

    // UPDATE - Menyimpan perubahan pada jumbotron
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|max:2048',
        ]);

        $jumbotron = Jumbotron::findOrFail($id);

        if ($request->file('gambar')) {
            $imagePath = $request->file('gambar')->store('images', 'public');
            $jumbotron->gambar = $imagePath;
        }

        $jumbotron->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('jumbotron.index')->with('success', 'Jumbotron berhasil diperbarui.');
    }

    // DELETE - Menghapus jumbotron
    public function destroy($id)
    {
        $jumbotron = Jumbotron::findOrFail($id);
        $jumbotron->delete();

        return redirect()->route('jumbotron.index')->with('success', 'Jumbotron berhasil dihapus.');
    }
}