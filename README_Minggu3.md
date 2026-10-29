# 📚 Tugas Praktikum Laravel - MVC

## 👤 Informasi Mahasiswa

| Keterangan | Detail |
|------------|--------|
| **Nama** | Mohammad Lukmanul Khakim |
| **NIM** | C2455201054 |
| **Mata Kuliah** | Pemrograman Framework |
| **Minggu** | 3 (Tiga) |
| **Framework** | Laravel |

---

## 📖 Deskripsi Proyek

Proyek ini merupakan tugas praktikum minggu ke-3 mata kuliah **Pemrograman Framework** yang menerapkan konsep **MVC (Model-View-Controller)** menggunakan framework **Laravel**. Aplikasi ini bernama **Portal Kegiatan Kampus** yang menampilkan daftar kegiatan kampus beserta detailnya.

---

## 🏗️ Struktur MVC

### 1. Model
**File:** `app/Models/KegiatanModel.php`

Model bertanggung jawab untuk mengelola data kegiatan. Pada proyek ini, data disimpan dalam bentuk array statis (hardcoded) yang berisi informasi:

- **id** - ID unik kegiatan
- **judul** - Nama kegiatan
- **kategori** - Kategori kegiatan (Teknologi, Kreatif, Komunikasi)
- **kuota** - Jumlah peserta yang dapat mendaftar
- **lokasi** - Tempat pelaksanaan kegiatan

**Method yang tersedia:**
- `semua()` - Mengembalikan seluruh data kegiatan
- `cari(int $id)` - Mencari kegiatan berdasarkan ID

### 2. Controller
**File:** `app/Http/Controllers/KegiatanController.php`

Controller mengatur alur logika antara Model dan View.

| Method | Fungsi |
|--------|--------|
| `index()` | Menampilkan daftar seluruh kegiatan |
| `detail(int $id)` | Menampilkan detail kegiatan berdasarkan ID |

**File:** `app/Http/Controllers/SapaController.php`

Controller untuk latihan dasar routing dan passing data ke view.

| Method | Fungsi |
|--------|--------|
| `index()` | Menampilkan halaman sapaan statis |
| `nama(string $nama)` | Menampilkan sapaan dengan parameter nama dari URL |

### 3. View
**File:** `resources/views/`

| File | Deskripsi |
|------|-----------|
| `partials/header.blade.php` | Template header (digunakan bersama) |
| `partials/footer.blade.php` | Template footer (digunakan bersama) |
| `kegiatan/index.blade.php` | Halaman daftar kegiatan |
| `kegiatan/detail.blade.php` | Halaman detail kegiatan |
| `sapa.blade.php` | Halaman sapaan |

---

## 🔄 Alur Kerja MVC

1. **User** mengakses URL tertentu
2. **Route** meneruskan request ke Controller yang sesuai
3. **Controller** memanggil Model untuk mendapatkan data
4. **Model** mengembalikan data ke Controller
5. **Controller** mengirim data ke View
6. **View** menampilkan halaman HTML ke User

---

## 🛣️ Daftar Route

| Method | URL | Controller | Fungsi |
|--------|-----|------------|--------|
| GET | `/sapa` | `SapaController@index` | Halaman sapaan |
| GET | `/sapa/{nama}` | `SapaController@nama` | Sapaan dengan nama |
| GET | `/kegiatan` | `KegiatanController@index` | Daftar kegiatan |
| GET | `/kegiatan/{id}` | `KegiatanController@detail` | Detail kegiatan |

---

## 📁 Struktur Folder
project-laravel/
├── app/
│ ├── Http/
│ │ └── Controllers/
│ │ ├── KegiatanController.php
│ │ └── SapaController.php
│ └── Models/
│ └── KegiatanModel.php
├── resources/
│ └── views/
│ ├── partials/
│ │ ├── header.blade.php
│ │ └── footer.blade.php
│ ├── kegiatan/
│ │ ├── index.blade.php
│ │ └── detail.blade.php
│ └── sapa.blade.php
└── routes/
└── web.php
