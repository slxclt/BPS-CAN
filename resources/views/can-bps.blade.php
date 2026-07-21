<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Change Agent Network — BPS Provinsi Aceh</title>
<link rel="stylesheet" href="{{ asset('css/can-bps.css') }}">
<script src="{{ asset('js/can-bps.js') }}" defer></script>
</head>
<body>
    
<div class="page">

<nav class="navbar" id="navbar">
    <div class="navbar__inner">
        <div class="navbar__brand">
            <div class="navbar__logo-group">
                <div class="navbar__logo-badge"><img src="{{ asset('img/Icon.png') }}" alt="Logo Badge"></div>
                <div class="navbar__logo-text"><span class="navbar__logo-title">BPS</span><span class="navbar__logo-sub">Provinsi Aceh</span></div>
            </div>
            <div class="navbar__divider"></div>
            <div class="navbar__logo-group"><span class="navbar__pill">CAN</span><span class="navbar__brand-name">Change Agent Network</span></div>
        </div>
        <div class="navbar__links">
            <a href="/#beranda" class="navbar__link">Beranda</a>
            <a href="/#tentang" class="navbar__link">Tentang</a>
            <a href="/#core" class="navbar__link">Core Values</a>
            <a href="/#program" class="navbar__link">Program</a>
            <a href="/#tim" class="navbar__link">Team</a>
            <a href="/#berita" class="navbar__link">Berita</a>
        </div>
        <button class="navbar__burger" id="navbarBurger" aria-label="Toggle menu">
            <span id="navbarBurgerIconOpen"><img src="{{ asset('img/Menu.svg') }}" alt="Open Menu" class="icon-svg" width="20" height="20"></span>
            <span id="navbarBurgerIconClose" style="display:none;"><img src="{{ asset('img/Close.svg') }}" alt="Close Menu" class="icon-svg" width="20" height="20"></span>
        </button>
    </div>
    <div class="navbar__mobile" id="navbarMobile">
        <div class="navbar__mobile-inner">
            <a href="/#beranda" class="navbar__mobile-link">Beranda</a><a href="/#tim" class="navbar__mobile-link">Tim</a><a href="/#program" class="navbar__mobile-link">Program</a><a href="/#timeline" class="navbar__mobile-link">Timeline</a><a href="/#berita" class="navbar__mobile-link">Berita</a>
        </div>
    </div>
</nav>

<main>
    @hasSection('content')
        @yield('content')
    @else

<section id="beranda" class="hero">
    <div class="hero__circle hero__circle--teal"></div>
    <div class="hero__circle hero__circle--orange"></div>
    <div class="hero__bars" aria-hidden="true"><div class="hero__bar" style="left:8%; --bar-height:60px; --bar-delay:0.3s; background-color:#F97316;"></div><div class="hero__bar" style="left:23%; --bar-height:100px; --bar-delay:0.4s; background-color:#0D9488;"></div><div class="hero__bar" style="left:38%; --bar-height:70px; --bar-delay:0.5s; background-color:#F97316;"></div><div class="hero__bar" style="left:53%; --bar-height:130px; --bar-delay:0.6000000000000001s; background-color:#0D9488;"></div><div class="hero__bar" style="left:68%; --bar-height:50px; --bar-delay:0.7s; background-color:#F97316;"></div><div class="hero__bar" style="left:83%; --bar-height:90px; --bar-delay:0.8s; background-color:#0D9488;"></div></div>
    <div class="hero__container">
        <div class="hero__grid">
            <div class="hero__text reveal" data-anim="fade-up">
                <div class="hero__badges">
                    <span class="hero__badge hero__badge--white">CAN DO IT</span>
                    <span class="hero__badge hero__badge--orange">BPS Provinsi Aceh</span>
                </div>
                <p class="hero__eyebrow">Change Agent Network · Digital Operations &amp; Innovation Transformation</p>
                <h1 class="hero__title">Change Agent Network <span class="hero__title-accent">2026</span><br><span class="hero__title-upper">BPS Provinsi Aceh</span></h1>
                <p class="hero__tagline">Berani Berubah, Berani Berdampak</p>
                <p class="hero__desc">Komunitas agen perubahan BPS Provinsi Aceh yang berdedikasi membangun budaya inovasi, meningkatkan kualitas pelayanan statistik, dan mendorong transformasi organisasi yang berkelanjutan.</p>
                <div class="hero__ctas">
                    <a href="/#program" class="btn btn--orange-solid">Lihat Program Kami <svg class="icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                    <a href="/#tim" class="btn btn--ghost-white">Kenali Tim Kami</a>
                </div>
            </div>
        <!-- BAGIAN KANAN (Gambar Utama + Floating Badges) -->
