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

3. **Install Dependencies**
   Jalankan perintah berikut untuk menginstal semua dependensi yang diperlukan:
   ```bash
   composer install
   ```

4. **Konfigurasi Lingkungan**
   Salin file `.env.example` menjadi `.env` dan sesuaikan konfigurasi database dan detail lainnya:
   ```bash
   cp .env.example .env
   ```
   Kemudian, buat kunci aplikasi:
   ```bash
   php artisan key:generate
   ```

5. **Migrasi dan Seed Database**
   Jalankan migrasi untuk membuat tabel di database:
   ```bash
   php artisan migrate
   ```
   (Opsional) Jika terdapat data awal untuk aplikasi, jalankan:
   ```bash
   php artisan db:seed
   ```

6. **Mengelola Aset Front-end** (Opsional)
   Jika aplikasi menggunakan front-end asset seperti CSS/JS, install dependensi menggunakan npm/yarn:
   ```bash
   npm install
   npm run dev
   ```

7. **Menjalankan Server**
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

Dikembangkan dengan ❤️ oleh [Batak Squad].

---

## Panduan Pembuatan CRUD di Laravel

### 1. Membuat Model, Migration, dan Controller

1. Membuat Model, Migration, dan Controller Sekaligus
   Jalankan perintah berikut untuk membuat model, migration, dan controller:
   ```bash
   php artisan make:model Menu -mcr
   ```

2. Edit File Migration
   Buka file migration yang telah dibuat di folder database/migrations dan tambahkan schema berikut di fungsi up:
   ```bash
   public function up()
   {
       Schema::create('menus', function (Blueprint $table) {
           $table->id();
           $table->string('judul')->nullable();
           $table->text('deskripsi')->nullable();
           $table->string('image')->nullable();
           $table->timestamps();
       });
   }
   ```

3. Migrasi Schema ke Database
   Jalankan perintah berikut untuk menerapkan schema ke database:
   ```bash
   php artisan migrate
   ```

4. Tambahkan Properti di Model
   Edit file app/Models/Menu.php untuk menambahkan properti $fillable:
   ```bash
   namespace App\Models;

   use Illuminate\Database\Eloquent\Factories\HasFactory;
   use Illuminate\Database\Eloquent\Model;

   class GeneralMenu extends Model
   {
       use HasFactory;

       protected $fillable = ['judul', 'deskripsi', 'gambar'];
   }
   ```

5. Implementasi CRUD di Controller
   Edit file controller app/Http/Controllers/MenuController.php dan tambahkan fungsi CRUD berikut:
   ```bash
   namaspace App\Http\Controllers;

   use Illuminate\Http\Request;
   use App\Models\Menu;

   class MenuController extends Controller
   {
       public function index()
       {
           $menus = Menu::all();
           return view('admin.menu.index', compact('menus'));
       }

       public function create()
       {
           return view('admin.menu.form');
       }

       public function store(Request $request)
       {
           $request->validate([
               'nama' => 'required|string|max:255',
               'deskripsi' => 'nullable|string',
               'image' => 'nullable|image|max:2048',
           ]);

           $iconPath = $request->file('image') 
               ? $request->file('image')->store('icons', 'public') 
               : null;

           Menu::create([
               'nama' => $request->nama,
               'deskripsi' => $request->deskripsi,
               'image' => $iconPath,
           ]);

           return redirect()->route('general-menu.index')->with('success', 'Menu berhasil ditambahkan.');
       }

       public function edit($id)
       {
           $menu = Menu::findOrFail($id);
           return view('admin.menu.form', compact('menu'));
       }

       public function update(Request $request, $id)
       {
           $request->validate([
               'nama' => 'required|string|max:255',
               'deskripsi' => 'nullable|string',
               'image' => 'nullable|image|max:2048',
           ]);

           $menu = GeneralMenu::findOrFail($id);

           if ($request->file('image')) {
               $iconPath = $request->file('image')->store('icons', 'public');
               $menu->image = $iconPath;
           }

           $menu->update([
               'nama' => $request->nama,
               'deskripsi' => $request->deskripsi,
           ]);

           return redirect()->route('general-menu.index')->with('success', 'Menu berhasil diperbarui.');
       }

       public function destroy($id)
       {
           $menu = GeneralMenu::findOrFail($id);
           $menu->delete();

           return redirect()->route('general-menu.index')->with('success', 'Menu berhasil dihapus.');
       }
   }
   ```

