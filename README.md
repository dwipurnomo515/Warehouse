# 📦 My Laravel Project

Proyek ini adalah aplikasi berbasis Laravel untuk mengelola **stok transaksi, pelanggan, dan pemasok**.  
Dilengkapi dengan fitur CRUD dan konfirmasi hapus menggunakan SweetAlert.

---

## 🚀 Fitur

✅ **Manajemen Stok**  
✅ **Manajemen Pelanggan**  
✅ **Manajemen Pemasok**  
✅ **SweetAlert Konfirmasi Hapus**  
✅ **Bootstrap Templating**  
✅ **Eloquent ORM untuk Query Database**  

---

## 🔧 Instalasi & Konfigurasi

### 1️⃣ **Clone Repository**
Pastikan sudah menginstal **Git**.  
Jalankan perintah berikut di terminal:
```bash
git clone https://github.com/dwipurnomo515/Warehouse.git
cd your-repo


2️⃣ Install Dependencies
Pastikan sudah menginstal Composer dan Node.js.
Jalankan perintah:

bash
Salin
Edit
composer install
npm install
3️⃣ Copy & Konfigurasi .env
bash
Salin
Edit
cp .env.example .env
Kemudian edit file .env untuk mengatur database:

dotenv
Salin
Edit
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=my_database
DB_USERNAME=root
DB_PASSWORD=
4️⃣ Generate Key
bash
Salin
Edit
php artisan key:generate
5️⃣ Migrasi Database
bash
Salin
Edit
php artisan migrate --seed
6️⃣ Jalankan Server
bash
Salin
Edit
php artisan serve
Akses aplikasi di browser:
👉 http://127.0.0.1:8000

🛠️ Penggunaan
🔹 Menambah Data
Klik tombol Add Stock Transaction, Add Customer, atau Add Supplier.
Isi form dan tekan Submit.
🔹 Mengedit Data
Klik tombol Edit pada data yang ingin diubah.
Perbarui informasi dan tekan Update.
🔹 Menghapus Data
Klik tombol Delete.
Konfirmasi penghapusan dengan SweetAlert.