<div style="flex: 1; min-width: 300px; display: flex; justify-content: center; align-items: center; position: relative; padding: 20px;">
    

    <div id="heroImage" class="animate-hero" style="position: relative; z-index: 1; width: 100%; max-width: 500px; border-radius: 24px;">
        <img src="img/CAN.png" alt="Kegiatan CAN BPS Aceh" style="width: 100%; height: auto; object-fit: cover; display: block;">
    </div>

    <!-- Badge 1:  (Posisi Kiri Atas) -->
    <div class="hero__float-badge hero__float-badge--0" style="--float-delay: 0.0s; position: absolute; top: 10%; left: 0; z-index: 2; background: white; padding: 12px 20px; border-radius: 12px; box-shadow: 0 10px 25px rgba(0,0,0,0.08); display: flex; align-items: center; gap: 12px; transform: translateX(-20px);">
        <div class="hero__float-icon" style="background-color:#FFF7ED; color:#F97316; padding: 8px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
            <svg class="icon-svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="8" width="5" height="13" rx="1"/><rect x="10" y="5" width="4" height="16" rx="1"/><rect x="17" y="11" width="4" height="10" rx="1"/><path d="M3 15h18"/><path d="M7 8v-3"/><path d="M12 5v-2"/><path d="M19 11v-3"/></svg>
        </div>
        <div class="hero__float-text">
            <p class="hero__float-label" style="margin: 0; font-weight: 800; color: #0f172a; font-size: 16px;">24 Unit</p>
            <p class="hero__float-sub" style="margin: 0; font-size: 12px; color: #64748b;">Satuan Kerja</p>
        </div>
    </div>

    <!-- Badge 2: (Posisi Kanan Tengah) -->
    <div class="hero__float-badge hero__float-badge--1" style="--float-delay: 1.1s; position: absolute; top: 15%; right: -20px; z-index: 2; background: white; padding: 12px 20px; border-radius: 12px; box-shadow: 0 10px 25px rgba(0,0,0,0.08); display: flex; align-items: center; gap: 12px; transform: translateY(-50%);">
        <div class="hero__float-icon" style="background-color:#F0FDFA; color:#0D9488; padding: 8px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
            <svg class="icon-svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
        </div>
        <div class="hero__float-text">
            <p class="hero__float-label" style="margin: 0; font-weight: 800; color: #0f172a; font-size: 16px;">3 Program</p>
            <p class="hero__float-sub" style="margin: 0; font-size: 12px; color: #64748b;">Intervensi Nasional</p>
        </div>
    </div>

    <!-- Badge 3: 3+ Tahun (Posisi Kiri Bawah) -->
    <div class="hero__float-badge hero__float-badge--2" style="--float-delay: 2.2s; position: absolute; bottom: 20%; left: -3%; z-index: 2; background: white; padding: 12px 20px; border-radius: 12px; box-shadow: 0 10px 25px rgba(0,0,0,0.08); display: flex; align-items: center; gap: 12px; transform: translateX(-10px);">
        <div class="hero__float-icon" style="background-color:#F0FDF4; color:#16A34A; padding: 8px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
            <svg class="icon-svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
        </div>
        <div class="hero__float-text">
            <p class="hero__float-label" style="margin: 0; font-weight: 800; color: #0f172a; font-size: 16px;">9 Rencana</p>
            <p class="hero__float-sub" style="margin: 0; font-size: 12px; color: #64748b;">Program Kerja</p>
        </div>
    </div>
</div>
            </div>
        </div>
    </div>
    <div class="hero__wave"><svg viewBox="0 0 1440 60" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 60L1440 60L1440 20C1200 60 960 0 720 20C480 40 240 0 0 20L0 60Z" fill="white"/></svg></div>
</section>

<section id="tentang" class="about">
    <div class="container">
        <div class="section-label reveal" data-anim="fade-up"><span class="section-label__bar"></span><span class="section-label__text">Tentang Kami</span></div>
        <div class="about__grid">
            <div class="about__text reveal" data-anim="fade-right">
                <h2 class="about__heading">Apa itu <span class="text-orange">Change Agent</span><br>Network?</h2>
                <p class="about__paragraph">Tim Pengelola Manajemen Perubahan yang terdiri dari Change Leader (CL), Change Champion (CC), Kepala BPS Kabupaten/Kota, dan Change Ambassador (CA) </p>
                <p class="about__paragraph">Change Agent Network berperan sebagai pelopor, penggerak, dan teladan perubahan dalam mendorong transformasi sistem kerja, pola pikir (mindset), dan budaya organisasi secara berkelanjutan guna mendukung reformasi birokrasi dan pembangunan Zona Integritas.</p>
            </div>
            <div class="about__stats">
        <div class="stat-card reveal" data-anim="fade-up" data-delay="0.0">
            <div class="stat-card__icon" style="background-color:#FED7AA; color:#F97316;"><svg class="icon-svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg></div>
            <div class="stat-card__value count-up" data-target="24" data-suffix="" style="color:#F97316;">0</div>
            <p class="stat-card__label">Unit Satuan Kerja</p>
        </div>
        <div class="stat-card reveal" data-anim="fade-up" data-delay="0.1">
            <div class="stat-card__icon" style="background-color:#CCFBF1; color:#0D9488;"><svg class="icon-svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg></div>
            <div class="stat-card__value count-up" data-target="3" data-suffix="" style="color:#0D9488;">0</div>
            <p class="stat-card__label">Program Intervensi Nasional</p>
        </div>
        <div class="stat-card reveal" data-anim="fade-up" data-delay="0.2">
            <div class="stat-card__icon" style="background-color:#DBEAFE; color:#1E3A5F;"><svg class="icon-svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg></div>
            <div class="stat-card__value count-up" data-target="9" data-suffix="" style="color:#1E3A5F;">0</div>
            <p class="stat-card__label">Rencana Program Kerja</p>
        </div>
        <div class="stat-card reveal" data-anim="fade-up" data-delay="0.30000000000000004">
            <div class="stat-card__icon" style="background-color:#DCFCE7; color:#16A34A;"><svg class="icon-svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg></div>
            <div class="stat-card__value count-up" data-target="100" data-suffix="%" style="color:#16A34A;">0%</div>
            <p class="stat-card__label">Komitmen</p>
        </div></div>
        </div>  
    </div>
</section>

