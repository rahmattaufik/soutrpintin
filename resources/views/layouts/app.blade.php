<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Soutprint.In — Website yang Bikin Calon Pelanggan Langsung Chat Anda')</title>
    <meta name="description" content="@yield('meta_description', 'Soutprint.In membangun company profile, toko online, dan aplikasi web untuk UMKM dan perusahaan di Indonesia. Pembayaran QRIS terpasang, tampil cepat di HP, dan kode sumber 100% milik Anda.')">
    <meta name="keywords" content="jasa pembuatan website, company profile, toko online, aplikasi web, website UMKM, Soutprint.In, web developer indonesia">
    
    <!-- Open Graph / Meta Sosial -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'Soutprint.In — Jasa Pembuatan Website Profesional')">
    <meta property="og:description" content="@yield('meta_description', 'Kami bangun company profile, toko online, dan aplikasi web untuk UMKM dan perusahaan di Indonesia.')">
    <meta property="og:image" content="{{ asset('images/logosoutprint.jpeg') }}">
    
    <!-- Favicon: Sederhana tajam SVG huruf S -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="alternate icon" type="image/jpeg" href="{{ asset('images/logosoutprint.jpeg') }}">

    <!-- Google Fonts: Plus Jakarta Sans (Heading) & Inter (Body Text) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet">
    
    <!-- FontAwesome 6 Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>
<body class="bg-[#020C20] text-[#E6EEF7] font-sans antialiased overflow-x-hidden min-h-screen flex flex-col selection:bg-[#0BBEFF] selection:text-[#020C20]">

    {{-- Navigation Header --}}
    @include('components.navbar')

    {{-- Main Content Sections --}}
    <main class="flex-grow">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('components.footer')

    {{-- Interactive Contact & Consultation Modal --}}
    @include('components.contact-modal')

    {{-- Floating WhatsApp Action Button --}}
    <div class="fixed bottom-4 right-4 sm:bottom-6 sm:right-6 z-40 flex flex-col items-end gap-2.5 select-none">
        <!-- Floating Back to Top Button -->
        <button id="back-to-top-btn"
                type="button"
                onclick="window.scrollTo({top: 0, behavior: 'smooth'})"
                aria-label="Kembali ke atas"
                title="Kembali ke atas"
                class="w-10 h-10 sm:w-11 sm:h-11 rounded-xl bg-[#06142E] hover:bg-[#0870B8] text-[#E6EEF7] border border-[#1B2B47] shadow-md flex items-center justify-center opacity-0 pointer-events-none transition-all duration-200">
            <i class="fa-solid fa-arrow-up text-xs sm:text-sm"></i>
        </button>

        <!-- Floating WhatsApp Button (Tanpa animasi lebay) -->
        <a href="https://wa.me/6281234567890?text=Halo%20Soutprint.In,%20saya%20ingin%20tanya%20pembuatan%20website" 
           target="_blank" 
           rel="noopener noreferrer" 
           aria-label="Tanya via WhatsApp" 
           title="Tanya via WhatsApp"
           class="flex items-center justify-center w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-[#0870B8] hover:bg-[#0BBEFF] text-white hover:text-[#020C20] shadow-lg border border-[#0BBEFF]/40 transition-all duration-200">
            <i class="fa-brands fa-whatsapp text-2xl"></i>
        </a>
    </div>

    <!-- Toast Notification Container -->
    <div id="toast-container" class="fixed top-20 right-4 sm:right-6 z-50 flex flex-col gap-3 pointer-events-none max-w-[calc(100vw-2rem)] sm:max-w-md"></div>

    @stack('scripts')
</body>
</html>
