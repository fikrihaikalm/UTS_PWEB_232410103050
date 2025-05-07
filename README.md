# SENIMANKITA - Platform Penjualan Karya Seni

## Deskripsi Proyek
Platform untuk mempromosikan dan menjual karya seni digital/lokal dengan fitur:
- Galeri karya seni publik
- Sistem login admin
- Manajemen karya seni
- Profil admin

## Teknologi Digunakan
```bash
# Dependency utama
composer require laravel/framework
npm install bootstrap@5.3.0
````

## Instalasi

```bash
# Clone repo
git clone https://github.com/fikrihaikalm/UTS_PWEB_232410103050.git

# Install dependencies
composer install
npm install

# Jalankan server
php artisan serve
```

## Struktur Proyek

```bash
.
├── app/
│   └── Http/Controllers/PageController.php
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   │   └── app.blade.php
│   │   ├── components/
│   │   │   ├── navbar.blade.php
│   │   │   └── footer.blade.php
│   │   ├── gallery.blade.php
│   │   ├── login.blade.php
│   │   ├── dashboard.blade.php
│   │   ├── pengelolaan.blade.php
│   │   └── profile.blade.php
├── routes/
│   └── web.php
└── public/
    ├── css/
    └── js/
```

## Komponen Utama

```bash
# 1. Routing (web.php)
Route::get('/', [PageController::class, 'gallery'])->name('home');

# 2. Controller (PageController.php)
public function gallery() {
    $artworks = [/* data */];
    return view('gallery', compact('artworks'));
}

# 3. View Template (app.blade.php)
<html>
    @include('components.navbar')
    @yield('content')
    @include('components.footer')
</html>
```

## Fitur Utama

```bash
# Fitur Publik
- Galeri karya seni
- Filter berdasarkan kategori
- Detail karya

# Fitur Admin
- Login/logout
- Dashboard statistik
- Manajemen karya
- Update profil
```

## Tampilan

```bash
1. Halaman Utama (/)
   - Menampilkan semua karya seni
   - Design responsive

2. Login Admin (/login)
   - Form authentication sederhana
   - Redirect ke dashboard

3. Dashboard Admin (/dashboard)
   - Statistik penjualan
   - Aktivitas terakhir
```

## Cara Penggunaan

```bash
# Akses sebagai pengunjung:
1. Buka halaman utama
2. Jelajahi galeri karya
3. Klik karya untuk detail

# Akses sebagai admin:
1. Buka /login
2. Masukkan username/password
3. Kelola karya di /pengelolaan
```

```

Cukup copy seluruh skrip di atas, lalu jalankan di terminal. File `README.md` akan langsung terbentuk dengan format Markdown yang bersih dan tanpa emoji.

Butuh bantuan untuk membuat `README` versi bahasa Inggris juga?
```