<section id="core" class="values">
    <div class="container">
        <div class="values__header reveal" data-anim="fade-up">
            <div class="section-label section-label--center"><span class="section-label__bar"></span><span class="section-label__text">Core Values</span><span class="section-label__bar"></span></div>
            <h2 class="values__heading">Nilai yang Kami <span class="text-orange">Junjung Tinggi</span></h2>
            <p class="values__subtext">BerAKHLAK menjadi fondasi setiap langkah CAN dalam mewujudkan transformasi yang bermakna dan berdampak bagi BPS Provinsi Aceh.</p>
        </div>
        <div class="values__grid">
        <div class="value-card reveal" data-anim="fade-up" data-delay="0.0">
            <div class="value-card__top" style="background-color:#F97316;"></div>
            <div class="value-card__icon" style="background-color:#FFF7ED; color:#F97316;"><svg class="icon-svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.29 1.51 4.04 3 5.5l7 7z"></path></svg></div>
            <h3 class="value-card__title">Berorientasi Pelayanan</h3>
            <p class="value-card__desc">Berkomitmen memberikan layanan statistik terbaik yang berempati, responsif, dan melampaui ekspektasi masyarakat Aceh.</p>
            <div class="value-card__number" style="color:#F97316;">1</div>
        </div>
        <div class="value-card reveal" data-anim="fade-up" data-delay="0.1">
            <div class="value-card__top" style="background-color:#1E3A5F;"></div>
            <div class="value-card__icon" style="background-color:#EFF6FF; color:#1E3A5F;"><svg class="icon-svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><polyline points="9 12 11 14 15 10"></polyline></svg></div>
            <h3 class="value-card__title">Akuntabel</h3>
            <p class="value-card__desc">Bertanggung jawab atas setiap tindakan dan keputusan dengan integritas tinggi serta transparansi yang dapat dipertanggungjawabkan.</p>
            <div class="value-card__number" style="color:#1E3A5F;">2</div>
        </div>
        <div class="value-card reveal" data-anim="fade-up" data-delay="0.2">
            <div class="value-card__top" style="background-color:#16A34A;"></div>
            <div class="value-card__icon" style="background-color:#F0FDF4; color:#16A34A;"><svg class="icon-svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg></div>
            <h3 class="value-card__title">Kompeten</h3>
            <p class="value-card__desc">Terus mengembangkan kapasitas diri melalui pembelajaran berkelanjutan, inovasi, dan penguasaan teknologi statistik terkini.</p>
            <div class="value-card__number" style="color:#16A34A;">3</div>
        </div>
        <div class="value-card reveal" data-anim="fade-up" data-delay="0.30000000000000004">
            <div class="value-card__top" style="background-color:#0D9488;"></div>
            <div class="value-card__icon" style="background-color:#F0FDFA; color:#0D9488;"><svg class="icon-svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 21a8 8 0 0 0-16 0"></path><circle cx="10" cy="8" r="5"></circle><path d="M22 20c0-3.37-2-6.5-4-8a5 5 0 0 0-.45-8.3"></path></svg></div>
            <h3 class="value-card__title">Harmonis</h3>
            <p class="value-card__desc">Membangun sinergi kolaboratif antar pegawai yang saling menghargai, mendukung, dan tumbuh bersama tanpa diskriminasi.</p>
            <div class="value-card__number" style="color:#0D9488;">4</div>
        </div>
            <div class="value-card reveal" data-anim="fade-up" data-delay="0.40000000000000004">
            <div class="value-card__top" style="background-color:#0A008F;"></div>
            <div class="value-card__icon" style="background-color:#F0FDFA; color:#0A008F;">
            <svg class="icon-svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="8" r="7"></circle>
            <polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline>
            </svg>  
            </div>
            <h3 class="value-card__title">Loyal</h3>
            <p class="value-card__desc">Berdedikasi dan mengutamakan kepentingan Bangsa dan Negara.</p>
            <div class="value-card__number" style="color:#0A008F;">5</div>
        </div>
            <div class="value-card reveal" data-anim="fade-up" data-delay="0.5000000000000001">
            <div class="value-card__top" style="background-color:#FACC15;"></div>
            <div class="value-card__icon" style="background-color:#FFFBEB; color:#FACC15;">
            <svg class="icon-svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path>
            <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
            </svg>
            </div>
            <h3 class="value-card__title">Adaptif</h3>
            <p class="value-card__desc">Cepat menyesuaikan diri dengan perubahan lingkungan, teknologi, dan kebutuhan masyarakat.</p>
            <div class="value-card__number" style="color:#FACC15;">6</div>
    </div>
            <div class="value-card reveal" data-anim="fade-up" data-delay="0.6000000000000001">
            <div class="value-card__top" style="background-color:#DC2626;"></div>
            <div class="value-card__icon" style="background-color:#FEF2F2; color:#DC2626;">
            <svg class="icon-svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path>
            <polyline points="9 12 11 14 15 10"></polyline>
            </svg>
            </div>
            <h3 class="value-card__title">Kolaboratif</h3>
            <p class="value-card__desc">Membangun kemitraan yang kuat dengan berbagai pihak untuk mencapai tujuan bersama dan menciptakan dampak positif yang lebih luas.</p>
            <div class="value-card__number" style="color:#DC2626;">7</div>
            </div>
        </div>
    </a>
    <!-- Wrapper untuk menaruh card di tengah -->
