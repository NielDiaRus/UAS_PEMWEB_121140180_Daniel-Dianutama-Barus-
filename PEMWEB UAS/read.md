## Bagian 1: HTML (index.html)

### 1.1 Halaman Web Todo List
- Form input dibuat dengan menggunakan HTML, mencakup minimal 4 elemen input (teks, checkbox, radio, dll.).
- Data dari server ditampilkan ke dalam halaman menggunakan tag `table` HTML.

### 1.2 Event Handling
- Tiga event berbeda ditambahkan untuk meng-handle form pada 1.1 menggunakan JavaScript.
- Implementasi JavaScript untuk validasi setiap input sebelum diproses oleh PHP

## Bagian 2: CSS (style.css)

### Desain dan Tata Letak Halaman
- Pengaturan warna latar belakang, font, dan padding untuk meningkatkan estetika halaman.
- Penyesuaian tata letak elemen-elemen HTML untuk tampilan yang lebih bersih dan rapi.

## Bagian 3: JavaScript (script.js)

### Fungsi-Fungsi JavaScript
- Fungsi `addTaskToTable` untuk menambahkan tugas baru ke dalam tabel.
- Fungsi `removeTask` untuk menghapus tugas dari tabel.
- Event listener untuk meng-handle submission form dengan menambahkan tugas ke tabel.

## Bagian 4: PHP (process.php)

### Handling Form Submission (POST)
- Mendapatkan data dari formulir menggunakan `$_POST`.
- Melakukan validasi data di sisi server jika diperlukan.
- Proses data lebih lanjut jika diperlukan (contoh: menyimpan ke database).
- Mengirim respons ke klien dalam format JSON.

### Handling Task Removal (GET)
- Mengecek apakah operasi adalah penghapusan tugas (`action=remove`).
- Jika ya, mendapatkan nama tugas yang akan dihapus dari `$_GET["task"]`.
- Mengirim respons ke klien dalam format JSON.
- Jika tidak, memberikan respons kesalahan.

### Handling Other Cases
- Memberikan respons kesalahan jika metode bukan POST atau GET.


## Bagian 5: Database (database.sql)

### Skema Database MySQL
- Membuat tabel `tasks` dengan kolom-kolom yang sesuai dengan kebutuhan aplikasi.

## Bagian 6: Petunjuk Penggunaan dan Lisensi

### Petunjuk Penggunaan
1. Pastikan server web mendukung PHP.
2. Jalankan aplikasi pada server lokal atau server web yang sesuai.
3. Buka aplikasi melalui browser.

### Lisensi
[MIT License](LICENSE)


### Hosting Web
1.  Apa langkah-langkah yang Anda lakukan untuk meng-host aplikasi web Anda?
   Jawab : 1. Kunjungi website infinityfree, lalu buat akun atau Masuk ke akun Anda
          2. Lalu klick create account
          3. PIlih domain custom dan masukkan nama domain web yang kita inginkan lalu klik                   search domain
          4. Isi Account Label, Acount Password, dan Verifikasi reCAPTCHA. Kemudian klik Create              Account.
          5.  Klik File Manager lalu masuk ke folder htdocs dan unggah file Anda disini lalul                uppload file code 
          6. Lalu balik ke menu awal
          7. masuk ke phpmysql, buat nama database dan import data base yg sudah dibuat
          8. Ganti code pada database.php untuk local, username, password,dbname ke data yang                 sudah diberikan infinityfree
          9. klik finis (selesai membuat hosting)
    
2.   Pilih penyedia hosting web yang menurut Anda paling cocok untuk aplikasi web Anda. Berikan alasan Anda.
   Jawab : Web untuk menghosting website saya adal infinityfree dikarenakan pemakaiannya mudah           dan tidak lambat dalam mengedit atau mengolah data file code jika ada perubahan/tambahan code
3. Bagaimana Anda memastikan keamanan aplikasi web yang Anda host?
   Jawab : Dengan mengimplemntasi langsung dengan cara mencopy link web hosting yang sudah     disediakan apakah berjalan atau tidak 
4. Jelaskan konfigurasi server yang Anda terapkan untuk mendukung aplikasi web Anda.
   Jawab : 1. Pastikan server web mendukung php
           2. Pastikan code memiliki server basis data MySQL yang berjalan dan dapat diakses                  oleh aplikasi PHP.
           3.Pastikan struktur direktori proyek sesuai dengan struktur yang diharapkan oleh                  server web
         4. Pastikan bahwa server web memiliki hak akses yang cukup untuk membaca dan menulis               file dan direktori yang dibutuhkan oleh aplikasi.
         5. Setelah konfigurasi selesai, Anda dapat mengakses aplikasi melalui browser dengan               membuka alamat URL yang sesuai dengan konfigurasi server Anda.
   




