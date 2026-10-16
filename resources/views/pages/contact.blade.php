@extends('layouts.app')

@section('title', 'Hubungi Kami — Soutprint.In')
@section('meta_description', 'Hubungi tim Soutprint.In untuk konsultasi gratis mengenai pembuatan website, kebutuhan teknis, dan estimasi biaya.')

@section('content')
    {{-- Header Kontak: Background #020C20 solid --}}
    <section class="py-14 md:py-20 bg-[#020C20] border-b border-[#06142E]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-2xl sm:text-4xl md:text-5xl font-bold text-[#E6EEF7] font-heading leading-tight max-w-4xl">
                Hubungi <span class="text-[#0BBEFF]">Soutprint.In.</span>
            </h1>
            <p class="mt-4 text-base sm:text-lg text-[#C2D3E5] max-w-3xl leading-[1.7]">
                Ceritakan kebutuhan website Anda. Kami siap merespons cepat untuk membahas rencana kerja, fitur yang dibutuhkan, dan perkiraan biaya yang transparan.
            </p>
        </div>
    </section>

    {{-- Main Contact Section: Background #F7FAFC (Terang) --}}
    <section class="py-14 md:py-20 bg-[#F7FAFC]">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
                
                {{-- Detail Kontak (5 Kolom) --}}
                <div class="lg:col-span-5 space-y-6">
                    <div>
                        <h2 class="text-xl sm:text-2xl font-bold text-[#0B1B33] font-heading">
                            Kami Siap Membantu Anda
                        </h2>
                        <p class="text-sm text-[#475569] mt-2 leading-[1.7]">
                            Silakan hubungi kami untuk bertanya seputar biaya, fitur kustom, atau berdiskusi mengenai proyek web yang ingin Anda mulai.
                        </p>
                    </div>

                    <div class="space-y-4">
                        {{-- WhatsApp --}}
                        <div class="p-5 rounded-xl bg-white border border-[#D5E1EC] shadow-xs flex items-start gap-4">
                            <div class="w-10 h-10 rounded-lg bg-[#EAF2F8] text-[#0870B8] flex items-center justify-center text-lg shrink-0">
                                <i class="fa-brands fa-whatsapp"></i>
                            </div>
                            <div>
                                <span class="text-xs font-semibold text-[#64748B] block">WhatsApp</span>
                                <a href="https://wa.me/6281234567890" target="_blank" rel="noopener noreferrer" class="text-base font-bold text-[#0B1B33] hover:text-[#0870B8] transition-colors">
                                    +62 812-3456-7890
                                </a>
                                <p class="text-xs text-[#64748B] mt-0.5">Respon cepat setiap hari kerja</p>
                            </div>
                        </div>

                        {{-- Email --}}
                        <div class="p-5 rounded-xl bg-white border border-[#D5E1EC] shadow-xs flex items-start gap-4">
                            <div class="w-10 h-10 rounded-lg bg-[#EAF2F8] text-[#0870B8] flex items-center justify-center text-lg shrink-0">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div>
                                <span class="text-xs font-semibold text-[#64748B] block">Email</span>
                                <a href="mailto:halo@soutprint.in" class="text-base font-bold text-[#0B1B33] hover:text-[#0870B8] transition-colors">
                                    halo@soutprint.in
                                </a>
                                <p class="text-xs text-[#64748B] mt-0.5">Untuk penawaran tertulis &amp; kerja sama</p>
                            </div>
                        </div>

                        {{-- Lokasi & Jam Kerja --}}
                        <div class="p-5 rounded-xl bg-white border border-[#D5E1EC] shadow-xs flex items-start gap-4">
                            <div class="w-10 h-10 rounded-lg bg-[#EAF2F8] text-[#0870B8] flex items-center justify-center text-lg shrink-0">
                                <i class="fa-solid fa-clock"></i>
                            </div>
                            <div>
                                <span class="text-xs font-semibold text-[#64748B] block">Jam Kerja</span>
                                <span class="text-sm font-bold text-[#0B1B33]">Senin - Sabtu: 08:30 - 20:00 WIB</span>
                                <p class="text-xs text-[#64748B] mt-0.5">Melayani klien dari seluruh Indonesia</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Formulir Kontak (7 Kolom) --}}
                <div class="lg:col-span-7 bg-white border border-[#D5E1EC] rounded-xl p-6 sm:p-8 shadow-xs">
                    <h3 class="text-xl font-bold text-[#0B1B33] font-heading mb-1">
                        Kirim Pesan Kebutuhan Proyek
                    </h3>
                    <p class="text-sm text-[#475569] mb-6">
                        Isi data berikut, kami akan segera menghubungi Anda kembali via WhatsApp.
                    </p>

                    <form id="contact-form" action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
                        @csrf
                        <input type="hidden" name="source" id="modal-source" value="Halaman Kontak">

                        <div>
                            <label class="block text-xs font-bold text-[#0B1B33] mb-1.5">Nama Lengkap / Nama Bisnis *</label>
                            <input type="text" name="name" id="modal-name" required placeholder="Contoh: Budi Santoso / CV Maju Bersama" class="w-full px-3.5 py-2.5 rounded-lg bg-[#F7FAFC] border border-[#D5E1EC] focus:bg-white focus:border-[#0870B8] text-sm text-[#0B1B33] placeholder-[#94A3B8] outline-none transition-colors">
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4">
                            <div>
                                <label class="block text-xs font-bold text-[#0B1B33] mb-1.5">Nomor WhatsApp Aktif *</label>
                                <input type="tel" name="phone" id="modal-phone" required placeholder="Contoh: 081234567890" class="w-full px-3.5 py-2.5 rounded-lg bg-[#F7FAFC] border border-[#D5E1EC] focus:bg-white focus:border-[#0870B8] text-sm text-[#0B1B33] placeholder-[#94A3B8] outline-none transition-colors">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-[#0B1B33] mb-1.5">Email *</label>
                                <input type="email" name="email" id="modal-email" required placeholder="nama@email.com" class="w-full px-3.5 py-2.5 rounded-lg bg-[#F7FAFC] border border-[#D5E1EC] focus:bg-white focus:border-[#0870B8] text-sm text-[#0B1B33] placeholder-[#94A3B8] outline-none transition-colors">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4">
                            <div>
                                <label class="block text-xs font-bold text-[#0B1B33] mb-1.5">Pilihan Paket</label>
                                <select name="service" id="modal-service" class="w-full px-3.5 py-2.5 rounded-lg bg-[#F7FAFC] border border-[#D5E1EC] focus:bg-white focus:border-[#0870B8] text-sm text-[#0B1B33] outline-none transition-colors">
                                    <option value="Landing Page">Landing Page (Rp 2jt)</option>
                                    <option value="Company Profile">Company Profile (Rp 3.5jt)</option>
                                    <option value="Toko Online">Toko Online (Rp 6jt)</option>
                                    <option value="Aplikasi Web Kustom">Aplikasi Web Kustom (Rp 9.5jt)</option>
                                    <option value="Redesign Website">Redesign Website (Rp 2.8jt)</option>
                                    <option value="Perawatan Bulanan">Perawatan Bulanan (Rp 350rb/bln)</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-[#0B1B33] mb-1.5">Perkiraan Anggaran</label>
                                <select name="budget" id="modal-budget" class="w-full px-3.5 py-2.5 rounded-lg bg-[#F7FAFC] border border-[#D5E1EC] focus:bg-white focus:border-[#0870B8] text-sm text-[#0B1B33] outline-none transition-colors">
                                    <option value="Sesuai Harga Paket">Sesuai Harga Paket</option>
                                    <option value="Rp 2.000.000 - Rp 5.000.000">Rp 2jt - Rp 5jt</option>
                                    <option value="Rp 5.000.000 - Rp 10.000.000">Rp 5jt - Rp 10jt</option>
                                    <option value="> Rp 10.000.000">&gt; Rp 10jt</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-[#0B1B33] mb-1.5">Kebutuhan Proyek / Fitur yang Diinginkan *</label>
                            <textarea name="message" id="modal-message" rows="4" required placeholder="Jelaskan kebutuhan website Anda, contoh fitur yang diinginkan, atau referensi website..." class="w-full px-3.5 py-2.5 rounded-lg bg-[#F7FAFC] border border-[#D5E1EC] focus:bg-white focus:border-[#0870B8] text-sm text-[#0B1B33] placeholder-[#94A3B8] outline-none transition-colors"></textarea>
                        </div>

                        <div class="pt-2 flex flex-col sm:flex-row gap-3">
                            <button type="button" onclick="sendFormToWhatsApp()" class="flex-1 py-3 rounded-lg font-bold text-sm text-white bg-[#0870B8] hover:bg-[#065A96] flex items-center justify-center gap-2 transition-colors">
                                <i class="fa-brands fa-whatsapp text-lg"></i>
                                <span>Kirim ke WhatsApp</span>
                            </button>
                            <button type="submit" id="modal-submit-btn" class="flex-1 py-3 rounded-lg font-bold text-sm text-[#0B1B33] bg-[#EAF2F8] hover:bg-[#D5E1EC] border border-[#D5E1EC] flex items-center justify-center gap-2 transition-colors">
                                <i class="fa-solid fa-envelope text-xs"></i>
                                <span>Kirim Formulir</span>
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection
