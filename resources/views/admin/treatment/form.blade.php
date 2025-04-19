<x-app-layout>
    <div class="bg-white p-4 rounded shadow-sm">
        <h1 class="text-xl font-bold mb-8">{{ isset($treatment) ? 'Edit Treatment' : 'Add Treatment' }}</h1>
        <form action="{{ isset($treatment) ? route('treatment.update', $treatment->id) : route('treatment.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($treatment))
                @method('PUT')
            @endif
            <div class="mb-4">
                <label for="gambar" class="block font-medium mb-2">Icon</label>
                <input type="file" name="gambar" id="gambar" class="border px-4 py-2 w-full rounded">
                @if(isset($treatment) && $treatment->gambar)
                    <img src="{{ asset('storage/' . $treatment->gambar) }}" class="h-16 mt-2">
                @endif
            </div>
            <div class="mb-4">
                <label for="judul" class="block font-medium mb-2">Judul</label>
                <input type="text" name="judul" id="judul" class="border px-4 py-2 w-full rounded" value="{{ old('judul', $treatment->judul ?? '') }}">
            </div>
            <div class="mb-4">
                <label for="harga" class="block font-medium mb-2">Harga</label>
                <input type="text" name="harga" id="harga" class="border px-4 py-2 w-full rounded" value="{{ old('harga', $treatment->harga ?? '') }}">
            </div>
            <div class="mb-4">
                <label for="detail" class="block font-medium mb-2">Detail</label>
                <input type="text" name="detail" id="detail" class="border px-4 py-2 w-full rounded" value="{{ old('detail', $treatment->detail ?? '') }}">
            </div>
            <div>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
                    {{ isset($treatment) ? 'Update' : 'Save' }}
                </button>
            </div>
        </form>
    </div>
</x-app-layout>