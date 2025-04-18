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
    
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-12 space-y-6">
        <div class="grid grid-cols-12 gap-8 ">
            <div class="col-span-7">
                <img src="{{ asset('img/rmhskit.png') }}" alt="rmhskit" class="w-full h-[400px] object-cover rounded-md">
            </div>
            <div class="col-span-5">
                <h1 class="text-[20px] font-bold mb-3">Klinik CareLink</h1>
                <div class="flex items-start gap-3 mb-2">
                    <i class="bi bi-geo-alt text-[18px] text-gray-500"></i>
                    <p class="text-[15px] text-gray-500">Jl. Raya Padepokan Kosong Satu No. 10, Kelurahan Citayem, Kecamatan Pasar Rebo, Bogor, Jawa Barat.</p>
                </div>
                <div class="flex items-center gap-3 mb-2">
                    <i class="bi bi-telephone text-[18px] text-gray-500"></i>
                    <p class="text-[15px] text-gray-500">0855 6666 7777</p>
                </div>
                <div class="w-fit flex flex-col gap-2 items-center">
                    <img src="{{ asset('img/maps.png') }}" alt="maps" class="w-[70px] h-[70px] object-cover">
                    <p class="text-gray-500 text-[13px] text-gray-500 whitespace-nowrap">Klik untuk peta</p>
                </div>
            </div>
        </div>
        <div class="">
            <h1 class="text-[20px] font-bold mb-2">Info Klinik</h1>
            <p class="text-[15px] text-gray-500 text-justify leading-6">
                CareLink adalah klinik kecantikan yang menghadirkan berbagai perawatan estetika dengan teknologi terbaru. Didukung oleh tenaga ahli berpengalaman dan layanan yang ramah, CareLink berkomitmen memberikan hasil terbaik dalam suasana klinik yang nyaman dan aman. Cocok untuk Anda yang ingin memperbaiki tekstur kulit, mengatasi flek hitam, hingga peremajaan wajah dengan pendekatan yang profesional dan personal.
            </p>
        </div>
        <div class="">
            <h1 class="text-[20px] font-bold mb-2">Jadwal Operasional</h1>
            <div class="grid grid-cols-12 gap-4">
                <h1 class="text-[15px] text-gray-500 mb-2">Senin:</h1>
                <p class="col-span-11 text-[15px] text-gray-500">08.00 - 17.00</p>
            </div>
            <div class="grid grid-cols-12 gap-4">
                <h1 class="text-[15px] text-gray-500 mb-2">Selasa:</h1>
                <p class="col-span-11 text-[15px] text-gray-500">08.00 - 17.00</p>
            </div>
            <div class="grid grid-cols-12 gap-4">
                <h1 class="text-[15px] text-gray-500 mb-2">Rabu:</h1>
                <p class="col-span-11 text-[15px] text-gray-500">08.00 - 17.00</p>
            </div>
            <div class="grid grid-cols-12 gap-4">
                <h1 class="text-[15px] text-gray-500 mb-2">Kamis:</h1>
                <p class="col-span-11 text-[15px] text-gray-500">08.00 - 17.00</p>
            </div>
            <div class="grid grid-cols-12 gap-4">
                <h1 class="text-[15px] text-gray-500 mb-2">Jumat:</h1>
                <p class="col-span-11 text-[15px] text-gray-500">08.00 - 17.00</p>
            </div>
            <div class="grid grid-cols-12 gap-4">
                <h1 class="text-[15px] text-gray-500 mb-2">Sabtu:</h1>
                <p class="col-span-11 text-[15px] text-gray-500">09.00 - 16.00</p>
            </div>
            <div class="grid grid-cols-12 gap-4">
                <h1 class="text-[15px] text-gray-500 mb-2">Minggu:</h1>
                <p class="col-span-11 text-[15px] text-gray-500">09.00 - 16.00</p>
            </div>
        </div>
        <div class="">
            <h1 class="text-[20px] font-bold mb-2">Fasilitas</h1>
            <div class="flex gap-6">
                <div class="flex gap-3 items-center">
                    <img src="{{ asset('img/couch.png') }}" alt="couch" class="w-[24px] h-[24px] object-cover">
                    <p class="text-[15px] text-gray-500">Ruangan Pribadi & Nyaman</p>
                </div>
                <div class="flex gap-3 items-center">
                    <img src="{{ asset('img/hygiene.png') }}" alt="hygiene" class="w-[24px] h-[24px] object-cover">
                    <p class="text-[15px] text-gray-500">Ruangan Pribadi & Nyaman</p>
                </div>
                <div class="flex gap-3 items-center">
                    <img src="{{ asset('img/doctor.png') }}" alt="doctor" class="w-[24px] h-[24px] object-cover">
                    <p class="text-[15px] text-gray-500">Dokter Tersertifikasi</p>
                </div>
                <div class="flex gap-3 items-center">
                    <img src="{{ asset('img/support.png') }}" alt="support" class="w-[24px] h-[24px] object-cover">
                    <p class="text-[15px] text-gray-500">Pelayanan Ramah</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>