# Perbaikan Routing CV

## Masalah
Halaman CV masih mengarah ke welcome_message meskipun route sudah didefinisikan.

## Solusi yang Sudah Diterapkan

### 1. IndexPage diubah menjadi kosong
File: `app/Config/App.php`
- `public string $indexPage = '';` (sebelumnya: `'index.php'`)

### 2. Route sudah benar
File: `app/Config/Routes.php`
```php
$routes->get('/', 'Home::index');
$routes->get('cv', 'Home::cv');  // Route ini HARUS sebelum route group
```

### 3. BaseURL
Pastikan baseURL sesuai dengan port yang digunakan:
- Jika menggunakan port 8081: Edit `app/Config/App.php` line 19 menjadi:
  ```php
  public string $baseURL = 'http://localhost:8081/';
  ```
- Atau buat file `.env` dan set:
  ```
  app.baseURL = 'http://localhost:8081/'
  ```

## Cara Test

1. **Pastikan mengakses URL yang benar:**
   - ✅ `http://localhost:8081/cv`
   - ❌ `http://localhost:8081/` (ini akan ke welcome_message)

2. **Clear cache (jika ada):**
   ```bash
   # Hapus folder cache jika ada
   rm -rf writable/cache/*
   ```

3. **Restart web server:**
   - Restart Apache/Nginx di Laragon

4. **Cek apakah route terdaftar:**
   - Buka browser dan akses: `http://localhost:8081/cv`
   - Jika masih ke welcome_message, cek:
     - Apakah file `app/Views/cv.php` ada?
     - Apakah method `cv()` ada di `Home.php`?
     - Apakah route sudah benar di `Routes.php`?

## Troubleshooting

### Masih ke welcome_message?
1. Pastikan mengakses `/cv` bukan `/`
2. Cek apakah ada error di log: `writable/logs/log-*.php`
3. Pastikan baseURL sesuai dengan port yang digunakan
4. Coba hard refresh browser (Ctrl+F5)

### Error 404?
1. Pastikan route sudah benar di `Routes.php`
2. Pastikan method `cv()` ada di `Home.php`
3. Pastikan file `app/Views/cv.php` ada

### Error Database?
- Itu normal jika database belum di-setup
- Halaman CV akan tetap tampil dengan data kosong
- Jalankan migration setelah database di-setup

