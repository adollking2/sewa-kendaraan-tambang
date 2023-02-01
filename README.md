# Sewa Kendaraan tambang
Sewa kendaraan tambang mengunakan framewok PHP dan mengunakan database mysql
- Laravel 8
- jquery
- phpoffice(untuk export keexcel)
- mysql(mariadb 10)

## Akun
admin
- user name : admin
- password : admin

penyetuju
- user name : penyetuju
- password : penyetuju

## Features

- Export a data to excel (laporan)
- Tambah,tampil Kendaraan
- Tambah,tampil Sewa kendaraan
- Tampilkan driver 

## Kekurangan(untuk saat ini)
//01-02-2023

- Export a data to excel (laporan) loncat 1 data
- Belum bisa tambah driver/ edit
- Belum bisa edit Sewa kendaraan
- Belum bisa edit Kendaraan
- tidak menampilkan chart
- belum ada search untuk pencarian data
- belum ada log

## Installation

 requires [PHP](https://www.php.net/) v8+ to run.
 requires [COMPOSER](https://getcomposer.org/) V2.5+ to run.
 

Install the dependencies and devDependencies and start the server.

```sh
cd SewaKendaraanTambang
composer i
php artisan serve
```

Verify the  your web server address in
your preferred browser.

```sh
127.0.0.1:8000
```

## Pengunaan

1. hal pertama yang dilakukan adalah login masukan password sesuai role
    admin
    - user name : admin
    - password : admin
    
    penyetuju
    - user name : penyetuju
    - password : penyetuju

2. untuk admin jika menambah kendaaran bisa mengunakan menu di sebalah kiri sidebar klik kendaraan 

3. untuk admin jika menambah data sewa kendaraan bisa memilih klik sewa
4. dan mengisi dropdown kemudian klik tombol tambah
5. untuk admin jika ingin mendownload laporan bisa mengklik laporan disebelah kiri bertulisan laporan
6. dihalaman paling atas klik unduh maka akan mengunduh laporan berupa file excel
7. untuk keluar bisa mengkilk tombol keluar disamping sidebar


penyetuju
 1. login melalui halaman login 
 2. kemudian untuk _mengapproved_ sewa kendaran bisa menekan tombol hijau di area kanan
 3. jika ingin mendownload laporan bisa mengklik laporan disebelah kiri bertulisan laporan
dihalaman paling atas klik unduh maka akan mengunduh laporan berupa file excel
