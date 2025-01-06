<div class="flex flex-col items-center">
    <div class="flex items-center gap-[8px] mb-[2px]">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="#008ED6" d="m21.4 14.25l-7.15 7.15q-.3.3-.675.45t-.75.15t-.75-.15t-.675-.45l-8.825-8.825q-.275-.275-.425-.637T2 11.175V4q0-.825.588-1.412T4 2h7.175q.4 0 .775.163t.65.437l8.8 8.825q.3.3.438.675t.137.75t-.137.738t-.438.662M6.5 8q.625 0 1.063-.437T8 6.5t-.437-1.062T6.5 5t-1.062.438T5 6.5t.438 1.063T6.5 8"/></svg>
        <h6 class="text-base font-semibold text-[#008ED6]">Promo Kami</h6>
    </div>
    <h1 class="text-[40px] font-bold mb-6">Penawaran spesial untuk Anda</h1>
    <div class="relative w-full max-w-5xl overflow-hidden rounded-xl">
        <div class="flex transition-transform duration-500 ease-in-out transform" id="sliderContainer">
            {{-- @foreach ($promos as $promo)
                <div class="w-full flex-shrink-0">
                    <img src="{{ asset('storage/' . $promo->gambar) }}" alt="Promo Image" class="w-full h-full object-cover">
                </div>
            @endforeach --}}
            <div class="w-full flex-shrink-0">
                <img src="{{ asset('img/promo1.png') }}" alt="Promo Image" class="w-full h-full object-cover">
            </div>
            <div class="w-full flex-shrink-0">
                <img src="{{ asset('img/promo2.png') }}" alt="Promo Image" class="w-full h-full object-cover">
            </div>
        </div>
        <button class="absolute top-1/2 left-3 transform -translate-y-1/2 bg-black bg-opacity-50 text-white px-4 py-2 rounded-full focus:outline-none" onclick="prevSlide(); stopAutoplay(); startAutoplay();">
            &#10094;
        </button>
        <button class="absolute top-1/2 right-3 transform -translate-y-1/2 bg-black bg-opacity-50 text-white px-4 py-2 rounded-full focus:outline-none" onclick="nextSlide(); stopAutoplay(); startAutoplay();">
            &#10095;
        </button>
    </div>

    <script>
        let currentIndex = 0;
        const slides = document.querySelectorAll('#sliderContainer > div');
        const totalSlides = slides.length;
        let autoplayInterval;

        function showSlide(index) {
            const sliderContainer = document.getElementById('sliderContainer');
            sliderContainer.style.transform = `translateX(-${index * 100}%)`;
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % totalSlides;
            showSlide(currentIndex);
        }

        function prevSlide() {
            currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
            showSlide(currentIndex);
        }

        function startAutoplay() {
            autoplayInterval = setInterval(nextSlide, 5000);
        }

        function stopAutoplay() {
            clearInterval(autoplayInterval);
        }

        document.addEventListener('DOMContentLoaded', () => {
            startAutoplay();
        });
    </script>
</div>
