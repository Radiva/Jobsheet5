# Materi hari 2

Hari kedua fokus pada fitur tampil data dan manipulasi data seperti tambah dan delete

## Langkah 1
Menambahkan kode untuk menampilkan data pada kontroller
- Buka file kontroler kelas yang berada pada *app/Http/Controllers*
- Tambahkan kode sesuai contoh yang tersedia untuk bagian tampil

## Langkah 2
Membuat view untuk tampil data kelas
- Buat file baru pada folder resource/views dengan perintah dibawah ini atau dengan cara manual yaitu klik kanan create new file
```bash
php artisan make:view kelas
```
- Tambahkan kode sesuai dengan contoh yang tersedia

## Langkah 3
Malakukan penambahan Route untuk mengakses data kelas
- Buka file *routes/web.php*
- Ubah routes / menjadi sesuai pada contoh
- Jangan lupa menambahakn
```bash
use App\Http\Controllers\KelasController;
```
pada awal file tersebut

## Langkah 4
Pengecekan hasil.
- Jalankan project dan buka pada browser untuk melihat apakah data sudah muncul sesuai harapan.

## Langkah 5
Penerapan ke objek wali_kelas dan siswa
- Ulangi langkah diatas untuk menambahkan fungsi tampil pada objek wali_kelas dan siswa

## Langkah 6
Pembuatan fungsi create data
- Buka file kontroler kelas yang berada pada *app/Http/Controllers*
- Tambahkan kode sesuai contoh yang tersedia untuk bagian tambah data

## Langkah 7
Membuat view untuk tampil form tambah data kelas
- Buat file baru pada folder resource/views dengan perintah dibawah ini atau dengan cara manual yaitu klik kanan create new file
```bash
php artisan make:view kelas_form
```
- Tambahkan kode sesuai dengan contoh yang tersedia

## Langkah 8
Malakukan penambahan Route untuk mengakses form tambah kelas
- Buka file *routes/web.php*
- Sesuaikan kode sesuai dengan contoh

## Langkah 4
Pengecekan hasil dan Penerapan ke objek wali_kelas dan siswa
- Jalankan project dan buka pada browser untuk melihat apakah fitur tambah data sudah sesuai harapan.
- Ulangi langkah diatas untuk menambahkan fungsi tambah data pada objek wali_kelas dan siswa

## Kesimpulan
Fokus pertemuan ini adalah siswa menyelesaikan tampil untuk seluruh data dan penambahan form untuk tambah data.
