
# Laravel Project Setup

Panduan ini menjelaskan langkah-langkah untuk menjalankan aplikasi Laravel mulai dari konfigurasi hingga menjalankan server lokal.

---

## 1. Pengaturan File `.env`

Pastikan Anda telah memiliki file `.env`. Jika belum, salin file `.env.example` dengan perintah berikut:

```bash
cp .env.example .env
```

Kemudian, buka file `.env` dan sesuaikan konfigurasi berikut:

```env
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:GENERATED_KEY
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password

# Konfigurasi lain sesuai kebutuhan Anda
```

Setelah mengatur `.env`, jalankan perintah berikut untuk menghasilkan **application key**:

```bash
php artisan key:generate
```

---

## 2. Migrasi Database

Jalankan perintah berikut untuk membersihkan dan membuat ulang seluruh tabel di database:

```bash
php artisan migrate:fresh
```

---

## 3. Penambahan Seeder

Jika Anda memiliki seeder untuk menambahkan data awal, jalankan perintah berikut setelah migrasi:

```bash
php artisan db:seed
```

Jika ingin menjalankan seeder tertentu, gunakan:

```bash
php artisan db:seed --class=NamaSeeder
```

---

## 4. Menjalankan Aplikasi

Untuk menjalankan server pengembangan lokal, gunakan perintah berikut:

```bash
php artisan serve
```

Aplikasi akan berjalan di alamat:

```
http://localhost:8000
```

---

## Catatan

- Pastikan Anda telah menginstal **Composer** dan **PHP** yang kompatibel dengan Laravel.
- Gunakan perintah berikut untuk menginstal seluruh dependensi:

```bash
composer install
```

- Jika Anda menggunakan **npm** untuk aset front-end, jalankan:

```bash
npm install && npm run dev
```

---

**Enjoy coding! 🚀**
