<x-app-layout>
    <div style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('{{ asset('img/bg-treatment.png') }}'); background-size: cover; background-position: center; background-attachment: fixed; padding-top: 128px; padding-bottom: 128px;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="text-[72px] font-bold text-white">Treatment</h1>
            <h6 class="text-white flex items-center">
                <span class="mr-4">Beranda</span>
                <span class="mr-4">|</span>
                <span class="text-[#008ED6]">Treatment</span>
            </h6>
        </div>
    </div>
    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            <!-- Item 1 -->
            <div class="text-[16px] text-center">
                <div class="relative bg-[#008ED6] rounded-lg p-4 pb-20 h-64">
                    <img src="{{ asset('img/tindakan-medis.png') }}" alt="Tindakan Medis" class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-4/5 h-64 object-cover z-10">
                </div>
                <h3 class="mt-6 font-semibold">Tindakan Medis</h3>
            </div>
            <!-- Item 2 -->
            <div class="text-[16px] text-center">
                <div class="relative bg-[#008ED6] rounded-lg p-4 pb-20 h-64">
                    <img src="{{ asset('img/mcu.png') }}" alt="MCU" class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-4/5 h-64 object-cover z-10">
                </div>
                <h3 class="mt-6 font-semibold">MCU</h3>
            </div>
            <!-- Item 3 -->
            <div class="text-[16px] text-center">
                <div class="relative bg-[#008ED6] rounded-lg p-4 pb-20 h-64">
                    <img src="{{ asset('img/vaksinisasi.png') }}" alt="Vaksinisasi" class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-4/5 h-64 object-cover z-10">
                </div>
                <h3 class="mt-6 font-semibold">Vaksinisasi</h3>
            </div>
            <!-- Item 4 -->
            <div class="text-[16px] text-center">
                <div class="relative bg-[#008ED6] rounded-lg p-4 pb-20 h-64">
                    <img src="{{ asset('img/suntik.png') }}" alt="Suntik" class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-4/5 h-64 object-cover z-10">
                </div>
                <h3 class="mt-6 font-semibold">Suntik</h3>
            </div>
            <!-- Item 5 -->
            <div class="text-[16px] text-center">
                <div class="relative bg-[#008ED6] rounded-lg p-4 pb-20 h-64">
                    <img src="{{ asset('img/kecantikan.png') }}" alt="Kecantikan" class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-4/5 h-64 object-cover z-10">
                </div>
                <h3 class="mt-6 font-semibold">Kecantikan</h3>
            </div>
            <!-- Item 6 -->
            <div class="text-[16px] text-center">
                <div class="relative bg-[#008ED6] rounded-lg p-4 pb-20 h-64">
                    <img src="{{ asset('img/gigi-mulut.png') }}" alt="Gigi & Mulut" class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-4/5 h-64 object-cover z-10">
                </div>
                <h3 class="mt-6 font-semibold">Gigi & Mulut</h3>
            </div>
            <!-- Item 7 -->
            <div class="text-[16px] text-center">
                <div class="relative bg-[#008ED6] rounded-lg p-4 pb-20 h-64">
                    <img src="{{ asset('img/tes-lab.png') }}" alt="Tes Labolatorium" class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-4/5 h-64 object-cover z-10">
                </div>
                <h3 class="mt-6 font-semibold">Tes Labolatorium</h3>
            </div>
            <!-- Item 8 -->
            <div class="text-[16px] text-center">
                <div class="relative bg-[#008ED6] rounded-lg p-4 pb-20 h-64">
                    <img src="{{ asset('img/pemeriksaan-kes.png') }}" alt="Pemeriksaan Kesehatan" class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-4/5 h-64 object-cover z-10">
                </div>
                <h3 class="mt-6 font-semibold">Pemeriksaan Kesehatan</h3>
            </div>
            <!-- Item 9 -->
            <div class="text-[16px] text-center">
                <div class="relative bg-[#008ED6] rounded-lg p-4 pb-20 h-64">
                    <img src="{{ asset('img/bedah-minor.png') }}" alt="Bedah Minor" class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-4/5 h-64 object-cover z-10">
                </div>
                <h3 class="mt-6 font-semibold">Bedah Minor</h3>
            </div>
            <!-- Item 10 -->
            <div class="text-[16px] text-center">
                <div class="relative bg-[#008ED6] rounded-lg p-4 pb-20 h-64">
                    <img src="{{ asset('img/radiologi-elek.png') }}" alt="Radiologi & Elektromedik" class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-4/5 h-64 object-cover z-10">
                </div>
                <h3 class="mt-6 font-semibold">Radiologi & Elektromedik</h3>
            </div>
            <!-- Item 11 -->
            <div class="text-[16px] text-center">
                <div class="relative bg-[#008ED6] rounded-lg p-4 pb-20 h-64">
                    <img src="{{ asset('img/kehamilan.png') }}" alt="Kehamilan" class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-4/5 h-64 object-cover z-10">
                </div>
                <h3 class="mt-6 font-semibold">Kehamilan</h3>
            </div>
            <!-- Item 12 -->
            <div class="text-[16px] text-center">
                <div class="relative bg-[#008ED6] rounded-lg p-4 pb-20 h-64">
                    <img src="{{ asset('img/penunjang.png') }}" alt="Penunjang" class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-4/5 h-64 object-cover z-10">
                </div>
                <h3 class="mt-6 font-semibold">Penunjang</h3>
            </div>
        </div>
    </div>
</x-app-layout>