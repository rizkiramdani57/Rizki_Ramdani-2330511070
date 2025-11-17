# Setup CV Database

## Langkah-langkah Setup

### 1. Konfigurasi Database

Edit file `.env` (copy dari `env` jika belum ada) dan sesuaikan konfigurasi database:

```env
database.default.hostname = localhost
database.default.database = cvrizki
database.default.username = root
database.default.password = 
database.default.DBDriver = MySQLi
database.default.port = 3306
```

### 2. Jalankan Migration

Jalankan migration untuk membuat tabel-tabel yang diperlukan:

```bash
php spark migrate
```

Atau jika menggunakan Laragon, pastikan database sudah dibuat terlebih dahulu, lalu jalankan:

```bash
php spark migrate
```

### 3. Akses Halaman CV

Setelah migration berhasil, akses halaman CV di:
- **CV Page**: `http://localhost:8080/cv` atau `http://localhost:8081/cv` (sesuai port yang digunakan)

### 4. Halaman Admin (Opsional)

Untuk mengelola data CV, akses halaman admin:
- **Profile**: `http://localhost:8080/cv/profile`
- **Education**: `http://localhost:8080/cv/education`
- **Experience**: `http://localhost:8080/cv/experience`
- **Skills**: `http://localhost:8080/cv/skills`

## Struktur Database

### Tabel `profile`
- id (INT, Primary Key)
- nama (VARCHAR)
- email (VARCHAR)
- telepon (VARCHAR)
- alamat (TEXT)
- deskripsi (TEXT)
- foto (VARCHAR)
- created_at, updated_at (DATETIME)

### Tabel `education`
- id (INT, Primary Key)
- tingkat (VARCHAR) - Contoh: "Sarjana Teknik Informatika"
- institusi (VARCHAR)
- tahun_mulai (VARCHAR)
- tahun_selesai (VARCHAR)
- deskripsi (TEXT)
- urutan (INT)
- created_at, updated_at (DATETIME)

### Tabel `experience`
- id (INT, Primary Key)
- jabatan (VARCHAR)
- perusahaan (VARCHAR)
- lokasi (VARCHAR)
- tahun_mulai (VARCHAR)
- tahun_selesai (VARCHAR) - NULL untuk pekerjaan saat ini
- deskripsi (TEXT) - Gunakan baris baru untuk setiap poin
- urutan (INT)
- created_at, updated_at (DATETIME)

### Tabel `skills`
- id (INT, Primary Key)
- nama (VARCHAR)
- tingkat (INT) - 0-100 (persentase)
- urutan (INT)
- created_at, updated_at (DATETIME)

## Catatan

1. **Penting**: Pastikan baseURL di `app/Config/App.php` sesuai dengan port yang digunakan:
   - Jika menggunakan port 8080: `http://localhost:8080/`
   - Jika menggunakan port 8081: `http://localhost:8081/`
   - Atau edit file `.env` dan set `app.baseURL = http://localhost:8081/`

2. Jika halaman CV masih menampilkan welcome page, pastikan:
   - Route sudah benar di `app/Config/Routes.php`
   - Database sudah dibuat dan migration sudah dijalankan
   - Cache sudah dibersihkan (jika menggunakan cache)
   - Mengakses URL yang benar: `/cv` bukan hanya `/`

## Troubleshooting

### Halaman masih menampilkan welcome page
- Pastikan mengakses URL yang benar: `/cv` bukan `/`
- Cek apakah route sudah terdaftar dengan benar
- Pastikan tidak ada error di log

### Error database connection
- Pastikan database sudah dibuat
- Cek konfigurasi di `.env`
- Pastikan MySQL/MariaDB sudah running

