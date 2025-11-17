# Setup Database dengan Data Dummy

## Langkah-langkah Setup Database

### 1. Buat Database

Buka phpMyAdmin atau MySQL client dan buat database baru:

```sql
CREATE DATABASE cvrizki CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
```

### 2. Konfigurasi Database

Edit file `.env` (copy dari `env` jika belum ada) dan sesuaikan:

```env
database.default.hostname = localhost
database.default.database = cvrizki
database.default.username = root
database.default.password = 
database.default.DBDriver = MySQLi
database.default.port = 3306
```

Atau edit langsung di `app/Config/Database.php`:

```php
public array $default = [
    'hostname' => 'localhost',
    'database' => 'cvrizki',
    'username' => 'root',
    'password' => '', // Sesuaikan dengan password MySQL Anda
    'DBDriver' => 'MySQLi',
    'port'     => 3306,
];
```

### 3. Jalankan Migration

Jalankan migration untuk membuat tabel-tabel:

```bash
php spark migrate
```

Jika ada error tentang Locale class, pastikan extension `intl` sudah diaktifkan di PHP.

### 4. Jalankan Seeder (Data Dummy)

Setelah migration berhasil, jalankan seeder untuk mengisi data dummy:

```bash
php spark db:seed CvSeeder
```

Atau jika menggunakan command yang berbeda:

```bash
php spark seed CvSeeder
```

### 5. Verifikasi Data

Setelah seeder berhasil, cek database:
- Tabel `profile` harus berisi 1 data
- Tabel `education` harus berisi 3 data
- Tabel `experience` harus berisi 5 data
- Tabel `skills` harus berisi 12 data

## Data Dummy yang Akan Diisi

### Profile (1 data)
- Nama: Rizki Ramdani
- Email, telepon, alamat, dan deskripsi lengkap

### Education (3 data)
1. Sarjana Teknik Informatika - Universitas Indonesia (2018-2022)
2. SMA Negeri 1 Jakarta (2015-2018)
3. Sertifikasi AWS Cloud Practitioner (2023)

### Experience (5 data)
1. Full Stack Developer - PT Teknologi Digital Indonesia (2022 - Sekarang)
2. Web Developer - Startup Digital Solutions (2020-2022)
3. Junior Developer (Magang) - Agency Web Development (2019-2020)
4. Ketua Divisi Teknologi - Himpunan Mahasiswa (2020-2021)
5. Freelance Web Developer - Proyek Independen (2021 - Sekarang)

### Skills (12 data)
- Frontend Development (90%)
- Backend Development (85%)
- UI/UX Design (80%)
- Database Management (85%)
- Project Management (75%)
- JavaScript (90%)
- PHP (88%)
- React.js (85%)
- Node.js (80%)
- MySQL (85%)
- Git Version Control (88%)
- Laravel Framework (85%)

## Troubleshooting

### Error: Class "Locale" not found
- Aktifkan extension `intl` di PHP
- Edit `php.ini` dan uncomment: `extension=intl`
- Restart web server

### Error: Database connection failed
- Pastikan MySQL/MariaDB sudah running
- Cek username dan password di konfigurasi
- Pastikan database sudah dibuat

### Error: Table already exists
- Hapus tabel yang sudah ada atau
- Jalankan: `php spark migrate:rollback` lalu `php spark migrate` lagi

### Seeder tidak berjalan
- Pastikan migration sudah dijalankan terlebih dahulu
- Cek apakah class `CvSeeder` ada di `app/Database/Seeds/`
- Pastikan namespace benar: `namespace App\Database\Seeds;`

## Reset Database (Hapus dan Buat Ulang)

Jika ingin reset database:

```bash
# Rollback semua migration
php spark migrate:rollback

# Jalankan migration lagi
php spark migrate

# Jalankan seeder
php spark db:seed CvSeeder
```

## Catatan

- Data dummy ini menggunakan bahasa Indonesia
- Semua data sudah disesuaikan dengan struktur tabel yang ada
- Timestamps (created_at, updated_at) akan otomatis diisi
- Untuk pengalaman yang masih aktif, `tahun_selesai` diisi `null`

