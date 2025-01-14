<x-app-layout>
    <div class="bg-white p-4 rounded shadow-sm">
        <h1 class="text-xl font-bold mb-8">{{ isset($tentang_kami) ? 'Edit Tentang Kami' : 'Tambah Tentang Kami' }}</h1>
        <form action="{{ isset($tentang_kami) ? route('tentang_kami.update', $tentang_kami->id) : route('tentang_kami.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($tentang_kami))
                @method('PUT')
            @endif
            
            <div class="mb-4">
                <label for="judul" class="block font-medium mb-2">Judul</label>
                <input type="text" name="judul" id="judul" class="border px-4 py-2 w-full rounded" value="{{ old('judul', $tentang_kami->judul ?? '') }}">
            </div>

            <div class="mb-4">
                <label for="deskripsi" class="block font-medium mb-2">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" class="border px-4 py-2 w-full rounded">{{ old('deskripsi', $tentang_kami->deskripsi ?? '') }}</textarea>
            </div>
            
            <div>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
                    {{ isset($tentang_kami) ? 'Perbarui' : 'Simpan' }}
                </button>
            </div>
        </form>
    </div>
</x-app-layout>