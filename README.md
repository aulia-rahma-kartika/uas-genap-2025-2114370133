# 📘 UAS Laravel - Manajemen Artikel 📰

![Laravel Version](https://img.shields.io/badge/Laravel-12.x-red)
![License](https://img.shields.io/badge/license-MIT-blue.svg)
![Status](https://img.shields.io/badge/status-Selesai-brightgreen)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5.x-purple)
![Made With ❤️](https://img.shields.io/badge/made%20with-Laravel%20%2B%20Bootstrap-blue)

> Proyek ini dibuat untuk memenuhi Ujian Akhir Semester (UAS)  
> **Mata Kuliah: Framework Pengembangan Web**  
> **Universitas Pembangunan Panca Budi – Sistem Komputer**

---

## ✨ Fitur Utama

- ✅ CRUD Artikel (Create, Read, Update, Delete)
- ✅ Relasi Artikel & Kategori
- ✅ Validasi Input & Notifikasi
- ✅ Seeder + Factory Dummy Data
- ✅ Desain Responsive (Bootstrap 5)
- ✅ Background Animasi Lucu + Font Imut Google (Fredoka)

---

## 🧠 Struktur Database

### 📄 Tabel `articles`
| Kolom         | Tipe Data     | Keterangan                            |
|---------------|---------------|----------------------------------------|
| id            | INT           | Primary Key (auto increment)           |
| title         | VARCHAR       | Judul artikel                          |
| slug          | VARCHAR       | Slug unik untuk URL                    |
| content       | TEXT          | Isi artikel                            |
| category_id   | INT (FK)      | Relasi ke `categories.id`              |
| is_publish    | BOOLEAN       | Status publikasi (true/draft)          |
| published_at  | DATETIME      | Tanggal publikasi                      |
| timestamps    | TIMESTAMP     | created_at & updated_at                |

### 🏷️ Tabel `categories`
| Kolom         | Tipe Data     | Keterangan                            |
|---------------|---------------|----------------------------------------|
| id            | INT           | Primary Key                            |
| name          | VARCHAR       | Nama kategori                          |
| timestamps    | TIMESTAMP     | created_at & updated_at                |

---

## 💻 Instalasi Proyek

```bash
git clone https://github.com/username/uas-genap-2025-2114370133.git
cd uas-genap-2025-2114370133
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate:fresh --seed
composer run dev
