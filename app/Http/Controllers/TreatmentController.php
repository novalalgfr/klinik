<?php

namespace App\Http\Controllers;

use App\Models\Treatment;
use Illuminate\Http\Request;

class TreatmentController extends Controller
{
    // GET - Menampilkan daftar treatment
    public function index()
    {
        $treatments = Treatment::all();
        return view('admin.treatment.index', compact('treatments'));
    }

    // GET per ID - Menampilkan detail treatment
    // public function show($id)
    // {
    //     $treatment = Treatment::findOrFail($id);
    //     return view('admin.treatment.show', compact('treatment'));
    // }

    public function show($id)
    {
        $treatment = Treatment::findOrFail($id);
        return view('user.treatment.treatment-detail', compact('treatment'));
    }

    // GET Create - Menampilkan form tambah treatment
    public function create()
    {
        return view('admin.treatment.form');
    }

    // POST - Menyimpan treatment baru
    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'nullable|image|max:2048',
            'judul' => 'required|string|max:255',
            'harga' => 'nullable|numeric',
            'detail' => 'nullable|string',
        ]);

        $imagePath = $request->file('gambar') 
            ? $request->file('gambar')->store('images', 'public') 
            : null;

        Treatment::create([
            'gambar' => $imagePath,
            'judul' => $request->judul,
            'harga' => $request->harga,
            'detail' => $request->detail,
        ]);

        return redirect()->route('treatment.index')->with('success', 'Treatment berhasil ditambahkan.');
    }

    // GET Edit - Menampilkan form edit treatment
    public function edit($id)
    {
        $treatment = Treatment::findOrFail($id);
        return view('admin.treatment.form', compact('treatment'));
    }

    // UPDATE - Menyimpan perubahan pada treatment
    public function update(Request $request, $id)
    {
        $request->validate([
            'gambar' => 'nullable|image|max:2048',
            'judul' => 'required|string|max:255',
        ]);

        $treatment = Treatment::findOrFail($id);

        if ($request->file('gambar')) {
            $imagePath = $request->file('gambar')->store('images', 'public');
            $treatment->gambar = $imagePath;
        }

        $treatment->update([
            'judul' => $request->judul,
            'harga' => $request->harga,
            'detail' => $request->detail,
        ]);

        return redirect()->route('treatment.index')->with('success', 'Treatment berhasil diperbarui.');
    }

    // DELETE - Menghapus treatment
    public function destroy($id)
    {
        $treatment = Treatment::findOrFail($id);
        $treatment->delete();

        return redirect()->route('treatment.index')->with('success', 'Treatment berhasil dihapus.');
    }
}
