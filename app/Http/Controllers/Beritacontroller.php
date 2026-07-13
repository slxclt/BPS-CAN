<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class BeritaController extends Controller
{
    public function index()
    {
        // Menyimpan cache selama 30 menit agar tidak membebani server & web tetap kilat
        $beritaList = Cache::remember('berita_bps_aceh', 1800, function () {
            try {
                // Menggabungkan URL Utama dengan API Key dari .env
                $url = env('BPS_API_URL') . '/key/' . env('BPS_API_TOKEN') . '/';

                $response = Http::withoutVerifying()->get($url);

                if ($response->successful()) {
                    $json = $response->json();
                    
                    // Struktur JSON WebAPI BPS: data berita asli ada di dalam ['data'][1]
                    $rawNews = $json['data'][1] ?? [];
                    
                    // KITA TRANSLATE: Mengubah field bawaan BPS agar klop dengan variabel di Blade Anda
                    $formattedNews = collect($rawNews)->map(function ($item) {
                        // Mengacak kategori sebagai contoh agar variasi warna kartu (Orange/Hijau/Biru) di UI Anda tetap aktif
                        $categories = ['Kegiatan', 'Inspirasi', 'Pencapaian'];
                        $randomCategory = $categories[array_rand($categories)];

                        return [
                            'id'       => $item['news_id'] ?? null,
                            'title'    => $item['title'] ?? 'Tanpa Judul',
                            'excerpt'  => $item['news'] ?? '', // Mengambil isi berita asli BPS
                            'date'     => $item['rl_date'] ?? null, // Tanggal rilis dari BPS
                            'category' => $randomCategory, // Kategori untuk memicu warna CSS Anda
                        ];
                    })->all();

                    return $formattedNews;
                }

                return [];
            } catch (\Exception $e) {
                Log::error('Gagal mengambil data dari API BPS: ' . $e->getMessage());
                return [];
            }
        });

        return view('can-bps', compact('beritaList'));
    }
}