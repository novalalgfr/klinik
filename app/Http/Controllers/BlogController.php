<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    // GET - Menampilkan daftar blog
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blog.index', compact('blogs'));
    }

    // GET per ID - Menampilkan detail blog
    public function show($id)
    {
        $blog = Blog::findOrFail($id); // Ambil data berdasarkan ID
        return view('user.blog.blog-detail', compact('blog'));
    }

    // GET Create - Menampilkan form tambah blog
    public function create()
    {
        return view('admin.blog.form');
    }

    // POST - Menyimpan blog baru
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi_pendek' => 'nullable|string',
            'deskripsi_panjang' => 'nullable|string',
            'gambar' => 'nullable|image|max:2048',
        ]);

        $imagePath = $request->file('gambar') 
            ? $request->file('gambar')->store('images', 'public') 
            : null;

        Blog::create([
            'judul' => $request->judul,
            'deskripsi_pendek' => $request->deskripsi_pendek,
            'deskripsi_panjang' => $request->deskripsi_panjang,
            'gambar' => $imagePath,
        ]);

        return redirect()->route('blog.index')->with('success', 'Blog berhasil ditambahkan.');
    }

    // GET Edit - Menampilkan form edit blog
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blog.form', compact('blog'));
    }

    // UPDATE - Menyimpan perubahan pada blog
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi_pendek' => 'nullable|string',
            'deskripsi_panjang' => 'nullable|string',
            'gambar' => 'nullable|image|max:2048',
        ]);

        $blog = Blog::findOrFail($id);

        if ($request->file('gambar')) {
            $imagePath = $request->file('gambar')->store('images', 'public');
            $blog->gambar = $imagePath;
        }

        $blog->update([
            'judul' => $request->judul,
            'deskripsi_pendek' => $request->deskripsi_pendek,
            'deskripsi_panjang' => $request->deskripsi_panjang,
        ]);

        return redirect()->route('blog.index')->with('success', 'Blog berhasil diperbarui.');
    }

    // DELETE - Menghapus blog
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->route('blog.index')->with('success', 'Blog berhasil dihapus.');
    }
}