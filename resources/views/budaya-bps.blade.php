@extends('can-bps') {{-- Sesuaikan dengan nama file master layout Anda --}}

@section('content')
<div class="budaya-page">
    <!-- BANNER ATAS DENGAN BACKGROUND GRADASI DIAS -> HIJAU -->
    <div class="budaya-header">
        <div class="budaya-header__container">
            <h1 class="budaya-header__title">5 Budaya Organisasi BPS</h1>
            <p class="budaya-header__subtitle">Nilai-nilai kepemimpinan dan etos kerja yang menjadi pondasi setiap insan BPS dalam berkarya.</p>
        </div>
    </div>

    <!-- KONTEN UTAMA DENGAN OVERLAY LENGKUNG PUTIH -->
    <div class="budaya-content">
        <div class="budaya-content__container">
            
            <!-- BUDAYA 1: Be a Leader -->
            <div class="budaya-card reveal" data-anim="fade-up" style="border-left-color: #2563EB;">
                <div class="budaya-card__icon-wrap" style="background: linear-gradient(135deg, #3B82F6, #1D4ED8); box-shadow: 0 4px 14px rgba(59, 130, 246, 0.35);">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                </div>
                <div class="budaya-card__body">
                    <h3 class="budaya-card__item-title">Be a Leader, Not a Boss</h3>
                    <p class="budaya-card__item-desc">Mendorong setiap pegawai memiliki jiwa kepemimpinan, proaktif, dan bertanggung jawab atas tugasnya masing-masing tanpa harus menunggu perintah.</p>
                </div>
            </div>

            <!-- BUDAYA 2: Inovasi -->
            <div class="budaya-card reveal" data-anim="fade-up" style="border-left-color: #059669;">
                <div class="budaya-card__icon-wrap" style="background: linear-gradient(135deg, #10B981, #047857); box-shadow: 0 4px 14px rgba(16, 185, 129, 0.35);">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .6 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5"></path>
                        <line x1="9" y1="18" x2="15" y2="18"></line>
                        <line x1="10" y1="22" x2="14" y2="22"></line>
                    </svg>
                </div>
                <div class="budaya-card__body">
                    <h3 class="budaya-card__item-title">Inovasi di Setiap Lini</h3>
                    <p class="budaya-card__item-desc">Berkomitmen untuk terus menciptakan perbaikan, gagasan kreatif, dan cara baru yang lebih efisien di seluruh tahapan proses bisnis statistik.</p>
                </div>
            </div>

            <!-- BUDAYA 3: KKD -->
            <div class="budaya-card reveal" data-anim="fade-up" style="border-left-color: #7C3AED;">
                <div class="budaya-card__icon-wrap" style="background: linear-gradient(135deg, #8B5CF6, #6D28D9); box-shadow: 0 4px 14px rgba(139, 92, 246, 0.35);">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                    </svg>
                </div>
                <div class="budaya-card__body">
                    <h3 class="budaya-card__item-title">KKD (Komunikasi, Koordinasi, Diplomasi)</h3>
                    <p class="budaya-card__item-desc">Membangun kolaborasi yang solid melalui komunikasi yang santun, koordinasi yang terarah, dan diplomasi yang cerdas antar fungsi.</p>
                </div>
            </div>

            <!-- BUDAYA 4: Kualitas Data -->
            <div class="budaya-card reveal" data-anim="fade-up" style="border-left-color: #EA580C;">
                <div class="budaya-card__icon-wrap" style="background: linear-gradient(135deg, #F97316, #C2410C); box-shadow: 0 4px 14px rgba(249, 115, 22, 0.35);">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="18" y1="20" x2="18" y2="10"></line>
                        <line x1="12" y1="20" x2="12" y2="4"></line>
                        <line x1="6" y1="20" x2="6" y2="14"></line>
                    </svg>
                </div>
                <div class="budaya-card__body">
                    <h3 class="budaya-card__item-title">Kualitas Data & Proses Bisnis</h3>
                    <p class="budaya-card__item-desc">Fokus utama dalam menghasilkan data statistik yang akurat, relevan, dan terpercaya melalui ketaatan pada prosedur standar.</p>
                </div>
            </div>

            <!-- BUDAYA 5: Kerja Keras -->
            <div class="budaya-card reveal" data-anim="fade-up" style="border-left-color: #DB2777;">
                <div class="budaya-card__icon-wrap" style="background: linear-gradient(135deg, #EC4899, #BE185D); box-shadow: 0 4px 14px rgba(236, 72, 153, 0.35);">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                    </svg>
                </div>
                <div class="budaya-card__body">
                    <h3 class="budaya-card__item-title">Kerja Keras & Kerja Cerdas</h3>
                    <p class="budaya-card__item-desc">Menyeimbangkan antara dedikasi tinggi (hard work) dengan efektivitas strategi (smart work) untuk mencapai target kinerja maksimal.</p>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection