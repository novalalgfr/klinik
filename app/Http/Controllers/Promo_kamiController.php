<?php

 namespace App\Http\Controllers;
 
 use Illuminate\Http\Request;
 use App\Models\Promo_kami;
 
 class Promo_kamiController extends Controller
 {
     // GET - Menampilkan daftar promo_kami
     public function index()
     {
         $promo_kami = Promo_kami::all();
         return view('admin.promo_kami.index', compact('promo_kami'));
     }
 
     // GET per ID - Menampilkan detail promo_kami
     public function show($id)
     {
         $promo_kami = Promo_kami::findOrFail($id);
         return view('admin.promo_kami.show', compact('promo_kami'));
     }
 
     // GET Create - Menampilkan form tambah promo_kami
     public function create()
     {
         return view('admin.promo_kami.form');
     }
 
     // POST - Menyimpan promo_kami baru
     public function store(Request $request)
     {
         $request->validate([
             'gambar' => 'nullable|image|max:2048',
         ]);
 
         $imagePath = $request->file('gambar') 
             ? $request->file('gambar')->store('images', 'public') 
             : null;
 
         Promo_kami::create([
             'gambar' => $imagePath,
         ]);
 
         return redirect()->route('promo_kami.index')->with('success', 'Promo_kami berhasil ditambahkan.');
     }
 
     // GET Edit - Menampilkan form edit promo_kami
     public function edit($id)
     {
         $promo_kami = Promo_kami::findOrFail($id);
         return view('admin.promo_kami.form', compact('promo_kami'));
     }
 
     // UPDATE - Menyimpan perubahan pada promo_kami
     public function update(Request $request, $id)
     {
         $request->validate([
             'gambar' => 'nullable|image|max:2048',
         ]);
 
         $promo_kami = Promo_kami::findOrFail($id);
 
         if ($request->file('gambar')) {
             $imagePath = $request->file('gambar')->store('images', 'public');
             $promo_kami->gambar = $imagePath;
         }
 
         $promo_kami->update([
            $promo_kami->save()
         ]);
 
         return redirect()->route('promo_kami.index')->with('success', 'Promo_kami berhasil diperbarui.');
     }
 
     // DELETE - Menghapus promo_kami
     public function destroy($id)
     {
         $promo_kami = Promo_kami::findOrFail($id);
         $promo_kami->delete();
 
         return redirect()->route('promo_kami.index')->with('success', 'Promo_kami berhasil dihapus.');
     }
 }