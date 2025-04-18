<x-app-layout>
    <div class="bg-white p-4 rounded shadow-sm">
        <h1 class="text-xl font-bold mb-8">{{ isset($pelayan_kami) ? 'Edit Pelayan Kami' : 'Tambah Pelayan Kami' }}</h1>
        <form action="{{ isset($pelayan_kami) ? route('pelayan_kami.update', $pelayan_kami->id) : route('pelayan_kami.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($pelayan_kami))
                @method('PUT')
            @endif
            
            <div class="mb-4">
                <label for="judul" class="block font-medium mb-2">Judul</label>
                <input type="text" name="judul" id="judul" class="border px-4 py-2 w-full rounded" value="{{ old('judul', $pelayan_kami->judul ?? '') }}">
            </div>

            <div class="mb-4">
                <label for="deskripsi" class="block font-medium mb-2">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" class="border px-4 py-2 w-full rounded">{{ old('deskripsi', $pelayan_kami->deskripsi ?? '') }}</textarea>
            </div>

            <div class="mb-4">
                <label for="gambar" class="block font-medium mb-2">Icon</label>
                <input type="file" name="gambar" id="gambar" class="border px-4 py-2 w-full rounded">
                @if(isset($pelayan_kami) && $pelayan_kami->gambar)
                    <img src="{{ asset('storage/' . $pelayan_kami->gambar) }}" class="h-16 mt-2">
                @endif
            </div>
            
            <div>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
                    {{ isset($pelayan_kami) ? 'Perbarui' : 'Simpan' }}
                </button>
            </div>
        </form>
    </div>
</x-app-layout>