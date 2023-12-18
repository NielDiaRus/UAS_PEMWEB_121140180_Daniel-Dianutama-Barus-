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




