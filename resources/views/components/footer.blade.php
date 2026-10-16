{{-- Section Penutup Pre-Footer: Background #06142E solid --}}
<section class="bg-[#06142E] py-16 md:py-20 border-b border-[#102244]">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-[#E6EEF7] font-heading leading-tight">
            Punya pertanyaan tentang website bisnis Anda?
        </h2>
        <p class="mt-4 text-base sm:text-lg text-[#C2D3E5] leading-[1.7] max-w-2xl mx-auto">
            Ceritakan kebutuhan Anda lewat WhatsApp. Kami balas dalam hitungan menit di jam kerja (08.00 - 20.00 WIB) tanpa kewajiban memesan.
        </p>
        <div class="mt-8 flex justify-center">
            <a href="https://wa.me/6281234567890?text=Halo%20Soutprint.In,%20saya%20punya%20pertanyaan%20tentang%20pembuatan%20website%20bisnis%20saya" 
               target="_blank" 
               rel="noopener noreferrer"
               class="px-8 py-4 rounded-xl text-base sm:text-lg font-bold text-[#020C20] bg-[#0BBEFF] hover:bg-[#38CBFF] shadow-md inline-flex items-center gap-3 transition-all duration-200">
                <i class="fa-brands fa-whatsapp text-2xl"></i>
                <span>Chat via WhatsApp Sekarang</span>
            </a>
        </div>
    </div>
</section>

{{-- Main Footer: Background #020C20 solid tanpa garis gelombang --}}
<footer class="bg-[#020C20] text-[#E6EEF7] pt-12 pb-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 sm:gap-10 pb-10 border-b border-[#06142E]">
            
            {{-- Kolom 1: Logo + Deskripsi Studio + Info Legal/Lokasi --}}
            <div class="space-y-4">
                <a href="{{ route('home') }}" class="inline-flex items-center gap-2.5">
                    <div class="w-9 h-9 rounded-xl bg-[#06142E] border border-[#132B4F] flex items-center justify-center p-1.5">
                        <x-logo-icon color="#0BBEFF" class="w-full h-full" />
                    </div>
                    <span class="text-xl font-bold text-[#E6EEF7] font-heading">
                        Soutprint<span class="text-[#0BBEFF]">.In</span>
                    </span>
                </a>
                <p class="text-sm text-[#8EA3BE] leading-[1.7]">
                    Studio pembuatan website untuk UMKM, yayasan, dan perusahaan di Indonesia. Tampil profesional, cepat di HP, dan kode sumber sepenuhnya milik Anda.
                </p>
                <p class="text-xs text-[#6B829E]">
                    Beroperasi dari <span class="text-[#E6EEF7] font-medium">[kota Anda]</span> &bull; Melayani klien seluruh Indonesia
                </p>
            </div>

            {{-- Kolom 2: Tautan Cepat --}}
            <div class="space-y-3 md:pl-8">
                <h3 class="text-sm font-bold text-[#E6EEF7] font-heading">
                    Tautan Cepat
                </h3>
                <ul class="space-y-2.5 text-sm text-[#8EA3BE]">
                    <li><a href="{{ url('/#harga') }}" class="hover:text-[#0BBEFF] transition-colors">Layanan &amp; Paket Harga</a></li>
                    <li><a href="{{ url('/#portofolio') }}" class="hover:text-[#0BBEFF] transition-colors">Portofolio Klien</a></li>
                    <li><a href="{{ url('/#alur-kerja') }}" class="hover:text-[#0BBEFF] transition-colors">Alur Kerja</a></li>
                    <li><a href="{{ url('/#faq') }}" class="hover:text-[#0BBEFF] transition-colors">Pertanyaan Umum (FAQ)</a></li>
                </ul>
            </div>

            {{-- Kolom 3: Kontak Langsung --}}
            <div class="space-y-3">
                <h3 class="text-sm font-bold text-[#E6EEF7] font-heading">
                    Kontak Langsung
                </h3>
                <ul class="space-y-2.5 text-sm text-[#8EA3BE]">
                    <li class="flex items-center gap-2.5">
                        <i class="fa-brands fa-whatsapp text-[#0BBEFF]"></i>
                        <a href="https://wa.me/6281234567890" target="_blank" rel="noopener noreferrer" class="hover:text-[#0BBEFF] transition-colors">
                            +62 812-3456-7890
                        </a>
                    </li>
                    <li class="flex items-center gap-2.5">
                        <i class="fa-solid fa-envelope text-[#0BBEFF]"></i>
                        <a href="mailto:halo@soutprint.in" class="hover:text-[#0BBEFF] transition-colors">
                            halo@soutprint.in
                        </a>
                    </li>
                    <li class="flex items-center gap-2.5">
                        <i class="fa-solid fa-clock text-[#0BBEFF]"></i>
                        <span>Jam Kerja: 08.00 - 20.00 WIB</span>
                    </li>
                </ul>
            </div>

        </div>

        {{-- Baris Bawah: Copyright + Kebijakan Privasi & Syarat Ketentuan --}}
        <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-[#6B829E]">
            <p>&copy; {{ date('Y') }} Soutprint.In. Seluruh hak cipta dilindungi.</p>
            <div class="flex items-center gap-4">
                <a href="{{ route('faq') }}" class="hover:text-[#E6EEF7] transition-colors">Kebijakan Privasi</a>
                <span>&bull;</span>
                <a href="{{ route('faq') }}" class="hover:text-[#E6EEF7] transition-colors">Syarat &amp; Ketentuan</a>
            </div>
        </div>

    </div>
</footer>
