# Materi hari 1

Hari pertama fokus pada pengenalan pembuatan dan sedikit penggunaan database pada laravel

## Langkah 1
Buat project laravel dengan langkah:
- Buat **blank** project pada laragon
- Buka terminal pada laragon dan masuk pada folder project yang telah dibuat sebelumnya
- Jalankan perintah berikut untuk menginstall **Laravel 10.0**
```bash
composer create-project "laravel/laravel:^10.0" .
```

## Langkah 2
Melakukan konfigurasi untuk koneksi ke database
- Buka file *.env*
- Ubah isi file pada bagian koneksi database sesuai dengan perangkat

## Langkah 3
Malakukan pembuatan database menggunakan migration
- Jalankan perintah berikut untuk membuat beberapa fle migrasi database beserta kelengkapannya
```bash
php artisan make:model kelas -mc
php artisan make:model wali_murid -mc
php artisan make:model siswa -mc
```
- Perintah tersebut akan membuat 3 file untuk masing-masing objek, yaitu model, migration, dan controller
- Berikan penjelasan singkat mengenai fungsi masing-masing file tersebut

## Langkah 4
Pembuatan skema tabel kelas
- Buka file migration untuk objek kelas, wali_murid, dan siswa yang berada di */database/migrations/...*
- Tambahkan kode sesuai dengan contoh yang tersedia
- Jelaskan mengenai beberapa tipe data yang didukung oleh file migrasi laravel berdasarkan link:
[Laravel column](https://laravel.com/docs/10.x/migrations#columns)

## Langkah 5
Melakukan migrasi ke database
- Jalankan perintah berikut untuk melakukan migrasi tabel yang telah kita definisikan sebelumnya ke database 
```bash
php artisan migrate
```
- berikan juga penjelasan mengenai beberapa perintah terkait migrate seperti
```bash
php artisan migrate:status
php artisan migrate --pretend
php artisan migrate --seed
php artisan migrate:rollback
php artisan migrate:reset
php artisan migrate:fresh
```
- Cek pada database apakah fungsi migrate telah berhasil membuat tabel yang diinginkan


## Kesimpulan
Kegiatan hari pertama belum meliatkan penggunaan UI sama sekali. Apabila waktu masih memungkinkan, bisa ditambah dengan materi terkait data seed yaitu memberikan data awal untuk database.
