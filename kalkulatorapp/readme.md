# Kalkulator Java Swing

Aplikasi kalkulator sederhana berbasis Java dengan antarmuka grafis menggunakan Java Swing dan AWT. Aplikasi ini mengimplementasikan prinsip Object-Oriented Programming (OOP) dan memiliki struktur yang modular untuk memisahkan antarmuka, input, output, dan logika operasi.

---

## 🚀 Fitur

- Antarmuka grafis sederhana (GUI)
- Input dan Output ditampilkan di bagian atas aplikasi
- Tombol-tombol tersusun dalam grid 4x5
- Mendukung operasi dasar: tambah, kurang, kali, bagi, persen
- Dukungan tanda kurung dan desimal
- Fitur AC (reset), Delete (hapus satu karakter), dan hasil (=)

---

## 🧑‍💻 Cara Menjalankan

### 1. Prasyarat
- Java Development Kit (JDK) minimal versi 8 telah terinstall

### 2. Struktur Folder
```
kalkulatorapp/
├── Kalkulator.java
```

### 3. Kompilasi dan Menjalankan Program

```bash
javac Kalkulator.java
java kalkulatorapp.Kalkulator
```

> Pastikan Anda menjalankan perintah `java` dari direktori induk `kalkulatorapp` karena `Kalkulator` berada di dalam package `kalkulatorapp`.

---

## 📦 Struktur Kelas dan Penjelasan

### 1. `Kalkulator` (Kelas Utama)
```java
public class Kalkulator {
    public static void main(String[] args) {
        new UI();
    }
}
```
- Titik masuk aplikasi.
- Memanggil konstruktor dari kelas `UI` untuk membangun antarmuka pengguna.

---

### 2. `UI` (User Interface)
```java
class UI extends JFrame implements ActionListener {
    JTextField display;
    Input input;
    Output output;
    JButton[] buttons;
    ...
}
```
- Membuat tampilan utama aplikasi menggunakan `JFrame`, `JTextField`, dan `JPanel`.
- Menampilkan tombol-tombol kalkulator dalam layout grid 4x5.
- Menghubungkan setiap tombol ke event handler (`actionPerformed`).

**Tombol:**
```
AC, (), %, /
7, 8, 9, x
4, 5, 6, -
1, 2, 3, +
0, ,, Del, =
```

---

### 3. `Input`
```java
class Input {
    private StringBuilder expression;
    ...
}
```
- Menyimpan dan memanipulasi input pengguna.
- Method:
  - `append(String s)`: menambahkan karakter ke ekspresi.
  - `deleteLast()`: menghapus karakter terakhir.
  - `clear()`: menghapus seluruh ekspresi.
  - `getExpression()`: mendapatkan ekspresi saat ini.
  - `setExpression(String s)`: mengatur ulang ekspresi.

---

### 4. `Output`
```java
class Output {
    public String calculate(String expr) {
        ...
    }
}
```
- Bertugas memanggil `Pengoprasian` untuk menghitung hasil ekspresi.
- Menangkap error dengan try-catch, dan mengembalikan "Error" jika ekspresi tidak valid.

---

### 5. `Pengoprasian`
```java
class Pengoprasian {
    public double evaluate(String expr) throws Exception {
        ...
    }
}
```
- Melakukan evaluasi ekspresi matematika.
- Menggunakan `ScriptEngine` dari Java untuk mengeksekusi ekspresi sebagai string.
- Mengubah simbol `x` menjadi `*` agar dapat dikenali oleh interpreter JavaScript.

---

## 🎨 Tampilan
```
+-------------------------+
|          123+456        |
+-------------------------+
| AC | () | % | /        |
|  7 |  8 | 9  | x       |
|  4 |  5 | 6  | -       |
|  1 |  2 | 3  | +       |
|  0 | , | Del | =       |
+-------------------------+
```

---

## 🛠️ Pengembangan Selanjutnya

- Validasi ekspresi lebih ketat
- Dukungan untuk operasi eksponensial
- Riwayat kalkulasi
- Mode gelap/terang
- UI responsif dan lebih menarik

---

## 📄 Lisensi

By **faishalnafi**. Bebas digunakan untuk keperluan **pembelajaran** dan boleh dikembangkan lebih lanjut.
