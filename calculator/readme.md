Buku Manual - Proyek Kalkulator Web Modern & Responsif
Daftar Isi
Kata Pengantar

Filosofi Desain & Pengembangan

Fitur Unggulan Secara Rinci

Anatomi Antarmuka Kalkulator

Tinjauan Teknis Mendalam

Panduan Penggunaan Awal

Panduan Kustomisasi & Modifikasi

Panduan Pemecahan Masalah (Troubleshooting)

Potensi Pengembangan di Masa Depan

Lisensi

Kata Penutup

1. Kata Pengantar
Tujuan Dokumen
Selamat datang di buku manual resmi untuk Proyek Kalkulator Web Modern. Dokumen ini dibuat sebagai sumber referensi tunggal dan komprehensif. Tujuannya adalah untuk memberikan pemahaman mendalam tentang setiap aspek proyek—mulai dari konsep dan filosofi yang mendasarinya, hingga panduan praktis untuk penggunaan, kustomisasi, dan pemecahan masalah.

Untuk Siapa Dokumen Ini?
Pengguna Akhir: Untuk memahami semua fitur yang tersedia dan cara menggunakannya secara maksimal.

Pengembang (Developer): Untuk mempelajari arsitektur kode, teknologi yang digunakan, dan cara memodifikasi atau mengembangkan proyek lebih lanjut.

Desainer UI/UX: Untuk mendapatkan wawasan tentang keputusan desain di balik antarmuka dan pengalaman pengguna.

2. Filosofi Desain & Pengembangan
Proyek ini dibangun di atas tiga pilar utama:

Pengalaman Pengguna (UX)
Prioritas utama adalah kemudahan dan kenyamanan pengguna. Setiap interaksi dirancang agar terasa intuitif. Desain responsif memastikan fungsionalitas penuh tetap terjaga tanpa kompromi, baik di layar ponsel yang sempit maupun di monitor desktop yang luas.

Antarmuka Visual (UI)
Inspirasi dari estetika macOS modern diadopsi untuk menciptakan tampilan yang bersih, elegan, dan profesional. Penggunaan efek glassmorphism, tipografi yang jelas, dan palet warna yang seimbang bertujuan untuk menciptakan antarmuka yang tidak hanya fungsional tetapi juga menyenangkan secara visual.

Kualitas Kode
Kode ditulis dengan pendekatan berorientasi objek (OOP) untuk memastikan struktur yang bersih, modular, dan mudah dikelola (maintainable). Pemisahan yang jelas antara struktur (HTML), presentasi (CSS), dan logika (JavaScript) membuat kode mudah dipahami dan diperluas.

3. Fitur Unggulan Secara Rinci
Desain Modern ala macOS: Mengadopsi UI modern dengan efek glassmorphism yang memberikan kesan elegan dan tembus pandang.

Sepenuhnya Responsif: Tampilan beradaptasi secara otomatis, tampil fullscreen di seluler dan sebagai jendela di desktop.

Mode Terang & Gelap: Tombol switch fungsional untuk beralih tema dengan transisi yang halus.

Penyimpanan Preferensi Tema: Preferensi tema disimpan di local storage untuk pengalaman yang konsisten di setiap kunjungan.

Animasi Halus & Interaktif: Animasi "Jelly Float" saat memuat dan umpan balik visual saat tombol ditekan.

Fungsionalitas Kalkulasi Lengkap: Mendukung operasi dasar (+, -, ×, ÷), urutan operasi matematika (BODMAS/PEMDAS), penggunaan kurung (), dan fungsi persentase (%).

Kontrol Intuitif: Tombol AC untuk membersihkan semua input dan Backspace (⌫) untuk menghapus karakter terakhir.

4. Anatomi Antarmuka Kalkulator
Mari kita bedah setiap komponen utama dari antarmuka kalkulator.

Area Header
Bagian paling atas dari jendela kalkulator, berisi:

