<x-app-layout>
    <div style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('{{ asset('img/bg-treatment.png') }}'); background-size: cover; background-position: center; background-attachment: fixed; padding-top: 128px; padding-bottom: 128px;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="text-[72px] font-bold text-white">Treatment</h1>
        </div>
    </div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-12 gap-12">
            <div class="col-span-8">
                <div class="border-b border-[#DDDDDD] pb-4 mb-4">
                    <p class="mb-2">Ini gambar</p>
                    <h1 class="font-bold text-[20px] mb-1">Nano Laser</h1>
                    <h6 class="text-[16px] text-gray-500">Rp. 60.0000</h6>
                </div>
                <div class="border-b border-[#DDDDDD] flex items-center justify-between gap-8 pb-4 mb-4">
                    <div>
                        <h1 class="font-bold text-[16px] mb-1">Klinik Carelink</h1>
                        <h6 class="text-[14px] text-gray-500">Jl. Raya Padepokan Kosong Satu No. 10, Kelurahan Citayem, Kecamatan Pasar Rebo, Bogor, Jawa Barat.</h6>
                    </div>
                    <div class="flex flex-col gap-2 items-center">
                        <img src="{{ asset('img/maps.png') }}" alt="maps" class="w-[70px] h-[70px] object-cover">
                        <p class="text-gray-500 text-[13px] text-gray-500 whitespace-nowrap">Klik untuk peta</p>
                    </div>
                </div>
                <div class="">
                    <h1 class="font-bold text-[16px] mb-1">Detail Layanan</h1>
                    <p class="text-[14px] text-gray-500 leading-6">
                        Nano laser adalah jenis laser berukuran sangat kecil, bahkan bisa lebih kecil dari panjang gelombang cahaya yang dihasilkannya. Meski ukurannya nano, fungsinya tetap sama seperti laser pada umumnya, yaitu menghasilkan cahaya yang terfokus dan teratur. Karena ukurannya yang sangat kecil, nano laser memiliki banyak keunggulan, seperti efisiensi energi yang tinggi, kecepatan respon yang sangat cepat, serta kemampuan untuk diintegrasikan langsung ke dalam chip elektronik. Teknologi ini memiliki berbagai aplikasi penting, mulai dari komunikasi optik supercepat, sensor biologis, hingga pengobatan kanker dengan terapi cahaya yang lebih presisi.
                    </p>
                    <p class="text-[14px] font-bold mt-4">Note:</p>
                    <p class="text-[14px] text-gray-500 leading-6">Buat Janji dilakukan maksimal H-1. Pemesanan yang sudah dibayar tidak dapat dibatalkan dan tidak ada pengembalian dana atau refund.</p>
                </div>
            </div>
            <div class="col-span-4">
                @include('components.date-picker')
            </div>
        </div>
    </div>
</x-app-layout>
