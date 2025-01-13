<x-app-layout>
    <div style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('{{ asset('img/bg-blog.png') }}'); background-size: cover; background-position: center; background-attachment: fixed; padding-top: 128px; padding-bottom: 128px;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="text-[72px] font-bold text-white">Blog</h1>
            <h6 class="text-white flex items-center">
                <span class="mr-4">Beranda</span>
                <span class="mr-4">|</span>
                <span class="text-[#008ED6]">Blog</span>
            </h6>
        </div>
    </div>
    <div class="w-full flex-shrink-0">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach ($blogs as $blog)
                    <!-- Card -->
                    <div class="bg-white shadow-md rounded-lg overflow-hidden p-4 border flex flex-col justify-between w-full h-[450px]">
                        <!-- Image -->
                        <div class="flex justify-center">
                            <img src="{{ asset('storage/' . $blog->gambar) }}" alt="" class="h-[128px] w-[286px] object-cover rounded">
                        </div>
                        <!-- Content -->
                        <div class="flex flex-col justify-between flex-1 mt-4">
                            <div>
                                <p class="text-sm text-[#008ED6]">{{ $blog->created_at->translatedFormat('d F Y') }}</p>
                                <h2 class="mt-2 text-base font-semibold text-gray-800">{{ $blog->judul }}</h2>
                                <p class="mt-2 text-sm text-gray-600 text-left line-clamp-4 ">{{ $blog->deskripsi_pendek }}</p>
                            </div>
                            <!-- Button -->
                            <a href="#" class="inline-block mt-4 bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 text-[13px] self-start">
                                Selengkapnya →
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>