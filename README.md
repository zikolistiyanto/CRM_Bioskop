<p align="center">
  <strong>Cinema CRM & Ticketing System</strong><br>
  Sistem CRM berbasis web untuk aplikasi ticketing bioskop
</p>

---

## 🎬 Tentang Project

**Cinema CRM & Ticketing System** adalah aplikasi **Customer Relationship Management (CRM)** berbasis web yang dirancang untuk mendukung operasional aplikasi bioskop.

Sistem ini membantu pengelolaan **data customer, riwayat interaksi, ticket/complaint**, serta **sales pipeline** dalam satu platform terpusat dengan dukungan **role-based access**.

Project ini dibangun menggunakan **Laravel** sebagai backend framework.

---

## 🎯 Tujuan Sistem

-   Mengelola data customer secara terstruktur
-   Mencatat riwayat interaksi customer
-   Menangani ticket dan keluhan pelanggan
-   Mengelola proses penjualan melalui sales pipeline
-   Mendukung monitoring dan pelaporan oleh manajemen

---

## 👥 Aktor Sistem

-   **Admin**  
    Mengelola user dan data dasar sistem

-   **Customer Service (CS)**  
    Mencatat interaksi dan menangani ticket/complaint

-   **Sales**  
    Mengelola lead dan proses follow-up customer

-   **Manager**  
    Melihat laporan dan melakukan monitoring kinerja

---

## ⚙️ Fitur Utama

### 🔹 Manajemen Data Customer

-   Tambah, ubah, dan hapus data customer
-   Melihat detail dan daftar customer
-   Pencarian data customer

### 🔹 Riwayat Interaksi

-   Mencatat interaksi (telepon, email, meeting)
-   Menampilkan histori interaksi per customer

### 🔹 Ticketing / Complaint

-   Membuat ticket keluhan customer
-   Update status ticket (Open, In Progress, Resolved)
-   Monitoring daftar ticket

### 🔹 Sales Pipeline

-   Mencatat lead/prospek baru
-   Mengelola stage pipeline
-   Tampilan pipeline berbasis board (kanban)

### 🔹 User & Role Access

-   Login dengan role (Admin, CS, Sales, Manager)
-   Hak akses sesuai peran

---

## 🧩 Kebutuhan Non-Fungsional

-   UI sederhana dan mudah digunakan
-   Keamanan login dan role-based access
-   Performa cepat dalam pengolahan data
-   Database terpusat

---

## 🛠️ Teknologi yang Digunakan

-   **Framework:** Laravel
-   **Database:** MySQL
-   **Frontend:** Blade / Bootstrap
-   **Authentication:** Laravel Auth

---

## 📄 Lisensi

Project ini dikembangkan untuk keperluan **pembelajaran dan pengembangan sistem CRM**.  
Framework Laravel dilisensikan di bawah **MIT License**.

# CRM Ticketing System – Backend Setup

## Deskripsi

Ini adalah backend dari aplikasi CRM Ticketing Bioskop.  
Fungsi: manajemen user, customer, ticket, dan lead.

---

## 1. Persyaratan Sistem

-   PHP ≥ 8.1
-   Composer
-   MySQL / MariaDB
-   Laravel 12.x
-   Node.js & npm (opsional, jika ada frontend build)
-   Web server lokal (Laragon / XAMPP / Valet)

---

## 2. Clone Branch

```bash
git clone -b nama-branch-anda https://github.com/username/repo.git
cd repo
```

## composer install

```bash
composer install

```

# hanya jika ada frontend assets

npm run dev

## 4. Setup Environment

Copy .env.example menjadi .env

--bash
cp .env.example .env

```
atur database sesuai lokal, contoh:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=crm_bioskop
DB_USERNAME=root
DB_PASSWORD=
```

## 5. Generate Key

php artisan key:generate

## 6. Migrasi Database

php artisan migrate

## 7. Seed Database

php artisan db:seed --class=UserSeeder
php artisan db:seed --class=CustomerSeeder

## 8. Jalankan server

php artisan serve
