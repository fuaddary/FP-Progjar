# FP PROGJAR 

Pada FP progjar kali ini, kita akan membuat sebuah aplikasi kuis berbasis web menggunakan python socket. Adapun spesifikasi aplikasi tersebut adalah:

  - Menggunakan Python socket web server
  - Memiliki fitur Chatting pada halaman utama
  - Dapat membaca soal dari file (csv/txt)
  - Dapat menampilkan soal dari dalam setiap selang waktu tertentu
 
  
# Skenario pengunaan aplikasi
1. server dijalankan menggunakan **sudo python server.py**
2. browser client mengakses alamat server
3. client masuk halaman utama dan menginputkan username
4. session akan disimpan oleh server
5. halaman utama terdiri dari kolom chat dan tombol untuk memulai kuis
6. server memberikan kategori kuis yang ada ketika tombol memulai kuis di click
7. client memilih kategori kuis 
8. kuis dimulai
9. server akan memberikan soal yang telah dibaca dari file setiap beberapa detik
10. server menampilkan hasil kuis
11. hasil akhir akan disave dalam file
12. client dapat mendownload file tersebut
13. server menampilkan halaman utama
14. kembali ke step 5