<div class="bps-culture-wrapper">
    <a href="/budaya-bps" class="bps-culture-card">
        
        <!-- Gambar Background -->
        <img src="img/gedung-bps.png" alt="Budaya BPS" class="bps-culture-bg">
        
        <!-- Overlay Gradient Elegant -->
        <div class="bps-culture-overlay"></div>
        
        <!-- Teks Konten -->
        <div class="bps-culture-content">
            <h3 class="bps-culture-title">
                5 Budaya BPS
                <!-- Ikon Panah yang akan muncul saat hover -->
                <svg class="bps-culture-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
            </h3>
            <p class="bps-culture-subtitle">Pelajari nilai-nilai kerja dan komitmen kami lebih lanjut.</p>
        </div>
    </a>
</div>
</div>
            </a>
        </div>
    </div>
</section>
    

<section id="program" class="programs">
    <div class="container">
        <div class="programs__header reveal" data-anim="fade-up">
            <div class="section-label"><span class="section-label__bar"></span><span class="section-label__text">Program Unggulan</span></div>
            <h2 class="programs__heading">Sinergi Program <span class="text-orange">Inovatif</span></h2>
            <p class="programs__subtext">Rangkaian program inovatif yang dirancang untuk mempercepat transformasi budaya kerja dan kualitas pelayanan BPS Provinsi Aceh.</p>
        </div>
        <div class="programs__sublabel reveal" data-anim="fade-right"><span class="programs__sublabel-bar" style="background-color:#F97316;"></span><span class="programs__sublabel-text">Program Intervensi Nasional (PIN)</span></div>
        <!-- disini bisa di ubah sesuai program dari BPS dan bisa di tambahkan halaman baru jika memencet salah satu program -->
        <div class="programs__featured-grid">
        <div class="program-card reveal" data-anim="fade-up" data-delay="0.0">
            <div class="program-card__strip" style="background-color:#F97316;"></div>
            <div class="program-card__body">
                <div class="program-card__head">
                    <div class="program-card__icon" style="background-color:#FFF7ED; color:#F97316;"><svg class="icon-svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="6"></circle><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"></path></svg></div>
                    <span class="program-card__tag" style="background-color:#FFF7ED; color:#F97316;">EVOLVE</span>
                </div>
                <h3 class="program-card__title">EVOLVE</h3>
                <h4 class="program-card__subtitle">Evaluate Failures, Optimize Learning, Value Experience</h4>
                <p class="program-card__desc">Penguatan nilai Adaptif dan Be a Leader yang bertujuan untuk menumbuhkan budaya belajar dari kegagalan tanpa saling menyalahkan dan mendorong budaya learning organization.</p>
            </div>
        </div>
        <div class="program-card reveal" data-anim="fade-up" data-delay="0.1">
            <div class="program-card__strip" style="background-color:#0D9488;"></div>
            <div class="program-card__body">
                <div class="program-card__head">
                    <div class="program-card__icon" style="background-color:#F0FDFA; color:#0D9488;"><svg class="icon-svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 21a8 8 0 0 0-16 0"></path><circle cx="10" cy="8" r="5"></circle><path d="M22 20c0-3.37-2-6.5-4-8a5 5 0 0 0-.45-8.3"></path></svg></div>
                    <span class="program-card__tag" style="background-color:#F0FDFA; color:#0D9488;">COACH ME</span>
                </div>
                <h3 class="program-card__title">Coach Me</h3>
                <p class="program-card__desc">Program bimbingan &amp; mentoring intensif yang menghubungkan pegawai berpengalaman dengan talenta muda BPS Aceh.</p>
                <div class="program-card__sub">
                </div>
                 </div>
        </div>
        <div class="program-card reveal" data-anim="fade-up" data-delay="0.2">
            <div class="program-card__strip" style="background-color:#16A34A;"></div>
            <div class="program-card__body">
                <div class="program-card__head">
                    <div class="program-card__icon" style="background-color:#F0FDF4; color:#16A34A;"><svg class="icon-svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg></div>
                    <span class="program-card__tag" style="background-color:#F0FDF4; color:#16A34A;">MULAI</span>
                </div>
                <h3 class="program-card__title">MULAI</h3>
                <h4 class="program-card__subtitle">Menggerakkan Unit Lewat Aksi dan Implementasi</h4>
                <p class="program-card__desc">Memperkuat nilai Adaptif melalui perubahan bertahap dalam pelaksanaan tugas dan fungsi unit kerja. Program ini menggunakan pendekatan perubahan kecil yang konsisten dan berkelanjutan
                    sebagai strategi perubahan budaya kerja.</p>
                <div class="program-card__sub">
                </div>
            </div>
        </div></div>
        <div class="programs__sublabel reveal" data-anim="fade-right"><span class="programs__sublabel-bar" style="background-color:#1E3A5F;"></span><span class="programs__sublabel-text">Rencana Program Kerja</span></div>
        <div class="programs__rad-grid">
        <div class="rad-card reveal" data-anim="fade-up" data-delay="0.0">
            <div class="rad-card__head">
                <div class="rad-card__icon" style="background-color:#FFF7ED; color:#F97316;"><svg class="icon-svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 1 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></div>
                <div><h4 class="rad-card__title">SALAM PAGI</h4><p class="rad-card__subtitle"><b>S</b>emangat <b>A</b>wal <b>L</b>aksanakan <b>AM</b>anah Pagi</p></div>
            </div>
            <p class="rad-card__desc">Kutipan inspiratif setiap pagi, pemutaran lagu Indonesia Raya setiap selasa pukul 10.00 WIB.</p>
            <div class="rad-card__tags"><span class="rad-card__tag" style="background-color:#FFF7ED; color:#F97316;">Salam</span><span class="rad-card__tag" style="background-color:#FFF7ED; color:#F97316;">Inspiratif</span><span class="rad-card__tag" style="background-color:#FFF7ED; color:#F97316;">Nasionalisme</span></div>
                </div>
        <div class="rad-card reveal" data-anim="fade-up" data-delay="0.08">
            <div class="rad-card__head">
                <div class="rad-card__icon" style="background-color:#EFF6FF; color:#1E3A5F;"><svg class="icon-svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path></svg></div>
                <div><h4 class="rad-card__title">JUARA</h4><p class="rad-card__subtitle"><b>J</b>umat <b>U</b>khuwah, <b>A</b>ktif, <b>R</b>eligi, dan <b>A</b>ksi</p></div>
            </div>
            <p class="rad-card__desc">Terdiri atas <b>GoRoJak</b> , <b>ORGAN</b>, dan  JUMPA Kegiatan Gotong Royong, Olahraga Senam dan Jalan Santai, serta Kegiatan Rohani Jumat Krida.</p>
            <div class="rad-card__tags"><span class="rad-card__tag" style="background-color:#EFF6FF; color:#1E3A5F;">Religi</span><span class="rad-card__tag" style="background-color:#EFF6FF; color:#1E3A5F;">Aksi</span><span class="rad-card__tag" style="background-color:#EFF6FF; color:#1E3A5F;">Sehat</span></div>
        </div>
        <div class="rad-card reveal" data-anim="fade-up" data-delay="0.16">
            <div class="rad-card__head">
                <div class="rad-card__icon" style="background-color:#FFFBEB; color:#D97706;"><svg class="icon-svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg></div>
                <div><h4 class="rad-card__title">OPTIMA</h4><p class="rad-card__subtitle"><b>OPTIM</b>alisasi <b>A</b>plikasi</p></div>
            </div>
            <p class="rad-card__desc">Sosialisasi, pelatihan, dan pendampingan teknis, baik untuk aplikasi yang sudah ada maupun baru.</p>
            <div class="rad-card__tags"><span class="rad-card__tag" style="background-color:#FFFBEB; color:#D97706;">Sosialisasi</span><span class="rad-card__tag" style="background-color:#FFFBEB; color:#D97706;">Pelatihan</span><span class="rad-card__tag" style="background-color:#FFFBEB; color:#D97706;">Pendampingan</span></div>
        </div>
        <div class="rad-card reveal" data-anim="fade-up" data-delay="0.24">
            <div class="rad-card__head">
                <div class="rad-card__icon" style="background-color:#FAF5FF; color:#9333EA;"><svg class="icon-svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></div>
                <div><h4 class="rad-card__title">CINEMA</h4><p class="rad-card__subtitle"><b>C</b>reative <b>IN</b>teractiv<b>E</b> Medi<b>A</b> for knowledge sharing</p></div>
            </div>
            <p class="rad-card__desc">Media sharing ilmu berbasis web bupesta.</p>
            <div class="rad-card__tags"><span class="rad-card__tag" style="background-color:#FAF5FF; color:#9333EA;">Kreatif</span><span class="rad-card__tag" style="background-color:#FAF5FF; color:#9333EA;">Interaktif</span><span class="rad-card__tag" style="background-color:#FAF5FF; color:#9333EA;">Knowledge Sharing</span></div>
        </div>
        <div class="rad-card reveal" data-anim="fade-up" data-delay="0.32">
            <div class="rad-card__head">
                <div class="rad-card__icon" style="background-color:#F0FDFA; color:#0D9488;"><svg class="icon-svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg></div>
                <div><h4 class="rad-card__title">PRIMA</h4><p class="rad-card__subtitle"><b>P</b>egawai inspi<b>R</b>atif, adapt<b>I</b>f, <b>M</b>andiri, dan tel<b>A</b>dan.</p></div>
            </div>
            <p class="rad-card__desc">Pemilihan pegawai teladan triwulanan.</p>
            <div class="rad-card__tags"><span class="rad-card__tag" style="background-color:#F0FDFA; color:#0D9488;">Inspiratif</span><span class="rad-card__tag" style="background-color:#F0FDFA; color:#0D9488;">Adaptif</span><span class="rad-card__tag" style="background-color:#F0FDFA; color:#0D9488;">Mandiri</span></div>
        </div>
        <div class="rad-card reveal" data-anim="fade-up" data-delay="0.4">
            <div class="rad-card__head">
                <div class="rad-card__icon" style="background-color:#F0FDF4; color:#16A34A;">
                    <!-- Calendar + Check icon for JAZIRAH (schedule/integrity) -->
                    <svg class="icon-svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="4" width="18" height="16" rx="2" ry="2"></rect>
                        <line x1="16" y1="2" x2="16" y2="6"></line>
                        <line x1="8" y1="2" x2="8" y2="6"></line>
                        <polyline points="9 13 11.5 15.5 15 11"></polyline>
                    </svg>
                </div>
                <div><h4 class="rad-card__title">JAZIRAH</h4><p class="rad-card__subtitle"><b>J</b>adwal k<b>A</b>wal <b>Z</b>ona <b>I</b>nteg<b>R</b>itas <b>A</b>kuntabel dan terara<b>H</b></p></div>
            </div>
            <p class="rad-card__desc">Forum internalisasi dan sosialisasi Pembangunan ZI.</p>
            <div class="rad-card__tags"><span class="rad-card__tag" style="background-color:#F0FDF4; color:#16A34A;">Integritas</span><span class="rad-card__tag" style="background-color:#F0FDF4; color:#16A34A;">Akuntabilitas</span><span class="rad-card__tag" style="background-color:#F0FDF4; color:#16A34A;">Terarah</span></div>
        </div>
        <div class="rad-card reveal" data-anim="fade-up" data-delay="0.5">
            <div class="rad-card__head">
                <div class="rad-card__icon" style="background-color:#FFEBFF; color:#FF33FF;"><svg class="icon-svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2 2 8l10 6 10-6-10-6z"></path><path d="M6 12v5c0 1.5 2.5 3 6 3s6-1.5 6-3v-5"></path><path d="M22 8v7"></path></svg></div>
                <div><h4 class="rad-card__title">I AM ASN </h4><p class="rad-card__subtitle">Infografis Aturan Main ASN</p>
            </div>
            </div>
            <p class="rad-card__desc">Infografis ringkas tentang aturan ASN dilanjutkan dengan kuis.</p>
            <div class="rad-card__tags"><span class="rad-card__tag" style="background-color:#FFEBFF; color:#FF33FF;">Infografis</span><span class="rad-card__tag" style="background-color:#FFEBFF; color:#FF33FF;">Ringkas</span><span class="rad-card__tag" style="background-color:#FFEBFF; color:#FF33FF;">Kuis</span></div>
        </div>
            <div class="rad-card reveal" data-anim="fade-up" data-delay="0.6">
            <div class="rad-card__head">
                <div class="rad-card__icon " style="background-color:#F0FDFA; color:#0D9488;"><svg class="icon-svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path><polyline points="9 12 11 14 15 10"></polyline></svg></div>
                <div><h4 class="rad-card__title">SeULanGA</h4><p class="rad-card__subtitle">Selasa Unggul Layanan Integritas Aceh</p></div>
                </div>
                <p class="rad-card__desc">Konsultasi rutin bagi pegawai untuk penemuhan rencana aksi dan bukti dukung pembangunan ZI.</p>
                <div class="rad-card__tags"><span class="rad-card__tag" style="background-color:#F0FDFA; color:#0D9488;">Konsultasi</span><span class="rad-card__tag" style="background-color:#F0FDFA; color:#0D9488;">Rutin</span><span class="rad-card__tag" style="background-color:#F0FDFA; color:#0D9488;">Bukti Dukung</span></div>
        </div>
                <div class="rad-card reveal" data-anim="fade-up" data-delay="0.7">
            <div class="rad-card__head">
                <div class="rad-card__icon " style="background-color:#D4F1FF; color:#25B6FF;"><svg class="icon-svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon><path d="M15 9a3 3 0 0 1 0 6"></path><path d="M18 6a6 6 0 0 1 0 12"></path></svg></div>
                <div><h4 class="rad-card__title">SUARA</h4></div>
                </div>
                <p class="rad-card__desc">Sistem Umpan Anonim untuk Reformasi dan Aspirasi.</p>
                <div class="rad-card__tags"><span class="rad-card__tag" style="background-color:#D4F1FF; color:#25B6FF;">Reformasi</span><span class="rad-card__tag" style="background-color:#D4F1FF; color:#25B6FF;">Aspirasi</span><span class="rad-card__tag" style="background-color:#D4F1FF; color:#25B6FF;">Anonim</span></div>
        </div>
