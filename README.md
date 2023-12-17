# Fauzan alfa abhista-121140217-UASPemweb
Repository yang digunakan untuk Ujian Akhir Semester Pemrograman web

Panduan:
# Bagian 1: Client-side Programming (Bobot: 30%)
1.1 (15%) Buatlah sebuah halaman web sederhana yang memanfaatkan JavaScript untuk melakukan manipulasi DOM.
Panduan:
- Buat form input dengan minimal 4 elemen input (teks, checkbox, radio, dll.)
- Menampilkan data dari server kedalam sebuah halaman menggunakan tag `table`
Jawab:
- Form input dibuat untuk pendaftaran user, input memuat (nama,email,telepon,password,jenis kelamin, tanggal lahir, alamat dan syarat dan ketentuan)
- User yang telah mendaftar akan ditampilkan rician nya di dashboard menggunakan tag `table`.

1.2 (15%) Buatlah beberapa event untuk menghandle interaksi pada halaman web
Panduan:
- Tambahkan minimal 3 event yang berbeda untuk menghandle form pada 1.1
- Implementasikan JavaScript untuk validasi setiap input sebelum diproses oleh PHP
Jawab:
- Event pada form 1.1 berupa: text untuk (nama,email,telepon), password untuk (password), radio untuk (jenis kelamin), date untuk tanggal lahir, textarea untuk (alamat) dan ceckbox untuk syarat dan ketentuan.
- Javascript di implementasikan ketika pengguna belum menyetujui syarat dan ketentuan maka akan muncul alert bahwa user wajib menyetujui syarat dan ketentuan.

# Bagian 2: Server-side Programming (Bobot: 30%)
2.1 (20%) Implementasikan script PHP untuk mengelola data dari formulir pada Bagian 1 menggunakan variabel global seperti `$_POST` atau `$_GET`. Tampilkan hasil pengolahan data ke layar.
Panduan:
- Gunakan metode POST atau GET pada formulir.
- Parsing data dari variabel global dan lakukan validasi disisi server
- Simpan ke basisdata termasuk jenis browser dan alamat IP pengguna
Jawab:
- Form yang di isi akan di kirim menggunakan method post.
- Server atau admin perlu memvalidasi kepada user yang melakukan pendaftaran. apabila server belum memvalidasi maka user belum bisa melakukan login.

2.2 (10%) Buatlah sebuah objek PHP berbasis OOP yang memiliki minimal dua metode dan gunakan objek tersebut dalam skenario tertentu pada halaman web Anda.
Panduan:
- Objek yang dibuat harus terkait dengan konteks pengembangan web saat ini
Jawab: 

# Bagian 3: Database Management (Bobot: 20%)
3.1 (5%) Buatlah sebuah tabel pada database MySQL
Panduan:
- Lampirkan langkah-langkah dalam membuat basisdata dengan syntax basisdata
Jawab:
Syntax basis data dibuat pada file database.sql

3.2 (5%) Buatlah konfigurasi koneksi ke database MySQL pada file PHP. Pastikan koneksi berhasil dan dapat diakses.
Panduan:
- Gunakan konstanta atau variabel untuk menyimpan informasi koneksi (host, username, password, nama database).
Jawab:
- koneksi pada local host menggunakan ($this->pdo = new PDO('mysql:host=localhost;dbname=uas_pemweb', 'root', '');) pada  file database/user.php
- sedangkan pada hosting perlu dilakukan penyesuaian pada web hostingnya

3.3 (10%) Lakukan manipulasi data pada tabel database dengan menggunakan query SQL. Misalnya, tambah data, ambil data, atau update data.
Panduan:
- Gunakan query SQL yang sesuai dengan skenario yang diberikan.
Jawab:
- Query SQL yang digunakan adalah hapus data (khusus admin), edit/update data, dan menu cari (khusus user)

# Bagian 4: State Management (Bobot: 20%)
4.1 (10%) Buatlah skrip PHP yang menggunakan session untuk menyimpan dan mengelola state pengguna. Implementasikan logika yang memanfaatkan session.
Panduan:
- Gunakan `session_start()` untuk memulai session.
- Simpan informasi pengguna ke dalam session.
Jawab:
- `session_start()` digunakan untuk membedakan sisi server dan sisi client.
- informasi pengguna di simpan dalam session ketika pengguna berhasil melakukan login. tempatnya pada file pages/login_proses.php

4.2 (10%) Implementasikan pengelolaan state menggunakan cookie dan browser storage pada sisi client menggunakan JavaScript.
Panduan:
- Buat fungsi-fungsi untuk menetapkan, mendapatkan, dan menghapus cookie.
- Gunakan browser storage untuk menyimpan informasi secara lokal.
Jawab:
- cookie di buat dengan mengklik tombol remember me pada lama login.
- data mengenai email dan password akan di simpan pada local storage

# Bagian Bonus: Hosting Aplikasi Web (Bobot: 20%)
Bagian bonus ini akan memberikan bobot tambahan 20% jika Anda berhasil meng-host aplikasi web yang Anda buat. Jawablah pertanyaan-pertanyaan berikut:
(5%) Apa langkah-langkah yang Anda lakukan untuk meng-host aplikasi web Anda?
Jawab: Langkah-Langkah yang dilakukan dalam menghosting web adalah memilih web yang tepat. input database menggunakan query yang telah dibuat sebelumnya. masukan segala berkas/file yang dibuat. lalu koneksikan database dan file melalui variabel untuk menyimpan informasi koneksi seperti (host, username, password, nama database).
(5%) Pilih penyedia hosting web yang menurut Anda paling cocok untuk aplikasi web Anda. Berikan alasan Anda.
Jawab: 000webhostapp dipilih selain gratis, mudah dalam deploy atau hosting web.
(5%) Bagaimana Anda memastikan keamanan aplikasi web yang Anda host?
Jawab: 
(5%) Jelaskan konfigurasi server yang Anda terapkan untuk mendukung aplikasi web Anda.
