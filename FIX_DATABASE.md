# Perbaikan Error Database Connection

## Error yang Terjadi
```
Access denied for user '****'@'localhost' (using password: YES)
```

## Solusi

### 1. Buat Database di MySQL/MariaDB

Buka phpMyAdmin atau MySQL client (HeidiSQL, MySQL Workbench, atau terminal):

**Via phpMyAdmin:**
1. Buka `http://localhost/phpmyadmin`
2. Klik "New" untuk membuat database baru
3. Nama database: `cvrizki`
4. Collation: `utf8mb4_general_ci`
5. Klik "Create"

**Via SQL Command:**
```sql
CREATE DATABASE cvrizki CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
```

### 2. Cek Kredensial MySQL di Laragon

**Default Laragon:**
- Username: `root`
- Password: **KOSONG** (empty string)
- Port: `3306`

**Jika password tidak kosong:**
- Buka Laragon
- Klik "Menu" → "MySQL" → "Set Root Password"
- Atau cek password di file konfigurasi Laragon

### 3. Edit File .env

File `.env` sudah dibuat dengan konfigurasi default Laragon. Jika password MySQL Anda tidak kosong, edit file `.env`:

```env
database.default.password = password_anda_disini
```

**Lokasi file:** `C:\laragon\www\cvrizki\.env`

### 4. Alternatif: Edit Langsung di Database.php

Jika `.env` tidak terbaca, edit langsung `app/Config/Database.php`:

```php
public array $default = [
    'hostname' => 'localhost',
    'database' => 'cvrizki',
    'username' => 'root',
    'password' => '', // Isi jika ada password, kosongkan jika tidak ada
    'DBDriver' => 'MySQLi',
    'port'     => 3306,
];
```

### 5. Test Koneksi Database

Setelah konfigurasi benar, test dengan menjalankan:

```bash
php spark migrate
```

Jika masih error, cek:
- Apakah MySQL/MariaDB sudah running di Laragon?
- Apakah database `cvrizki` sudah dibuat?
- Apakah username dan password benar?

## Troubleshooting

### Error: Database doesn't exist
**Solusi:** Buat database `cvrizki` terlebih dahulu (lihat langkah 1)

### Error: Access denied
**Solusi:** 
1. Pastikan username dan password benar
2. Untuk Laragon, biasanya password kosong
3. Jika masih error, reset password MySQL:
   ```sql
   ALTER USER 'root'@'localhost' IDENTIFIED BY '';
   FLUSH PRIVILEGES;
   ```

### Error: Can't connect to MySQL server
**Solusi:**
1. Pastikan MySQL/MariaDB sudah running di Laragon
2. Klik "Start All" di Laragon
3. Cek port MySQL (default: 3306)

### File .env tidak terbaca
**Solusi:**
1. Pastikan file `.env` ada di root project
2. Pastikan tidak ada file `.env.example` yang mengganggu
3. Edit langsung di `app/Config/Database.php`

## Langkah Lengkap Setup Database

1. **Start Laragon**
   - Pastikan MySQL/MariaDB running (ikon hijau)

2. **Buat Database**
   - Buka phpMyAdmin: `http://localhost/phpmyadmin`
   - Buat database: `cvrizki`

3. **Edit .env**
   - Buka file `.env` di root project
   - Sesuaikan password jika perlu

4. **Jalankan Migration**
   ```bash
   php spark migrate
   ```

5. **Jalankan Seeder**
   ```bash
   php spark db:seed CvSeeder
   ```

## Catatan Penting

- **Laragon Default:** Username `root`, Password **KOSONG**
- Jika Anda pernah set password MySQL, gunakan password tersebut
- File `.env` lebih prioritas daripada `Database.php`
- Setelah edit `.env`, restart web server jika perlu