</div>
        <div class="news__cta reveal" data-anim="fade-up" style="margin-top: 32px;">
            <a href="{{ url('https://bupesta.web.bps.go.id/cinema') }}" class="btn-outline btn-outline--orange" style="text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
                Selengkapnya
                <svg class="icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </a>
        </div>
    </div>
</section>
<section id="tim" class="team">
    <div class="container">
        <div class="team__header reveal" data-anim="fade-up">
            <div class="team__badge"><span>Tim Kami</span></div>
            <h2 class="team__heading">Meet the <span class="text-orange">Agents of Change</span></h2>
            <p class="team__subtext">Para penggerak transformasi yang berkomitmen untuk membawa BPS Provinsi Aceh menuju standar pelayanan statistik yang lebih baik dan berdampak.</p>
        </div>
        <!-- KARTU PEMIMPIN (LEADER CARD) -->
<div class="team__leader-wrap reveal" data-anim="scale-in">
    <div class="leader-card">
        <!-- Wrapper Foto Tanpa Background Warna -->
            <div class="card-popout-avatar">
            <img src="img/AgusAndria.png" alt="Agus Andria" class="card-popout-avatar__img" style="height:240px;">
            <!-- Bintang untuk Leader -->
            <div class="leader-card__star">★</div>
        </div>
        
        <h3 class="leader-card__name" style="background:#F97316;color:#fff;display:inline-block;padding:8px 14px;border-radius:10px;margin-top:10px;">Agus Andria, SST, M.Si.</h3>
        <p class="leader-card__title">Kepala BPS Provinsi Aceh</p>
        <span class="leader-card__role">Change Leader</span>
        <p class="leader-card__unit">BPS Provinsi Aceh</p>
    </div>
