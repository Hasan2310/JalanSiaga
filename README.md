# 🚗 JalanSiaga

**JalanSiaga** adalah aplikasi pelaporan jalan rusak yang dibuat sebagai bagian dari tugas akhir di SMK Jakarta Pusat 1. Aplikasi ini bertujuan untuk memudahkan masyarakat dalam melaporkan kerusakan jalan dan membantu pihak berwenang untuk segera menanganinya. Jadi, nggak perlu khawatir lagi kalau ada jalan yang rusak! 😎

## 🚀 Fitur Utama

- **Pelaporan Kerusakan Jalan**: Pengguna bisa laporin jalan rusak lengkap dengan info lokasi, foto, dan deskripsi kerusakan. 📸🛣️
- **Admin Panel**: Admin bisa kelola laporan jalan rusak, mulai dari menyetujui laporan hingga meng-update status perbaikan. 🖥️✅
- **Pemetaan Lokasi**: Menampilkan peta lokasi jalan rusak yang dilaporkan menggunakan Google Maps atau peta lainnya. 📍🗺️
- **Notifikasi**: Pengguna dan admin bakal dapat notifikasi tentang status laporan dan perbaikan. 🔔

## 🛠️ Teknologi yang Digunakan

- **Frontend**: HTML, CSS (TailwindCSS), JavaScript 💻
- **Backend**: Laravel (PHP) 🔧
- **Database**: MySQL 🗃️
- **Peta**: Google Maps API 🗺️
- **Authentication**: Laravel Breeze atau Laravel Jetstream untuk otentikasi pengguna 🔐

## 📦 Instalasi

### Persyaratan
Sebelum mulai, pastikan kamu udah punya aplikasi-aplikasi berikut di sistem kamu:

- PHP >= 8.0 🐘
- Composer 🎶
- MySQL atau MariaDB 🗃️
- Node.js dan NPM (untuk pengembangan frontend) 🌐

### Langkah-langkah Instalasi

1. **Clone RepositorycPertama, clone repo ini ke dalam folder lokal kamu:**

   ```bash
   git clone https://github.com/Hasan2310/JalanSiaga.git

2. **Migrasi Database Setelah mengonfigurasi file .env, jalankan perintah berikut untuk memigrasikan database:**
   ```bash
   php artisan migrate

3. **Jalankan Seeder untuk Admin Untuk menambahkan akun admin secara otomatis, jalankan perintah berikut untuk menjalankan seeder:**
   ```bash
   php artisan db:seed --class=AdminUserSeeder

4. **Jalankan Aplikasi Setelah selesai, jalankan aplikasi dengan perintah berikut:**
    ```bash
    php artisan serve

### 👮‍♂️ Login admin
Gmail : admin@gmail.com

Password : admin123
