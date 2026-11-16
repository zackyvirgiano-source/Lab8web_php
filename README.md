# LAB 8 WEB - PHP DAN DATABASE MYSQL

## Identitas
- Nama: Muhammad Zacky Virgiano
- NIM: (312510349)
- Kelas: I251B
- Mata Kuliah: Pemrograman Web

## 1. Persiapan Praktikum

Pada praktikum ini, dilakukan pembuatan aplikasi CRUD sederhana menggunakan PHP dan database MySQL. Aplikasi dibuat menggunakan Visual Studio Code sebagai text editor dan XAMPP sebagai web server.

Sebelum memulai praktikum, Apache dan MySQL dijalankan melalui XAMPP Control Panel.


## 2. Membuat Database

Database dibuat melalui phpMyAdmin dengan nama `latihan1`.

Selanjutnya, dibuat tabel bernama `data_barang` yang digunakan untuk menyimpan informasi barang.

Tabel tersebut memiliki beberapa kolom, yaitu:
- id_barang
- kategori
- nama
- gambar
- harga_beli
- harga_jual
- stok

## 3. Menambahkan Data Barang

Setelah tabel dibuat, dilakukan penambahan beberapa data barang menggunakan perintah SQL INSERT.

Data yang dimasukkan terdiri dari tiga barang elektronik, yaitu:
- HP Samsung Android
- HP Xiaomi Android
- HP OPPO Android

## 4. Membuat Folder Praktikum

Folder praktikum dibuat di dalam direktori `htdocs` dengan nama `lab8_php_database`.

Folder ini digunakan untuk menyimpan seluruh file aplikasi PHP yang dibuat selama praktikum.

## 5. Membuat Koneksi Database

File `koneksi.php` dibuat untuk menghubungkan aplikasi PHP dengan database MySQL.

Pada file ini digunakan fungsi `mysqli_connect()` dengan beberapa informasi, yaitu host, username, password, dan nama database.

Koneksi diuji melalui browser untuk memastikan PHP berhasil terhubung dengan database.

## 6. Menampilkan Data Barang (Read)

File `index.php` dibuat untuk menampilkan seluruh data barang dari database.

Proses pengambilan data menggunakan perintah SQL SELECT dan fungsi `mysqli_query()`.

Data yang berhasil diambil kemudian ditampilkan dalam bentuk tabel HTML yang berisi gambar, nama barang, kategori, harga jual, harga beli, stok, dan aksi.

Pada halaman ini juga terdapat link untuk menambahkan, mengubah, dan menghapus data barang.


## 7. Menambahkan Data (Create)

File `tambah.php` dibuat untuk menambahkan data barang baru ke dalam database.

Halaman ini memiliki form yang berisi:
- Nama Barang
- Kategori
- Harga Jual
- Harga Beli
- Stok
- File Gambar

Data yang dimasukkan melalui form akan diproses menggunakan metode POST dan disimpan ke database menggunakan perintah SQL INSERT.

## 8. Mengubah Data (Update)

File `ubah.php` dibuat untuk mengubah informasi barang yang sudah tersimpan di database.

Data barang diambil berdasarkan ID barang menggunakan perintah SQL SELECT.

Form akan menampilkan data sebelumnya sehingga pengguna dapat mengubah informasi seperti nama barang, kategori, harga, stok, dan gambar.

Setelah tombol Simpan ditekan, perubahan data akan diproses menggunakan perintah SQL UPDATE.



## 9. Menghapus Data (Delete)

File `hapus.php` dibuat untuk menghapus data barang dari database.

Proses penghapusan dilakukan berdasarkan ID barang menggunakan perintah SQL DELETE.

Setelah data berhasil dihapus, halaman akan kembali ke `index.php` dan menampilkan data barang yang tersisa.


## 10. Kesimpulan

Berdasarkan praktikum yang telah dilakukan, dapat dipahami cara menghubungkan PHP dengan database MySQL serta menerapkan konsep CRUD (Create, Read, Update, Delete).

Melalui praktikum ini, berhasil dibuat aplikasi sederhana untuk mengelola data barang, mulai dari menambahkan, menampilkan, mengubah, hingga menghapus data menggunakan PHP dan MySQL.


##SCREENSHOT

<img width="402" height="47" alt="php1" src="https://github.com/user-attachments/assets/1c65ba93-4384-4565-a5f9-d252fea88bd4" />


<img width="973" height="292" alt="php2" src="https://github.com/user-attachments/assets/291da2aa-66b1-4141-8ab5-01d6f636c850" />


<img width="1037" height="198" alt="php3" src="https://github.com/user-attachments/assets/1a423082-b7b5-4650-b9a8-e53465b8e4bd" />


<img width="758" height="283" alt="Screenshot 2026-11-16 132140" src="https://github.com/user-attachments/assets/6c0eeb88-e47b-426b-9cd2-325b20f74614" />


<img width="573" height="148" alt="Screenshot 2026-11-16 133302" src="https://github.com/user-attachments/assets/fb3aa503-ddaf-4281-ac3c-629f0979eadf" />


<img width="681" height="870" alt="Screenshot 2026-11-16 140419" src="https://github.com/user-attachments/assets/8da6dc46-6d90-40ad-b53a-4b6b97a7ded3" />


<img width="560" height="215" alt="Screenshot 2026-11-16 142246" src="https://github.com/user-attachments/assets/c051a06e-0f17-46cb-bee4-ec01cc465346" />


<img width="1068" height="921" alt="Screenshot 2026-11-16 142258" src="https://github.com/user-attachments/assets/f147bb85-1ce4-40fd-9dd7-7791df87a7b4" />


<img width="1098" height="949" alt="Screenshot 2026-11-16 142312" src="https://github.com/user-attachments/assets/d9ce414b-e6df-4c8b-8952-281e284fc230" />


<img width="817" height="797" alt="Screenshot 2026-11-16 142327" src="https://github.com/user-attachments/assets/084cf05d-22da-4030-883e-6be09fcad29e" />


<img width="628" height="288" alt="Screenshot 2026-11-16 142339" src="https://github.com/user-attachments/assets/9c7bfdbc-c649-4bbf-b06b-1e4c1429c84a" />


<img width="917" height="754" alt="Screenshot 2026-11-16 142355" src="https://github.com/user-attachments/assets/db6b06c8-bea5-4985-925f-425a44d26b86" />


<img width="795" height="299" alt="Screenshot 2026-11-16 142407" src="https://github.com/user-attachments/assets/bbd296d8-6c56-4366-aec0-828359964e71" />


<img width="782" height="263" alt="Screenshot 2026-11-16 142411" src="https://github.com/user-attachments/assets/fa7dc4e9-973b-406e-8885-3b898d184dfe" />