</div>

<!-- GRID ANGGOTA (MEMBER CARDS) -->
<div class="team__grid">
    <!-- Member 1: Wahdini -->
    <div class="member-card reveal" data-anim="fade-up" data-delay="0.0">
        <div class="card-popout-avatar">
            <img src="img/Wahdini.png" alt="Wahdini" class="card-popout-avatar__img" style="height:200px;">
        </div>
        <h4 class="member-card__name" style="background:#F97316;color:#fff;display:inline-block;padding:6px 12px;border-radius:8px;margin-top:8px;">Wahdini, S.Psi.</h4>
        <p class="member-card__title">Analis SDM Aparatur Ahli Muda</p>
        <span class="member-card__role">Change Champion</span>
    </div>

    <!-- Member 2: Dhani Fitri -->
    <div class="member-card reveal" data-anim="fade-up" data-delay="0.07">
        <div class="card-popout-avatar">
            <img src="img/Dhani.png" alt="Dhani Fitri Yanthi" class="card-popout-avatar__img" style="height:200px;">
        </div>
        <h4 class="member-card__name" style="background:#F97316;color:#fff;display:inline-block;padding:6px 12px;border-radius:8px;margin-top:8px;">Dhani Fitri Yanthi, S.Si</h4>
        <p class="member-card__title">Statistisi Ahli Muda</p>
        <span class="member-card__role">Change Agent</span>
    </div>

    <!-- Member 3: Cahya Danu -->
    <div class="member-card reveal" data-anim="fade-up" data-delay="0.14">
        <div class="card-popout-avatar">
            <img src="img/Cahya.png" alt="Cahya Danu Rahman" class="card-popout-avatar__img" style="height:200px;">
        </div>
        <h4 class="member-card__name" style="background:#F97316;color:#fff;display:inline-block;padding:6px 12px;border-radius:8px;margin-top:8px;">Cahya Danu Rahman, SST, M.Ec.Dev.</h4>
        <p class="member-card__title">Statistisi Ahli Muda</p>
        <span class="member-card__role">Change Agent</span>
    </div>

    <!-- Member 4: Kanasha -->
    <div class="member-card reveal" data-anim="fade-up" data-delay="0.21000000000000002">
        <div class="card-popout-avatar">
            <img src="img/Kanasha.png" alt="Kanasha Humaira" class="card-popout-avatar__img" style="height:200px;">
        </div>
        <h4 class="member-card__name" style="background:#F97316;color:#fff;display:inline-block;padding:6px 12px;border-radius:8px;margin-top:8px;">Kanasha Humaira, SST</h4>
        <p class="member-card__title"> Pranata Komputer Ahli Muda</p>
        <span class="member-card__role">Change Agent</span>    </div>

    <!-- Member 5: Zahlul Fuadi -->
    <div class="member-card reveal" data-anim="fade-up" data-delay="0.28">
        <div class="card-popout-avatar">
            <img src="img/Zahlul.png" alt="Zahlul Fuadi" class="card-popout-avatar__img" style="height:200px;">
        </div>
        <h4 class="member-card__name" style="background:#F97316;color:#fff;display:inline-block;padding:6px 12px;border-radius:8px;margin-top:8px;">Zahlul Fuadi, S.Tr.Stat.</h4>
        <p class="member-card__title">Pranata Komputer Ahli Pertama</p>
        <span class="member-card__role">Change Agent</span>
    </div>

    <!-- Member 6: Naura Shada -->
    <div class="member-card reveal" data-anim="fade-up" data-delay="0.35000000000000003">
        <div class="card-popout-avatar">
            <img src="img/Naura.png" alt="Naura Shada" class="card-popout-avatar__img" style="height:200px;">
        </div>
        <h4 class="member-card__name" style="background:#F97316;color:#fff;display:inline-block;padding:6px 12px;border-radius:8px;margin-top:8px;">Naura Shada Kirana, S.Tr.Stat.</h4>
        <p class="member-card__title">Statistisi Ahli Pertama</p>
        <span class="member-card__role">Change Agent</span>
    </div>

    <!-- Member 7: Reyhan -->
    <div class="member-card reveal" data-anim="fade-up" data-delay="0.42000000000000004">
        <div class="card-popout-avatar">
            <img src="img/Rayhan.png" alt="Rayhan" class="card-popout-avatar__img" style="height:200px;">
        </div>
        <h4 class="member-card__name" style="background:#F97316;color:#fff;display:inline-block;padding:6px 12px;border-radius:8px;margin-top:8px;">Reyhan Octavianri, S.I.Kom </h4>
        <p class="member-card__title">Pranata Humas Ahli Pertama</p>
        <span class="member-card__role">Change Agent</span>
    </div>

    <!-- Member 8: Sinta Nuriyah -->
    <div class="member-card reveal" data-anim="fade-up" data-delay="0.49000000000000005">
        <div class="card-popout-avatar">
            <img src="img/Sinta.png" alt="Sinta Nuriyah" class="card-popout-avatar__img" style="height:200px;">
        </div>
        <h4 class="member-card__name" style="background:#F97316;color:#fff;display:inline-block;padding:6px 12px;border-radius:8px;margin-top:8px;">Sinta Nuriyah, S.Tr.Stat.</h4>
        <p class="member-card__title">Statistisi Ahli Pertama</p>
        <span class="member-card__role">Change Agent</span> 
    </div>
