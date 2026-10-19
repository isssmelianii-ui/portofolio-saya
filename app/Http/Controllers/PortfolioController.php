<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        // 1. Data Profil & Beranda Utama
        $profile = [
            'name' => 'Porfolio',
            'role' => 'Welcome My Portfolio',
            'tagline' => 'Halo , Saya Ismeliani',
            'about' => 'mahasiswa Teknologi Informasi yang memiliki minat dalam bidang Web Development dan Software Development. Saya berfokus pada pengembangan website yang responsif, fungsional, dan mudah digunakan, serta terus meningkatkan kemampuan dalam teknologi dan pemrograman.',
            'avatar' => 'images/my-foto.jpeg',
            'cv_link' => '#',
            'experience_years' => '3+',
            'projects_completed' => '25+',
            'happy_clients' => '15+',
            'socials' => [
                'github' => 'https://github.com/isssmelianii-ui',
                'linkedin' => 'https://linkedin.com/in/iis-melianii-948452418',
                'instagram' => 'https://instagram.com/919_iiiizz?vrfl=MTl5eGVqeTlkcXI5bg%3D%3D',
                'email' => 'isssmelianii@gmail.com',
                'phone' => '+62 822-8762-3782',
                'location' => 'Pariaman, Sumatra Barat, Indonesia'
            ]
        ];

        // 2. Data Keahlian Utama (Tech Stack Badges)
        $skills = [
            ['name' => 'Laravel', 'level' => '90%'],
            ['name' => 'PHP', 'level' => '88%'],
            ['name' => 'Tailwind CSS', 'level' => '92%'],
            ['name' => 'Vue.js / React', 'level' => '75%'],
            ['name' => 'MySQL / PostgreSQL', 'level' => '85%'],
            ['name' => 'RESTful API', 'level' => '90%'],
        ];

        // 3. Data Services (Layanan)
        $services = [
            [
                'title' => 'Web Development',
                'description' => 'Pembuatan website kustom, landing page, dan sistem informasi berbasis web dengan performa tinggi.',
                'icon' => 'code'
            ],
            [
                'title' => 'RESTful API Development',
                'description' => 'Perancangan dan integrasi API yang aman dan terstruktur untuk aplikasi web maupun mobile.',
                'icon' => 'server'
            ],
            [
                'title' => 'UI/UX Implementation',
                'description' => 'Menerjemahkan desain interaktif ke dalam kode antarmuka yang responsif di seluruh perangkat.',
                'icon' => 'layout'
            ],
        ];

        // 4. Data Pengalaman Kerja / Timeline
        $experiences = [
            [
                'year' => '2024 - Sekarang',
                'role' => 'Senior Fullstack Developer',
                'company' => 'PT Tech Innovate Indonesia',
                'description' => 'Memimpin tim pengembangan web aplikasi skala enterprise menggunakan Laravel & Vue.js.'
            ],
            [
                'year' => '2021 - 2023',
                'role' => 'Web Developer',
                'company' => 'Digital Creative Studio',
                'description' => 'Mengembangkan puluhan website profil perusahaan dan sistem e-commerce untuk klien UMKM.'
            ],
        ];

        // 5. Data Portofolio (Proyek)
        $projects = [
            [
                'title' => 'Movie Favorite OMDB API',
                'category' => 'Web Application',
                'description' => 'Aplikasi pencarian dan daftar film favorit yang terintegrasi dengan OMDB API menggunakan Laravel.',
                'image' => asset('images/project-omdb.png'),
                'tech_stack' => ['Laravel', 'PHP', 'REST API', 'Tailwind CSS'],
                'link' => 'https://github.com/isssmelianii-ui'
            ],
            [
                'title' => 'GeoSchool GIS',
                'category' => 'GIS Web Application',
                'description' => 'Sistem Informasi Geografis untuk pemetaan dan pelaporan lokasi sekolah.',
                'image' => asset('images/web gis1.png'),
                'tech_stack' => ['Laravel', 'JavaScript', 'Leaflet JS'],
                'link' => 'https://github.com/isssmelianii-ui'
            ],
            [
                'title' => 'Sistem Informasi Perpustakaan',
                'category' => 'Web Application',
                'description' => 'Aplikasi peminjaman dan pengolahan data buku perpustakaan digital berbasis web.',
                'image' => asset('images/perpustakaan.png'),
                'tech_stack' => ['Laravel', 'PHP', 'MySQL', 'Tailwind CSS'],
                'link' => 'https://github.com/isssmelianii-ui'
            ],
            [
                'title' => 'Sistem Kasir & Penjualan Minimarket',
                'category' => 'Web Application',
                'description' => 'Aplikasi manajemen stok barang, transaksi penjualan kasir, dan laporan keuangan minimarket berbasis web.',
                'image' => asset('images/minimarket.png'),
                'tech_stack' => ['Laravel', 'PHP', 'MySQL', 'Tailwind CSS'],
                'link' => 'https://github.com/isssmelianii-ui'
            ],
            [
                'title' => 'Wisata Dunia Alam',
                'category' => 'Web Application',
                'description' => 'Website informasi destinasi wisata alam global lengkap dengan navigasi beranda, destinasi, promo, dan tautan sosial media.',
                'image' => asset('images/wisata_dunia.png'),
                'tech_stack' => ['HTML5', 'CSS3', 'JavaScript', 'Tailwind CSS'],
                'link' => 'https://isssmelianii-ui.github.io/ismeliani/'
            ],
        ];

        // 6. Data Sertifikat (Tambahan Baru)
        $certificates = [
            [
                'title' => 'AWS Academy Graduate - Cloud Foundations',
                'issuer' => 'AWS Academy',
                'date' => '2026',
                'description' => 'Sertifikat kelulusan kursus dasar komputasi awan (Cloud Computing) dengan durasi 20 jam pembelajaran.',
                'image' => asset('images/sertifikat aws.jpg'), // Sesuaikan dengan nama file gambar Anda di folder public/images/
                'link' => 'https://www.credly.com/go/2c8tuTJQ' // Link digital badge Credly Anda
            ],
[
                'title' => 'HCIA-Datacom V1.0 Course',
                'issuer' => 'Huawei ICT Academy',
                'date' => '2026-01-24',
                'description' => 'Sertifikat kelulusan kursus dan ujian HCIA-Datacom V1.0 (Certificate Code: EBG20260124037074).',
                'image' => asset('images/sertifikat huawei.jpeg'), // Sesuaikan dengan nama file gambar Huawei Anda di folder public/images/
                'link' => '#'
            ],
            // Anda bisa menambahkan sertifikat lainnya di sini dengan format yang sama
        ];

        return view('home', compact('profile', 'skills', 'services', 'experiences', 'projects', 'certificates'));
    }
}