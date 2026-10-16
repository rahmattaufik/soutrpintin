{{-- Hero Section: Background #020C20 solid tanpa gradien atau blob kabur --}}
<section class="bg-[#020C20] pt-14 pb-16 md:pt-20 md:pb-24 border-b border-[#06142E]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">
            
            {{-- Kolom Kiri: Teks & Aksi --}}
            <div class="lg:col-span-7 text-center lg:text-left">
                
                {{-- Satu badge saja di hero (Sesuai instruksi) --}}
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-md bg-[#06142E] border border-[#132B4F] text-[#E6EEF7] text-xs sm:text-sm font-medium mb-6">
                    <span class="w-2 h-2 rounded-full bg-[#0BBEFF]"></span>
                    <span>Studio web dari <strong class="text-[#0BBEFF] font-semibold">[kota]</strong> untuk bisnis Indonesia</span>
                </div>

                {{-- Heading Utama (Tanpa gradien teks klise) --}}
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-[52px] font-bold tracking-tight text-[#E6EEF7] leading-[1.2] font-heading">
                    Website yang bikin calon pelanggan <span class="text-[#0BBEFF]">langsung chat Anda.</span>
                </h1>

                {{-- Sub-heading (Minimal 16px, line-height 1.7) --}}
                <p class="mt-5 text-base sm:text-lg text-[#C2D3E5] leading-[1.7] max-w-2xl mx-auto lg:mx-0">
                    Kami bangun company profile, toko online, dan aplikasi web untuk UMKM dan perusahaan di Indonesia. Pembayaran QRIS dan transfer sudah terpasang, tampil cepat di HP, dan kode sumbernya jadi milik Anda.
                </p>

                {{-- Dua tombol berdampingan: Utama WhatsApp (#0BBEFF) & Kedua Outline Portofolio --}}
                <div class="mt-8 flex flex-col sm:flex-row items-stretch sm:items-center justify-center lg:justify-start gap-4">
                    {{-- Tombol utama: "Konsultasi Gratis via WhatsApp" (background #0BBEFF, teks #020C20, tebal, ikon WhatsApp) --}}
                    <a href="https://wa.me/6281234567890?text=Halo%20Soutprint.In,%20saya%20ingin%20konsultasi%20pembuatan%20website" 
                       target="_blank" 
                       rel="noopener noreferrer"
                       class="px-6 py-3.5 rounded-lg text-base font-bold text-[#020C20] bg-[#0BBEFF] hover:bg-[#38CBFF] shadow-xs text-center flex items-center justify-center gap-2 transition-all duration-200">
                        <i class="fa-brands fa-whatsapp text-lg"></i>
                        <span>Konsultasi Gratis via WhatsApp</span>
                    </a>

                    {{-- Tombol kedua: "Lihat Website yang Sudah Jadi" (outline putih tipis, scroll ke #portofolio) --}}
                    <a href="#portofolio" 
                       class="px-6 py-3.5 rounded-lg text-base font-bold text-[#E6EEF7] hover:text-[#020C20] bg-transparent hover:bg-white border border-[#D5E1EC]/40 text-center transition-all duration-200">
                        Lihat Website yang Sudah Jadi
                    </a>
                </div>

            </div>

            {{-- Kolom Kanan: Mockup Browser CSS Bersih dengan Screenshot Portofolio Asli (Menggantikan kartun 3D) --}}
            <div class="lg:col-span-5 flex justify-center items-center">
                <div class="w-full max-w-[480px] rounded-xl overflow-hidden bg-[#06142E] border border-[#1B2B47] shadow-xl">
                    
                    {{-- Browser Header Bar --}}
                    <div class="px-4 py-2.5 bg-[#06142E] border-b border-[#1B2B47] flex items-center justify-between gap-2 select-none">
                        <div class="flex items-center gap-1.5">
                            <span class="w-2.5 h-2.5 rounded-full bg-[#E5484D]"></span>
                            <span class="w-2.5 h-2.5 rounded-full bg-[#F5A524]"></span>
                            <span class="w-2.5 h-2.5 rounded-full bg-[#30A46C]"></span>
                        </div>
                        <div class="flex-1 max-w-[240px] px-2.5 py-1 rounded bg-[#020C20] border border-[#132B4F] text-[11px] font-mono text-[#8EA3BE] text-center truncate">
                            tadari.co.id
                        </div>
                        <div class="w-6"></div>
                    </div>

                    {{-- Screenshot Proyek Portofolio Nyata --}}
                    <div class="relative bg-white aspect-[4/3] overflow-hidden">
                        <img src="{{ asset('images/portfolio/tadari.png') }}" 
                             alt="[tadari.png - Screenshot Portofolio TADARI Indonesia]" 
                             class="w-full h-full object-cover object-top"
                             loading="eager">
                    </div>

                    {{-- Label Keterangan Sederhana --}}
                    <div class="px-4 py-3 bg-[#06142E] border-t border-[#1B2B47] flex items-center justify-between text-xs">
                        <span class="text-[#E6EEF7] font-semibold">TADARI Indonesia</span>
                        <span class="text-[#0BBEFF] font-medium">Platform Properti & Sewa</span>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>

{{-- Strip Statistik di bawah hero: Background #06142E solid, 4 angka nyata yang bisa dibuktikan --}}
<section class="bg-[#06142E] py-8 border-b border-[#102244]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
            
            {{-- Statistik 1 --}}
            <div class="p-3">
                <a href="#portofolio" class="group inline-block">
                    <p class="text-3xl sm:text-4xl font-extrabold text-[#0BBEFF] font-heading group-hover:underline">
                        14+
                    </p>
                    <p class="mt-1 text-sm text-[#E6EEF7]">
                        Website sudah online
                    </p>
                </a>
            </div>

            {{-- Statistik 2 --}}
            <div class="p-3">
                <p class="text-3xl sm:text-4xl font-extrabold text-[#0BBEFF] font-heading">
                    7-14
                </p>
                <p class="mt-1 text-sm text-[#E6EEF7]">
                    Hari rata-rata selesai
                </p>
            </div>

            {{-- Statistik 3 --}}
            <div class="p-3">
                <p class="text-3xl sm:text-4xl font-extrabold text-[#0BBEFF] font-heading">
                    2x
                </p>
                <p class="mt-1 text-sm text-[#E6EEF7]">
                    Putaran revisi gratis
                </p>
            </div>

            {{-- Statistik 4 --}}
            <div class="p-3">
                <p class="text-3xl sm:text-4xl font-extrabold text-[#0BBEFF] font-heading">
                    100%
                </p>
                <p class="mt-1 text-sm text-[#E6EEF7]">
                    Kode sumber milik Anda
                </p>
            </div>

        </div>
    </div>
</section>