</div>
    </div>
</section>
 <!-- Untuk sementara waktu berita tidak ditampilkan terlbih dahulu, karena masih dalam tahap pengembangan API berita.
<section id="berita" class="news">
    <div class="container">
        <div class="news__header reveal" data-anim="fade-up">
            <div class="section-label"><span class="section-label__bar"></span><span class="section-label__text">Berita Terkini</span></div>
            <h2 class="news__heading">Kabar &amp; <span class="text-orange">Inspirasi</span></h2>
            <p class="news__subtext">Ikuti terus perkembangan terbaru, wawasan, dan cerita inspiratif dari kegiatan Change Agent Network BPS Provinsi Aceh.</p>
        </div>
        
        <div class="news__grid">
            @forelse($beritaList as $item)
                @php
                
                    $category = $item['category'] ?? 'Kegiatan'; 
                    
                   
                    switch($category) {
                        case 'Inspirasi':
                            $color = '#16A34A';
                            $icon = '<svg class="icon-svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 1 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>';
                            break;
                        case 'Pencapaian':
                            $color = '#1E3A5F';
                            $icon = '<svg class="icon-svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="6"></circle><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"></path></svg>';
                            break;
                        case 'Kegiatan':
                        default:
                            $color = '#F97316';
                            $icon = '<svg class="icon-svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg>';
                            break;
                    }

             
                    $delay = ($loop->index % 3) * 0.1;
                @endphp

                <article class="news-card reveal" data-anim="fade-up" data-delay="{{ number_format($delay, 1) }}">
                    <div class="news-card__thumb" style="background: linear-gradient(135deg, {{ $color }}, {{ $color }}CC);">
                        <div class="news-card__thumb-icon">
                            {!! $icon !!}
                        </div>
                        <span class="news-card__category" style="background-color:#fff; color:{{ $color }};">{{ $category }}</span>
                    </div>
                    <div class="news-card__body">
                        <div class="news-card__date">
                            <svg class="icon-svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                            {{-- Memformat tanggal otomatis dari API menjadi format Indonesia --}}
                            <span>{{ isset($item['date']) ? \Carbon\Carbon::parse($item['date'])->translatedFormat('d F Y') : '-' }}</span>
                        </div>
                        {{-- Mengisi Judul --}}
                        <h3 class="news-card__title">{{ $item['title'] ?? 'Tanpa Judul' }}</h3>
                        {{-- Mengisi Ringkasan Berita dengan pengaman karakter maksimal agar layout kartu tidak rusak --}}
                        <p class="news-card__excerpt">{{ Str::limit($item['excerpt'] ?? '', 150, '...') }}</p>
                        
                        {{-- Mengubah button menjadi link 'a' agar fungsional mengarah ke detail berita --}}
                        <a href="{{ url('/berita/'.$item['id']) }}" class="news-card__link" style="color:{{ $color }}; text-decoration: none; display: inline-flex; align-items: center;">
                            Baca Selengkapnya 
                            <svg class="icon-svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                    </div>
                </article>
            @empty
                {{-- Tampilan Fallback jika data API kosong / gagal dimuat --}}
                <div class="news-card" style="grid-column: 1/-1; text-align: center; padding: 3rem;">
                    <p class="news-card__excerpt" style="font-style: italic;">Tidak ada berita terkini untuk saat ini.</p>
                </div>
            @endforelse
        </div>
        
        <div class="news__cta reveal" data-anim="fade-up">
            <a href="{{ url('https://aceh.bps.go.id/id/news') }}" class="btn-outline btn-outline--orange" style="text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
                Lihat Semua Berita 
                <svg class="icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </a>
        </div>
    </div>
