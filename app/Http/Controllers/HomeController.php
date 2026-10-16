<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    private function getServicesData()
    {
        return [
            [
                'id' => 'landing-page',
                'name' => 'Landing Page',
                'price' => 'Rp 2.000.000',
                'period' => '',
                'tagline' => 'Untuk promo, produk tunggal, atau iklan.',
                'description' => 'Satu halaman fokus satu tujuan: calon pelanggan menghubungi Anda. Termasuk penulisan teks, tombol WhatsApp, dan pelacakan iklan (Meta Pixel, Google Tag Manager).',
                'is_featured' => false,
            ],
            [
                'id' => 'company-profile',
                'name' => 'Company Profile',
                'price' => 'Rp 3.500.000',
                'period' => '',
                'tagline' => 'Untuk usaha yang butuh tampil kredibel.',
                'description' => 'Beberapa halaman sesuai identitas brand, dasar SEO, dashboard sederhana untuk ubah isi sendiri, bisa dua bahasa.',
                'is_featured' => false,
            ],
            [
                'id' => 'ecommerce',
                'name' => 'Toko Online',
                'price' => 'Rp 6.000.000',
                'period' => '',
                'tagline' => 'Untuk Anda yang ingin jualan tanpa ribet.',
                'description' => 'Katalog, keranjang, pembayaran (QRIS, virtual account, e-wallet via Midtrans/Xendit), cek ongkir otomatis, kelola stok, pesanan masuk ke WhatsApp.',
                'is_featured' => true,
                'badge' => 'Paling banyak dipilih',
            ],
            [
                'id' => 'web-app',
                'name' => 'Aplikasi Web Kustom',
                'price' => 'Mulai Rp 9.500.000',
                'period' => '',
                'tagline' => 'Untuk proses bisnis yang tidak muat di template.',
                'description' => 'Login dengan hak akses berbeda, dashboard laporan, integrasi API. Harga final menyesuaikan lingkup.',
                'is_featured' => false,
            ],
            [
                'id' => 'redesign-optimization',
                'name' => 'Redesign Website',
                'price' => 'Rp 2.800.000',
                'period' => '',
                'tagline' => 'Untuk website lama yang lambat atau terlihat usang.',
                'description' => 'Tampilan dirombak, kecepatan dioptimalkan (Core Web Vitals), pindah ke server lebih baik, konten lama aman.',
                'is_featured' => false,
            ],
            [
                'id' => 'maintenance-cloud',
                'name' => 'Perawatan Bulanan',
                'price' => 'Rp 350.000',
                'period' => '/bulan',
                'tagline' => 'Untuk Anda yang tidak mau pusing teknis.',
                'description' => 'Pemantauan uptime, backup rutin, update keamanan, bantuan perbaikan via WhatsApp.',
                'is_featured' => false,
            ],
        ];
    }

    private function getPortfoliosData()
    {
        return [
            [
                'id' => 'tadari-property',
                'title' => 'TADARI — Properti & Sewa Apartemen',
                'client' => 'TADARI Indonesia',
                'category' => 'web-app',
                'category_label' => 'Aplikasi Web & Properti',
                'year' => '2025',
                'image' => 'images/portfolio/tadari.png',
                'live_url' => 'http://tadari.co.id/',
                'summary' => 'Platform web properti modern untuk listing apartemen pilihan, formulir titip sewa/jual mandiri, artikel blog, dan profil tim agen.',
            ],
            [
                'id' => 'asy-syaakiriin',
                'title' => 'Yayasan & Masjid Asy-Syaakiriin',
                'client' => 'Yayasan Masjid Asy-Syaakiriin',
                'category' => 'company-profile',
                'category_label' => 'Portal Yayasan & Masjid',
                'year' => '2025',
                'image' => 'images/portfolio/asy-syaakiriin.png',
                'live_url' => 'http://asy-syaakiriin.com/',
                'summary' => 'Website resmi Yayasan & Masjid Asy-Syaakiriin untuk informasi kegiatan dakwah, transparansi kas masjid, dan jadwal kajian rutin.',
            ],
            [
                'id' => 'agung-megah-abadi',
                'title' => 'PT Agung Megah Abadi — Mining & Heavy Equipment',
                'client' => 'PT Agung Megah Abadi',
                'category' => 'company-profile',
                'category_label' => 'Company Profile Alat Berat',
                'year' => '2025',
                'image' => 'images/portfolio/mining.jpg',
                'live_url' => null,
                'summary' => 'Website profil korporasi tambang dan kontraktor alat berat nasional dengan katalog armada excavator dan proyek terintegrasi.',
            ],
            [
                'id' => 'fresh-harvest-organic',
                'title' => 'FreshHarvest — Sayur & Buah Organik Segar',
                'client' => 'FreshHarvest Indonesia',
                'category' => 'ecommerce',
                'category_label' => 'Toko Online & Retail',
                'year' => '2025',
                'image' => 'images/portfolio/grocery.jpg',
                'live_url' => null,
                'summary' => 'Toko online buah dan sayur segar dengan katalog produk, pembayaran digital, dan pengiriman kilat.',
            ],
            [
                'id' => 'global-language-academy',
                'title' => 'Global Language Academy — Kursus Bahasa Inggris',
                'client' => 'Global Language Academy',
                'category' => 'landing-page',
                'category_label' => 'Landing Page Pendidikan',
                'year' => '2025',
                'image' => 'images/portfolio/edu.jpg',
                'live_url' => null,
                'summary' => 'Landing page institusi kursus bahasa Inggris dengan silabus kelas dan formulir pendaftaran terhubung ke WhatsApp.',
            ],
            [
                'id' => 'jaya-trans-shuttle',
                'title' => 'CV Jaya Trans — Rental Mobil & Travel HiAce',
                'client' => 'CV Jaya Trans',
                'category' => 'company-profile',
                'category_label' => 'Transportasi & Rental',
                'year' => '2025',
                'image' => 'images/portfolio/rental.jpg',
                'live_url' => null,
                'summary' => 'Layanan sewa armada kendaraan dengan daftar tarif transparan, pemesanan rute, dan paket tur perjalanan.',
            ],
            [
                'id' => 'peak-auto-solutions',
                'title' => 'Peak Auto Solutions — Dealer Truk 4x4 & SUV',
                'client' => 'Peak Auto Solutions',
                'category' => 'company-profile',
                'category_label' => 'Otomotif & Showroom',
                'year' => '2025',
                'image' => 'images/portfolio/automotive.jpg',
                'live_url' => null,
                'summary' => 'Showroom digital kendaraan off-road dan komersial dengan spesifikasi teknis dan formulir penawaran.',
            ],
            [
                'id' => 'alat-berat-nusantara',
                'title' => 'PT Alat Berat Nusantara — Excavator & Konstruksi',
                'client' => 'PT Alat Berat Nusantara',
                'category' => 'company-profile',
                'category_label' => 'Konstruksi & Sewa Armada',
                'year' => '2025',
                'image' => 'images/portfolio/heavy-equipment.jpg',
                'live_url' => null,
                'summary' => 'Katalog sewa excavator hidrolik dan alat berat sipil dengan formulir penawaran quotation cepat.',
            ],
            [
                'id' => 'dsp-law-firm',
                'title' => 'DSP Law Firm & Advocates — Advokat & Kantor Hukum',
                'client' => 'DSP Law Firm',
                'category' => 'company-profile',
                'category_label' => 'Hukum & Kantor Advokat',
                'year' => '2025',
                'image' => 'images/portfolio/lawfirm.jpg',
                'live_url' => null,
                'summary' => 'Kantor hukum korporat dan litigasi dengan cakupan area praktik hukum, profil mitra, dan konsultasi.',
            ],
            [
                'id' => 'amanah-mina-tour',
                'title' => 'PT Amanah Mina Tour — Travel Haji & Umrah Resmi',
                'client' => 'PT Amanah Mina Tour',
                'category' => 'ecommerce',
                'category_label' => 'Biro Haji & Umrah',
                'year' => '2025',
                'image' => 'images/portfolio/umrah.jpg',
                'live_url' => null,
                'summary' => 'Biro perjalanan ibadah haji dan umrah berizin resmi dengan paket akomodasi hotel dan jadwal keberangkatan.',
            ],
        ];
    }

    private function getTestimonialsData()
    {
        return [
            [
                'name' => 'Tim Pengelola TADARI',
                'role' => 'Manajemen Properti & Sewa',
                'business' => 'TADARI Indonesia',
                'website' => 'http://tadari.co.id/',
                'website_display' => 'tadari.co.id',
                'quote' => 'Portal properti tadari.co.id dibangun dengan struktur pencarian unit dan formulir titip sewa yang sangat praktis. Calon penyewa mudah menemukan unit dan menghubungi agen.',
            ],
            [
                'name' => 'Pengurus Yayasan',
                'role' => 'Divisi Media & Komunikasi',
                'business' => 'Yayasan & Masjid Asy-Syaakiriin',
                'website' => 'http://asy-syaakiriin.com/',
                'website_display' => 'asy-syaakiriin.com',
                'quote' => 'Website yayasan kami kini rapi dan mudah diakses jemaah dari HP. Jadwal kajian dan laporan kegiatan bisa dipublikasikan secara mandiri dan cepat.',
            ],
            [
                'name' => 'Direksi Operasional',
                'role' => 'Kontraktor Alat Berat',
                'business' => 'PT Agung Megah Abadi',
                'website' => '',
                'website_display' => 'Armada Alat Berat & Tambang',
                'quote' => 'Katalog armada alat berat tampil profesional dan memudahkan pengiriman quotation kepada rekanan kontraktor kami di berbagai daerah.',
            ],
        ];
    }

    private function getFaqsData()
    {
        return [
            [
                'question' => 'Berapa lama pembuatannya?',
                'answer' => 'Rata-rata 7 sampai 14 hari kerja untuk Company Profile dan Landing Page. Untuk Toko Online dan Aplikasi Web Kustom, waktu pengerjaan berkisar antara 2 sampai 4 minggu tergantung kelengkapan konten dan fitur yang diminta.',
            ],
            [
                'question' => 'Berapa DP dan bagaimana pembayarannya?',
                'answer' => 'Uang muka (DP) sebesar 50% di awal setelah penawaran disepakati untuk memulai tahap desain. Pelunasan sisa 50% dilakukan setelah seluruh website selesai, diuji coba bersama, dan siap online. Pembayaran bisa via transfer bank atau QRIS resmi.',
            ],
            [
                'question' => 'Kalau tidak cocok dengan desainnya, bagaimana?',
                'answer' => 'Sebelum masuk tahap coding, kami selalu mengirimkan rancangan desain visual terlebih dahulu. Anda berhak mendapatkan revisi desain sampai sesuai dengan identitas bisnis Anda sebelum kami mulai membangun kodenya.',
            ],
            [
                'question' => 'Siapa yang memegang domain dan hosting?',
                'answer' => 'Akun domain dan hosting didaftarkan sepenuhnya atas nama dan email Anda. Akses panel kontrol kami serahkan penuh saat serah terima, sehingga Anda memiliki kendali 100% tanpa ketergantungan sepihak.',
            ],
            [
                'question' => 'Kalau ada error setelah serah terima, siapa yang memperbaiki?',
                'answer' => 'Kami memberikan masa garansi perbaikan gratis selama 60 hari setelah website online. Jika terjadi kendala teknis atau bug, tim kami langsung memperbaikinya via koordinasi WhatsApp.',
            ],
            [
                'question' => 'Apakah website bisa saya kelola sendiri?',
                'answer' => 'Bisa. Kami melengkapi website dengan dashboard kelola konten yang mudah dipakai orang awam (mengubah teks, foto, produk, artikel, dan kontak). Kami juga menyediakan panduan penggunaan tertulis dan video singkat saat serah terima.',
            ],
        ];
    }

    // 1. Home Page
    public function index()
    {
        $services = $this->getServicesData();
        $portfolios = $this->getPortfoliosData();
        $testimonials = $this->getTestimonialsData();
        $faqs = $this->getFaqsData();

        return view('home', compact('services', 'portfolios', 'testimonials', 'faqs'));
    }

    // 2. Layanan Page
    public function services()
    {
        $services = $this->getServicesData();
        return view('pages.services', compact('services'));
    }

    // 3. Portofolio Page
    public function portfolio()
    {
        $portfolios = $this->getPortfoliosData();
        return view('pages.portfolio', compact('portfolios'));
    }

    // 4. Tentang Kami / Alur Kerja Page
    public function about()
    {
        $testimonials = $this->getTestimonialsData();
        return view('pages.about', compact('testimonials'));
    }

    // 5. FAQ Page
    public function faq()
    {
        $faqs = $this->getFaqsData();
        return view('pages.faq', compact('faqs'));
    }

    // 6. Kontak Page
    public function contact()
    {
        return view('pages.contact');
    }

    // Submit Contact Handler
    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'phone' => 'required|string|max:20',
            'service' => 'required|string',
            'budget' => 'nullable|string',
            'message' => 'required|string|max:2000',
        ]);

        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Terima kasih! Tim Soutprint.In akan segera menghubungi Anda melalui WhatsApp.',
            ]);
        }

        return back()->with('success', 'Permintaan Anda berhasil dikirim! Tim kami akan menghubungi melalui WhatsApp segera.');
    }
}
