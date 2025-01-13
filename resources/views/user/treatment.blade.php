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
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-12">
        @foreach ($treatments as $treatment)
            <!-- Item 1 -->
            <div class="text-[16px] text-center">
                <div class="p-4 pb-20 h-56 mt-12">
                    <img src="{{ asset('storage/' . $treatment->gambar) }}" alt="Treatment Medis" class="w-full h-52 object-cover z-10">
                </div>
                <h3 class="mt-3 font-semibold">{{ $treatment->judul }}</h3>
            </div>
        @endforeach
        </div>
    </div>
</x-app-layout>