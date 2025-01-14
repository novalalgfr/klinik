<x-app-layout>
    <div class="bg-white p-4 rounded shadow-sm">
        <h1 class="text-xl font-bold mb-8">Daftar Tentang Kami Section</h1>
        <a href="{{ route('tentang_kami_section.create') }}" class="text-sm bg-blue-600 text-white px-4 py-2 rounded">Tambahkan Tentang Kami Section</a>
        <table class="table-auto w-full mt-4 border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border px-4 py-2">#</th>
                    <th class="border px-4 py-2">Judul</th>
                    <th class="border px-4 py-2">Deskripsi</th>
                    <th class="border px-4 py-2">Gambar</th>
                    <th class="border px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($tentang_kami_sections as $tentang_kami_section)
                <tr>
                    <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                    <td class="border px-4 py-2">{{ $tentang_kami_section->judul }}</td>
                    <td class="border px-4 py-2">{{ $tentang_kami_section->deskripsi }}</td>
                    <td class="border px-4 py-2">
                        @if($tentang_kami_section->gambar)
                            <img src="{{ asset('storage/' . $tentang_kami_section->gambar) }}" class="h-16">
                        @else
                            No Image
                        @endif
                    </td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('tentang_kami_section.edit', $tentang_kami_section->id) }}" class="text-sm bg-yellow-500 text-white px-4 py-2 rounded">Edit</a>
                        <form action="{{ route('tentang_kami_section.destroy', $tentang_kami_section->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-sm bg-red-500 text-white px-4 py-2 rounded" onclick="return confirm('Are you sure?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center border px-4 py-2">Tidak ada data</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-app-layout>