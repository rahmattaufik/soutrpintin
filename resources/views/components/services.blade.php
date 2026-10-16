{{-- Section Harga & Layanan: Background #EAF2F8 (Terang Selang-seling), Teks #0B1B33 --}}
<section id="harga" class="py-16 md:py-24 bg-[#EAF2F8] border-b border-[#D5E1EC]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {{-- Section Header --}}
        <div class="max-w-3xl mb-12 md:mb-16">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold tracking-tight text-[#0B1B33] font-heading">
                Harga yang jelas sebelum Anda mulai
            </h2>
            <p class="mt-3 text-base text-[#475569] leading-[1.7]">
                Tidak ada biaya tersembunyi. Semua paket sudah termasuk domain .com satu tahun, hosting, SSL, dan panduan penggunaan.
            </p>
        </div>

        @php
            $pricingPackages = [
                [
                    'name' => 'Landing Page',
                    'price' => 'Rp 2.000.000',
                    'period' => '',
                    'tagline' => 'Untuk promo, produk tunggal, atau iklan.',
                    'description' => 'Satu halaman fokus satu tujuan: calon pelanggan menghubungi Anda. Termasuk penulisan teks, tombol WhatsApp, dan pelacakan iklan (Meta Pixel, Google Tag Manager).',
                    'is_featured' => false,
                ],
                [
                    'name' => 'Company Profile',
                    'price' => 'Rp 3.500.000',
                    'period' => '',
                    'tagline' => 'Untuk usaha yang butuh tampil kredibel.',
                    'description' => 'Beberapa halaman sesuai identitas brand, dasar SEO, dashboard sederhana untuk ubah isi sendiri, bisa dua bahasa.',
                    'is_featured' => false,
                ],
                [
                    'name' => 'Toko Online',
                    'price' => 'Rp 6.000.000',
                    'period' => '',
                    'tagline' => 'Untuk Anda yang ingin jualan tanpa ribet.',
                    'description' => 'Katalog, keranjang, pembayaran (QRIS, virtual account, e-wallet via Midtrans/Xendit), cek ongkir otomatis, kelola stok, pesanan masuk ke WhatsApp.',
                    'is_featured' => true,
                    'badge' => 'Paling banyak dipilih',
                ],
                [
                    'name' => 'Aplikasi Web Kustom',
                    'price' => 'Mulai Rp 9.500.000',
                    'period' => '',
                    'tagline' => 'Untuk proses bisnis yang tidak muat di template.',
                    'description' => 'Login dengan hak akses berbeda, dashboard laporan, integrasi API. Harga final menyesuaikan lingkup.',
                    'is_featured' => false,
                ],
                [
                    'name' => 'Redesign Website',
                    'price' => 'Rp 2.800.000',
                    'period' => '',
                    'tagline' => 'Untuk website lama yang lambat atau terlihat usang.',
                    'description' => 'Tampilan dirombak, kecepatan dioptimalkan (Core Web Vitals), pindah ke server lebih baik, konten lama aman.',
                    'is_featured' => false,
                ],
                [
                    'name' => 'Perawatan Bulanan',
                    'price' => 'Rp 350.000',
                    'period' => '/bulan',
                    'tagline' => 'Untuk Anda yang tidak mau pusing teknis.',
                    'description' => 'Pemantauan uptime, backup rutin, update keamanan, bantuan perbaikan via WhatsApp.',
                    'is_featured' => false,
                ],
            ];
        @endphp

        {{-- 6 Kartu Harga: Putih netral #FFFFFF, ukuran seragam, tanpa rating bintang & tanpa header warna-warni --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-7 items-stretch">
            @foreach($pricingPackages as $pkg)
            <div class="bg-white rounded-xl p-6 sm:p-7 border {{ $pkg['is_featured'] ? 'border-2 border-[#0870B8] shadow-md relative' : 'border border-[#D5E1EC] shadow-xs hover:border-[#BACEDB]' }} transition-all duration-200 flex flex-col justify-between">
                
                <div>
                    {{-- Label "Paling banyak dipilih" pada Toko Online --}}
                    @if($pkg['is_featured'])
                    <div class="mb-3">
                        <span class="inline-block px-3 py-1 rounded-md text-xs font-bold text-white bg-[#0870B8]">
                            {{ $pkg['badge'] }}
                        </span>
                    </div>
                    @endif

                    {{-- Nama Paket & Tagline --}}
                    <h3 class="text-xl font-bold text-[#0B1B33] font-heading">
                        {{ $pkg['name'] }}
                    </h3>
                    <p class="text-sm font-medium text-[#0870B8] mt-1">
                        {{ $pkg['tagline'] }}
                    </p>

                    {{-- Harga Paket --}}
                    <div class="mt-4 pb-4 border-b border-[#F1F5F9] flex items-baseline gap-1">
                        <span class="text-3xl font-extrabold text-[#0B1B33] font-heading">
                            {{ $pkg['price'] }}
                        </span>
                        @if(!empty($pkg['period']))
                        <span class="text-sm font-medium text-[#64748B]">
                            {{ $pkg['period'] }}
                        </span>
                        @endif
                    </div>

                    {{-- Deskripsi Rinci Lingkup Pekerjaan --}}
                    <p class="mt-4 text-sm text-[#475569] leading-[1.7]">
                        {{ $pkg['description'] }}
                    </p>
                </div>

                {{-- Tombol: "Pilih Paket Ini" -> WhatsApp --}}
                <div class="mt-8 pt-4 border-t border-[#F1F5F9]">
                    <a href="https://wa.me/6281234567890?text=Halo%20Soutprint,%20saya%20tertarik%20dengan%20paket%20{{ urlencode($pkg['name']) }}.%20Bisa%20konsultasi%3F" 
                       target="_blank" 
                       rel="noopener noreferrer"
                       class="w-full py-3 px-4 rounded-lg text-sm font-bold text-center flex items-center justify-center gap-2 transition-colors duration-200 {{ $pkg['is_featured'] ? 'bg-[#0870B8] hover:bg-[#065A96] text-white shadow-xs' : 'bg-[#EAF2F8] hover:bg-[#0870B8] text-[#0870B8] hover:text-white border border-[#D5E1EC]' }}">
                        <i class="fa-brands fa-whatsapp text-base"></i>
                        <span>Pilih Paket Ini</span>
                    </a>
                </div>

            </div>
            @endforeach
        </div>

        {{-- 1 Baris Teks Penjelas di Bawah 6 Kartu --}}
        <div class="mt-10 p-5 rounded-xl bg-white border border-[#D5E1EC] max-w-3xl mx-auto text-center shadow-xs">
            <p class="text-sm sm:text-base text-[#0B1B33] font-medium leading-[1.7]">
                Butuh kombinasi fitur yang tidak ada di daftar? Hubungi kami untuk penawaran kustom. Pembayaran bertahap: DP 50%, pelunasan setelah website online.
            </p>
        </div>

    </div>
</section>
