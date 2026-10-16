@extends('layouts.app')

@section('title', 'Portofolio Website Klien — Soutprint.In')
@section('meta_description', 'Koleksi website aktif yang sudah kami bangun untuk UMKM, institusi yayasan, dan perusahaan di Indonesia.')

@section('content')
    {{-- Header Portofolio: Background #020C20 solid tanpa gradien --}}
    <section class="py-14 md:py-20 bg-[#020C20] border-b border-[#06142E]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-2xl sm:text-4xl md:text-5xl font-bold text-[#E6EEF7] font-heading leading-tight max-w-4xl">
                Website yang sudah <span class="text-[#0BBEFF]">kami kerjakan.</span>
            </h1>
            <p class="mt-4 text-base sm:text-lg text-[#C2D3E5] max-w-3xl leading-[1.7]">
                Koleksi website aktif dari berbagai jenis bisnis—mulai dari company profile, yayasan, toko online, hingga aplikasi web properti. Seluruh kode sumber menjadi milik klien dan dioptimalkan untuk tampilan HP.
            </p>
        </div>
    </section>

    {{-- Grid Portofolio Klien --}}
    @include('components.portfolio', ['hideHeader' => true])

    {{-- Pre-Footer CTA Portofolio --}}
    <section class="py-14 sm:py-16 bg-[#06142E] border-t border-[#102244] text-center">
        <div class="max-w-4xl mx-auto px-4">
            <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-[#E6EEF7] font-heading">
                Tertarik membuat website dengan standar seperti di atas?
            </h2>
            <p class="text-base text-[#C2D3E5] mt-2">
                Cerita saja lewat WhatsApp, kami bantu hitung estimasi biaya dan waktu pengerjaannya.
            </p>
            <div class="mt-6 sm:mt-8 flex flex-col sm:flex-row justify-center gap-3 sm:gap-4 max-w-md mx-auto sm:max-w-none">
                <a href="https://wa.me/6281234567890?text=Halo%20Soutprint.In,%20saya%20tertarik%20dengan%20portofolio%20website%20Anda" 
                   target="_blank" 
                   rel="noopener noreferrer" 
                   class="px-6 py-3.5 rounded-lg font-bold text-sm text-[#020C20] bg-[#0BBEFF] hover:bg-[#38CBFF] flex items-center justify-center gap-2 transition-colors">
                    <i class="fa-brands fa-whatsapp text-lg"></i>
                    <span>Tanya via WhatsApp</span>
                </a>
            </div>
        </div>
    </section>
@endsection
