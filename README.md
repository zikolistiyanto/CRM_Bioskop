<p align="center">
  <img src="https://raw.githubusercontent.com/laravel/artisan/master/docs/ls-logo.png" width="100" alt="Laravel Logo">
  <br>
  <strong>Cinema CRM & Ticketing System</strong><br>
  Sistem CRM berbasis web untuk aplikasi ticketing bioskop
</p>

---

## 🎬 Tentang Project

**Cinema CRM & Ticketing System** adalah aplikasi **Customer Relationship Management (CRM)** berbasis web yang dirancang untuk mendukung operasional aplikasi bioskop.

Sistem ini membantu pengelolaan **data customer, riwayat interaksi, ticket/complaint**, serta **sales pipeline** dalam satu platform terpusat dengan dukungan **role-based access**.

Project ini dibangun menggunakan **Laravel** sebagai backend framework.

---

## 🚀 Update Terbaru (Changelog)

Berikut adalah pembaharuan fitur dan infrastruktur yang telah diimplementasikan:

- **Database Real-Data Connection**: Seluruh UI telah dihubungkan ke database MySQL menggunakan Eloquent ORM (Data Statis/Dummy telah dihapus).
- **Dynamic Dashboard**: Dashboard utama kini menampilkan statistik riil (Total Revenue, Open Tickets, Total Customers, Recent Activities).
- **Standardized Routing**: URL sistem telah diperbarui mengikuti standar RESTful Laravel (Pluralized URLs seperti `/customers`, `/tickets`, dll).
- **Complete CRM Modules**:
    - **Customer Module**: Profil lengkap pelanggan beserta histori tiket dan interaksinya.
    - **Ticketing Module**: Alur manajemen keluhan dengan status dinamis.
    - **Lead & Pipeline**: Visualisasi prospek penjualan berbasis tahapan (Kanban-style).
    - **User Management**: Pantauan performa internal user berdasarkan role.
- **Database Seeder**: Penambahan data awal otomatis untuk pengujian sistem.

---

## 🎯 Tujuan Sistem

- Mengelola data customer secara terstruktur  
- Mencatat riwayat interaksi customer  
- Menangani ticket dan keluhan pelanggan  
- Mengelola proses penjualan melalui sales pipeline  
- Mendukung monitoring dan pelaporan oleh manajemen  

---

## 👥 Aktor Sistem & Job Desk

- **Admin**  
  Mengelola user internal dan konfigurasi sistem.

- **Customer Service (CS)**  
  Menangani keluhan pelanggan (Tickets) dan mencatat interaksi.

- **Sales**  
  Fokus pada konversi Lead dan mengelola Sales Pipeline.

- **Manager**  
  Monitoring dashboard, laporan keuangan (revenue), dan performa tim.

---

## ⚙️ Fitur Utama

### 🔹 Manajemen Data Customer
- Tambah, ubah, dan hapus data customer
- Melihat detail dan daftar customer
- Pencarian data customer

### 🔹 Riwayat Interaksi
- Mencatat interaksi (telepon, email, meeting)
- Menampilkan histori interaksi per customer

### 🔹 Ticketing / Complaint
- Membuat ticket keluhan customer
- Update status ticket (Open, In Progress, Resolved)
- Monitoring daftar ticket

### 🔹 Sales Pipeline
- Mencatat lead/prospek baru
- Mengelola stage pipeline
- Tampilan pipeline berbasis board (kanban)

### 🔹 User & Role Access
- Login dengan role (Admin, CS, Sales, Manager)
- Hak akses sesuai peran

---

## 🛠️ Persyaratan Sistem

- **PHP** >= 8.2
- **Composer**
- **MySQL** / **MariaDB**
- **Web Server** (Apache/Nginx/Laragon)

---

## 📥 Cara Menjalankan Project

Ikuti langkah-langkah berikut untuk menginstal project di lokal:

1. **Clone Repository**
   ```bash
   git clone https://github.com/username/CRM_Bioskop.git
   cd CRM_Bioskop
   ```

2. **Instal Dependensi**
   ```bash
   composer install
   ```

3. **Konfigurasi Environment & Database**
   - Salin file `.env.example` menjadi `.env`:
     ```bash
     cp .env.example .env
     ```
   - Buat database baru di MySQL (misal bernama: `crm_bioskop`).
   - Buka file `.env` dan sesuaikan pengaturan database:
     ```env
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=crm_bioskop
     DB_USERNAME=root
     DB_PASSWORD=
     ```

4. **Generate App Key**
   ```bash
   php artisan key:generate
   ```

5. **Jalankan Migrasi & Seeding**
   Perintah ini akan membuat tabel dan mengisi data awal (User, Customer, Lead, Ticket).
   ```bash
   php artisan migrate --seed
   ```

6. **Jalankan Server**
   ```bash
   php artisan serve
   ```
   Aplikasi dapat diakses di: `http://localhost:8000`

---

## 👥 Akun Akses (Data Demo)

Gunakan akun berikut untuk login (Password semua akun: `password`):

| Role | Nama | Email |
| :--- | :--- | :--- |
| **Admin** | Ziko Listiyanto | `admin@crm.com` |
| **Manager** | Ziko Listiyanto | `manager@crm.com` |
| **CS** | Risky Bayu Septyanda | `cs@crm.com` |
| **Sales** | Zulkifli Saleh | `sales@crm.com` |

---

## 🛠️ Teknologi yang Digunakan

- **Framework:** Laravel  
- **Database:** MySQL  
- **Frontend:** Blade / Bootstrap / Tabler Dashboard Template
- **Authentication:** Laravel Auth  

---

## 📄 Lisensi

Project ini dikembangkan untuk keperluan pembelajaran. Framework Laravel dilisensikan di bawah [MIT License](https://opensource.org/licenses/MIT).
