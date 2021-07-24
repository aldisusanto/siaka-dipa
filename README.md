<h1 align="center">Selamat datang di Sistem Informasi Akademik Dipanegara! 👋</h1>

## Fitur apa saja yang tersedia di Sistem Informasi Akademik Dipanegara ?

- Autentikasi Admin & Mahasiswa,
- Password menggunakan Enkripsi
- CRUD Jurusan ( Admin ),
- CRUD Matakuliah ( Admin ),
- CRUD Dosen ( Admin ),
- CRUD Mahasiswa ( Admin ),
- Melihat Profile Mahasiswa ( Admin ),
- Tambah nilai untuk masing-masing mahasiswa ( Admin ) ,
- Tambah jadwal untuk masing – masing mahasiswa ( Admin ), 
- Melihat Profile ( Dashboard Mahasiswa ),
- Melihat Jadwal per Semester ( Dashboard Mahasiswa ),
- Melihat Nilai per Semester ( Dashboard Mahasiswa),
- Melihat Transkrip Nilai ( Dashboad Mahasiswa ), dan
- Melihat Kontak Dosen ( Dashboard Mahasiswa ).


## Release Date

**Release date : 07 Februari 2021**

---

## Default Account for testing

**Admin Default Account**

- Username = admin
- Password = admin1212

** Website
- http://siaka-dipa.herokuapp.com/

---

## Install

1. **Clone Repository**

```bash
composer install
npm install
cp .env.example .env
```

2. **Buka `.env` lalu ubah baris berikut sesuai dengan database yang ingin dipakai**

```bash
DB_PORT=3306
DB_DATABASE=siaka-dipa
DB_USERNAME=root
DB_PASSWORD=
```

3. **Instalasi website**

```bash
php artisan key:generate
```

4. **Jalankan website**

```bash
php artisan serve
```

## License

- Copyright © 2021 Aldi Susanto.
- **Sistem Informasi Akademik Dipanegara is open-sourced software licensed under the MIT license.**
