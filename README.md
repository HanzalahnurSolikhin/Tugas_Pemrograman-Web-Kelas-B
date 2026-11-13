# Tugas Pemrograman Web Kelas B

**Nama:** Hanzalahnur Solikhin  
**NIM:** D121241110  
**Mata Kuliah:** Pemrograman Web  

## Perpustakaan Mini — Aplikasi Daftar Buku

Aplikasi berbasis **Laravel 12** untuk mengelola buku dengan konsep **CRUD (Create, Read, Update, Delete)**. Source code aplikasi berada di folder [`daftar-buku/`](daftar-buku/).

### Fitur

- Melihat daftar dan detail buku
- Menambah, mengubah, dan menghapus buku (dengan konfirmasi)
- Mencari buku berdasarkan judul atau penulis
- Pagination: lima buku per halaman
- Validasi formulir dan perlindungan CSRF
- Seeder yang menyediakan enam data buku contoh

### Teknologi

PHP 8.2+, Laravel 12, Blade, Tailwind CSS 4, Vite, dan SQLite.

### Menjalankan di Windows (PowerShell)

Pastikan PHP, Composer, dan Node.js sudah terpasang. Setelah clone repository:

```powershell
git clone https://github.com/HanzalahnurSolikhin/Tugas_Pemrograman-Web-Kelas-B.git
cd Tugas_Pemrograman-Web-Kelas-B\daftar-buku
composer install
npm.cmd install
Copy-Item .env.example .env
php artisan key:generate
```

Database menggunakan SQLite. Pastikan `DB_CONNECTION=sqlite` dalam `.env` dan file `database/database.sqlite` tersedia. Jika belum ada, buat melalui:

```powershell
if (!(Test-Path database/database.sqlite)) { New-Item -ItemType File -Path database/database.sqlite | Out-Null }
```

Jalankan migrasi dan seeder:

```powershell
php artisan migrate --seed
npm.cmd run build
php artisan serve
```

Buka **http://127.0.0.1:8000/buku**.

Untuk pengembangan tampilan, gunakan `npm.cmd run dev` pada terminal kedua sebagai alternatif `npm.cmd run build`.

### Pengujian

```powershell
php artisan test
```

### Struktur aplikasi

- `daftar-buku/app/Models/Buku.php` — model buku
- `daftar-buku/app/Http/Controllers/BukuController.php` — logika CRUD, pencarian, dan validasi
- `daftar-buku/database/migrations/` — struktur tabel
- `daftar-buku/database/seeders/` — data buku contoh
- `daftar-buku/resources/views/` — antarmuka Blade
- `daftar-buku/routes/web.php` — route aplikasi

**Keamanan:** file `.env`, folder `vendor/`, `node_modules/`, dan file database lokal tidak dimasukkan ke repository.
