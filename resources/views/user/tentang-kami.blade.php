<x-app-layout>
    <div style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('{{ asset('img/bg-tentang-kami.png') }}'); background-size: cover; background-position: center; background-attachment: fixed; padding-top: 128px; padding-bottom: 128px;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="text-[72px] font-bold text-white">Tentang Kami</h1>
            <h6 class="text-white flex items-center">
                <span class="mr-4">Beranda</span>
                <span class="mr-4">|</span>
                <span class="text-[#008ED6]">Tentang Kami</span>
            </h6>
        </div>
    </div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-12">
    <div class="grid grid-cols-2 gap-4">
        <div>
            <img src="{{ asset(path: 'img/rmhskit.png') }}" alt="logo">
        </div>
        <div>
            <h6 class="text-base font-bold font text-[24px] mb-[12px]">Lokasi Faskes
            </h6>
            <div class="flex gap-[4px] mb-[10px]">
                <i class="bi bi-geo-alt-fill"></i>
                <h6 class="text-base text-[14px]">Jl. Raya Padepokan Kosong Satu No. 10, Kelurahan Citayem, Kecamatan Pasar Rebo, Bogor, Jawa Barat.
                </h6>
            </div> 
            <div class="flex gap-[4px] mb-[40px]">
                <i class="bi bi-telephone-fill"></i>
                <h1>0711-XXXXXXX</h1>
            </div>
            <h6 class="text-base font-bold font text-[24px] mb-[12px]">Info Faskes 
            </h6>
            <h6 class="text-base leading-[1.75] text-[14px] ">Klinik Kecantikan Carelink terletak di Jakarta Selatan dan menawarkan berbagai macam layanan kecantikan. Dikelola oleh tim profesional yang terdiri dari tenaga medis dan non-medis, Klinik Kecantikan Carelink berkomitmen untuk memberikan pelayanan terbaik dan solusi kecantikan yang aman serta efektif untuk setiap pelanggan. Kami selalu mengutamakan kenyamanan dan kepuasan Anda dalam setiap perawatan yang kami berikan.
                </h6>
            
    </div>
    <div class="space-y-2">
    <h6 class="text-base font-bold font text-[24px] mb-[12px]">Jam Operasional 
    </h6>
        <p class="text-base font-medium text-[14px] text-gray-500">Senin : <span class="font-normal">00:00 - 24:00 WIB</span></p>
        <p class="text-base font-medium text-[14px] text-gray-500">Selasa : <span class="font-normal">00:00 - 24:00 WIB</span></p>
        <p class="text-base font-medium text-[14px] text-gray-500">Rabu : <span class="font-normal">00:00 - 24:00 WIB</span></p>
        <p class="text-base font-medium text-[14px] text-gray-500">Kamis : <span class="font-normal">00:00 - 24:00 WIB</span></p>
        <p class="text-base font-medium text-[14px] text-gray-500">Jumat : <span class="font-normal">00:00 - 24:00 WIB</span></p>
        <p class="text-base font-medium text-[14px] text-gray-500">Sabtu : <span class="font-normal">00:00 - 24:00 WIB</span></p>
        <p class="text-base font-medium text-[14px] text-gray-500">Minggu : <span class="font-normal">00:00 - 24:00 WIB</span></p>
    </div>

     
    </div>
    </div>
    
    
</x-app-layout>