Window Dots (Tombol Jendela): Tiga lingkaran berwarna (merah, kuning, hijau) yang meniru tombol kontrol jendela macOS. Tombol ini murni bersifat dekoratif.

Theme Switch (Sakelar Tema): Tombol geser yang memungkinkan pengguna beralih antara mode terang dan gelap.

Area Layar
Tempat semua input dan hasil ditampilkan.

History View (Tampilan Riwayat): Baris atas yang menampilkan ekspresi matematika terakhir yang dihitung.

Main Display (Tampilan Utama): Baris bawah yang lebih besar, menampilkan angka yang sedang diinput atau hasil dari perhitungan. Ukuran font di sini akan otomatis mengecil jika angka terlalu panjang.

Area Grid Tombol
Jantung dari interaksi pengguna, diorganisir dalam grid 4x5 yang responsif.

Tombol Fungsi (Abu-abu Terang): AC, (), %. Ini adalah tombol untuk operasi non-numerik khusus.

Tombol Operator (Oranye): ÷, ×, -, +, =. Tombol ini adalah untuk operasi matematika utama dan diberi warna aksen agar mudah dikenali.

Tombol Angka & Lainnya (Abu-abu Gelap): 0-9, koma (,), dan Backspace (⌫).

5. Tinjauan Teknis Mendalam
Arsitektur Teknologi
Fondasi: HTML5 & Bootstrap 5.3 (untuk grid).

Styling: CSS3 dengan Variabel CSS, Media Queries, @keyframes, dan backdrop-filter.

Logika: JavaScript (ES6+) dengan pendekatan Class-based OOP.

Aset: Google Fonts (Poppins) & ikon SVG.

Struktur Kode & Pola Desain
Pemisahan Kepentingan (Separation of Concerns):

HTML: Bertanggung jawab penuh atas struktur dan konten semantik.

CSS: Mengontrol semua aspek visual dan presentasi.

JavaScript: Mengelola semua logika, state, dan interaktivitas.

Pola Desain Berorientasi Objek:

class Calculator: Bertindak sebagai "otak" dari aplikasi. Kelas ini tidak tahu apa-apa tentang DOM (HTML/CSS). Ia hanya menerima input, memprosesnya, dan menyimpan state (currentInput). Ini membuatnya sangat modular dan mudah diuji.

Event Listener (di luar kelas): Bertindak sebagai "jembatan" antara DOM dan class Calculator. Mereka "mendengarkan" klik pengguna, lalu memanggil metode yang relevan dari instance calculator.

6. Panduan Penggunaan Awal
Unduh atau Salin Kode: Dapatkan kode sumber lengkap dari satu file.

Simpan sebagai File HTML: Simpan kode ke dalam file dengan ekstensi .html (misal: index.html).

Buka di Peramban: Buka file tersebut menggunakan peramban web modern. Kalkulator siap digunakan.

7. Panduan Kustomisasi & Modifikasi
Kode ini dirancang agar fleksibel. Berikut cara memodifikasi beberapa aspek kunci.

Mengubah Skema Warna & Tema
Lokasi: Di dalam tag <style>, cari blok :root dan body.dark-mode.

Cara: Ubah nilai warna pada variabel CSS. Contoh, untuk membuat tombol operator berwarna biru di tema terang:

:root {
  --btn-operator-bg: #007bff; /* Mengubah dari oranye ke biru */
}

Mengubah Tipografi (Font)
Pilih Font: Kunjungi Google Fonts dan pilih font baru.

Ubah Tautan <link>: Ganti tautan <link> di bagian <head> dengan yang baru dari Google Fonts.

Ubah Properti CSS: Di dalam body, ubah nilai font-family.

body {
  font-family: 'Roboto', sans-serif; /* Mengubah dari Poppins ke Roboto */
}

Mengubah Animasi
Lokasi: Cari aturan CSS @keyframes jelly-float-in dan properti animation pada kelas .calculator-window.

