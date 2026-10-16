<section id="mockup-studio" class="py-20 md:py-28 relative overflow-hidden bg-white border-y border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-cyan-50 border border-cyan-200 text-cyan-800 text-xs font-bold mb-4">
                <i class="fa-solid fa-laptop-code text-cyan-600"></i>
                <span>Fitur Unggulan Soutprint.In</span>
            </div>
            <h2 class="text-3xl sm:text-5xl font-extrabold text-slate-900 tracking-tight font-heading">
                Interactive <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 via-purple-600 to-cyan-600">Device Mockup Studio</span>
            </h2>
            <p class="mt-4 text-slate-600 text-sm sm:text-base leading-relaxed">
                Jelajahi mockup website karya Soutprint.In secara interaktif. Uji responsivitas desain pada frame <strong>MacBook (Desktop)</strong>, <strong>iPad (Tablet)</strong>, hingga <strong>iPhone (Mobile)</strong> secara langsung!
            </p>
        </div>

        <!-- Controls: Project Selector & Device Frame Switcher -->
        <div class="mt-8 sm:mt-12 flex flex-col lg:flex-row items-center justify-between gap-4 sm:gap-6 p-3 sm:p-4 rounded-2xl bg-slate-100/90 border border-slate-200/90 shadow-xs">
            
            <!-- Project Tabs -->
            <div class="flex items-center gap-2 overflow-x-auto w-full lg:w-auto pb-2 lg:pb-0 scrollbar-none touch-scroll -mx-3 px-3 sm:mx-0 sm:px-0" id="mockup-project-tabs">
                @foreach($mockups as $idx => $m)
                <button type="button" 
                        data-mockup-key="{{ $m['key'] }}"
                        class="mockup-tab-btn px-3.5 sm:px-4 py-2 sm:py-2.5 rounded-xl text-xs sm:text-sm font-bold whitespace-nowrap transition-all duration-200 flex items-center gap-2 {{ $idx === 0 ? 'bg-indigo-600 text-white shadow-md shadow-indigo-600/30' : 'bg-white text-slate-700 hover:bg-slate-50 hover:text-slate-900 border border-slate-200 shadow-xs' }}">
                    <span class="w-2 h-2 rounded-full" style="background-color: {{ $m['color'] }};"></span>
                    <span>{{ $m['name'] }}</span>
                </button>
                @endforeach
            </div>

            <!-- Device Switcher Buttons -->
            <div class="flex items-center gap-1.5 sm:gap-2 bg-slate-200/80 p-1 sm:p-1.5 rounded-xl border border-slate-300 self-center lg:self-auto max-w-full">
                <button type="button" id="device-btn-desktop" data-device="desktop" class="device-switch-btn active-device px-2.5 sm:px-3.5 py-1.5 sm:py-2 rounded-lg text-xs font-bold flex items-center gap-1.5 sm:gap-2 bg-indigo-600 text-white shadow transition-all">
                    <i class="fa-solid fa-laptop text-xs sm:text-sm"></i>
                    <span class="hidden sm:inline">Desktop (MacBook)</span>
                    <span class="sm:hidden">Desktop</span>
                </button>
                <button type="button" id="device-btn-tablet" data-device="tablet" class="device-switch-btn px-2.5 sm:px-3.5 py-1.5 sm:py-2 rounded-lg text-xs font-bold flex items-center gap-1.5 sm:gap-2 text-slate-600 hover:text-slate-900 transition-all">
                    <i class="fa-solid fa-tablet-screen-button text-xs sm:text-sm"></i>
                    <span class="hidden sm:inline">Tablet (iPad)</span>
                    <span class="sm:hidden">Tablet</span>
                </button>
                <button type="button" id="device-btn-mobile" data-device="mobile" class="device-switch-btn px-2.5 sm:px-3.5 py-1.5 sm:py-2 rounded-lg text-xs font-bold flex items-center gap-1.5 sm:gap-2 text-slate-600 hover:text-slate-900 transition-all">
                    <i class="fa-solid fa-mobile-screen-button text-xs sm:text-sm"></i>
                    <span class="hidden sm:inline">Mobile (iPhone)</span>
                    <span class="sm:hidden">Mobile</span>
                </button>
            </div>
        </div>

        <!-- Main Interactive Mockup Stage Area -->
        <div class="mt-8 sm:mt-10 relative flex flex-col items-center justify-center min-h-[440px] sm:min-h-[550px] md:min-h-[650px] p-3 sm:p-6 lg:p-8 rounded-2xl sm:rounded-3xl bg-slate-50 border border-slate-200 shadow-xl overflow-hidden">
            
            <!-- Ambient Stage Lighting -->
            <div id="mockup-glow-effect" class="absolute inset-0 bg-gradient-to-tr from-indigo-100/50 via-cyan-100/40 to-transparent pointer-events-none transition-all duration-500"></div>

            <!-- Active Project Meta Bar -->
            <div class="w-full max-w-4xl flex items-center justify-between text-xs text-slate-600 mb-6 px-2">
                <div class="flex items-center gap-2 flex-wrap">
                    <span id="active-mockup-cat" class="px-2.5 py-1 rounded-md bg-indigo-100 text-indigo-800 font-bold border border-indigo-200">
                        Fintech SaaS Platform
                    </span>
                    <span id="active-mockup-client" class="text-slate-700 font-semibold">
                        Klien: NexusPay Financial Ecosystem
                    </span>
                </div>
                <div id="active-mockup-stats" class="hidden sm:flex items-center gap-3 text-slate-500 font-medium">
                    <span class="flex items-center gap-1 text-emerald-600 font-bold"><i class="fa-solid fa-check text-[10px]"></i> Uptime 99.99%</span>
                    <span>•</span>
                    <span class="flex items-center gap-1 text-cyan-600 font-bold"><i class="fa-solid fa-bolt text-[10px]"></i> Latency 0.8s</span>
                </div>
            </div>

            <!-- ===================== DEVICE 1: DESKTOP (MacBook Frame) ===================== -->
            <div id="mockup-frame-desktop" class="device-frame w-full max-w-4xl transition-all duration-300">
                <div class="relative bg-slate-900 rounded-t-2xl border-t border-x border-slate-700 shadow-2xl pt-2 px-2 sm:pt-3 sm:px-3">
                    <!-- Screen Notch / Camera -->
                    <div class="absolute top-2 left-1/2 -translate-x-1/2 w-4 h-4 rounded-full bg-slate-950 border border-slate-800 flex items-center justify-center">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                    </div>

                    <!-- Screen Outer Bezel -->
                    <div class="relative rounded-t-xl overflow-hidden bg-slate-950 border border-slate-800 shadow-inner">
                        <!-- Browser Bar -->
                        <div class="h-9 bg-slate-900 px-3 flex items-center justify-between border-b border-slate-800 text-xs">
                            <div class="flex items-center gap-1.5">
                                <span class="w-2.5 h-2.5 rounded-full bg-rose-500"></span>
                                <span class="w-2.5 h-2.5 rounded-full bg-amber-500"></span>
                                <span class="w-2.5 h-2.5 rounded-full bg-emerald-500"></span>
                            </div>
                            <div id="mockup-url-bar" class="w-3/5 max-w-md py-1 px-3 rounded-md bg-slate-950 text-slate-300 text-[11px] font-mono flex items-center justify-center gap-2 border border-slate-800">
                                <i class="fa-solid fa-lock text-[9px] text-emerald-400"></i>
                                <span id="mockup-current-url">https://nexuspay.client.soutprint.in</span>
                            </div>
                            <div class="text-slate-400 text-[10px] hidden sm:block">
                                <i class="fa-solid fa-rotate-right hover:text-white cursor-pointer mr-2"></i>
                                <i class="fa-solid fa-share-nodes hover:text-white cursor-pointer"></i>
                            </div>
                        </div>

                        <!-- Inner Screen Content (Scrollable Dynamic View) -->
                        <div id="mockup-screen-desktop" class="h-[360px] sm:h-[420px] overflow-y-auto p-4 sm:p-6 bg-[#0B1120] text-slate-100 scrollbar-thin scrollbar-thumb-slate-700">
                            <!-- Dynamic Content Injected by JS -->
                        </div>
                    </div>
                </div>

                <!-- MacBook Bottom Chassis Base -->
                <div class="relative h-4 sm:h-5 bg-gradient-to-b from-slate-600 via-slate-700 to-slate-800 rounded-b-xl sm:rounded-b-2xl border-t border-slate-500 shadow-xl flex items-center justify-center">
                    <div class="w-16 sm:w-24 h-1 sm:h-1.5 bg-slate-900 rounded-b-md"></div>
                </div>
            </div>

            <!-- ===================== DEVICE 2: TABLET (iPad Frame) ===================== -->
            <div id="mockup-frame-tablet" class="device-frame hidden w-full max-w-xl transition-all duration-300">
                <div class="relative p-4 rounded-3xl bg-slate-900 border-4 border-slate-700 shadow-2xl">
                    <!-- Tablet Camera -->
                    <div class="absolute top-2 left-1/2 -translate-x-1/2 w-2 h-2 rounded-full bg-slate-950 border border-slate-700"></div>

                    <!-- Inner Screen -->
                    <div class="rounded-2xl overflow-hidden bg-slate-950 border border-slate-800 shadow-inner">
                        <!-- Mini Tablet Header -->
                        <div class="h-8 bg-slate-900 px-3 flex items-center justify-between text-[11px] text-slate-400 border-b border-slate-800">
                            <span class="font-semibold text-slate-300">9:41 AM • iPadOS</span>
                            <div class="flex items-center gap-1.5 text-xs text-slate-400">
                                <i class="fa-solid fa-wifi text-[10px]"></i>
                                <i class="fa-solid fa-battery-full text-[11px]"></i>
                            </div>
                        </div>

                        <!-- Screen Content -->
                        <div id="mockup-screen-tablet" class="h-[460px] overflow-y-auto p-4 bg-[#0B1120] text-slate-100 scrollbar-thin scrollbar-thumb-slate-700">
                            <!-- Dynamic Content Injected by JS -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- ===================== DEVICE 3: MOBILE (iPhone 16 Pro Frame) ===================== -->
            <div id="mockup-frame-mobile" class="device-frame hidden w-full max-w-[290px] min-[380px]:max-w-[320px] sm:max-w-[350px] transition-all duration-300">
                <div class="relative p-3 sm:p-3.5 rounded-[36px] sm:rounded-[42px] bg-slate-900 border-4 border-slate-700 shadow-2xl">
                    <!-- Dynamic Island -->
                    <div class="absolute top-4 sm:top-5 left-1/2 -translate-x-1/2 w-24 sm:w-28 h-5 sm:h-6 rounded-full bg-black flex items-center justify-between px-3 z-30 shadow-md">
                        <span class="w-2 sm:w-2.5 h-2 sm:h-2.5 rounded-full bg-slate-900 border border-slate-800"></span>
                    </div>

                    <!-- Inner Screen -->
                    <div class="rounded-[28px] sm:rounded-[32px] overflow-hidden bg-slate-950 border border-slate-800 shadow-inner pt-6 sm:pt-7">
                        <!-- Mobile Status Bar -->
                        <div class="px-4 sm:px-5 pb-2 flex items-center justify-between text-[10px] text-slate-400">
                            <span class="font-bold text-slate-200">09:41</span>
                            <div class="flex items-center gap-1.5">
                                <i class="fa-solid fa-signal text-[9px]"></i>
                                <i class="fa-solid fa-wifi text-[9px]"></i>
                                <i class="fa-solid fa-battery-full text-[10px]"></i>
                            </div>
                        </div>

                        <!-- Screen Content -->
                        <div id="mockup-screen-mobile" class="h-[400px] sm:h-[480px] overflow-y-auto p-3 sm:p-3.5 bg-[#0B1120] text-slate-100 scrollbar-thin scrollbar-thumb-slate-700">
                            <!-- Dynamic Content Injected by JS -->
                        </div>
                    </div>

                    <!-- Bottom Indicator Bar -->
                    <div class="w-28 sm:w-32 h-1 bg-slate-700 rounded-full mx-auto mt-2"></div>
                </div>
            </div>

            <!-- Bottom Action CTA for Mockup -->
            <div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-4 z-20">
                <button type="button" id="mockup-order-cta" onclick="openContactModal('Order dari Mockup')" class="px-6 py-3 rounded-xl text-sm font-bold text-white bg-gradient-to-r from-indigo-600 to-cyan-600 hover:from-indigo-500 hover:to-cyan-500 shadow-md shadow-indigo-600/30 transition-all flex items-center gap-2">
                    <i class="fa-brands fa-whatsapp text-base text-white"></i>
                    <span>Pesan Website Serupa Sekarang</span>
                </button>
                <a href="#showcase" class="px-5 py-3 rounded-xl text-sm font-bold text-slate-700 hover:text-slate-900 bg-white hover:bg-slate-50 border border-slate-200 shadow-xs transition-all">
                    Lihat Portofolio Lengkap
                </a>
            </div>

        </div>

    </div>
</section>
