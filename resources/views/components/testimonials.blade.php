{{-- Testimoni Klien: Background #EAF2F8 (Terang Selang-seling), Teks #0B1B33 --}}
<section class="py-16 md:py-24 bg-[#EAF2F8] border-b border-[#D5E1EC]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {{-- Section Header --}}
        <div class="max-w-3xl mb-12 md:mb-16">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold tracking-tight text-[#0B1B33] font-heading">
                Apa kata mereka yang sudah punya website
            </h2>
            <p class="mt-3 text-base text-[#475569] leading-[1.7]">
                Pengalaman nyata dari pemilik bisnis dan pengelola organisasi yang bekerja sama langsung dengan Soutprint.In.
            </p>
        </div>

        @php
            $realClientsFeedback = [
                [
                    'name' => 'Tim Pengelola TADARI',
                    'role' => 'Manajemen Properti & Sewa',
                    'business' => 'TADARI Indonesia',
                    'website' => 'http://tadari.co.id/',
                    'website_display' => 'tadari.co.id',
                    'quote' => 'Portal properti tadari.co.id dibangun dengan struktur pencarian unit dan formulir titip sewa yang sangat praktis. Calon penyewa mudah menemukan unit dan menghubungi agen.',
                ],
                [
                    'name' => 'Pengurus Yayasan',
                    'role' => 'Divisi Media & Komunikasi',
                    'business' => 'Yayasan & Masjid Asy-Syaakiriin',
                    'website' => 'http://asy-syaakiriin.com/',
                    'website_display' => 'asy-syaakiriin.com',
                    'quote' => 'Website yayasan kami kini rapi dan mudah diakses jemaah dari HP. Jadwal kajian dan laporan kegiatan bisa dipublikasikan secara mandiri dan cepat.',
                ],
                [
                    'name' => 'Direksi Operasional',
                    'role' => 'Kontraktor Alat Berat',
                    'business' => 'PT Agung Megah Abadi',
                    'website' => '',
                    'website_display' => 'Armada Alat Berat & Tambang',
                    'quote' => 'Katalog armada alat berat tampil profesional dan memudahkan pengiriman quotation kepada rekanan kontraktor kami di berbagai daerah.',
                ],
            ];
        @endphp

        {{-- Grid Kartu Klien Nyata: Putih #FFFFFF, border 1px #D5E1EC, radius 12px, tanpa rating bintang 5.0/5.0 fiktif --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-7 items-stretch">
            @foreach($realClientsFeedback as $t)
            <div class="bg-white border border-[#D5E1EC] rounded-xl p-6 sm:p-7 shadow-xs hover:border-[#BACEDB] transition-all duration-200 flex flex-col justify-between">
                <div>
                    <p class="text-sm sm:text-[15px] text-[#0B1B33] leading-[1.7] mb-6">
                        "{{ $t['quote'] }}"
                    </p>
                </div>

                <div class="pt-4 border-t border-[#F1F5F9] flex items-center justify-between">
                    <div>
                        <h3 class="text-sm font-bold text-[#0B1B33] font-heading">
                            {{ $t['name'] }}
                        </h3>
                        <p class="text-xs text-[#64748B]">
                            {{ $t['business'] }} &bull; {{ $t['role'] }}
                        </p>
                    </div>

                    @if(!empty($t['website']))
                    <a href="{{ $t['website'] }}" 
                       target="_blank" 
                       rel="noopener noreferrer" 
                       class="text-xs font-semibold text-[#0870B8] hover:underline flex items-center gap-1 shrink-0">
                        <span>{{ $t['website_display'] }}</span>
                        <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                    </a>
                    @endif
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>
