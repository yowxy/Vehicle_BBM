Hello in this Website for  Vehicle  

## Cara Menjalankan Aplikasi

1. **Extract File Zip**  
   Pertama, ekstrak file zip yang diberikan ke dalam direktori proyek Anda.

2. **Install Composer**  
   Jika belum menginstal Composer, silakan download dari [sini](https://getcomposer.org/download/) dan ikuti instruksinya untuk instalasi.

3. **Install Laravel**  
   Untuk menginstal Laravel, gunakan Composer untuk membuat proyek baru:
   ```bash
   composer create-project laravel/laravel example-app
Salin File .env
Setelah proyek selesai diatur, salin file .env.example dan ubah namanya menjadi .env:

bash
Copy code
cp .env.example .env
Install Filament
Install Filament Admin Panel dengan menjalankan perintah berikut:

bash
Copy code
composer require filament/filament:"^3.2" -W
php artisan filament:install --panels

Pindah ke Direktori Proyek
Pindahkan direktori ke nama proyek yang telah Anda buat:

bash
Copy code
cd nama projek

Buka Proyek di VSCode
Untuk membuka proyek di Visual Studio Code, ketik perintah berikut:

bash
Copy code
code .
Jalankan Server PHP
Jalankan server PHP dengan perintah:

bash
Copy code
php artisan serve
Akses Admin Panel
Buka browser dan ketik URL berikut untuk mengakses Admin Panel Filament:

bash
Copy code
http://localhost:8000/admin
Masuk ke Admin Panel
Masukkan email dan password berikut untuk login:

Email: admin@example.com
Password: password
Catatan
Pastikan Anda mengonfigurasi file .env dengan pengaturan database dan lingkungan Anda sebelum menjalankan migrasi.
Untuk mengubah kredensial admin, Anda dapat memperbarui informasi pengguna melalui database atau membuat pengguna baru dengan perintah artisan.
