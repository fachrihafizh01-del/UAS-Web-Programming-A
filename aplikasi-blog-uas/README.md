# Aplikasi Blog UAS

Nama: Muhammad Fachri Hafizh Saleh 
NIM: 240605110175

Proyek ini adalah aplikasi blog Laravel untuk UAS Pemrograman Web. Aplikasi memiliki CMS untuk mengelola penulis, kategori artikel, dan artikel, serta halaman pengunjung publik yang menampilkan 5 artikel terbaru, filter kategori, detail artikel, dan artikel terkait.

## Fitur

- Login dan logout penulis.
- Dashboard CMS.
- CRUD penulis.
- CRUD kategori artikel.
- CRUD artikel dengan upload gambar.
- Halaman utama pengunjung tanpa login.
- Filter artikel berdasarkan kategori.
- Halaman detail artikel.
- Widget artikel terkait dari kategori yang sama.

## Cara Menjalankan

1. Buat database MySQL bernama `db_blog`.
2. Salin `.env.example` menjadi `.env`.
3. Sesuaikan konfigurasi database di `.env`.
4. Install dependency:

```bash
composer install
```

5. Generate app key:

```bash
php artisan key:generate
```

6. Jalankan migration dan seeder:

```bash
php artisan migrate --seed
```

7. Buat storage link:

```bash
php artisan storage:link
```

8. Jalankan server:

```bash
php artisan serve
```

9. Buka aplikasi:

```text
http://localhost:8000
```

## Akun Login CMS

```text
Username: admin
Password: password
```

## Route Penting

- Halaman pengunjung: `http://localhost:8000`
- Login CMS: `http://localhost:8000/login`
- Dashboard CMS: `http://localhost:8000/dashboard`
- Detail artikel: `http://localhost:8000/baca-artikel/{id}`

Tautan Video Demonstrasi
https://youtu.be/jgD2dhS3MSY?si=PpCE6N1P19K5leGY
