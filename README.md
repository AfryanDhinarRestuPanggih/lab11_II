## 👤 Profil Mahasiswa

| Atribut         | Keterangan            |
| --------------- | --------------------- |
| *Nama*        | Afryan Dhinar Restu Panggih    |
| *NIM*         | 312310467          |
| *Kelas*       | TI.23.A.5             |
| *Mata Kuliah* | Pemrograman Website 2 |

Praktikum 7-11

1. Membuat Tabel Kategori
Kita akan membuat tabel baru bernama `kategori` untuk mengkategorikan artikel.
Struktur Tabel `kategori`:

Jalankan query berikut:

![image](https://github.com/user-attachments/assets/df47a00d-5dfe-41c6-97ab-322b7b9250eb)

2. Mengubah Tabel Artikel
Tambahkan foreign key `id_kategori` pada tabel `artikel` untuk membuat relasi dengan tabel 
`kategori`. 
Query untuk menambahkan foreign key:

![image](https://github.com/user-attachments/assets/dda32de7-b4c2-4e96-908a-737f686ffb10)

3. Membuat Model Kategori
Buat file model baru di `app/Models` dengan nama `KategoriModel.php`:

![image](https://github.com/user-attachments/assets/1b95d658-8c85-44d9-8ce6-fd8eff10aea5)

4. Memodifikasi Model Artikel
Modifikasi `ArtikelModel.php` untuk mendefinisikan relasi dengan `KategoriModel`:

![image](https://github.com/user-attachments/assets/7322f525-f44d-4567-9e62-779685ea7006)

Menambahkan method `getArtikelDenganKategori()` untuk mengambil data artikel beserta 
nama kategorinya menggunakan join

5. Memodifikasi Controller Artikel
Modifikasi `Artikel.php` untuk menggunakan model baru dan menampilkan data relasi:

![image](https://github.com/user-attachments/assets/1f0c0376-460f-4641-8f99-5d7a9a69b769)

![image](https://github.com/user-attachments/assets/1ccca0a1-56be-46ba-894e-5f81db6628df)

![image](https://github.com/user-attachments/assets/4aaa30dd-035d-482d-9242-a6da1d344378)

![image](https://github.com/user-attachments/assets/a8ab05c9-975a-4e71-a707-0c777a0c7052)

![image](https://github.com/user-attachments/assets/ec7b5a4b-d17e-4da1-8cd4-1e17aa1bbb7b)

![image](https://github.com/user-attachments/assets/02cff5c1-8d92-440f-bbde-c5cf9356b543)

![image](https://github.com/user-attachments/assets/66040985-7704-465c-be37-45c0ec89ed7a)

6. Memodifikasi View
Buka folder view/artikel sesuaikan masing-masing view.
**index.php**

![image](https://github.com/user-attachments/assets/fff913f3-aa5d-4d7b-9890-2f46abb4e30a)

**admin_index.php**

![image](https://github.com/user-attachments/assets/6c98713c-fb44-4f70-be84-b70195c41fb6)

![image](https://github.com/user-attachments/assets/83cad4ec-7c8c-4465-b16c-e80783edfb7b)

![image](https://github.com/user-attachments/assets/9f909071-72e0-4070-be52-025f1fd75166)

![image](https://github.com/user-attachments/assets/d5ad6833-466f-4b36-a528-ab02056c54de)

![image](https://github.com/user-attachments/assets/77f11021-378e-46bd-b490-4fe9a482c0f5)

**form_add.php**

![image](https://github.com/user-attachments/assets/007e1d63-f75b-4720-991e-245eab7d6645)

![image](https://github.com/user-attachments/assets/4c3c2a5f-16ce-4068-b506-f2dc7321fb48)

![image](https://github.com/user-attachments/assets/f08f0878-867d-4bb1-b7e3-9e4d5d7ec436)

**form_edit.php**

![image](https://github.com/user-attachments/assets/bcf71563-8c33-424e-a9fa-0b833ddc0282)

![image](https://github.com/user-attachments/assets/9daab03a-0b06-4ec2-8b6c-2215ccc25aa3)

![image](https://github.com/user-attachments/assets/30fd0aa7-026b-4169-b8f8-9187ba842a69)

7. Testing
Lakukan uji coba untuk memastikan semua fungsi berjalan dengan baik:
• Menampilkan daftar artikel dengan nama kategori.

![Screenshot 2025-06-26 162943](https://github.com/user-attachments/assets/7b040134-b964-4330-bf7c-797a2b544db8)

• Menambah artikel baru dengan memilih kategori.

![Screenshot 2025-06-26 162844](https://github.com/user-attachments/assets/006dfb1a-61d1-4a0e-9874-f7e1463dcd2d)

• Mengedit artikel dan mengubah kategorinya.

![Screenshot 2025-06-26 162722](https://github.com/user-attachments/assets/bbe0f244-6e29-492f-aa3e-98941db7e438)


• Menghapus artikel.

sebelum:
![Screenshot 2025-06-26 162515](https://github.com/user-attachments/assets/aaf07732-1068-4a03-8910-874324fdf3be)

sesudah:

![Screenshot 2025-06-26 162610](https://github.com/user-attachments/assets/bbea2073-1b23-4050-8830-7f9bc5011437)


8. Membuat Model.
Pada modul sebelumnya sudah dibuat ArtikelModel, pada modul ini kita akan
memanfaatkan model tersebut agar dapat diakses melalui AJAX.

9. Membuat AJAX Controller

![image](https://github.com/user-attachments/assets/46c90da8-8852-4a70-9d5d-2e0d27bb0971)

10. Membuat View

![image](https://github.com/user-attachments/assets/89bec5c2-f3e3-4f14-93b8-19b4ab526df1)

![image](https://github.com/user-attachments/assets/e5922213-a54c-43d8-b8b3-4784ba35caca)

![image](https://github.com/user-attachments/assets/3e53ed3f-7178-47d0-8027-a58e612231ca)

![image](https://github.com/user-attachments/assets/ce508026-8ca8-4f8c-8c6c-c7ebe322d0d1)

11. Persiapan
* Pastikan MySQL Server sudah berjalan.
* Buka database `lab_ci4`.
* Pastikan tabel `artikel` dan `kategori` sudah ada dan terisi data.
* Pastikan library jQuery sudah terpasang atau dapat diakses melalui CDN.

12. Modifikasi Controller Artikel
Ubah method `admin_index()` di `Artikel.php` untuk mengembalikan data dalam format
JSON jika request adalah AJAX. (Sama seperti modul sebelumnya)

![image](https://github.com/user-attachments/assets/3e57d9ad-8b23-41e3-90a6-934de1ab3740)

Penjelasan:
• `$page = $this->request->getVar('page') ?? 1;`: Mendapatkan nomor
halaman dari request. Jika tidak ada, default ke halaman 1.
• `$builder->paginate(10, 'default', $page);`: Menerapkan pagination
dengan nomor halaman yang diberikan.
• `$this->request->isAJAX()`: Memeriksa apakah request yang datang adalah
AJAX.
• Jika AJAX, kembalikan data artikel dan pager dalam format JSON.
• Jika bukan AJAX, tampilkan view seperti biasa.

13. Modifikasi View (admin_index.php)
* Ubah view `admin_index.php` untuk menggunakan jQuery.
* Hapus kode yang menampilkan tabel artikel dan pagination secara langsung.
* Tambahkan elemen untuk menampilkan data artikel dan pagination dari AJAX.
* Tambahkan kode jQuery untuk melakukan request AJAX.

![image](https://github.com/user-attachments/assets/2afe6114-97ea-4cc8-90a8-e79bcc9b3e70)

![image](https://github.com/user-attachments/assets/a4b6cf7a-c63a-49ae-a45b-e2c216a2a945)

![image](https://github.com/user-attachments/assets/dc7a12a7-abb3-4179-b387-368887550d1f)

![image](https://github.com/user-attachments/assets/c633d358-dbb9-49d0-a186-0fbe3bc85f6a)

Pertanyaan dan Tugas
1. Selesaikan semua langkah praktikum di atas.
2. Modifikasi tampilan data artikel dan pagination sesuai kebutuhan desain.

![Screenshot 2025-06-19 214251](https://github.com/user-attachments/assets/33b43aed-d99a-45ac-9182-de22a769b9fa)

3. Tambahkan indikator loading saat data sedang diambil dari server.

![alt text](image-1.png)

4. Implementasikan fitur sorting (mengurutkan artikel berdasarkan judul, dll.) dengan AJAX.

Berdasarkan ID:

![Screenshot 2025-06-26 162143](https://github.com/user-attachments/assets/f7a4607f-6c4d-496d-a8fd-14ac28dde2b5)

Berdasarkan Judul:

![Screenshot 2025-06-26 162041](https://github.com/user-attachments/assets/1e0c2fd0-159c-4b9d-85bc-a83b9e76d4c0)

Berdasarkan Kategori:

![Screenshot 2025-06-26 161455](https://github.com/user-attachments/assets/f77379fa-bcab-4c95-af7c-6126799df2ea)


14. Persiapan
Periapan awal adalah mengunduh aplikasi REST Client, ada banyak aplikasi yang dapat digunakan untuk
keperluan tersebut. Salah satunya adalah Postman. Postman – Merupakan aplikasi yang berfungsi
sebagai REST Client, digunakan untuk testing REST API. Unduh apliasi Postman dari tautan berikut:
https://www.postman.com/downloads/

15. Membuat Model.
Pada modul sebelumnya sudah dibuat ArtikelModel, pada modul ini kita akan memanfaatkan model
tersebut agar dapat diakses melalui API.

16. Membuat REST Controller
Pada tahap ini, kita akan membuat file REST Controller yang berisi fungsi untuk menampilkan,
menambah, mengubah dan menghapus data. Masuklah ke direktori app\Controllers dan buatlah file
baru bernama Post.php. Kemudian, salin kode di bawah ini ke dalam file tersebut:

![image](https://github.com/user-attachments/assets/4329ef04-69de-44b5-94ab-289cfcc4e9d2)

![image](https://github.com/user-attachments/assets/852374bc-0a2b-42af-ad3c-2b75b52cf8ac)

![image](https://github.com/user-attachments/assets/98558c92-8f10-4fad-9eab-1f6cd3d21183)

Kode diatas berisi 5 method, yaitu:
• index() – Berfungsi untuk menampilkan seluruh data pada database.
• create() – Berfungsi untuk menambahkan data baru ke database.
• show() – Berfungsi untuk menampilkan suatu data spesifik dari database.
• update() – Berfungsi untuk mengubah suatu data pada database.
• delete() – Berfungsi untuk menghapus data dari database.

17. Membuat Routing REST API
Untuk mengakses REST API CodeIgniter, kita perlu mendefinisikan route-nya terlebih dulu.
Caranya, masuklah ke direktori app/Config dan bukalah file Routes.php. Tambahkan kode
di bawah ini:

![image](https://github.com/user-attachments/assets/91f4967b-0e16-443e-a7d5-9f94048e8759)

Untuk mengecek route nya jalankan perintah berikut:

![image](https://github.com/user-attachments/assets/e1b1a50c-f8ea-46f2-8fed-cec9366d4599)

Selanjutnya akan muncul daftar route yang telah dibuat.

![image](https://github.com/user-attachments/assets/3b2cb57b-ffc3-4e9c-a298-88b2eeff9e74)

Seperti yang terlihat, satu baris kode routes yang di tambahkan akan menghasilkan banyak
Endpoint.
Selanjutnya melakukan uji coba terhadap REST API CodeIgniter.

18. Testing REST API CodeIgniter
Buka aplikasi postman dan pilih create new → HTTP Request

![image](https://github.com/user-attachments/assets/890a0541-a634-4ff5-8dbd-685eca172ffc)

19. Menampilkan Semua Data
Pilih method GET dan masukkan URL berikut:
http://localhost:8080/post
Lalu, klik Send. Jika hasil test menampilkan semua data artikel dari database, maka pengujian
berhasil.

![image](https://github.com/user-attachments/assets/f64d2583-357d-4ccf-9827-49f82399ed25)

20. Menampilkan Data Spesifik
Masih menggunakan method GET, hanya perlu menambahkan ID artikel di belakang URL
seperti ini:
http://localhost:8080/post/2
Selanjutnya, klik Send. Request tersebut akan menampilkan data artikel yang memiliki ID
nomor 2 di database.

![image](https://github.com/user-attachments/assets/6ee45f3c-3175-4ab3-b058-c757f410a51d)

21. Mengubah Data
Untuk mengubah data, silakan ganti method menjadi PUT. Kemudian, masukkan URL artikel
yang ingin diubah. Misalnya, ingin mengubah data artikel dengan ID nomor 2, maka masukkan
URL berikut:
http://localhost:8080/post/2
Selanjutnya, pilih tab Body. Kemudian, pilih x-www-form-uriencoded. Masukkan nama
atribut tabel pada kolom KEY dan nilai data yang baru pada kolom VALUE. Kalau sudah,
klik Send.

![image](https://github.com/user-attachments/assets/483f730c-5453-4b60-84d6-c2d124b96d47)

22. Menambahkan Data
Anda perlu menggunakan method POST untuk menambahkan data baru ke database.
Kemudian, masukkan URL berikut:
http://localhost:8080/post
Pilih tab Body, lalu pilih x-www-form-uriencoded. Masukkan atribut tabel pada kolom KEY
dan nilai data baru di kolom VALUE. Jangan lupa, klik Send.

![image](https://github.com/user-attachments/assets/99d40810-b938-4228-b0cd-ee101d37875c)

23. Menghapus Data
Pilih method DELETE untuk menghapus data. Lalu, masukkan URL spesifik data mana yang
ingin di hapus. Misalnya, ingin menghapus data nomor 3, maka URL-nya seperti ini:
http://localhost:8080/post/3
Langsung saja klik Send, maka akan mendapatkan pesan bahwa data telah berhasil dihapus dari
database.

![image](https://github.com/user-attachments/assets/dbb337cf-e57e-4b50-8d96-abb937c99945)

PRAKTIKUM 11

1. Persiapan
Untuk memulai penggunaan framework Vuejs, dapat dialkukan dengan menggunakan npm,
atau bisa juga dengan cara manual. Untuk praktikum kali ini kita akan gunakan cara manual.
Yang diperlukan adalah library Vuejs, Axios untuk melakukan call API REST. Menggunakan
CDN.
- Library VueJS

![image](https://github.com/user-attachments/assets/4bb158b6-7741-43fc-b597-2eb81a0e2f32)

- Library Axios

![image](https://github.com/user-attachments/assets/996dac72-6b46-469f-ae5d-76c23862fc02)

2. Struktur Direktory
Buat Project baru dengan struktur file dan directory seperti berikut:
│ index.html
└───assets
      ├───css
      │    │ style.css
      └───js
          │app.js

3. Menampilkan data
File index.html

![image](https://github.com/user-attachments/assets/e2e68dd1-b2e8-4d42-8e50-ec4a522f1f64)

![image](https://github.com/user-attachments/assets/df5f2ff6-2dd2-415c-96ff-e7fc95522e6a)

![image](https://github.com/user-attachments/assets/ca2cff42-9ab0-4a76-9166-3367009eacdd)

File apps.js

![image](https://github.com/user-attachments/assets/490e194a-53f4-44a9-9814-54a822a59270)

![image](https://github.com/user-attachments/assets/2f85c334-3e2b-4ca2-a975-45527d3a7dce)

![image](https://github.com/user-attachments/assets/59417eaf-dc19-4c74-b2d2-a68cb619ffcc)

Hasil Outputnya

![image](https://github.com/user-attachments/assets/db17b41e-a9be-44ae-a296-f5ba2fcc0ca1)

4. Form Tambah dan Ubah Data
Pada file index,html sispkan kode berikut sebelum table data.

![image](https://github.com/user-attachments/assets/71ba07af-4632-4d40-b742-99166662b702)

File app.js lengkapi kodenya.

![image](https://github.com/user-attachments/assets/6766d562-16ed-4a99-8958-ec57f7becc38)

![image](https://github.com/user-attachments/assets/dc673981-15df-45b3-bc3c-bea926c8f4ad)

![image](https://github.com/user-attachments/assets/1c650a3e-c6cd-4deb-9d7a-2f383ddf88ce)

File style.css

![image](https://github.com/user-attachments/assets/33930d9c-8efc-4ce5-938a-d008cfd4c788)

![image](https://github.com/user-attachments/assets/42bc24a8-34f7-4c0f-99a3-d1bbbb696164)

![image](https://github.com/user-attachments/assets/f89daa38-d17c-4efe-b844-f22f48e7efcc)

Hasil Outputnya

![image](https://github.com/user-attachments/assets/012b7911-da97-4c68-a34f-cec7466f2c8b)
