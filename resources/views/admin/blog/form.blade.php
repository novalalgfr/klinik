<x-app-layout>
 <div class="bg-white p-4 rounded shadow-sm">
     <h1 class="text-xl font-bold mb-8">{{ isset($blog) ? 'Edit Blog' : 'Add Blog' }}</h1>
     <form action="{{ isset($blog) ? route('blog.update', $blog->id) : route('blog.store') }}" method="POST" enctype="multipart/form-data">
         @csrf
         @if(isset($blog))
             @method('PUT')
         @endif
         <div class="mb-4">
             <label for="judul" class="block font-medium mb-2">Judul</label>
             <input type="text" name="judul" id="judul" class="border px-4 py-2 w-full rounded" value="{{ old('judul', $blog->judul ?? '') }}">
         </div>
         <div class="mb-4">
             <label for="deskripsi" class="block font-medium mb-2">Deskripsi Pendek</label>
             <textarea name="deskripsi" id="deskripsi" class="border px-4 py-2 w-full rounded">{{ old('deskripsi_pendek', $blog->deskripsi_pendek ?? '') }}</textarea>
         </div>
         <div class="mb-4">
             <label for="deskripsi" class="block font-medium mb-2">Deskripsi Panjang</label>
             <textarea name="deskripsi" id="deskripsi" class="border px-4 py-2 w-full rounded">{{ old('deskripsi_panjang', $blog->deskripsi_panjang ?? '') }}</textarea>
         </div>
         <div class="mb-4">
             <label for="gambar" class="block font-medium mb-2">Icon</label>
             <input type="file" name="gambar" id="gambar" class="border px-4 py-2 w-full rounded">
             @if(isset($blog) && $blog->gambar)
                 <img src="{{ asset('storage/' . $blog->gambar) }}" class="h-16 mt-2">
             @endif
         </div>
         <div>
             <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
                 {{ isset($blog) ? 'Update' : 'Save' }}
             </button>
         </div>
     </form>
 </div>
</x-app-layout>