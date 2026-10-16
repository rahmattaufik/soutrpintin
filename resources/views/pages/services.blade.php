@extends('layouts.app')

@section('title', 'Pilihan Paket & Harga Website — Soutprint.In')
@section('meta_description', 'Katalog harga transparan pembuatan website Soutprint.In: Landing Page, Company Profile, Toko Online, Aplikasi Web Kustom, Redesign, dan Perawatan Bulanan.')

@section('content')
    {{-- Header Layanan: Background #020C20 solid --}}
    <section class="py-14 md:py-20 bg-[#020C20] border-b border-[#06142E]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-2xl sm:text-4xl md:text-5xl font-bold text-[#E6EEF7] font-heading leading-tight max-w-4xl">
                Harga yang jelas <span class="text-[#0BBEFF]">sebelum Anda mulai.</span>
            </h1>
            <p class="mt-4 text-base sm:text-lg text-[#C2D3E5] max-w-3xl leading-[1.7]">
                Pilihan paket standar untuk UMKM dan perusahaan di Indonesia. Anda tahu angkanya di awal, pembayaran bertahap, dan kode sumber 100% milik Anda.
            </p>
        </div>
    </section>

    {{-- Grid 6 Kartu Harga --}}
    @include('components.services', ['hideHeader' => true])

    {{-- Standar yang Sudah Termasuk di Setiap Paket --}}
    <section class="py-14 sm:py-16 bg-[#F7FAFC] border-b border-[#D5E1EC]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mb-10">
                <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-[#0B1B33] font-heading">
                    Setiap paket sudah mencakup:
                </h2>
                <p class="text-sm text-[#475569] mt-2">
                    Standar dasar tanpa biaya tambahan untuk seluruh klien Soutprint.In.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="p-6 rounded-xl bg-white border border-[#D5E1EC] shadow-xs">
                    <span class="text-2xl font-bold text-[#0870B8] font-heading block mb-2">01</span>
                    <h3 class="text-base font-bold text-[#0B1B33]">Domain 1 Tahun</h3>
                    <p class="text-sm text-[#475569] mt-2 leading-[1.6]">Pilihan domain (.com atau .id) resmi didaftarkan atas nama bisnis Anda.</p>
                </div>

                <div class="p-6 rounded-xl bg-white border border-[#D5E1EC] shadow-xs">
                    <span class="text-2xl font-bold text-[#0870B8] font-heading block mb-2">02</span>
                    <h3 class="text-base font-bold text-[#0B1B33]">Hosting Cepat</h3>
                    <p class="text-sm text-[#475569] mt-2 leading-[1.6]">Server stabil dengan kapasitas cukup dan performa cepat saat dibuka di HP.</p>
                </div>

                <div class="p-6 rounded-xl bg-white border border-[#D5E1EC] shadow-xs">
                    <span class="text-2xl font-bold text-[#0870B8] font-heading block mb-2">03</span>
                    <h3 class="text-base font-bold text-[#0B1B33]">Keamanan SSL (HTTPS)</h3>
                    <p class="text-sm text-[#475569] mt-2 leading-[1.6]">Sertifikat keamanan aktif agar website aman dari peringatan berbahaya di browser.</p>
                </div>

                <div class="p-6 rounded-xl bg-white border border-[#D5E1EC] shadow-xs">
                    <span class="text-2xl font-bold text-[#0870B8] font-heading block mb-2">04</span>
                    <h3 class="text-base font-bold text-[#0B1B33]">Garansi 60 Hari</h3>
                    <p class="text-sm text-[#475569] mt-2 leading-[1.6]">Bantuan perbaikan jika ada error atau kendala teknis setelah website diserahterimakan.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Consultation Pre-Footer --}}
    <section class="py-14 sm:py-16 bg-[#06142E] text-center">
        <div class="max-w-4xl mx-auto px-4">
            <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-[#E6EEF7] font-heading">
                Belum yakin paket mana yang paling cocok?
            </h2>
            <p class="text-base text-[#C2D3E5] mt-2">
                Cerita saja lewat WhatsApp, kami bantu pilihkan solusi yang paling efisien untuk kebutuhan Anda.
            </p>
            <div class="mt-6 sm:mt-8 flex justify-center">
                <a href="https://wa.me/6281234567890?text=Halo%20Soutprint.In,%20saya%20ingin%20tanya-tanya%20paket%20pembuatan%20website" 
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
