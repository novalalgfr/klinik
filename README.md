# Website Klinik

Proyek ini adalah sebuah website klinik yang dibangun menggunakan Laravel versi 9.52.18 dan PHP versi 8.0.5. Website ini dirancang untuk membantu pengelolaan data klinik secara efisien dan mudah digunakan.

## Prasyarat

Sebelum memulai, pastikan Anda memiliki perangkat lunak berikut terinstal di sistem Anda:

- PHP >= 8.0.5
- Composer
- MySQL atau database lainnya yang didukung Laravel
- Web server (Apache, Nginx, atau lainnya)
- Node.js dan npm/yarn (opsional, untuk pengelolaan aset front-end)

## Instalasi

Ikuti langkah-langkah berikut untuk menjalankan proyek ini di lingkungan lokal Anda:

1. **Clone Repository**
   ```bash
   git clone https://github.com/username/repo-website-klinik.git
   cd repo-website-klinik
   ```

2. **Install Dependencies**
   Jalankan perintah berikut untuk menginstal semua dependensi yang diperlukan:
   ```bash
   composer install
   ```

3. **Konfigurasi Lingkungan**
   Salin file `.env.example` menjadi `.env` dan sesuaikan konfigurasi database dan detail lainnya:
   ```bash
   cp .env.example .env
   ```
   Kemudian, buat kunci aplikasi:
   ```bash
   php artisan key:generate
   ```

4. **Migrasi dan Seed Database**
   Jalankan migrasi untuk membuat tabel di database:
   ```bash
   php artisan migrate
   ```
   (Opsional) Jika terdapat data awal untuk aplikasi, jalankan:
   ```bash
   php artisan db:seed
   ```

5. **Mengelola Aset Front-end** (Opsional)
   Jika aplikasi menggunakan front-end asset seperti CSS/JS, install dependensi menggunakan npm/yarn:
   ```bash
   npm install
   npm run dev
   ```

6. **Menjalankan Server**
   Jalankan server Laravel di lingkungan lokal:
   ```bash
   php artisan serve
   ```
   Akses aplikasi melalui browser pada `http://localhost:8000`.

## Deployment

Untuk deployment di server produksi, pastikan Anda:

- Menggunakan server yang mendukung PHP 8.0.5.
- Mengatur konfigurasi `.env` sesuai dengan server produksi.
- Memastikan folder `storage` dan `bootstrap/cache` memiliki izin yang sesuai.

Jangan lupa untuk menjalankan perintah berikut di server produksi:
```bash
php artisan migrate --force
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## Lisensi

Proyek ini dilisensikan di bawah [MIT License](LICENSE). Anda bebas menggunakan, memodifikasi, dan mendistribusikan proyek ini sesuai dengan ketentuan lisensi.

## Kontribusi

Kontribusi sangat diterima! Silakan buat pull request atau buka issue untuk mendiskusikan perubahan.

---

Dikembangkan dengan ❤️ oleh [Batak Squad].
