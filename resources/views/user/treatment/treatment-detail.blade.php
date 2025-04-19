<x-app-layout>
    <div style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('{{ asset('img/bg-treatment.png') }}'); background-size: cover; background-position: center; background-attachment: fixed; padding-top: 128px; padding-bottom: 128px;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="text-[72px] font-bold text-white">Treatment</h1>
        </div>
    </div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-12 gap-20">
            <div class="col-span-8">
                <div class="border-b border-[#DDDDDD] pb-4 mb-4">
                    <img src="{{ asset('storage/' . $treatment->gambar) }}" alt="{{ $treatment->judul }}" class="w-full h-[400px] rounded-lg mb-2">
                    <h1 class="font-bold text-[20px] mb-1">{{ $treatment->judul }}</h1>
                    <h6 class="text-[16px] text-gray-500">Rp. {{ number_format($treatment->harga, 0, ',', '.') }}</h6>
                </div>
                <div class="border-b border-[#DDDDDD] flex items-center justify-between gap-8 pb-4 mb-4">
                    <div>
                        <h1 class="font-bold text-[16px] mb-1">Klinik Carelink</h1>
                        <h6 class="text-[14px] text-gray-500">Jl. Jendral Sudirman No 86, RW 11, Karet Tengsin, Kota Jakarta Pusat, DKI Jakarta</h6>
                    </div>
                    <a href="https://g.co/kgs/WSdRN8z" target="_blank" class="flex flex-col gap-2 items-center cursor-pointer">
                        <img src="{{ asset('img/maps.png') }}" alt="maps" class="w-[70px] h-[70px] object-cover">
                        <p class="text-gray-500 text-[13px] text-gray-500 whitespace-nowrap">Klik untuk peta</p>
                    </a>
                </div>
                <div class="">
                    <h1 class="font-bold text-[16px] mb-1">Detail Layanan</h1>
                    <p class="text-[14px] text-gray-500 text-justify leading-6">
                        {{ $treatment->detail }}
                    </p>
                    <p class="text-[14px] font-bold mt-4">Note:</p>
                    <p class="text-[14px] text-gray-500 text-justify leading-6">Buat Janji dilakukan maksimal H-1. Pemesanan yang sudah dibayar tidak dapat dibatalkan dan tidak ada pengembalian dana atau refund.</p>
                </div>
            </div>
            <div class="col-span-4">
                <div class="sticky top-4"> <!-- Tambahkan div wrapper dengan class sticky -->
                    @include('components.date-picker', ['judul' => $treatment->judul])
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
