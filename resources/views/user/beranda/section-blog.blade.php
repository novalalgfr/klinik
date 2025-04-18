<div class="flex flex-col items-center">
    <div class="flex items-center gap-[8px] mb-[2px]">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="#008ED6" d="M5 21q-.825 0-1.412-.587T3 19V5q0-.825.588-1.412T5 3h11l5 5v11q0 .825-.587 1.413T19 21zm2-4h10v-2H7zm0-4h10v-2H7zm8-4h4l-4-4zM7 9h5V7H7z"/></svg>
        <h6 class="text-base font-semibold text-[#008ED6]">Blog Kami</h6>
    </div>
    <h1 class="text-[40px] font-bold">Tips dan informasi seputar kesehatan</h1>
    
    <div class="w-full flex-shrink-0">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach ($blogs->take(4) as $blog)
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
                            <a href="{{ route('blog-detail', ['id' => $blog->id]) }}" 
                            class="inline-block mt-4 bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 text-[13px] self-start">
                                Selengkapnya →
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
        <!-- Button -->
    <div class="mt-6 flex justify-center p-8">
            <button class="px-6 py-2 bg-blue-500 text-white text-sm font-medium rounded-lg hover:bg-blue-600"><a href="http://127.0.0.1:8000/blog">Lihat lainnya →</a></button>
    </div>
</div>