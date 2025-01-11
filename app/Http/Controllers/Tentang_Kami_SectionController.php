<?php

 namespace App\Http\Controllers;
 
 use Illuminate\Http\Request;
 use App\Models\tentang_kami_section;
 
 class tentang_kami_sectionController extends Controller
 {
     // GET - Menampilkan daftar tentang_kami_section
     public function index()
     {
         $tentang_kami_sections = tentang_kami_section::all();
         return view('admin.tentang_kami_section.index', compact('tentang_kami_sections'));
     }
 
     // GET per ID - Menampilkan detail tentang_kami_section
     public function show($id)
     {
         $tentang_kami_section = tentang_kami_section::findOrFail($id);
         return view('admin.tentang_kami_section.show', compact('tentang_kami_section'));
     }
 
     // GET Create - Menampilkan form tambah tentang_kami_section
     public function create()
     {
         return view('admin.tentang_kami_section.form');
     }
 
     // POST - Menyimpan tentang_kami_section baru
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
 
         tentang_kami_section::create([
             'judul' => $request->judul,
             'deskripsi' => $request->deskripsi,
             'gambar' => $imagePath,
         ]);
 
         return redirect()->route('tentang_kami_section.index')->with('success', 'tentang_kami_section berhasil ditambahkan.');
     }
 
     // GET Edit - Menampilkan form edit tentang_kami_section
     public function edit($id)
     {
         $tentang_kami_section = tentang_kami_section::findOrFail($id);
         return view('admin.tentang_kami_section.form', compact('tentang_kami_section'));
     }
 
     // UPDATE - Menyimpan perubahan pada tentang_kami_section
     public function update(Request $request, $id)
     {
         $request->validate([
             'judul' => 'required|string|max:255',
             'deskripsi' => 'nullable|string',
             'gambar' => 'nullable|image|max:2048',
         ]);
 
         $tentang_kami_section = tentang_kami_section::findOrFail($id);
 
         if ($request->file('gambar')) {
             $imagePath = $request->file('gambar')->store('images', 'public');
             $tentang_kami_section->gambar = $imagePath;
         }
 
         $tentang_kami_section->update([
             'judul' => $request->judul,
             'deskripsi' => $request->deskripsi,
         ]);
 
         return redirect()->route('tentang_kami_section.index')->with('success', 'tentang_kami_section berhasil diperbarui.');
     }
 
     // DELETE - Menghapus tentang_kami_section
     public function destroy($id)
     {
         $tentang_kami_section = tentang_kami_section::findOrFail($id);
         $tentang_kami_section->delete();
 
         return redirect()->route('tentang_kami_section.index')->with('success', 'tentang_kami_section berhasil dihapus.');
     }
 }