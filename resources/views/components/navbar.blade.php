{{-- Header Navbar: Background #020C20 solid tanpa gradien --}}
<header id="main-navbar" class="sticky top-0 z-40 bg-[#020C20] border-b border-[#06142E] transition-all duration-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 sm:h-20">
            
            {{-- Brand Logo: Huruf S sederhana tajam + Nama Brand --}}
            <a href="{{ route('home') }}" class="flex items-center gap-2.5 sm:gap-3 group shrink-0" aria-label="Soutprint.In Home">
                <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-xl bg-[#06142E] border border-[#132B4F] flex items-center justify-center p-1.5 transition-colors group-hover:border-[#0BBEFF]">
                    <x-logo-icon color="#0BBEFF" class="w-full h-full" />
                </div>
                <div class="flex flex-col">
                    <span class="text-lg sm:text-xl font-bold tracking-tight text-[#E6EEF7] font-heading">
                        Soutprint<span class="text-[#0BBEFF]">.In</span>
                    </span>
                    <span class="text-[10px] text-[#8EA3BE] font-medium leading-none">Studio Pembuatan Website</span>
                </div>
            </a>

            {{-- Desktop Navigation Menu --}}
            <nav class="hidden lg:flex items-center gap-8 text-[15px] font-semibold text-[#E6EEF7]">
                <a href="{{ url('/#harga') }}" class="py-1 transition-colors hover:text-[#0BBEFF]">
                    Layanan
                </a>
                <a href="{{ url('/#portofolio') }}" class="py-1 transition-colors hover:text-[#0BBEFF]">
                    Portofolio
                </a>
                <a href="{{ url('/#alur-kerja') }}" class="py-1 transition-colors hover:text-[#0BBEFF]">
                    Alur Kerja
                </a>
                <a href="{{ url('/#faq') }}" class="py-1 transition-colors hover:text-[#0BBEFF]">
                    FAQ
                </a>
            </nav>

            {{-- Desktop Action CTA Button: Outline putih tipis / aksen "Tanya Proyek" --}}
            <div class="hidden lg:flex items-center gap-3">
                <a href="https://wa.me/6281234567890?text=Halo%20Soutprint.In,%20saya%20ingin%20tanya%20proyek%20pembuatan%20website" 
                   target="_blank" 
                   rel="noopener noreferrer"
                   class="px-5 py-2 rounded-lg text-sm font-semibold text-[#E6EEF7] hover:text-[#0BBEFF] bg-transparent hover:bg-[#06142E] border border-[#D5E1EC]/30 hover:border-[#0BBEFF] flex items-center gap-2 transition-all duration-200">
                    <i class="fa-brands fa-whatsapp text-base text-[#0BBEFF]"></i>
                    <span>Tanya Proyek</span>
                </a>
            </div>

            {{-- Mobile Hamburger Button --}}
            <div class="flex lg:hidden items-center gap-2">
                <a href="https://wa.me/6281234567890?text=Halo%20Soutprint.In,%20saya%20ingin%20tanya%20proyek%20pembuatan%20website" 
                   target="_blank" 
                   rel="noopener noreferrer"
                   class="px-3 py-1.5 rounded-lg text-xs font-semibold text-[#E6EEF7] border border-[#D5E1EC]/30 flex items-center gap-1.5">
                    <i class="fa-brands fa-whatsapp text-sm text-[#0BBEFF]"></i>
                    <span>Tanya Proyek</span>
                </a>
                <button id="mobile-menu-btn" 
                        type="button" 
                        class="w-10 h-10 rounded-lg bg-[#06142E] border border-[#132B4F] flex items-center justify-center text-[#E6EEF7] hover:text-[#0BBEFF] focus:outline-none" 
                        aria-label="Toggle menu" 
                        aria-expanded="false">
                    <i class="fa-solid fa-bars text-lg" id="menu-icon"></i>
                </button>
            </div>
        </div>
    </div>

    {{-- Mobile Drawer Menu: Background #020C20 solid --}}
    <div id="mobile-menu" class="hidden lg:hidden border-b border-[#06142E] bg-[#020C20] px-4 py-4 space-y-2">
        <a href="{{ url('/#harga') }}" class="block py-2.5 px-3 rounded-lg text-sm font-semibold text-[#E6EEF7] hover:bg-[#06142E] hover:text-[#0BBEFF]">
            Layanan
        </a>
        <a href="{{ url('/#portofolio') }}" class="block py-2.5 px-3 rounded-lg text-sm font-semibold text-[#E6EEF7] hover:bg-[#06142E] hover:text-[#0BBEFF]">
            Portofolio
        </a>
        <a href="{{ url('/#alur-kerja') }}" class="block py-2.5 px-3 rounded-lg text-sm font-semibold text-[#E6EEF7] hover:bg-[#06142E] hover:text-[#0BBEFF]">
            Alur Kerja
        </a>
        <a href="{{ url('/#faq') }}" class="block py-2.5 px-3 rounded-lg text-sm font-semibold text-[#E6EEF7] hover:bg-[#06142E] hover:text-[#0BBEFF]">
            FAQ
        </a>

        <div class="pt-2 border-t border-[#06142E]">
            <a href="https://wa.me/6281234567890?text=Halo%20Soutprint.In,%20saya%20ingin%20tanya%20proyek%20pembuatan%20website" 
               target="_blank" 
               rel="noopener noreferrer"
               class="w-full py-2.5 rounded-lg text-center text-sm font-bold text-[#020C20] bg-[#0BBEFF] flex items-center justify-center gap-2">
                <i class="fa-brands fa-whatsapp text-base"></i>
                <span>Tanya Proyek via WhatsApp</span>
            </a>
        </div>
    </div>
</header>
