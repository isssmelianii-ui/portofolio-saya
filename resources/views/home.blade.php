<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $profile['name'] }} - {{ $profile['role'] }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
    
    <style>
        /* Animasi Gradien Warna Bergerak untuk nama 'Ismeliani' */
        @keyframes gradientMove {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .animated-gradient {
            background-size: 200% 200%;
            animation: gradientMove 3s ease infinite;
        }

        /* Animasi Kursor Ketik Kedip */
        @keyframes blink {
            50% { border-color: transparent; }
        }
        .typing-cursor {
            border-right: 3px solid #38bdf8;
            animation: blink 0.75s step-end infinite;
        }

        /* Animasi Tombol Mengapung Dinamis */
        @keyframes floatRandom {
            0%, 100% { transform: translateY(0px) scale(1); }
            50% { transform: translateY(-5px) scale(1.02); }
        }

        .animate-float-1 { animation: floatRandom 3s ease-in-out infinite; }
        .animate-float-2 { animation: floatRandom 3.5s ease-in-out infinite 0.4s; }
        .animate-float-3 { animation: floatRandom 2.8s ease-in-out infinite 0.8s; }
        .animate-float-4 { animation: floatRandom 3.2s ease-in-out infinite 1.2s; }
        .animate-float-5 { animation: floatRandom 3.6s ease-in-out infinite 0.6s; }
        .animate-float-6 { animation: floatRandom 2.9s ease-in-out infinite 0.2s; }
    </style>
</head>
<body class="bg-slate-950 bg-cover bg-center bg-no-repeat bg-fixed text-slate-100 font-sans antialiased selection:bg-cyan-500 selection:text-white min-h-screen relative overflow-x-hidden" style="background-image: url('{{ asset('images/my-foto.jpeg') }}');">

    <!-- Layer Lapisan Gelap Transparan -->
    <div class="fixed inset-0 bg-slate-950/80 backdrop-blur-[2px] pointer-events-none -z-10"></div>

    <!-- Floating Pill Navbar -->
    <div class="fixed top-6 left-1/2 -translate-x-1/2 z-50">
        <nav class="bg-slate-900/70 backdrop-blur-md border border-slate-700/60 rounded-full px-6 py-2.5 shadow-2xl flex items-center space-x-8 text-sm font-medium text-slate-300">
            <a href="#hero" class="px-3 py-1 rounded-full transition hover:bg-cyan-950/60 hover:text-cyan-400 hover:border hover:border-cyan-500/30">Home</a>
            <a href="#about" class="px-3 py-1 rounded-full transition hover:bg-cyan-950/60 hover:text-cyan-400 hover:border hover:border-cyan-500/30">About</a>
            <a href="#skills" class="px-3 py-1 rounded-full transition hover:bg-cyan-950/60 hover:text-cyan-400 hover:border hover:border-cyan-500/30">Skills</a>
            <a href="#projects" class="px-3 py-1 rounded-full transition hover:bg-cyan-950/60 hover:text-cyan-400 hover:border hover:border-cyan-500/30">Portfolio</a>
            <a href="#contact" class="px-3 py-1 rounded-full transition hover:bg-cyan-950/60 hover:text-cyan-400 hover:border hover:border-cyan-500/30">Contact</a>
        </nav>
    </div>

    <main class="pt-28 pb-20 space-y-24">
        <!-- Hero Section -->
        <section id="hero" class="max-w-2xl mx-auto px-6 py-12 flex flex-col items-center text-center space-y-6">
            
            <!-- 1. Status Badge -->
            <div class="inline-flex items-center gap-2 px-4 py-1.5 bg-slate-900/80 border border-slate-700/60 rounded-full text-xs font-mono text-cyan-400 shadow-md">
                <span class="w-2 h-2 rounded-full bg-cyan-400 animate-pulse"></span>
                OPEN FOR NEW PROJECTS & COLLABORATIONS
            </div>

            <!-- 2. Foto Profil Berbingkai Gradien -->
            <div class="relative p-1 bg-gradient-to-b from-cyan-500 via-blue-600 to-slate-800 rounded-3xl shadow-2xl shadow-cyan-500/10 my-2">
                <div class="w-40 h-40 md:w-48 md:h-48 rounded-[22px] overflow-hidden bg-slate-950">
                    <img src="{{ asset('images/profil-baru.jpeg') }}" alt="Ismeliani" class="w-full h-full object-cover">
                </div>
            </div>

            <!-- 3. Tech Stack Badges di Bawah Foto -->
            <div class="flex flex-wrap justify-center items-center gap-2 pt-1 max-w-lg">
                @foreach ($skills as $index => $skill)
                    @php
                        $floatClass = 'animate-float-' . (($index % 6) + 1);
                    @endphp
                    <button type="button" class="px-3.5 py-1.5 bg-slate-900/90 border border-slate-800 text-slate-300 rounded-full text-xs font-medium tracking-wide transition-all duration-300 hover:bg-cyan-950/80 hover:text-cyan-400 hover:border-cyan-500/60 hover:scale-110 active:scale-95 shadow-sm cursor-pointer {{ $floatClass }}">
                        {{ $skill['name'] }}
                    </button>
                @endforeach
            </div>

            <!-- 4. Info Profil & Judul Utama -->
            <div class="space-y-2 pt-2">
                <p class="text-xs font-mono text-cyan-400">&lt;developer_profile&gt;</p>

                <h1 class="text-3xl md:text-5xl font-extrabold tracking-tight text-slate-100 inline-block pr-1 typing-cursor min-h-[48px]">
                    <span id="typing-text"></span><span class="bg-gradient-to-r from-cyan-400 via-teal-300 to-blue-500 bg-clip-text text-transparent animated-gradient" id="gradient-name"></span>
                </h1>
                
                <p class="text-sm md:text-base font-semibold text-slate-400">
                    {{ $profile['role'] }} & IT Enthusiast
                </p>

                <!-- Teks Deskripsi Terbaru -->
                <p class="text-slate-400 text-sm md:text-base leading-relaxed max-w-xl pt-2">
                    Halo, saya mahasiswa Sistem Informasi yang tertarik pada pengembangan website dan teknologi digital. Saya senang mempelajari hal baru dan membangun solusi digital yang bermanfaat.
                </p>
            </div>

            <!-- 5. Tombol Aksi Utama -->
            <div class="flex flex-col sm:flex-row items-center gap-3 w-full max-w-md pt-4">
                <a href="#projects" class="w-full py-3 bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-600 hover:to-blue-700 text-slate-950 font-bold rounded-xl shadow-lg shadow-cyan-500/20 transition flex items-center justify-center gap-2 text-sm">
                    <i class="fas fa-rocket"></i> View My Work
                </a>
                <a href="{{ asset('path-to-your-cv.pdf') }}" download class="w-full py-3 bg-slate-900 hover:bg-slate-800 text-slate-200 font-bold rounded-xl border border-slate-700/80 transition flex items-center justify-center gap-2 text-sm">
                    <i class="fas fa-download"></i> Unduh CV
                </a>
            </div>

        </section>

<!-- About Section -->
        <section id="about" class="max-w-4xl mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto mb-8">
                <h2 class="text-3xl font-bold tracking-tight text-slate-100">About</h2>
                <div class="w-16 h-1 bg-blue-600 mx-auto mt-3 rounded-full"></div>
            </div>

            <div class="bg-slate-900/60 border border-slate-800/80 backdrop-blur-md p-8 md:p-10 rounded-2xl shadow-xl space-y-4">
                <h3 class="text-xl md:text-2xl font-bold text-cyan-400 border-b border-slate-800/80 pb-3">
                    Mengenal Saya Lebih Dekat
                </h3>
                
                <p class="text-slate-300 text-sm md:text-base leading-relaxed">
                    Saya merupakan mahasiswa D3 Sistem Informasi yang sedang mengembangkan kemampuan di bidang teknologi informasi, khususnya perancangan dan pengembangan sistem berbasis website. Selama perkuliahan, saya mempelajari analisis kebutuhan sistem, pengelolaan basis data, serta dasar-dasar pengembangan aplikasi. Saya ingin terus meningkatkan kemampuan melalui proyek nyata, kerja sama tim, dan pengalaman magang di lingkungan profesional.
                </p>
            </div>
        </section>

<!-- Skills Section -->
        <section id="skills" class="max-w-5xl mx-auto px-6">
            <!-- Judul Section Skills -->
            <div class="text-center max-w-xl mx-auto mb-12">
                <h2 class="text-3xl font-bold tracking-tight text-slate-100">Skills</h2>
                <div class="w-16 h-1 bg-blue-600 mx-auto mt-3 rounded-full"></div>
            </div>

            <!-- Grid 2 Kolom untuk Skills -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-6">
                <!-- Kolom Kiri -->
                <div class="space-y-6">
                    <!-- HTML -->
                    <div class="space-y-2">
                        <div class="flex justify-between items-center text-xs font-bold tracking-wider text-slate-200 uppercase">
                            <span>HTML</span>
                            <span>70%</span>
                        </div>
                        <div class="w-full bg-slate-800/80 h-3 rounded-none overflow-hidden">
                            <div class="bg-blue-600 h-full" style="width: 70%;"></div>
                        </div>
                    </div>

                    <!-- CSS -->
                    <div class="space-y-2">
                        <div class="flex justify-between items-center text-xs font-bold tracking-wider text-slate-200 uppercase">
                            <span>CSS</span>
                            <span>70%</span>
                        </div>
                        <div class="w-full bg-slate-800/80 h-3 rounded-none overflow-hidden">
                            <div class="bg-blue-600 h-full" style="width: 70%;"></div>
                        </div>
                    </div>

                    <!-- JAVASCRIPT -->
                    <div class="space-y-2">
                        <div class="flex justify-between items-center text-xs font-bold tracking-wider text-slate-200 uppercase">
                            <span>JAVASCRIPT</span>
                            <span>65%</span>
                        </div>
                        <div class="w-full bg-slate-800/80 h-3 rounded-none overflow-hidden">
                            <div class="bg-blue-600 h-full" style="width: 65%;"></div>
                        </div>
                    </div>

                    <!-- LARAVEL -->
                    <div class="space-y-2">
                        <div class="flex justify-between items-center text-xs font-bold tracking-wider text-slate-200 uppercase">
                            <span>LARAVEL</span>
                            <span>60%</span>
                        </div>
                        <div class="w-full bg-slate-800/80 h-3 rounded-none overflow-hidden">
                            <div class="bg-blue-600 h-full" style="width: 60%;"></div>
                        </div>
                    </div>
                </div>

                <!-- Kolom Kanan -->
                <div class="space-y-6">
                    <!-- PHP -->
                    <div class="space-y-2">
                        <div class="flex justify-between items-center text-xs font-bold tracking-wider text-slate-200 uppercase">
                            <span>PHP</span>
                            <span>70%</span>
                        </div>
                        <div class="w-full bg-slate-800/80 h-3 rounded-none overflow-hidden">
                            <div class="bg-blue-600 h-full" style="width: 70%;"></div>
                        </div>
                    </div>

                    <!-- MY SQL -->
                    <div class="space-y-2">
                        <div class="flex justify-between items-center text-xs font-bold tracking-wider text-slate-200 uppercase">
                            <span>MY SQL</span>
                            <span>72%</span>
                        </div>
                        <div class="w-full bg-slate-800/80 h-3 rounded-none overflow-hidden">
                            <div class="bg-blue-600 h-full" style="width: 72%;"></div>
                        </div>
                    </div>

                    <!-- GITHUB -->
                    <div class="space-y-2">
                        <div class="flex justify-between items-center text-xs font-bold tracking-wider text-slate-200 uppercase">
                            <span>GITHUB</span>
                            <span>80%</span>
                        </div>
                        <div class="w-full bg-slate-800/80 h-3 rounded-none overflow-hidden">
                            <div class="bg-blue-600 h-full" style="width: 80%;"></div>
                        </div>
                    </div>

                    <!-- FLUTTER -->
                    <div class="space-y-2">
                        <div class="flex justify-between items-center text-xs font-bold tracking-wider text-slate-200 uppercase">
                            <span>FLUTTER</span>
                            <span>70%</span>
                        </div>
                        <div class="w-full bg-slate-800/80 h-3 rounded-none overflow-hidden">
                            <div class="bg-blue-600 h-full" style="width: 70%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Portfolio Showcase Section -->
        <section id="projects" class="max-w-6xl mx-auto px-6">
            <!-- Judul & Sub-judul -->
            <div class="text-center max-w-2xl mx-auto mb-10 space-y-3">
                <h2 class="text-4xl font-extrabold tracking-tight bg-gradient-to-r from-purple-400 via-pink-400 to-cyan-400 bg-clip-text text-transparent">
                    Portfolio Showcase
                </h2>
                <p class="text-slate-400 text-sm md:text-base leading-relaxed">
                    Explore my journey through projects, certifications, and technical expertise. Each section represents a milestone in my continuous learning path.
                </p>
            </div>

            <!-- Tab Menu Navigasi (Projects | Certificates | Tech Stack) -->
            <div class="grid grid-cols-3 gap-3 bg-slate-900/80 p-1.5 rounded-2xl border border-slate-800/80 backdrop-blur-md max-w-3xl mx-auto mb-10">
                <button type="button" onclick="switchTab('projects-tab')" id="btn-projects" class="py-3 px-4 rounded-xl text-sm font-bold flex items-center justify-center gap-2 transition bg-purple-950/80 border border-purple-500/50 text-purple-300 shadow-lg">
                    <i class="fas fa-code"></i> Projects
                </button>
                <button type="button" onclick="switchTab('certs-tab')" id="btn-certs" class="py-3 px-4 rounded-xl text-sm font-medium text-slate-400 flex items-center justify-center gap-2 transition hover:text-slate-200">
                    <i class="fas fa-certificate"></i> Certificates
                </button>
                <button type="button" onclick="switchTab('tech-tab')" id="btn-tech" class="py-3 px-4 rounded-xl text-sm font-medium text-slate-400 flex items-center justify-center gap-2 transition hover:text-slate-200">
                    <i class="fas fa-layer-group"></i> Tech Stack
                </button>
            </div>

            <!-- Tab 1: Projects Content -->
            <div id="projects-tab" class="tab-content">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($projects as $project)
                        <div class="bg-slate-900/70 border border-slate-800/80 rounded-2xl p-4 flex flex-col justify-between hover:border-purple-500/50 hover:bg-slate-900/90 transition duration-300 backdrop-blur-md group shadow-xl">
                            <div>
                                <!-- Bingkai Gambar Proyek -->
                                <div class="w-full h-48 rounded-xl overflow-hidden bg-slate-950 border border-slate-800/80 mb-4 group-hover:scale-[1.02] transition duration-300">
                                    <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}" class="w-full h-full object-cover">
                                </div>

                                <!-- Judul & Deskripsi Proyek -->
                                <h3 class="text-lg font-bold text-slate-100 group-hover:text-purple-400 transition mb-2">
                                    {{ $project['title'] }}
                                </h3>
                                <p class="text-slate-400 text-xs leading-relaxed line-clamp-3 mb-4">
                                    {{ $project['description'] }}
                                </p>
                            </div>

                            <!-- Live Demo & Details Link -->
                            <div class="flex items-center justify-between pt-3 border-t border-slate-800/80 text-xs font-semibold">
                                <a href="{{ $project['link'] }}" target="_blank" class="text-cyan-400 hover:text-cyan-300 flex items-center gap-1.5 transition">
                                    Live Demo <i class="fas fa-external-link-alt text-[10px]"></i>
                                </a>
                                <a href="{{ $project['link'] }}" target="_blank" class="text-purple-400 hover:text-purple-300 flex items-center gap-1 transition">
                                    Details &rarr;
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Tab 2: Certificates Content -->
            <div id="certs-tab" class="tab-content hidden">
                @if(isset($certificates) && count($certificates) > 0)
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($certificates as $cert)
                            <div class="bg-slate-900/70 border border-slate-800/80 rounded-2xl p-4 flex flex-col justify-between hover:border-purple-500/50 hover:bg-slate-900/90 transition duration-300 backdrop-blur-md group shadow-xl">
                                <div>
                                    <!-- Bingkai Gambar Sertifikat -->
                                    <div class="w-full h-48 rounded-xl overflow-hidden bg-slate-950 border border-slate-800/80 mb-4 group-hover:scale-[1.02] transition duration-300">
                                        <img src="{{ $cert['image'] }}" alt="{{ $cert['title'] }}" class="w-full h-full object-cover">
                                    </div>

                                    <!-- Penerbit & Tanggal -->
                                    <div class="flex justify-between items-center text-xs text-purple-400 font-semibold mb-1">
                                        <span>{{ $cert['issuer'] }}</span>
                                        <span class="text-slate-500">{{ $cert['date'] }}</span>
                                    </div>

                                    <!-- Judul & Deskripsi -->
                                    <h3 class="text-lg font-bold text-slate-100 group-hover:text-purple-400 transition mb-2">
                                        {{ $cert['title'] }}
                                    </h3>
                                    <p class="text-slate-400 text-xs leading-relaxed line-clamp-3 mb-4">
                                        {{ $cert['description'] }}
                                    </p>
                                </div>

                                <!-- Link Lihat Sertifikat -->
                                <div class="pt-3 border-t border-slate-800/80 text-xs font-semibold text-right">
                                    <a href="{{ $cert['image'] }}" target="_blank" class="text-cyan-400 hover:text-cyan-300 inline-flex items-center gap-1.5 transition">
                                        Lihat Sertifikat <i class="fas fa-external-link-alt text-[10px]"></i>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="bg-slate-900/50 border border-slate-800 rounded-2xl p-12 text-center text-slate-400">
                        <i class="fas fa-certificate text-4xl text-purple-400 mb-3"></i>
                        <p class="text-sm">Sertifikat pelatihan dan akademik akan ditampilkan di sini.</p>
                    </div>
                @endif
            </div>

            <!-- Tab 3: Tech Stack Content -->
            <div id="tech-tab" class="tab-content hidden">
                @php
                    $skill_cards = [
                        ['name' => 'HTML5 & CSS3', 'category' => 'Frontend Core', 'icon' => 'devicon-html5-plain colored text-2xl'],
                        ['name' => 'JavaScript', 'category' => 'Programming Language', 'icon' => 'devicon-javascript-plain colored text-2xl'],
                        ['name' => 'TypeScript', 'category' => 'Typed JavaScript', 'icon' => 'devicon-typescript-plain colored text-2xl'],
                        ['name' => 'Node.js', 'category' => 'Backend Runtime', 'icon' => 'devicon-nodejs-plain colored text-2xl'],
                        ['name' => 'Express.js', 'category' => 'REST API Framework', 'icon' => 'devicon-express-original text-2xl text-slate-100'],
                        ['name' => 'Git & GitHub', 'category' => 'Version Control', 'icon' => 'devicon-git-plain colored text-2xl'],
                        ['name' => 'Docker', 'category' => 'Containerization', 'icon' => 'devicon-docker-plain colored text-2xl'],
                        ['name' => 'PHP & Laravel', 'category' => 'Backend Framework', 'icon' => 'devicon-laravel-plain colored text-2xl']
                    ];
                @endphp

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
                    @foreach ($skill_cards as $card)
                        <div class="flex items-center gap-4 p-4 bg-slate-900/70 border border-slate-800/80 rounded-xl hover:border-cyan-500/50 hover:bg-slate-900/90 transition duration-300 backdrop-blur-md group">
                            <div class="w-12 h-12 bg-slate-950/80 rounded-lg flex items-center justify-center border border-slate-800/80 shrink-0 group-hover:scale-105 transition">
                                <i class="{{ $card['icon'] }}"></i>
                            </div>
                            <div class="overflow-hidden">
                                <h4 class="text-sm font-semibold text-slate-100 truncate group-hover:text-cyan-400 transition">{{ $card['name'] }}</h4>
                                <p class="text-[11px] text-slate-400 truncate mt-0.5">{{ $card['category'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" class="max-w-6xl mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto mb-16 space-y-3">
                <div class="inline-block px-4 py-1 bg-cyan-950/60 border border-cyan-800/50 rounded-full text-xs font-mono text-cyan-400 tracking-wider uppercase">
                    SOLUSI &amp; LAYANAN
                </div>
                <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight text-slate-100">
                    Layanan Profesional yang Ditawarkan
                </h2>
                <p class="text-slate-400 text-sm md:text-base leading-relaxed">
                    Membantu bisnis, UMKM, maupun personal mewujudkan produk digital berkualitas tinggi dan siap pakai.
                </p>
            </div>

            @php
                $professional_services = [
                    ['title' => 'Web Development', 'description' => 'Pembuatan website portofolio, company profile, landing page bisnis, dan toko online modern dengan teknologi terkini yang cepat dan aman.', 'icon' => 'fas fa-window-maximize text-cyan-400 text-xl'],
                    ['title' => 'Responsive Web Design', 'description' => 'Desain tata letak yang beradaptasi sempurna di berbagai resolusi layar mulai dari desktop beresolusi tinggi, laptop, tablet, hingga ponsel pintar.', 'icon' => 'fas fa-mobile-alt text-cyan-400 text-xl'],
                    ['title' => 'UI/UX Design', 'description' => 'Perancangan antarmuka visual estetis dan alur pengalaman pengguna intuitif dengan riset pengguna, wireframe, prototipe interaktif, dan design system.', 'icon' => 'fas fa-paint-brush text-pink-400 text-xl'],
                    ['title' => 'Mobile App Development', 'description' => 'Pengembangan aplikasi perangkat mobile cross-platform (Android & iOS) yang responsif, berkinerja stabil, dan memiliki fitur integrasi API.', 'icon' => 'fas fa-mobile text-purple-400 text-xl'],
                    ['title' => 'Backend & API Integration', 'description' => 'Arsitektur backend tangguh, perancangan basis data relasional/NoSQL, RESTful API terstruktur, autentikasi keamanan token, dan integrasi payment gateway.', 'icon' => 'fas fa-database text-emerald-400 text-xl'],
                    ['title' => 'Website Maintenance', 'description' => 'Layanan perbaikan bug, pembaruan konten berkala, optimasi kecepatan SEO, audit keamanan kode, dan backup rutin untuk menjaga uptime situs.', 'icon' => 'fas fa-tools text-amber-400 text-xl']
                ];
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($professional_services as $srv)
                    <div class="bg-slate-900/60 border border-slate-800/80 rounded-2xl p-8 flex flex-col justify-between hover:border-cyan-500/50 hover:bg-slate-900/90 transition duration-300 backdrop-blur-md group shadow-xl">
                        <div class="space-y-6">
                            <div class="w-12 h-12 bg-slate-950/80 border border-slate-800 rounded-xl flex items-center justify-center group-hover:scale-110 transition duration-300">
                                <i class="{{ $srv['icon'] }}"></i>
                            </div>
                            <div class="space-y-2">
                                <h3 class="text-xl font-bold text-slate-100 group-hover:text-cyan-400 transition">
                                    {{ $srv['title'] }}
                                </h3>
                                <p class="text-slate-400 text-sm leading-relaxed">
                                    {{ $srv['description'] }}
                                </p>
                            </div>
                        </div>
                        <div class="pt-8 mt-4 border-t border-slate-800/60">
                            <a href="#contact" class="inline-flex items-center text-xs font-semibold tracking-wider uppercase text-cyan-400 hover:text-cyan-300 transition gap-2">
                                Pesan Layanan &rarr;
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

       <!-- Contact Section -->
        <section id="contact" class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-1 gap-8">
                <!-- Kolom: Form Pesan & FIND ME -->
                <div class="space-y-8 max-w-2xl mx-auto w-full">
                    <div class="bg-slate-900/60 border border-slate-800/80 backdrop-blur-md rounded-2xl p-6 md:p-8 space-y-6">
                        <h3 class="text-sm font-semibold text-slate-200 text-center">Ada yang mau didiskusikan? Langsung kirim pesan aja ya..!</h3>
                        
                        <!-- Form Interaktif WhatsApp & Email -->
                        <div class="space-y-4">
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400"><i class="far fa-user"></i></span>
                                <input type="text" id="contact-name" placeholder="Nama Anda" class="w-full pl-11 pr-4 py-3 bg-slate-800/60 border border-slate-700/60 rounded-xl text-sm text-slate-200 placeholder-slate-400 focus:outline-none focus:border-cyan-500">
                            </div>
                            
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400"><i class="far fa-envelope"></i></span>
                                <input type="email" id="contact-email" placeholder="Email Anda" class="w-full pl-11 pr-4 py-3 bg-slate-800/60 border border-slate-700/60 rounded-xl text-sm text-slate-200 placeholder-slate-400 focus:outline-none focus:border-cyan-500">
                            </div>
                            
                            <div class="relative">
                                <span class="absolute top-3.5 left-0 flex items-center pl-4 text-slate-400"><i class="far fa-comment-dots"></i></span>
                                <textarea id="contact-message" rows="3" placeholder="Pesan Anda" class="w-full pl-11 pr-4 py-3 bg-slate-800/60 border border-slate-700/60 rounded-xl text-sm text-slate-200 placeholder-slate-400 focus:outline-none focus:border-cyan-500 resize-none"></textarea>
                            </div>

                            <!-- Tombol Pilihan Kirim (WhatsApp & Email) -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-2">
                                <!-- Tombol WhatsApp -->
                                <button type="button" onclick="sendToWhatsApp()" class="w-full py-3 bg-emerald-600 hover:bg-emerald-500 text-white font-medium rounded-xl transition flex items-center justify-center gap-2 shadow-lg shadow-emerald-600/30 text-sm cursor-pointer">
                                    <i class="fab fa-whatsapp text-lg"></i> Kirim ke WhatsApp
                                </button>

                                <!-- Tombol Email -->
                                <button type="button" onclick="sendToEmail()" class="w-full py-3 bg-blue-600 hover:bg-blue-500 text-white font-medium rounded-xl transition flex items-center justify-center gap-2 shadow-lg shadow-blue-600/30 text-sm cursor-pointer">
                                    <i class="far fa-paper-plane"></i> Kirim via Email
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- FIND ME -->
                    <div class="space-y-4">
                        <h4 class="text-xs font-bold uppercase tracking-wider text-slate-400 text-center">FIND ME</h4>
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                            <a href="{{ $profile['socials']['linkedin'] ?? '#' }}" target="_blank" class="flex items-center gap-3 p-3 bg-slate-900/60 border border-slate-800/80 rounded-xl hover:border-slate-700 transition backdrop-blur-md">
                                <div class="w-9 h-9 bg-blue-600 rounded-lg flex items-center justify-center text-white font-bold shrink-0">in</div>
                                <div class="overflow-hidden">
                                    <h5 class="text-xs font-semibold text-slate-200 truncate">LinkedIn</h5>
                                    <p class="text-[10px] text-slate-400 truncate">Let's Connect</p>
                                </div>
                            </a>
                            <a href="{{ $profile['socials']['instagram'] ?? '#' }}" target="_blank" class="flex items-center gap-3 p-3 bg-slate-900/60 border border-slate-800/80 rounded-xl hover:border-slate-700 transition backdrop-blur-md">
                                <div class="w-9 h-9 bg-gradient-to-tr from-yellow-400 via-pink-500 to-purple-600 rounded-lg flex items-center justify-center text-white text-base shrink-0">
                                    <i class="fab fa-instagram"></i>
                                </div>
                                <div class="overflow-hidden">
                                    <h5 class="text-xs font-semibold text-slate-200 truncate">Instagram</h5>
                                    <p class="text-[10px] text-slate-400 truncate">@919_iiiizz</p>
                                </div>
                            </a>
                            <a href="{{ $profile['socials']['github'] ?? '#' }}" target="_blank" class="flex items-center gap-3 p-3 bg-slate-900/60 border border-slate-800/80 rounded-xl hover:border-slate-700 transition backdrop-blur-md">
                                <div class="w-9 h-9 bg-slate-800 rounded-lg flex items-center justify-center text-slate-200 text-base shrink-0">
                                    <i class="fab fa-github"></i>
                                </div>
                                <div class="overflow-hidden">
                                    <h5 class="text-xs font-semibold text-slate-200 truncate">Github</h5>
                                    <p class="text-[10px] text-slate-400 truncate">@isssmelianii-ui</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

       <script>
            function sendToWhatsApp() {
                const name = document.getElementById('contact-name').value;
                const email = document.getElementById('contact-email').value;
                const message = document.getElementById('contact-message').value;

                if (!name || !email || !message) {
                    alert('Mohon isi Nama, Email, dan Pesan terlebih dahulu!');
                    return;
                }

                const phoneNumber = "6282287623782"; 
                const text = `Halo Ismeliani,%0A%0ASaya *${encodeURIComponent(name)}* (Email: ${encodeURIComponent(email)})%0A%0APesan:%0A${encodeURIComponent(message)}`;
                
                window.open(`https://wa.me/${phoneNumber}?text=${text}`, '_blank');
            }

            function sendToEmail() {
                const name = document.getElementById('contact-name').value;
                const email = document.getElementById('contact-email').value;
                const message = document.getElementById('contact-message').value;

                if (!name || !email || !message) {
                    alert('Mohon isi Nama, Email, dan Pesan terlebih dahulu!');
                    return;
                }

                // Ganti email di bawah dengan email aktif Anda
                const targetEmail = "ismeliani@example.com"; 
                const subject = encodeURIComponent(`Pesan Portofolio dari ${name}`);
                const body = encodeURIComponent(`Nama: ${name}\nEmail: ${email}\n\nPesan:\n${message}`);

                // Menggunakan mailto standar
                window.location.href = `mailto:${targetEmail}?subject=${subject}&body=${body}`;
            }
        </script>
    <!-- Footer -->
    <footer class="border-t border-slate-800/80 py-6 text-center text-sm text-slate-500 bg-slate-950/60 backdrop-blur-md">
        &copy; {{ date('Y') }} {{ $profile['name'] }}. All rights reserved.
    </footer>

    <!-- Script Tab Switcher & Typing Effect -->
    <script>
        // Script Pindah Tab
        function switchTab(tabId) {
            document.querySelectorAll('.tab-content').forEach(el => el.classList.add('hidden'));
            document.getElementById(tabId).classList.remove('hidden');

            const activeBtn = 'py-3 px-4 rounded-xl text-sm font-bold flex items-center justify-center gap-2 transition bg-purple-950/80 border border-purple-500/50 text-purple-300 shadow-lg';
            const inactiveBtn = 'py-3 px-4 rounded-xl text-sm font-medium text-slate-400 flex items-center justify-center gap-2 transition hover:text-slate-200';

            document.getElementById('btn-projects').className = tabId === 'projects-tab' ? activeBtn : inactiveBtn;
            document.getElementById('btn-certs').className = tabId === 'certs-tab' ? activeBtn : inactiveBtn;
            document.getElementById('btn-tech').className = tabId === 'tech-tab' ? activeBtn : inactiveBtn;
        }

        // Script Typing Effect
        const fullTextNormal = "Halo, I'm ";
        const fullTextGradient = "Ismeliani";
        const typingTextElement = document.getElementById("typing-text");
        const gradientNameElement = document.getElementById("gradient-name");
        
        let indexNormal = 0;
        let indexGradient = 0;

        function typeWriter() {
            if (indexNormal < fullTextNormal.length) {
                typingTextElement.innerHTML += fullTextNormal.charAt(indexNormal);
                indexNormal++;
                setTimeout(typeWriter, 100);
            } else if (indexGradient < fullTextGradient.length) {
                gradientNameElement.innerHTML += fullTextGradient.charAt(indexGradient);
                indexGradient++;
                setTimeout(typeWriter, 120);
            }
        }

        document.addEventListener("DOMContentLoaded", function() {
            setTimeout(typeWriter, 500);
        });
    </script>
</body>
</html>