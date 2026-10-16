<section id="kalkulator" class="py-20 md:py-28 relative bg-[#FAFAFC] border-b border-slate-200 overflow-hidden">
    <!-- Modern Tech Background: Gradient Mesh + Ambient Glow + Grid tipis (Crystal Clear Financial Calculator) -->
    <div class="absolute inset-0 pointer-events-none select-none overflow-hidden z-0">
        <!-- 1. Gradient Mesh Layer (Emerald / Teal / Cyan Ambient Field) -->
        <div class="absolute inset-0 bg-mesh-calculator"></div>

        <!-- 2. Ambient Glow Spheres -->
        <div class="absolute top-10 left-1/4 w-[500px] h-[350px] bg-emerald-400/12 rounded-full blur-[110px]"></div>
        <div class="absolute top-1/3 -right-16 w-[450px] h-[350px] bg-teal-400/12 rounded-full blur-[120px]"></div>
        <div class="absolute bottom-10 left-1/3 w-[500px] h-[300px] bg-cyan-400/10 rounded-full blur-[100px]"></div>

        <!-- 3. Grid Tipis (Thin Subtle Geometric Grid with Radial Mask) -->
        <div class="absolute inset-0 bg-grid-emerald mask-radial-wide"></div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs font-bold mb-3">
                <i class="fa-solid fa-calculator text-emerald-600"></i>
                <span>Transparan & Fleksibel</span>
            </div>
            <h2 class="text-3xl sm:text-5xl font-extrabold text-slate-900 tracking-tight font-heading">
                Kalkulator <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-600 via-teal-600 to-cyan-600">Estimasi Biaya Website</span>
            </h2>
            <p class="mt-4 text-slate-600 text-sm sm:text-base leading-relaxed">
                Hitung perkiraan investasi pembuatan website Anda dalam hitungan detik secara transparan, lalu kirim rinciannya langsung ke tim konsultan Soutprint.In.
            </p>
        </div>

        <!-- Calculator Container -->
        <div class="mt-14 max-w-5xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            
            <!-- Left Side: Interactive Inputs (8 cols) -->
            <div class="lg:col-span-7 bg-white border border-slate-200 rounded-2xl sm:rounded-3xl p-4 sm:p-6 md:p-8 shadow-sm space-y-6 sm:space-y-8">
                
                <!-- 1. Tipe Website -->
                <div>
                    <label class="block text-sm font-bold text-slate-900 mb-3 flex items-center gap-2">
                        <span class="w-6 h-6 rounded-full bg-indigo-100 text-indigo-700 flex items-center justify-center text-xs font-mono font-bold">1</span>
                        <span>Pilih Jenis Website</span>
                    </label>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5 sm:gap-3" id="calc-type-group">
                        <label class="calc-type-option cursor-pointer p-3.5 sm:p-4 rounded-xl border border-indigo-600 bg-indigo-50/70 flex items-start gap-3 transition-all shadow-xs">
                            <input type="radio" name="calc_type" value="landing-page" data-price="1900000" data-label="High-Conversion Landing Page" checked class="mt-1 text-indigo-600 focus:ring-0">
                            <div>
                                <div class="text-sm font-bold text-slate-900">Landing Page</div>
                                <div class="text-xs text-slate-500 mt-0.5">Fokus iklan &amp; promosi produk/jasa</div>
                                <div class="text-xs font-bold text-indigo-700 mt-1">Rp 1.900.000</div>
                            </div>
                        </label>

                        <label class="calc-type-option cursor-pointer p-3.5 sm:p-4 rounded-xl border border-slate-200 bg-white hover:border-slate-300 flex items-start gap-3 transition-all">
                            <input type="radio" name="calc_type" value="company-profile" data-price="3500000" data-label="Company Profile Profesional" class="mt-1 text-indigo-600 focus:ring-0">
                            <div>
                                <div class="text-sm font-bold text-slate-900">Company Profile</div>
                                <div class="text-xs text-slate-500 mt-0.5">Citra korporat, profil &amp; portofolio</div>
                                <div class="text-xs font-bold text-indigo-700 mt-1">Rp 3.500.000</div>
                            </div>
                        </label>

                        <label class="calc-type-option cursor-pointer p-3.5 sm:p-4 rounded-xl border border-slate-200 bg-white hover:border-slate-300 flex items-start gap-3 transition-all">
                            <input type="radio" name="calc_type" value="ecommerce" data-price="5800000" data-label="Toko Online / E-Commerce" class="mt-1 text-indigo-600 focus:ring-0">
                            <div>
                                <div class="text-sm font-bold text-slate-900">Toko Online (E-Commerce)</div>
                                <div class="text-xs text-slate-500 mt-0.5">Katalog, checkout &amp; payment gateway</div>
                                <div class="text-xs font-bold text-indigo-700 mt-1">Rp 5.800.000</div>
                            </div>
                        </label>

                        <label class="calc-type-option cursor-pointer p-3.5 sm:p-4 rounded-xl border border-slate-200 bg-white hover:border-slate-300 flex items-start gap-3 transition-all">
                            <input type="radio" name="calc_type" value="web-app" data-price="9500000" data-label="Custom Web App / Portal SaaS" class="mt-1 text-indigo-600 focus:ring-0">
                            <div>
                                <div class="text-sm font-bold text-slate-900">Web App / Portal SaaS</div>
                                <div class="text-xs text-slate-500 mt-0.5">Sistem kustom, multi-user, dashboard</div>
                                <div class="text-xs font-bold text-indigo-700 mt-1">Rp 9.500.000</div>
                            </div>
                        </label>
                    </div>
                </div>

                <!-- 2. Jumlah Halaman -->
                <div>
                    <label class="block text-sm font-bold text-slate-900 mb-3 flex items-center gap-2">
                        <span class="w-6 h-6 rounded-full bg-cyan-100 text-cyan-700 flex items-center justify-center text-xs font-mono font-bold">2</span>
                        <span>Estimasi Jumlah Halaman / Menu</span>
                    </label>
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-2.5" id="calc-pages-group">
                        <label class="calc-page-option cursor-pointer p-3 rounded-xl border border-indigo-600 bg-indigo-50/70 text-center transition-all shadow-xs">
                            <input type="radio" name="calc_pages" value="1-5" data-price="0" data-label="1 - 5 Halaman" checked class="sr-only">
                            <div class="text-xs font-bold text-slate-900">1 - 5 Hlm</div>
                            <div class="text-[10px] text-slate-500 mt-0.5">Termasuk</div>
                        </label>

                        <label class="calc-page-option cursor-pointer p-3 rounded-xl border border-slate-200 bg-white hover:border-slate-300 text-center transition-all">
                            <input type="radio" name="calc_pages" value="6-10" data-price="800000" data-label="6 - 10 Halaman" class="sr-only">
                            <div class="text-xs font-bold text-slate-900">6 - 10 Hlm</div>
                            <div class="text-[10px] text-indigo-700 mt-0.5 font-bold">+Rp 800rb</div>
                        </label>

                        <label class="calc-page-option cursor-pointer p-3 rounded-xl border border-slate-200 bg-white hover:border-slate-300 text-center transition-all">
                            <input type="radio" name="calc_pages" value="11-20" data-price="1600000" data-label="11 - 20 Halaman" class="sr-only">
                            <div class="text-xs font-bold text-slate-900">11 - 20 Hlm</div>
                            <div class="text-[10px] text-indigo-700 mt-0.5 font-bold">+Rp 1.6jt</div>
                        </label>

                        <label class="calc-page-option cursor-pointer p-3 rounded-xl border border-slate-200 bg-white hover:border-slate-300 text-center transition-all">
                            <input type="radio" name="calc_pages" value="20+" data-price="3000000" data-label="> 20 Halaman / Skala Besar" class="sr-only">
                            <div class="text-xs font-bold text-slate-900">> 20 Hlm</div>
                            <div class="text-[10px] text-indigo-700 mt-0.5 font-bold">+Rp 3jt</div>
                        </label>
                    </div>
                </div>

                <!-- 3. Fitur Tambahan (Add-ons) -->
                <div>
                    <label class="block text-sm font-bold text-slate-900 mb-3 flex items-center gap-2">
                        <span class="w-6 h-6 rounded-full bg-purple-100 text-purple-700 flex items-center justify-center text-xs font-mono font-bold">3</span>
                        <span>Fitur & Modul Tambahan (Opsional)</span>
                    </label>
                    <div class="space-y-2.5" id="calc-addons-group">
                        <label class="cursor-pointer p-3.5 rounded-xl border border-slate-200 bg-white hover:border-slate-300 flex items-center justify-between gap-3 transition-all">
                            <div class="flex items-center gap-3">
                                <input type="checkbox" name="calc_addons" value="payment" data-price="1200000" data-label="Payment Gateway Otomatis (Midtrans/Xendit/QRIS)" class="calc-addon-check text-indigo-600 rounded focus:ring-0 w-4 h-4">
                                <div>
                                    <span class="text-xs sm:text-sm font-bold text-slate-900 block">Payment Gateway Indonesia</span>
                                    <span class="text-[11px] text-slate-500">QRIS, Virtual Account, Credit Card & E-Wallet</span>
                                </div>
                            </div>
                            <span class="text-xs font-bold text-indigo-700 whitespace-nowrap">+Rp 1.200.000</span>
                        </label>

                        <label class="cursor-pointer p-3.5 rounded-xl border border-slate-200 bg-white hover:border-slate-300 flex items-center justify-between gap-3 transition-all">
                            <div class="flex items-center gap-3">
                                <input type="checkbox" name="calc_addons" value="bilingual" data-price="900000" data-label="Dua Bahasa (Indonesia & English)" class="calc-addon-check text-indigo-600 rounded focus:ring-0 w-4 h-4">
                                <div>
                                    <span class="text-xs sm:text-sm font-bold text-slate-900 block">Sistem Multi-Bahasa (Bilingual ID/EN)</span>
                                    <span class="text-[11px] text-slate-500">Jangkau klien & mitra asing secara profesional</span>
                                </div>
                            </div>
                            <span class="text-xs font-bold text-indigo-700 whitespace-nowrap">+Rp 900.000</span>
                        </label>

                        <label class="cursor-pointer p-3.5 rounded-xl border border-slate-200 bg-white hover:border-slate-300 flex items-center justify-between gap-3 transition-all">
                            <div class="flex items-center gap-3">
                                <input type="checkbox" name="calc_addons" value="seo_pro" data-price="800000" data-label="Paket SEO On-Page Lengkap & Google Indexing" class="calc-addon-check text-indigo-600 rounded focus:ring-0 w-4 h-4">
                                <div>
                                    <span class="text-xs sm:text-sm font-bold text-slate-900 block">Paket Optimasi SEO On-Page Pro</span>
                                    <span class="text-[11px] text-slate-500">Riset kata kunci, schema markup, dan Google Search Console</span>
                                </div>
                            </div>
                            <span class="text-xs font-bold text-indigo-700 whitespace-nowrap">+Rp 800.000</span>
                        </label>

                        <label class="cursor-pointer p-3.5 rounded-xl border border-slate-200 bg-white hover:border-slate-300 flex items-center justify-between gap-3 transition-all">
                            <div class="flex items-center gap-3">
                                <input type="checkbox" name="calc_addons" value="whatsapp_bot" data-price="600000" data-label="Integrasi WhatsApp Chatbot & Lead Logger" class="calc-addon-check text-indigo-600 rounded focus:ring-0 w-4 h-4">
                                <div>
                                    <span class="text-xs sm:text-sm font-bold text-slate-900 block">Integrasi WhatsApp Lead Automation</span>
                                    <span class="text-[11px] text-slate-500">Form langsung kirim draft pesan otomatis ke WhatsApp tim sales</span>
                                </div>
                            </div>
                            <span class="text-xs font-bold text-indigo-700 whitespace-nowrap">+Rp 600.000</span>
                        </label>

                        <label class="cursor-pointer p-3.5 rounded-xl border border-slate-200 bg-white hover:border-slate-300 flex items-center justify-between gap-3 transition-all">
                            <div class="flex items-center gap-3">
                                <input type="checkbox" name="calc_addons" value="security_cdn" data-price="750000" data-label="Cloudflare Enterprise CDN & Anti-DDoS Security" class="calc-addon-check text-indigo-600 rounded focus:ring-0 w-4 h-4">
                                <div>
                                    <span class="text-xs sm:text-sm font-bold text-slate-900 block">Keamanan Cloudflare CDN & Anti-DDoS</span>
                                    <span class="text-[11px] text-slate-500">Percepat load global dan lindungi server dari serangan siber</span>
                                </div>
                            </div>
                            <span class="text-xs font-bold text-indigo-700 whitespace-nowrap">+Rp 750.000</span>
                        </label>
                    </div>
                </div>

            </div>

            <!-- Right Side: Live Price Summary & Order Card (5 cols) -->
            <div class="lg:col-span-5 lg:sticky lg:top-28 space-y-6">
                <div class="rounded-2xl sm:rounded-3xl bg-white border border-slate-200 p-5 sm:p-6 md:p-8 shadow-md relative overflow-hidden">
                    
                    <!-- Decorative Soft Glow -->
                    <div class="absolute -top-16 -right-16 w-36 h-36 bg-emerald-100/60 rounded-full blur-2xl"></div>

                    <!-- Header -->
                    <div class="flex items-center justify-between pb-4 border-b border-slate-100">
                        <span class="text-xs uppercase font-bold tracking-wider text-slate-500">Ringkasan Estimasi Biaya</span>
                        <span class="px-2 py-0.5 rounded bg-emerald-100 text-emerald-800 text-[10px] font-bold border border-emerald-200">
                            Estimasi Instan
                        </span>
                    </div>

                    <!-- Price Display -->
                    <div class="py-5 sm:py-6 text-center">
                        <span class="text-xs text-slate-500 font-semibold block mb-1">Total Estimasi Investasi</span>
                        <div id="calc-total-display" class="text-3xl min-[400px]:text-4xl sm:text-5xl font-black font-heading tracking-tight text-transparent bg-clip-text bg-gradient-to-r from-emerald-600 via-teal-600 to-indigo-600">
                            Rp 1.900.000
                        </div>
                        <p class="text-[11px] text-slate-500 mt-2">
                            *Termasuk Gratis Domain .com/.id 1 Tahun, Cloud SSD Hosting &amp; SSL Certificate
                        </p>
                    </div>

                    <!-- Selected Breakdown Details -->
                    <div class="space-y-3 py-4 border-t border-slate-100 text-xs">
                        <div class="flex justify-between text-slate-700">
                            <span class="text-slate-500">Tipe Website:</span>
                            <span id="calc-summary-type" class="font-bold text-slate-900 text-right">Landing Page</span>
                        </div>
                        <div class="flex justify-between text-slate-700">
                            <span class="text-slate-500">Skala Halaman:</span>
                            <span id="calc-summary-pages" class="font-bold text-slate-900 text-right">1 - 5 Halaman</span>
                        </div>
                        <div class="flex justify-between text-slate-700">
                            <span class="text-slate-500">Modul Tambahan:</span>
                            <span id="calc-summary-addons-count" class="font-bold text-slate-900 text-right">0 Terpilih</span>
                        </div>
                        <div class="flex justify-between text-slate-700">
                            <span class="text-slate-500">Waktu Pengerjaan:</span>
                            <span id="calc-summary-duration" class="font-bold text-indigo-600 text-right">~3 - 5 Hari Kerja</span>
                        </div>
                    </div>

                    <!-- Direct Send To WhatsApp CTA -->
                    <div class="pt-5 border-t border-slate-100 space-y-3">
                        <a id="calc-whatsapp-btn" 
                           href="#" 
                           target="_blank" 
                           rel="noopener noreferrer" 
                           class="w-full py-3.5 sm:py-4 rounded-xl font-bold text-xs sm:text-sm text-white bg-gradient-to-r from-emerald-500 to-green-500 hover:from-emerald-400 hover:to-green-400 shadow-md shadow-emerald-500/25 transition-all flex items-center justify-center gap-2 group/btn">
                            <i class="fa-brands fa-whatsapp text-lg group-hover/btn:scale-110 transition-transform"></i>
                            <span>Kirim Rincian ke WhatsApp Kami</span>
                        </a>

                        <button type="button" 
                                onclick="openContactModal('Kalkulator Website: ' + document.getElementById('calc-summary-type').textContent)" 
                                class="w-full py-3 rounded-xl font-bold text-xs text-slate-700 hover:text-slate-900 bg-slate-100 hover:bg-slate-200 border border-slate-200 transition-all flex items-center justify-center gap-2">
                            <i class="fa-solid fa-envelope text-indigo-600"></i>
                            <span>Kirim Penawaran via Email / Form</span>
                        </button>
                    </div>

                    <!-- Guarantee Note -->
                    <div class="mt-4 pt-3 flex items-center justify-center gap-2 text-[11px] text-slate-500 font-medium">
                        <i class="fa-solid fa-shield-halved text-emerald-500"></i>
                        <span>Garansi Bebas Bug &amp; Maintenance Gratis 60 Hari</span>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>