</section>
-->

    @endif
</main>
--

<footer class="footer">
    <div class="container">
        <div class="footer__grid">
            <div>
                <div class="footer__brand"><div class="footer__brand-icon"><img src="{{ asset('img/Icon.png') }}" alt="Logo Badge"></div><div><p class="footer__brand-name">BPS Provinsi Aceh</p><p class="footer__brand-sub">Badan Pusat Statistik</p></div></div>
                <div class="footer__akhlak">
                    <p class="footer__akhlak-title">BerAKHLAK</p>
                    <p class="footer__akhlak-desc">Berorientasi Pelayanan · Akuntabel · Kompeten · Harmonis · Loyal · Adaptif · Kolaboratif</p>
                </div>
                <div class="footer__akhlak">
                    <p class="footer__akhlak-title">5 Budaya BPS</p>
                    <p class="footer__akhlak-desc">Be a Leader, Not a Boss, Inovasi di Setiap Lini, KKD (Komunikasi, Koordinasi, Diplomasi), Kualitas Data & Proses Bisnis, Kerja Keras & Kerja Cerdas</p>
                </div>
                <p class="footer__tagline" style="margin-top: 20px;">BPS Aceh Berjaya, Indonesia Maju</p>
                <div class="footer__socials">
                    <a href="https://www.instagram.com/bpsaceh?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="footer__social-icon"><svg class="icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg></a>
                    <a href="https://www.youtube.com/@bpsaceh1100" class="footer__social-icon"><svg class="icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon></svg></a>
                    <a href="https://aceh.bps.go.id" target="_blank" rel="noreferrer" class="footer__social-icon"><svg class="icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg></a>
                </div>
            </div>
            <div>
                <p class="footer__col-title">Navigasi</p>
                <ul class="footer__links">
                    <li><a href="/#beranda"><span class="dot"></span>Beranda</a></li>
                    <li><a href="/#tentang"><span class="dot"></span>Tentang</a></li>
                    <li><a href="/#program"><span class="dot"></span>Program</a></li>
                    <li><a href="/#tim"><span class="dot"></span>Team</a></li>
                    <li><a href="/#berita"><span class="dot"></span>Berita</a></li>
                </ul>
            </div>
            <div>
                <p class="footer__col-title">Kontak</p>
                <ul class="footer__contact">
                    <li><svg class="icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg><p>Jl. Tgk. H. Muhammad Daud Beureueh No.20,<br>Banda Aceh 23121, Aceh — Indonesia</p></li>
                    <li><svg class="icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"></path></svg><p>(0651) 33185</p></li>
                    <li><svg class="icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"></rect><path d="m22 6-10 7L2 6"></path></svg><p>bps1100@bps.go.id</p></li>
                </ul>

            </div>
        </div>
        <div class="footer__bottom">
            <p>© 2026 Change Agent Network — BPS Provinsi Aceh.</p>
            <p>BPS Aceh Berjaya, Indonesia Maju</p>
        </div>
    </div>
</footer>
</div>
</body>
</html>
