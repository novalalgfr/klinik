<x-app-layout>
 <div class="bg-white p-4 rounded shadow-sm">
     <h1 class="text-xl font-bold mb-8">{{ isset($promo_kami) ? 'Edit Promo_kami' : 'Add Promo_kami' }}</h1>
     <form action="{{ isset($promo_kami) ? route('promo_kami.update', $promo_kami->id) : route('promo_kami.store') }}" method="POST" enctype="multipart/form-data">
         @csrf
         @if(isset($promo_kami))
             @method('PUT')
         @endif
         <div class="mb-4">
             <label for="gambar" class="block font-medium mb-2">Icon</label>
             <input type="file" name="gambar" id="gambar" class="border px-4 py-2 w-full rounded">
             @if(isset($promo_kami) && $promo_kami->gambar)
                 <img src="{{ asset('storage/' . $promo_kami->gambar) }}" class="h-16 mt-2">
             @endif
         </div>
         <div>
             <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
                 {{ isset($promo_kami) ? 'Update' : 'Save' }}
             </button>
         </div>
     </form>
 </div>
</x-app-layout>