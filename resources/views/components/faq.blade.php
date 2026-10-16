{{-- FAQ Section: Background #F7FAFC (Terang), Teks #0B1B33 --}}
<section id="faq" class="py-16 md:py-24 bg-[#F7FAFC] border-b border-[#D5E1EC]">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {{-- Section Header --}}
        <div class="max-w-3xl mb-12 md:mb-16">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold tracking-tight text-[#0B1B33] font-heading">
                Pertanyaan yang sering ditanyakan
            </h2>
            <p class="mt-3 text-base text-[#475569] leading-[1.7]">
                Jawaban ringkas dan lugas seputar proses kerja, pembayaran, dan kepemilikan website di Soutprint.In.
            </p>
        </div>

        @php
            $faqItems = [
                [
                    'q' => 'Berapa lama pembuatannya?',
                    'a' => 'Rata-rata 7 sampai 14 hari kerja untuk Company Profile dan Landing Page. Untuk Toko Online dan Aplikasi Web Kustom, waktu pengerjaan berkisar antara 2 sampai 4 minggu tergantung kelengkapan konten dan fitur yang diminta.'
                ],
                [
                    'q' => 'Berapa DP dan bagaimana pembayarannya?',
                    'a' => 'Uang muka (DP) sebesar 50% di awal setelah penawaran disepakati untuk memulai tahap desain. Pelunasan sisa 50% dilakukan setelah seluruh website selesai, diuji coba bersama, dan siap online. Pembayaran bisa via transfer bank atau QRIS resmi.'
                ],
                [
                    'q' => 'Kalau tidak cocok dengan desainnya, bagaimana?',
                    'a' => 'Sebelum masuk tahap coding, kami selalu mengirimkan rancangan desain visual terlebih dahulu. Anda berhak mendapatkan revisi desain sampai sesuai dengan identitas bisnis Anda sebelum kami mulai membangun kodenya.'
                ],
                [
                    'q' => 'Siapa yang memegang domain dan hosting?',
                    'a' => 'Akun domain dan hosting didaftarkan sepenuhnya atas nama dan email Anda. Akses panel kontrol kami serahkan penuh saat serah terima, sehingga Anda memiliki kendali 100% tanpa ketergantungan sepihak.'
                ],
                [
                    'q' => 'Kalau ada error setelah serah terima, siapa yang memperbaiki?',
                    'a' => 'Kami memberikan masa garansi perbaikan gratis selama 60 hari setelah website online. Jika terjadi kendala teknis atau bug, tim kami langsung memperbaikinya via koordinasi WhatsApp.'
                ],
                [
                    'q' => 'Apakah website bisa saya kelola sendiri?',
                    'a' => 'Bisa. Kami melengkapi website dengan dashboard kelola konten yang mudah dipakai orang awam (mengubah teks, foto, produk, artikel, dan kontak). Kami juga menyediakan panduan penggunaan tertulis dan video singkat saat serah terima.'
                ],
            ];
        @endphp

        {{-- Akordeon FAQ: Putih #FFFFFF, border 1px #D5E1EC, radius 12px --}}
        <div class="space-y-3 sm:space-y-4" id="faq-accordion">
            @foreach($faqItems as $index => $item)
            <div class="bg-white border border-[#D5E1EC] rounded-xl overflow-hidden shadow-xs hover:border-[#BACEDB] transition-colors duration-200">
                <button type="button" 
                        class="faq-toggle w-full px-5 sm:px-6 py-4 sm:py-5 text-left flex items-center justify-between gap-4 focus:outline-none"
                        aria-expanded="{{ $index === 0 ? 'true' : 'false' }}">
                    <span class="text-base sm:text-lg font-bold text-[#0B1B33] font-heading">
                        {{ $item['q'] }}
                    </span>
                    <span class="faq-icon w-8 h-8 rounded-lg bg-[#F7FAFC] border border-[#D5E1EC] flex items-center justify-center text-[#0870B8] shrink-0 transition-transform duration-200 {{ $index === 0 ? 'rotate-180' : '' }}">
                        <i class="fa-solid fa-chevron-down text-xs"></i>
                    </span>
                </button>
                <div class="faq-content px-5 sm:px-6 pb-5 sm:pb-6 text-base text-[#475569] leading-[1.7] border-t border-[#F8FAFC] {{ $index === 0 ? 'block' : 'hidden' }}">
                    {{ $item['a'] }}
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>
