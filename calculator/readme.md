# 📘 Buku Manual - Proyek Kalkulator Web Modern & Responsif

## 🗂️ Daftar Isi
1. [Kata Pengantar](#1-kata-pengantar)
2. [Filosofi Desain & Pengembangan](#2-filosofi-desain--pengembangan)
3. [Fitur Unggulan Secara Rinci](#3-fitur-unggulan-secara-rinci)
4. [Anatomi Antarmuka Kalkulator](#4-anatomi-antarmuka-kalkulator)
5. [Tinjauan Teknis Mendalam](#5-tinjauan-teknis-mendalam)
6. [Panduan Penggunaan Awal](#6-panduan-penggunaan-awal)
7. [Panduan Kustomisasi & Modifikasi](#7-panduan-kustomisasi--modifikasi)
8. [Panduan Pemecahan Masalah (Troubleshooting)](#8-panduan-pemecahan-masalah-troubleshooting)
9. [Potensi Pengembangan di Masa Depan](#9-potensi-pengembangan-di-masa-depan)
10. [Lisensi](#10-lisensi)
11. [Kata Penutup](#11-kata-penutup)

---

## 1. ✨ Kata Pengantar

### 🎯 Tujuan Dokumen
Selamat datang di buku manual resmi untuk **Proyek Kalkulator Web Modern**. Dokumen ini dibuat sebagai referensi komprehensif untuk memahami dan memanfaatkan seluruh fitur proyek, baik dari sisi teknis maupun visual.

### 🧑‍💻 Untuk Siapa Dokumen Ini?
- **Pengguna Akhir** – Memaksimalkan fitur kalkulator.
- **Developer** – Memahami arsitektur dan pengembangan.
- **Desainer UI/UX** – Memahami alur dan keputusan desain.

---

## 2. 🧠 Filosofi Desain & Pengembangan

Proyek ini dibangun berdasarkan tiga prinsip utama:

- **UX (User Experience)**: Intuitif & responsif di semua perangkat.
- **UI (User Interface)**: Elegan ala macOS dengan gaya *glassmorphism*.
- **Kualitas Kode**: OOP, modular, dan terstruktur dengan jelas.

---

## 3. 🌟 Fitur Unggulan Secara Rinci

- 🎨 **Desain Modern**: Gaya macOS dengan efek *glassmorphism*.
- 📱 **Responsif Penuh**: Mobile fullscreen, desktop windowed.
- 🌗 **Mode Terang & Gelap**: Dengan animasi transisi halus.
- 💾 **Penyimpanan Preferensi**: Simpan tema ke `localStorage`.
- 💡 **Animasi Interaktif**: Efek *Jelly Float*, dan *hover feedback*.
- 🧮 **Kalkulasi Lengkap**: +, -, ×, ÷, (), %, dan urutan operasi.
- 🧼 **Kontrol Intuitif**: Tombol `AC` & `⌫` berfungsi sesuai ekspektasi.

---

## 4. 🧩 Anatomi Antarmuka Kalkulator

### 📌 Area Header
- **Window Dots**: Dekorasi ala macOS.
- **Theme Switch**: Mode terang ↔ gelap.

### 📺 Area Layar
- **History View**: Menampilkan ekspresi terakhir.
- **Main Display**: Menampilkan input atau hasil.

### 🎛️ Grid Tombol
- **Tombol Fungsi**: AC, (), %
- **Tombol Operator**: ÷, ×, -, +, =
- **Tombol Angka & Koma**: 0–9, ,, ⌫

---

## 5. ⚙️ Tinjauan Teknis Mendalam

### 🏗️ Arsitektur Teknologi
- **HTML5** + **Bootstrap 5.3**
- **CSS3**: Variabel, media queries, @keyframes, `backdrop-filter`
- **JavaScript (ES6+)**: OOP berbasis class
- **Google Fonts**: `Poppins`, dan ikon SVG

### 🧱 Struktur & Pola
- **Separation of Concerns**
  - HTML: Struktur
  - CSS: Tampilan
  - JS: Logika & interaksi
- **OOP**
  - `class Calculator`: Mengelola perhitungan & state
  - Event Listener: Penghubung DOM ↔ kalkulator

---

## 6. 🚀 Panduan Penggunaan Awal

1. **Unduh atau Salin Kode**: Salin kode sumber.
2. **Simpan Sebagai `.html`**: Misalnya `index.html`.
3. **Buka di Browser Modern**: Kalkulator siap digunakan.

---

## 7. 🛠️ Panduan Kustomisasi & Modifikasi

### 🎨 Ubah Warna Tema
```css
:root {
  --btn-operator-bg: #007bff; /* Biru */
}