6. Hubungkan Controller ke Route
   Tambahkan route berikut di file routes/web.php:
   ```bash
   use App\Http\Controllers\MenuController;

   Route::middleware('auth')->prefix('admin')->group(function () {
       Route::resource('menu', MenuController::class);
   });
   ```

### 2. Membuat Seeder

1. Membuat Seeder
   Jalankan perintah berikut untuk membuat seeder:
   ```bash
   php artisan make:seeder MenuSeeder
   ```

2. Isi Seeder
   ```bash
   namespace Database\Seeders;

   use Illuminate\Database\Seeder;
   use Illuminate\Support\Facades\DB;

   class MenuSeeder extends Seeder
   {
       public function run()
       {
           DB::table('menus')->insert([
               'judul' => 'Contoh Menu',
               'deskripsi' => 'Ini adalah deskripsi contoh menu.',
               'gambar' => null,
               'created_at' => now(),
               'updated_at' => now(),
           ]);
       }
   }
   ```

3. Jalankan Seeder
   Jalankan perintah berikut untuk menambahkan data ke tabel:
   ```bash
   php artisan db:seed --class=GeneralMenuSeeder
   ```

### 3. Membuat Tampilan Admin

1. Buat Folder dan File Blade
   Buat folder views/admin/menu dan tambahkan file index.blade.php serta form.blade.php.

2. Isi File Blade
   File index.blade.php (jika terdapat list data)
   ```bash
   <x-app-layout>
    <div class="bg-white p-4 rounded shadow-sm">
        <h1 class="text-xl font-bold mb-8">Daftar Menu</h1>
        <a href="{{ route('menu.create') }}" class="text-sm bg-blue-600 text-white px-4 py-2 rounded">Tambahkan Menu</a>
        <table class="table-auto w-full mt-4 border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border px-4 py-2">#</th>
                    <th class="border px-4 py-2">Judul</th>
                    <th class="border px-4 py-2">Deskripsi</th>
                    <th class="border px-4 py-2">Gambar</th>
                    <th class="border px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($menus as $menu)
                <tr>
                    <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                    <td class="border px-4 py-2">{{ $menu->judul }}</td>
                    <td class="border px-4 py-2">{{ $menu->deskripsi }}</td>
                    <td class="border px-4 py-2">
                        @if($menu->gambar)
                            <img src="{{ asset('storage/' . $menu->gambar) }}" class="h-16">
                        @else
                            No Icon
                        @endif
                    </td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('menu.edit', $menu->id) }}" class="text-sm bg-yellow-500 text-white px-4 py-2 rounded">Edit</a>
                        <form action="{{ route('menu.destroy', $menu->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-sm bg-red-500 text-white px-4 py-2 rounded" onclick="return confirm('Are you sure?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center border px-4 py-2">Tidak ada data</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
   </x-app-layout>
   ```

   File form.blade.php
   ```bash
   <x-app-layout>
    <div class="bg-white p-4 rounded shadow-sm">
        <h1 class="text-xl font-bold mb-8">{{ isset($menu) ? 'Edit Menu' : 'Add Menu' }}</h1>
        <form action="{{ isset($menu) ? route('menu.update', $menu->id) : route('menu.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($menu))
                @method('PUT')
            @endif
            <div class="mb-4">
                <label for="judul" class="block font-medium mb-2">Judul</label>
                <input type="text" name="judul" id="judul" class="border px-4 py-2 w-full rounded" value="{{ old('judul', $menu->judul ?? '') }}">
            </div>
            <div class="mb-4">
                <label for="deskripsi" class="block font-medium mb-2">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" class="border px-4 py-2 w-full rounded">{{ old('deskripsi', $menu->deskripsi ?? '') }}</textarea>
            </div>
            <div class="mb-4">
                <label for="gambar" class="block font-medium mb-2">Icon</label>
                <input type="file" name="gambar" id="gambar" class="border px-4 py-2 w-full rounded">
                @if(isset($menu) && $menu->gambar)
                    <img src="{{ asset('storage/' . $menu->gambar) }}" class="h-16 mt-2">
                @endif
            </div>
            <div>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
                    {{ isset($menu) ? 'Update' : 'Save' }}
                </button>
            </div>
        </form>
    </div>
   </x-app-layout>
   ```

   
   




