@extends('layouts.app')

@section('title', 'Pertanyaan yang Sering Ditanyakan (FAQ) — Soutprint.In')
@section('meta_description', 'Pertanyaan umum mengenai proses pembuatan website, domain, hosting, pembayaran, dan garansi perbaikan di Soutprint.In.')

@section('content')
    {{-- Header FAQ: Background #020C20 solid --}}
    <section class="py-14 md:py-20 bg-[#020C20] border-b border-[#06142E]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-2xl sm:text-4xl md:text-5xl font-bold text-[#E6EEF7] font-heading leading-tight max-w-4xl">
                Pertanyaan yang <span class="text-[#0BBEFF]">sering ditanyakan.</span>
            </h1>
            <p class="mt-4 text-base sm:text-lg text-[#C2D3E5] max-w-3xl leading-[1.7]">
                Jawaban ringkas dan lugas seputar proses kerja, pembayaran, hak milik kode, dan garansi perbaikan di Soutprint.In.
            </p>
        </div>
    </section>

    {{-- FAQ Accordion Component --}}
    @include('components.faq', ['hideHeader' => true])

    {{-- Pre-Footer CTA --}}
    <section class="py-14 sm:py-16 bg-[#06142E] text-center border-t border-[#102244]">
        <div class="max-w-4xl mx-auto px-4">
            <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-[#E6EEF7] font-heading">
                Punya pertanyaan lain yang belum terjawab?
            </h2>
            <p class="text-base text-[#C2D3E5] mt-2">
                Langsung tanyakan kepada kami lewat WhatsApp, kami siap menjawab dengan jelas.
            </p>
            <div class="mt-6 sm:mt-8 flex justify-center">
                <a href="https://wa.me/6281234567890?text=Halo%20Soutprint.In,%20saya%20punya%20pertanyaan%20seputar%20pembuatan%20website" 
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
