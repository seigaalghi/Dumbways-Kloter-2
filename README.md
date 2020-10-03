# Dumbways-Kloter-2
Dibuat untuk mengikuti test bootcamp dumbways kloter kedua

SOAL NO. 1

Saya menggunakan bahasa pemrograman HTML, CSS, dan Javascript pada Soal No.1 ini.
Untuk menjalankannya cukup buka file 1.html pada web browser
Maka akan muncul GUI yang berisi beberapa tombol yang sudah diisi dengan angka-angka random
ketika tombol itu ditekan maka akan mengerjakan dan menampilkan seperti yang diperintahkan pada soal

untuk melihat tampilan dari soal no.1 bisa dilihat pada link dibawah ini
https://ibb.co/c3WQBTG

Logika pengerjaan soal nomor 1 adalah :
- Saya memiliki sebuah variabel array, misal [1,2,3,4,5]
- nilai-nilai pada var array tersebut memiliki index masing-masing 0,1,2,3,4
- Dilakukan pengulangan i=0 sampai i<=array.length
- ketika i=0, maka saya hapus nilai yang ber-index [0] menggunakan method splice
- setelah angka tersebut terhapus, saya lakukan method join dengan pemisah +
- dengan begitu didapat string "2+3+4+5="
- lalu untuk mendapatkan nilai hasil tambahnya saya menggunakan method reduce()
- setelah saya dapat string "2+3+4+5=" dan nilai dari penjumlahannya maka saya gabungkan keduanya
- hal ini dilakukan secara berulang (looping), hingga ke-5 nilai array tadi terproses
- maka saya urutkan hasil dari ke-5 penjumlahan tadi menggunakan method .sort
- setelah diurutkan maka index ke 0 adalah angka terkecil, dan index ke 5 adalah angka terbesar

SOAL NO. 2

Pada soal No.2 saya menggunakan bahasa pemrograman HTML, CSS, dan Javascript.
Untuk menjalankannya cukup buka file 2.html pada web browser
saya buat 2 buah kolom input untuk membrikan tanggal mulai dan tanggal akhir
dengan mengisikan tanggal sesuai dengan format yang ditentukan, lalu klik mulai
maka akan tampil seluruh tanggal yang berada diantara kedua nilai input tadi.

Tampilan soal no.2 dapat dilihat pada link dibawah ini
https://ibb.co/nBvdXs3

Logika pengerjaan soal Nomor 2 :
- Nilai tanggal mulai memiliki jarak dengan nilai tanggal akhir
- String tanggal dipahami oleh javascript sebagai nilai dengan menggunakan new date(tanggal)
- Saya menggunakan while(tanggalMulai<=tanggalAkhir) yang artinya selama masih ada nilai perbedaan nilai tanggal
- Pengualangan masih akan terus berjalan, setiap pengulangan dilakukan untuk mencetak nilai tahun, bulan, dan tanggal
- dari tanggalMulai, jadi selama nilai tanggalMulai belum sama dengan tanggalAkhir maka akan terus mencetak tanggal.


SOAL NO.3

Pada soal No.3 saya menggunakan bahasa pemrograman HTML, CSS, dan Javascript.
Untuk menjalankannya cukup buka file 3.html pada web browser
Akan disajikan sebuah kolom input untuk mengisi angka
dan sebuah tombol submit untuk mengeksekusi function-nya
setelah input angka dan tombol submit ditekan
maka akan muncul pola seperti yang diperintahkan pada soal No.3

Tampilan soal no.3 dapat dilihat pada link dibawah ini
https://ibb.co/fdwrHbC

Logika pengerjaan soal Nomor 3 :
- terdapat baris ganjil dan baris genap,
- terdapat pula kolom ganjil dan kolom genap
- ketika baris = ganjil, maka kolom akan diisi dengan "=" pada kelipatan 3 dan sisanya akan diisi dengan "*"
- ketika bari = genap, maka kolom ganjil akan diisi dengan "*" dan kolom genap akan diisi dengan "="

SOAL No. 4

A. Membuat Database

Database dibuat menggunakan MySQL
Database diberi nama "dbnews"
Database terdiri atas 2 table
antaralain tabel user dan tabel news
tabel user berisikan :

id_u (User ID) diset sebagai PRIMARY KEY
name_u (User Name)
email_u (User Email)
role_u (User Role)

tabel news berisikan :

id_n (News ID) diset sebagai PRIMARY KEY
title_n (News Title)
image_n (Image Title)
deskripsi_n (Deskripsi news)
create_time_n (Tanggal dibuat)
user_id (User ID) diset sebagai FOREIGN KEY referensi id_u dari tabel user

telah dilampirkan screenshot dari ketiga task yang telah diberikan

SOAL NO 4 B

Membuat aplikasi sederhana CRUD
untuk menjalankan aplikasi ini,
1. impor database 4.sql ke dalam database lokal
2. letakkan file 4.php, dan 4-1.php serta folder img ke suatu folder pada htdocs XAMP/WAMP dll.
3. buka localhost/namafolder/4.php

Sudah disediakan semua fitur yang dibutuhkan untuk fungsi CRUD (CREATE READ UPDATE DELETE)
tampilan dari aplikasi ini dapat dilihat pada link dibawah
https://ibb.co/kmMk66d Kolom penginputan (CREATE)
https://ibb.co/vm8ZBGj Kolom READ, UPDATE, DELETE (NEWS). untuk melakukan update/delete dapat dilakukan dengan klik pada tombol Edit/delete yang telah disediakan
https://ibb.co/RpNLYyz Kolom READ, UPDATE, DELETE (USER). untuk melakukan update/delete dapat dilakukan dengan klik pada tombol Edit/delete yang telah disediakan
https://ibb.co/Xzq433p Untuk dapat tampikan berita, dengan cara mengklik judul berita pada Kolom READ.


Sekian penjelasan dari saya, terimakasih banyak

Hormat Saya


Seiga AL Ghifari
