<?php

 namespace App\Http\Controllers;
 
 use Illuminate\Http\Request;
 use App\Models\tentang_kami;
 
 class Tentang_KamiController extends Controller
 {
     // GET - Menampilkan daftar tentang_kami
     public function index()
     {
         $tentang_kamis = tentang_kami::all();
         return view('admin.tentang_kami.index', compact('tentang_kamis'));
     }
 
     // GET per ID - Menampilkan detail tentang_kami
     public function show($id)
     {
         $tentang_kami = tentang_kami::findOrFail($id);
         return view('admin.tentang_kami.show', compact('tentang_kami'));
     }
 
     // GET Create - Menampilkan form tambah tentang_kami
     public function create()
     {
         return view('admin.tentang_kami.form');
     }
 
     // POST - Menyimpan tentang_kami baru
     public function store(Request $request)
     {
         $request->validate([
             'judul' => 'required|string|max:255',
             'deskripsi' => 'nullable|string',
         ]);
 
         tentang_kami::create([
             'judul' => $request->judul,
             'deskripsi' => $request->deskripsi,
         ]);
 
         return redirect()->route('tentang_kami.index')->with('success', 'tentang_kami berhasil ditambahkan.');
     }
 
     // GET Edit - Menampilkan form edit tentang_kami
     public function edit($id)
     {
         $tentang_kami = tentang_kami::findOrFail($id);
         return view('admin.tentang_kami.form', compact('tentang_kami'));
     }
 
     // UPDATE - Menyimpan perubahan pada tentang_kami
     public function update(Request $request, $id)
     {
         $request->validate([
             'judul' => 'required|string|max:255',
             'deskripsi' => 'nullable|string',
         ]);
 
         $tentang_kami = tentang_kami::findOrFail($id);

         $tentang_kami->update([
             'judul' => $request->judul,
             'deskripsi' => $request->deskripsi,
         ]);
 
         return redirect()->route('tentang_kami.index')->with('success', 'tentang_kami berhasil diperbarui.');
     }
 
     // DELETE - Menghapus tentang_kami
     public function destroy($id)
     {
         $tentang_kami = tentang_kami::findOrFail($id);
         $tentang_kami->delete();
 
         return redirect()->route('tentang_kami.index')->with('success', 'tentang_kami berhasil dihapus.');
     }
 }