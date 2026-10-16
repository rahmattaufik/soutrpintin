@extends('layouts.app')

@section('title', 'Alur Kerja & Proses Pengerjaan — Soutprint.In')
@section('meta_description', 'Pelajari tahapan pembuatan website di Soutprint.In: dari obrolan, desain rancangan, pembuatan sistem, hingga serah terima dan garansi.')

@section('content')
    {{-- Header Alur Kerja: Background #020C20 solid --}}
    <section class="py-14 md:py-20 bg-[#020C20] border-b border-[#06142E]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-2xl sm:text-4xl md:text-5xl font-bold text-[#E6EEF7] font-heading leading-tight max-w-4xl">
                Dari obrolan sampai website online, <span class="text-[#0BBEFF]">begini prosesnya.</span>
            </h1>
            <p class="mt-4 text-base sm:text-lg text-[#C2D3E5] max-w-3xl leading-[1.7]">
                Kami bangun company profile, toko online, dan aplikasi web dengan tahapan yang jelas. Anda selalu tahu perkembangan proyek setiap saat tanpa rasa khawatir.
            </p>
        </div>
    </section>

    {{-- Workflow Component --}}
    @include('components.workflow', ['hideHeader' => true])

    {{-- Prinsip Kerja Kami --}}
    <section class="py-14 sm:py-16 bg-[#EAF2F8] border-b border-[#D5E1EC]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mb-10">
                <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-[#0B1B33] font-heading">
                    Tiga prinsip kerja kami
                </h2>
                <p class="text-sm text-[#475569] mt-2">
                    Hal dasar yang selalu kami pegang di setiap proyek pembuatan website.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8">
                <div class="p-6 rounded-xl bg-white border border-[#D5E1EC] shadow-xs">
                    <span class="text-2xl font-bold text-[#0870B8] font-heading block mb-2">01</span>
                    <h3 class="text-lg font-bold text-[#0B1B33] font-heading">Cepat Dibuka di HP</h3>
                    <p class="text-sm text-[#475569] mt-2 leading-[1.7]">
                        Mayoritas calon pelanggan mengakses via smartphone. Kami memastikan website tampil rapi, tombol mudah dipencet, dan waktu muat cepat.
                    </p>
                </div>

                <div class="p-6 rounded-xl bg-white border border-[#D5E1EC] shadow-xs">
                    <span class="text-2xl font-bold text-[#0870B8] font-heading block mb-2">02</span>
                    <h3 class="text-lg font-bold text-[#0B1B33] font-heading">Kode Sumber Milik Anda</h3>
                    <p class="text-sm text-[#475569] mt-2 leading-[1.7]">
                        Seluruh file kode, aset gambar, dan akses hosting kami serahkan saat serah terima. Anda memiliki kontrol penuh atas aset digital Anda.
                    </p>
                </div>

                <div class="p-6 rounded-xl bg-white border border-[#D5E1EC] shadow-xs">
                    <span class="text-2xl font-bold text-[#0870B8] font-heading block mb-2">03</span>
                    <h3 class="text-lg font-bold text-[#0B1B33] font-heading">Bimbingan Pengelolaan</h3>
                    <p class="text-sm text-[#475569] mt-2 leading-[1.7]">
                        Setelah online, Anda kami latih cara memperbarui konten secara mandiri, disertai garansi perbaikan bug gratis selama 60 hari.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Testimoni --}}
    @include('components.testimonials')
@endsection
