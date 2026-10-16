{{-- Portofolio Section: Background #F7FAFC (Terang), Teks #0B1B33 --}}
<section id="portofolio" class="py-16 md:py-24 bg-[#F7FAFC] border-b border-[#D5E1EC]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {{-- Section Header --}}
        <div class="max-w-3xl mb-10 md:mb-14">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold tracking-tight text-[#0B1B33] font-heading">
                Website yang sudah kami kerjakan
            </h2>
            <p class="mt-3 text-base text-[#475569] leading-[1.7]">
                Semua website di bawah ini aktif dan digunakan oleh pemiliknya setiap hari.
            </p>
        </div>

        {{-- Filter Kategori Sederhana (Clean Tabs) --}}
        <div class="flex items-center gap-2 overflow-x-auto pb-3 mb-8 scrollbar-none touch-scroll" id="portfolio-filter-tabs">
            <button type="button" data-filter="all" class="portfolio-filter-btn px-4 py-2 rounded-lg text-sm font-semibold whitespace-nowrap bg-[#0870B8] text-white shadow-xs transition-colors duration-200">
                Semua ({{ count($portfolios) }})
            </button>
            <button type="button" data-filter="company-profile" class="portfolio-filter-btn px-4 py-2 rounded-lg text-sm font-semibold whitespace-nowrap bg-white text-[#0B1B33] hover:bg-[#EAF2F8] border border-[#D5E1EC] transition-colors duration-200">
                Company Profile
            </button>
            <button type="button" data-filter="ecommerce" class="portfolio-filter-btn px-4 py-2 rounded-lg text-sm font-semibold whitespace-nowrap bg-white text-[#0B1B33] hover:bg-[#EAF2F8] border border-[#D5E1EC] transition-colors duration-200">
                Toko Online
            </button>
            <button type="button" data-filter="web-app" class="portfolio-filter-btn px-4 py-2 rounded-lg text-sm font-semibold whitespace-nowrap bg-white text-[#0B1B33] hover:bg-[#EAF2F8] border border-[#D5E1EC] transition-colors duration-200">
                Aplikasi Web & Properti
            </button>
            <button type="button" data-filter="landing-page" class="portfolio-filter-btn px-4 py-2 rounded-lg text-sm font-semibold whitespace-nowrap bg-white text-[#0B1B33] hover:bg-[#EAF2F8] border border-[#D5E1EC] transition-colors duration-200">
                Landing Page
            </button>
        </div>

        {{-- Grid Kartu Portofolio: Putih #FFFFFF, border 1px #D5E1EC, radius 12px, bayangan sangat tipis --}}
        <div class="grid grid-cols-1 min-[440px]:grid-cols-2 lg:grid-cols-3 gap-6" id="portfolio-grid">
            @foreach($portfolios as $p)
            <div class="portfolio-card bg-white border border-[#D5E1EC] rounded-xl overflow-hidden shadow-xs hover:border-[#BACEDB] hover:shadow-md transition-all duration-200 flex flex-col justify-between"
                 data-category="{{ $p['category'] }}">
                
                {{-- Mockup Browser Sederhana di Thumbnail --}}
                <div class="border-b border-[#D5E1EC] bg-[#F7FAFC]">
                    <div class="px-3 py-2 border-b border-[#D5E1EC] flex items-center justify-between gap-2 select-none">
                        <div class="flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-[#E5484D]"></span>
                            <span class="w-2 h-2 rounded-full bg-[#F5A524]"></span>
                            <span class="w-2 h-2 rounded-full bg-[#30A46C]"></span>
                        </div>
                        <span class="text-[11px] font-mono text-[#64748B] truncate">
                            {{ !empty($p['live_url']) ? parse_url($p['live_url'], PHP_URL_HOST) : strtolower(str_replace([' ', '.', '&', '-'], '', $p['client'])) . '.co.id' }}
                        </span>
                        <div class="w-4"></div>
                    </div>
                    
                    {{-- Thumbnail Gambar Proyek --}}
                    <div class="relative aspect-[16/10] overflow-hidden bg-slate-100">
                        <img src="{{ asset($p['image']) }}" 
                             alt="{{ $p['title'] }}" 
                             loading="lazy"
                             class="w-full h-full object-cover object-top hover:scale-[1.02] transition-transform duration-300 cursor-pointer"
                             onclick="openWebsitePreview('{{ asset($p['image']) }}', '{{ addslashes($p['title']) }}', '{{ addslashes($p['client']) }}', '{{ addslashes($p['summary']) }}', '{{ $p['live_url'] ?? '' }}')">
                    </div>
                </div>

                {{-- Konten Kartu: Nama Klien, Jenis Proyek, Tombol Kunjungi Website --}}
                <div class="p-5 flex flex-col justify-between flex-grow">
                    <div>
                        <div class="flex items-center justify-between gap-2 mb-1.5">
                            <span class="text-xs font-semibold text-[#0870B8]">
                                {{ $p['category_label'] }}
                            </span>
                            @if(!empty($p['live_url']))
                            <span class="text-[11px] font-medium text-[#2E7D32] bg-[#E8F5E9] px-2 py-0.5 rounded border border-[#C8E6C9]">
                                Online
                            </span>
                            @endif
                        </div>

                        <h3 class="text-lg font-bold text-[#0B1B33] font-heading line-clamp-1" title="{{ $p['title'] }}">
                            {{ $p['client'] }}
                        </h3>

                        <p class="mt-2 text-sm text-[#475569] leading-[1.6] line-clamp-2">
                            {{ $p['summary'] }}
                        </p>
                    </div>

                    {{-- Tombol "Kunjungi website" (#0870B8) --}}
                    <div class="mt-5 pt-4 border-t border-[#F1F5F9] flex items-center justify-between gap-3">
                        @if(!empty($p['live_url']))
                        <a href="{{ $p['live_url'] }}" 
                           target="_blank" 
                           rel="noopener noreferrer" 
                           class="w-full py-2.5 px-4 rounded-lg text-sm font-semibold text-white bg-[#0870B8] hover:bg-[#065A96] text-center flex items-center justify-center gap-2 transition-colors duration-200">
                            <span>Kunjungi website</span>
                            <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i>
                        </a>
                        @else
                        <button type="button"
                                onclick="openWebsitePreview('{{ asset($p['image']) }}', '{{ addslashes($p['title']) }}', '{{ addslashes($p['client']) }}', '{{ addslashes($p['summary']) }}', '{{ $p['live_url'] ?? '' }}')"
                                class="w-full py-2.5 px-4 rounded-lg text-sm font-semibold text-[#475569] hover:text-[#0B1B33] bg-[#F1F5F9] hover:bg-[#E2E8F0] border border-[#D5E1EC] text-center flex items-center justify-center gap-2 transition-colors duration-200">
                            <span>Selesai dikerjakan</span>
                            <i class="fa-solid fa-expand text-xs text-[#0870B8]"></i>
                        </button>
                        @endif
                    </div>

                </div>

            </div>
            @endforeach
        </div>

    </div>
</section>

{{-- Modal Preview Sederhana --}}
<div id="website-preview-modal" class="fixed inset-0 z-50 hidden bg-[#020C20]/80 backdrop-blur-xs flex items-center justify-center p-3 sm:p-6">
    <div class="relative w-full max-w-4xl bg-white border border-[#D5E1EC] rounded-xl shadow-2xl overflow-hidden max-h-[90vh] flex flex-col text-[#0B1B33]">
        <div class="px-5 py-4 bg-white border-b border-[#D5E1EC] flex items-center justify-between gap-3">
            <div>
                <h4 id="preview-modal-title" class="text-base sm:text-lg font-bold text-[#0B1B33] font-heading truncate"></h4>
                <p id="preview-modal-client" class="text-xs text-[#0870B8] font-medium"></p>
            </div>
            <div class="flex items-center gap-2">
                <a id="preview-modal-link" href="#" target="_blank" rel="noopener noreferrer" class="hidden px-4 py-2 rounded-lg text-xs font-bold text-white bg-[#0870B8] hover:bg-[#065A96] items-center gap-1.5 transition-colors">
                    <span>Buka Website</span>
                    <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                </a>
                <button type="button" onclick="closeWebsitePreview()" class="w-8 h-8 rounded-lg bg-[#F7FAFC] hover:bg-[#EAF2F8] text-[#0B1B33] flex items-center justify-center transition-colors" aria-label="Tutup">
                    <i class="fa-solid fa-xmark text-base"></i>
                </button>
            </div>
        </div>
        <div class="flex-1 overflow-y-auto p-4 sm:p-6 bg-[#F7FAFC]">
            <p id="preview-modal-summary" class="text-sm text-[#475569] max-w-2xl mx-auto mb-4 leading-relaxed"></p>
            <div class="rounded-lg overflow-hidden border border-[#D5E1EC] bg-white max-w-2xl mx-auto">
                <img id="preview-modal-img" src="" alt="Screenshot Website" class="w-full h-auto block">
            </div>
        </div>
    </div>
</div>
