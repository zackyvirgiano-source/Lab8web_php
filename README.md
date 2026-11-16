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


<img width="962" height="541" alt="image" src="https://github.com/user-attachments/assets/c44f2535-d3c7-4eee-b954-eb7ef2a1034d" />


<img width="592" height="107" alt="image" src="https://github.com/user-attachments/assets/7115816e-ed85-441f-ba69-2f058688532d" />


<img width="1262" height="846" alt="image" src="https://github.com/user-attachments/assets/1c93805e-e758-4703-b65a-5de61f1980b4" />


<img width="1127" height="736" alt="image" src="https://github.com/user-attachments/assets/87ad8095-0caf-486c-8bf3-bc1b46630c51" />


<img width="1421" height="797" alt="image" src="https://github.com/user-attachments/assets/89285cc7-cada-4254-be8d-2c7c29553249" />


<img width="1337" height="782" alt="image" src="https://github.com/user-attachments/assets/29da0db2-55de-4429-8235-3fddd95df98f" />


<img width="1298" height="593" alt="image" src="https://github.com/user-attachments/assets/343ec573-58d6-4906-8746-bed271e333d3" />


<img width="1307" height="797" alt="image" src="https://github.com/user-attachments/assets/cb0ebc47-1ee0-46cb-b0aa-d798fb6b06b8" />


<img width="1232" height="595" alt="image" src="https://github.com/user-attachments/assets/49f5cc02-3050-4b9d-adcb-812883f129e2" />


<img width="1488" height="767" alt="image" src="https://github.com/user-attachments/assets/4bb93744-7366-4eef-bbd1-411ddee88844" />


<img width="1397" height="630" alt="image" src="https://github.com/user-attachments/assets/1fd42c85-34d2-4bde-8c89-51655a36c9e8" />

<img width="742" height="316" alt="image" src="https://github.com/user-attachments/assets/7b5339b5-2892-4fc8-97a6-e0a15781c69a" />

<img width="1611" height="958" alt="image" src="https://github.com/user-attachments/assets/4c64c9a3-29e9-46a4-aa67-d2230f84f6ac" />

<img width="677" height="405" alt="image" src="https://github.com/user-attachments/assets/fc50f0d2-ad06-474c-9879-395c8c18cdab" />

<img width="652" height="481" alt="image" src="https://github.com/user-attachments/assets/e401748d-74da-4527-bda2-2e9386ba6e60" />






