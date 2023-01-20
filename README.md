# yhc_webdevtest

- Nama : Muhammad Arifin
- Jurusan : Teknik Informatika
- Kampus : Universitas Palangka Raya
- Daerah : Palangka Raya, Kalimantan Tengah

## Panduan Penggunaan Aplikasi

Aplikasi ini dibuat menggunakan bahasa pemrograman PHP versi 8.1.13 dengan framework Laravel 9.47.0 dengan database MySQL, relasi database yang digunakan dibuat dengan Eloquent ORM yang telah disediakan oleh laravel. Untuk menjalankan aplikasi ini silakan lakukan langkah-langkah berikut :
1. Silakan clone/download file project yang tersimpan di branch master
2. Jalankan perintah ```composer install```
3. Buat sebuah database kosong di localhost
4. Jalankan perintah ```cp .env.example .env``` dan selanjutnya ```php artisan key:generate```
5. Sebelum melakukan migrasi database, silakan cek terlebih dahulu ```DB_PORT```, ```DB_DATABASE```
```DB_USERNAME```, dan ```DB_PASSWORD``` yang ada di file .env pastikan sesuai dengan konfigurasi localhost anda
6. Jalankan perintah ```php artisan migrate``` dan ```php artisan db:seed``` untuk melakukan migrasi dan seeding database 
7. Jalankan perintah ```php artisan serve``` untuk menjalankan server

## Hasil Pengujian

Berikut adalah hasil pengujian terhadap soal yang diberikan :
https://docs.google.com/document/d/10qcqiLVWic0atab2cdg_FjWUIPmbckfEb4k7mVuV2QM/edit?usp=sharing
