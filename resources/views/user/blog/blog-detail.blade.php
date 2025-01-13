<x-app-layout>
    <div style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('{{ asset('img/bg-blog.png') }}'); background-size: cover; background-position: center; background-attachment: fixed; padding-top: 128px; padding-bottom: 128px;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="text-[72px] font-bold text-white">Blog</h1>
        </div>
    </div>
    
    <!-- Gambar -->
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-6"> 
        <div>
            <img src="{{ asset('storage/' . $blog->gambar) }}" alt="{{ $blog->judul }}" class="w-full h-auto rounded-lg shadow-lg mt-[16px]">
        </div>
    </div>

    <!-- Konten -->
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-6">
        <!-- Tanggal -->
        <div class="mt-[-30px] flex gap-[4px]">
            <i class="text-[#008ED6] bi bi-calendar4 mr-2"></i>
            <h6 class="text-base font-medium text-[14px] mb-[20px]"> 
                <span class="text-[#008ED6]">{{ $blog->created_at->translatedFormat('d F Y') }}</span>
            </h6>
        </div>
        
        <!-- Judul -->
        <div>
            <h2 class="text-[48px] mb-[8px] text-[#1E1E20] font-bold"> 
                {{ $blog->judul }}
            </h2>
        </div>

        <!-- Isi Artikel -->
        <div class="space-y-4 text-[16px] text-[#666666] mb-[100px]">
            <p>
                {{ $blog->deskripsi_panjang }}
            </p>
        </div>
    </div>
</x-app-layout>
