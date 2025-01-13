<div class="flex flex-col items-center max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="flex items-center gap-[8px] mb-[2px]">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#008ED6" class="bi bi-headset" viewBox="0 0 16 16">
            <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5"/>
        </svg>
        <h6 class="text-base font-semibold text-[#008ED6]">Pelayanan Kami</h6>
    </div>
    <h1 class="text-[40px] font-bold mb-6">Solusi kesehatan Anda, setiap saat</h1>
    <div>
        <div class="grid grid-cols-2 gap-6">
            @foreach ($pelayan_kamis as $pelayan_kami)
            <!-- Card 1 -->
            <div>
                <div class="flex gap-4">
                    <div class="w-[60px] h-[60px] bg-gray-300 rounded">
                        <img src="{{ asset('storage/' . $pelayan_kami->gambar) }}" alt="pelayan Image" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-[16px]">{{ $pelayan_kami->judul }}</h3>
                        <p class="text-sm text-gray-500 mb-[20px]">
                            {{ $pelayan_kami->deskripsi }}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