Cara: Ubah nilai transform atau opacity pada setiap langkah keyframe untuk efek yang berbeda.

Studi Kasus: Menambah Fungsi Baru (Akar Kuadrat √)
Ini adalah panduan langkah demi langkah untuk menambahkan fungsionalitas baru.

Langkah 1: Tambahkan Tombol di HTML
Cari grid tombol dan tambahkan tombol baru, misalnya di sebelah tombol ().

<!-- Di dalam .row yang sesuai -->
<div class="col"><button class="btn-calc btn-grey" data-action="parentheses">()</button></div>
<div class="col"><button class="btn-calc btn-grey" data-action="sqrt">√</button></div>
<!-- Sesuaikan grid agar tetap 4 kolom -->

Langkah 2: Tambahkan Logika di JavaScript
Di dalam class Calculator, tambahkan metode baru dan panggil melalui chooseAction.

class Calculator {
    // ... metode lainnya ...

    calculateSquareRoot() {
        try {
            // Ambil nilai saat ini, hitung akarnya
            const currentValue = parseFloat(this.currentInput);
            if (currentValue < 0) {
                this.currentInput = 'Error'; // Akar dari negatif tidak valid
            } else {
                this.currentInput = Math.sqrt(currentValue).toString();
            }
            this.history = `√(${currentValue}) =`;
            this.shouldResetDisplay = true;
        } catch {
            this.currentInput = 'Error';
        }
        this.updateDisplay();
    }

    chooseAction(action, key) {
        switch(action) {
            // ... case lainnya ...
            case 'sqrt': this.calculateSquareRoot(); break;
        }
    }
}

Langkah 3: Selesai!
Tombol akar kuadrat Anda sekarang sudah berfungsi penuh berkat struktur kode yang modular.

8. Panduan Pemecahan Masalah (Troubleshooting)
Masalah: Tampilan terlihat aneh atau efek kaca tidak muncul.

Solusi: Pastikan Anda menggunakan peramban modern yang mendukung properti CSS backdrop-filter. Peramban lama mungkin tidak menampilkannya dengan benar.

Masalah: Tema kembali ke mode terang setiap kali halaman dimuat ulang.

Solusi: Pastikan peramban Anda tidak dalam mode penyamaran/privat, yang sering kali memblokir localStorage. Izinkan juga situs untuk menyimpan data jika ada pengaturan keamanan yang ketat.

Masalah: Kalkulator menampilkan "Error" setelah menekan =.

Solusi: Ini berarti ekspresi matematika yang Anda masukkan tidak valid (misalnya, 5 *+ 5 atau (5+3). Tekan AC untuk mereset dan coba lagi dengan ekspresi yang benar.

9. Potensi Pengembangan di Masa Depan
Proyek ini memiliki banyak ruang untuk tumbuh. Beberapa ide meliputi:

Riwayat Perhitungan: Menampilkan daftar perhitungan sebelumnya yang bisa digulir.

Fungsi Ilmiah: Menambahkan lebih banyak fungsi seperti pangkat, logaritma, dan trigonometri.

Dukungan Keyboard: Memungkinkan pengguna mengetik angka dan operator menggunakan keyboard fisik.

Konversi Unit: Menambahkan fitur untuk mengonversi satuan (misal, cm ke inci).

10. Lisensi
Proyek ini dilisensikan di bawah Lisensi MIT. Anda bebas untuk menggunakan, menyalin, memodifikasi, menggabungkan, mempublikasikan, mendistribusikan, dan/atau menjual salinan perangkat lunak ini.

11. Kata Penutup
Terima kasih telah meluangkan waktu untuk membaca buku manual ini. Diharapkan dokumentasi ini dapat memberikan kejelasan dan membantu Anda dalam memanfaatkan proyek ini secara maksimal. Selamat mencoba dan berkreasi!
