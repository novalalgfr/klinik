<x-app-layout>
 <div class="bg-white p-4 rounded shadow-sm">
     <h1 class="text-xl font-bold mb-8">Daftar Treatment</h1>
     <a href="{{ route('treatment.create') }}" class="text-sm bg-blue-600 text-white px-4 py-2 rounded">Tambahkan Treatment</a>
     <table class="table-auto w-full mt-4 border-collapse border border-gray-300">
         <thead>
             <tr class="bg-gray-100">
                 <th class="border px-4 py-2">#</th>
                 <th class="border px-4 py-2">Gambar</th>
                 <th class="border px-4 py-2">Judul</th>
                 <th class="border px-4 py-2">Actions</th>
             </tr>
         </thead>
         <tbody>
             @forelse($treatments as $treatment)
             <tr>
                 <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                 <td class="border px-4 py-2">{{ $treatment->judul }}</td>
                 <td class="border px-4 py-2">
                     @if($treatment->gambar)
                         <img src="{{ asset('storage/' . $treatment->gambar) }}" class="h-16">
                     @else
                         No Icon
                     @endif
                 </td>
                 <td class="border px-4 py-2">
                     <a href="{{ route('treatment.edit', $treatment->id) }}" class="text-sm bg-yellow-500 text-white px-4 py-2 rounded">Edit</a>
                     <form action="{{ route('treatment.destroy', $treatment->id) }}" method="POST" class="inline">
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