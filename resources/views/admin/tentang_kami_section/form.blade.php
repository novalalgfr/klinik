<x-app-layout>
    <div class="bg-white p-4 rounded shadow-sm">
        <h1 class="text-xl font-bold mb-8">{{ isset($tentang_kami_section) ? 'Edit Tentang Kami Section' : 'Tambah Tentang Kami Section' }}</h1>
        <form action="{{ isset($tentang_kami_section) ? route('tentang_kami_section.update', $tentang_kami_section->id) : route('tentang_kami_section.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($tentang_kami_section))
                @method('PUT')
            @endif
            
            <div class="mb-4">
                <label for="judul" class="block font-medium mb-2">Judul</label>
                <input type="text" name="judul" id="judul" class="border px-4 py-2 w-full rounded" value="{{ old('judul', $tentang_kami_section->judul ?? '') }}">
            </div>

            <div class="mb-4">
                <label for="deskripsi" class="block font-medium mb-2">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" class="border px-4 py-2 w-full rounded">{{ old('deskripsi', $tentang_kami_section->deskripsi ?? '') }}</textarea>
            </div>

            <div class="mb-4">
                <label for="gambar" class="block font-medium mb-2">Icon</label>
                <input type="file" name="gambar" id="gambar" class="border px-4 py-2 w-full rounded">
                @if(isset($tentang_kami_section) && $tentang_kami_section->gambar)
                    <img src="{{ asset('storage/' . $tentang_kami_section->gambar) }}" class="h-16 mt-2">
                @endif
            </div>
            
            <div>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
                    {{ isset($tentang_kami_section) ? 'Perbarui' : 'Simpan' }}
                </button>
            </div>
        </form>
    </div>
</x-app-layout>