<div class="grid grid-cols-2 gap-8">
    <div>
        <div class="flex items-center gap-[8px] mb-[2px]">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#008ED6" class="bi bi-building-fill" viewBox="0 0 16 16">
            <path d="M3 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h3v-3.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V16h3a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1zm1 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5M4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM7.5 5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5m2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM4.5 8h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5m2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5"/>
            </svg>
            <h6 class="text-base font-semibold text-[#008ED6]">Tentang Kami</h6>
        </div>
        <div>
            <h1 class="text-[40px] font-bold">{{ $tentang_kami_sections->judul }}<span class="text-[#008ED6]">Link</span></h1>
            <h1 class="text-[16px] text-justify text-gray-500 leading-[27px] mb-[20px]">{{ $tentang_kami_sections->deskripsi }}</h1>
            <a  
            href="/tentang-kami" class="px-6 py-2 bg-[#008ED6] text-white rounded-md hover:bg-blue-600 transition] text-[14px]">
            Selengkapnya <i class="bi bi-arrow-right ml-[4px]"></i>
            </a>
        </div>
    </div>
    <div>
        <img src="{{ asset('storage/' . $tentang_kami_sections->gambar) }}" class="rounded-[12px]" alt="logo">
    </div>
</div>