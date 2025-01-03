<x-app-layout>
    <div style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('{{ asset('img/bg-blog.png') }}'); background-size: cover; background-position: center; background-attachment: fixed; padding-top: 128px; padding-bottom: 128px;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="text-[72px] font-bold text-white">Blog</h1>
            <h6 class="text-white flex items-center">
                <span class="mr-4">Beranda</span>
                <span class="mr-4">|</span>
                <span class="text-[#008ED6]">Blog</span>
            </h6>
        </div>
    </div>
    
    <!-- Gambar -->
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-6"> 
        <div>
            <img src="{{ asset(path: 'img/pexels-vanmalidate-769289.jpg') }}" alt="logo" class="w-full h-auto rounded-lg shadow-lg">
        </div>
    </div>

    <!-- Isian -->
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-6">
        <!-- Tanggal -->
        <div class="mt-[-16px] flex gap-[4px]">
            <i class="text-[#008ED6] bi bi-calendar4 mr-2"></i>
            <h6 class="text-base font-bold text-[16px] mb-[16px]"> 
                <span class="text-[#008ED6]">27 Januari 2023</span>
            </h6>
        </div>
        
        <!-- Judul -->
        <div>
            <h2 class="text-[48px] mb-[32px] font-bold text-black"> 
                9 Cara Menaikkan Berat Badan Dengan Sehat
            </h2>
        </div>

        <!-- Isi Artikel -->
        <div class="space-y-4 text-[18px] text-gray-500">
            <p>
                Menaikkan berat badan dengan cara yang sehat dalam waktu sebulan membutuhkan kombinasi dari pola makan yang tepat, olahraga yang terencana, dan perubahan gaya hidup. Ingatlah bahwa setiap orang berbeda, jadi hasilnya dapat bervariasi tergantung pada kondisi tubuh dan faktor lainnya. Namun, berikut adalah beberapa langkah yang dapat membantu Anda meningkatkan berat badan secara sehat dalam satu bulan:
            </p>
            <ol class="list-decimal ml-4 space-y-4">
                <li>
                    <strong>Konsultasikan dengan Profesional Kesehatan:</strong>
                    <p>
                        Sebelum melakukan perubahan signifikan pada pola makan dan gaya hidup, sangat disarankan untuk berkonsultasi dengan dokter atau ahli gizi. Mereka dapat membantu menentukan apakah kenaikan berat badan diperlukan dan memberikan panduan yang sesuai dengan kondisi kesehatan Anda.
                    </p>
                </li>
                <li>
                    <strong>Konsumsi Makanan yang Kaya Nutrisi dan Kalori:</strong>
                    <p>
                        Pilih makanan yang kaya nutrisi seperti karbohidrat kompleks, protein, lemak sehat, serta vitamin dan mineral. Contoh makanan yang dapat membantu menaikkan berat badan adalah nasi, roti gandum, kentang, daging, ikan, kacang-kacangan, alpukat, dan minyak zaitun.
                    </p>
                </li>
                <li>
                    <strong>Makan Lebih Sering:</strong>
                    <p>
                        Cobalah untuk makan lebih sering dalam sehari, mungkin sekitar 5-6 kali, termasuk makanan ringan di antara waktu makan utama. Hindari melewatkan waktu makan dan pastikan tubuh mendapatkan asupan kalori yang cukup sepanjang hari.
                    </p>
                </li>
                <li>
                    <strong>Porsi Makan yang Lebih Besar:</strong>
                    <p>
                        Tingkatkan porsi makan Anda untuk meningkatkan asupan kalori. Tambahkan porsi karbohidrat, protein, dan lemak pada setiap hidangan.
                    </p>
                </li>
                <li>
                    <strong>Konsumsi Makanan Tinggi Protein:</strong>
                    <p>
                        Protein adalah nutrisi penting untuk membangun massa otot. Konsumsi sumber protein seperti daging, ikan, ayam, telur, kacang-kacangan, produk susu, dan suplemen protein jika diperlukan.
                    </p>
                </li>
                <li>
                    <strong>Minum Shake Tinggi Kalori:</strong>
                    <p>
                        Buatlah smoothie atau shake tinggi kalori dengan tambahan buah-buahan, susu, yoghurt, atau kacang-kacangan untuk menambah asupan kalori dengan mudah.
                    </p>
                </li>
                <li>
                    <strong>Hindari Minum Air sebelum Makan:</strong>
                    <p>
                        Hindari minum air atau minuman rendah kalori sebelum makan, karena ini dapat membuat Anda merasa kenyang lebih cepat dan mengurangi nafsu makan.
                    </p>
                </li>
                <li>
                    <strong>Lakukan Latihan Beban:</strong>
                    <p>
                        Selain mengonsumsi makanan yang tepat, latihan beban atau olahraga resistensi seperti angkat beban atau latihan tubuh bebas membantu merangsang pertumbuhan otot dan meningkatkan berat badan.
                    </p>
                </li>
                <li>
                    <strong>Istirahat yang Cukup:</strong>
                    <p>
                        Pastikan Anda mendapatkan tidur yang cukup setiap malam. Istirahat yang baik sangat penting untuk proses pemulihan otot dan kesehatan secara keseluruhan.
                    </p>
                </li>
            </ol>
            <p>
                Ingat, proses menaikkan berat badan yang sehat memerlukan kesabaran dan konsistensi. Jangan lupa untuk tetap memonitor kesehatan Anda selama perjalanan peningkatan berat badan ini.
            </p>
        </div>
    </div>
</x-app-layout>
