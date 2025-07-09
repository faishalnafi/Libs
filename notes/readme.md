# 📋 To-Do List Web App

Aplikasi To-Do List berbasis web menggunakan PHP (tanpa framework) dengan UI modern berbasis **TailwindCSS**, **Bootstrap**, dan **SASS**. Aplikasi ini mendukung operasi CRUD, notifikasi sukses, dan konfirmasi popup untuk setiap aksi penting.

---

## 🚀 Fitur Utama

- Tambah tugas baru
- Lihat daftar tugas
- Edit tugas
- Hapus tugas
- Tandai tugas sebagai selesai
- Popup konfirmasi sebelum CRUD
- Alert notifikasi sukses
- Desain modern, flat UI (inspirasi Google)
- Fullscreen & responsive

---

## 🗂️ Struktur Folder

```
/project-root
├── app
│   ├── controllers
│   │   └── TaskController.php
│   ├── models
│   │   └── Task.php
│   ├── views
│   │   ├── index.php
│   │   ├── form.php
│   │   └── layouts
│   │       ├── header.php
│   │       └── footer.php
├── config
│   └── database.php
├── core
│   ├── App.php
│   └── Controller.php
├── public
│   ├── index.php
│   └── .htaccess
├── notes.sql
└── README.md
```

---

## 🛠️ Instalasi

1. **Kloning Project**
```bash
git clone <url-repo>
```

2. **Pindahkan ke Direktori Web (htdocs/www)**

3. **Import Database**
- Buka `phpMyAdmin`
- Import file `notes.sql`

4. **Konfigurasi Database**
Sudah otomatis dikonfigurasi:
```
host = localhost
username = root
password = (kosong)
db = notes
```

5. **Akses Aplikasi**
```
http://localhost/todo-list/public/
```

---

## 📄 Penjelasan File

### `public/index.php`
Entry point aplikasi. Akan memanggil router `App.php` dan controller default `TaskController`.

### `.htaccess`
Mengatur URL agar bersih (`domain/edit?id=1`) tanpa `index.php?url=...`.

### `core/App.php`
Routing manual untuk membaca URL dan memanggil controller serta metode terkait.

### `core/Controller.php`
Base class kosong, bisa dikembangkan.

### `config/database.php`
File koneksi database menggunakan `mysqli` dan OOP.

### `app/controllers/TaskController.php`
Berisi logic utama untuk:
- `index()` = tampilkan daftar
- `create()` = tambah tugas
- `edit()` = edit tugas
- `delete()` = hapus
- `done()` = toggle selesai

### `app/models/Task.php`
Berisi semua query ke database:
- Ambil semua tugas
- Insert, update, delete
- Toggle status selesai

### `app/views/index.php`
Menampilkan semua tugas dalam bentuk list.

### `app/views/form.php`
Form untuk tambah dan edit tugas.

### `layouts/header.php & footer.php`
Template HTML, import Bootstrap & Tailwind, struktur halaman.

---

## 🧪 Tips Testing

- Coba tambahkan tugas → akan muncul popup form
- Coba hapus atau edit → muncul popup konfirmasi
- Jika sukses → akan muncul alert hijau
- Cek responsive di ponsel, tablet, desktop

---

## 💡 Fitur Tambahan yang Bisa Dikembangkan

- Login user (auth)
- Prioritas tugas (tinggi/sedang/rendah)
- Filter tugas selesai/belum
- Drag & drop reordering
- Export ke Excel/CSV

---

## 🙌 Terima Kasih

Dibuat dengan ❤️ oleh [Faishal Nafi'] — aplikasi ini fleksibel dan mudah dikembangkan untuk kebutuhan tugas, pembelajaran, atau production ringan.

---

> Jika ada kesalahan atau saran, silakan langsung modifikasi sesuai kebutuhan!
