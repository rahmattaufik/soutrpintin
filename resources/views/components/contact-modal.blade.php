<div id="contact-modal" class="fixed inset-0 z-50 hidden bg-[#020C20]/80 backdrop-blur-xs flex items-center justify-center p-3 sm:p-4">
    <div class="relative w-full max-w-xl bg-white border border-[#D5E1EC] rounded-xl p-5 sm:p-7 shadow-xl overflow-y-auto max-h-[90vh] text-[#0B1B33]">
        
        {{-- Close Button --}}
        <button type="button" onclick="closeContactModal()" class="absolute top-4 right-4 text-[#64748B] hover:text-[#0B1B33] text-lg w-8 h-8 rounded-lg bg-[#F7FAFC] flex items-center justify-center transition-colors" aria-label="Tutup form">
            <i class="fa-solid fa-xmark"></i>
        </button>

        {{-- Header --}}
        <div class="mb-5 pr-8">
            <h3 class="text-xl font-bold text-[#0B1B33] font-heading">
                Konsultasi Pembuatan Website
            </h3>
            <p class="text-sm text-[#475569] mt-1 leading-[1.6]">
                Ceritakan kebutuhan website Anda. Kami akan merespons langsung via WhatsApp untuk membahas rencana kerja dan estimasi harga.
            </p>
        </div>

        {{-- Form --}}
        <form id="contact-form" action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
            @csrf
            <input type="hidden" name="source" id="modal-source" value="Website General">

            <div>
                <label class="block text-xs font-bold text-[#0B1B33] mb-1.5">Nama Lengkap / Usaha *</label>
                <input type="text" name="name" id="modal-name" required placeholder="Contoh: Budi Santoso / CV Maju Bersama" class="w-full px-3.5 py-2.5 rounded-lg bg-[#F7FAFC] border border-[#D5E1EC] focus:bg-white focus:border-[#0870B8] text-sm text-[#0B1B33] placeholder-[#94A3B8] outline-none transition-colors">
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4">
                <div>
                    <label class="block text-xs font-bold text-[#0B1B33] mb-1.5">Nomor WhatsApp Aktif *</label>
                    <input type="tel" name="phone" id="modal-phone" required placeholder="Contoh: 08123456789" class="w-full px-3.5 py-2.5 rounded-lg bg-[#F7FAFC] border border-[#D5E1EC] focus:bg-white focus:border-[#0870B8] text-sm text-[#0B1B33] placeholder-[#94A3B8] outline-none transition-colors">
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
                <label class="block text-xs font-bold text-[#0B1B33] mb-1.5">Kebutuhan Website</label>
                <textarea name="message" id="modal-message" rows="3" required placeholder="Ceritakan fitur utama atau referensi website yang Anda sukai..." class="w-full px-3.5 py-2.5 rounded-lg bg-[#F7FAFC] border border-[#D5E1EC] focus:bg-white focus:border-[#0870B8] text-sm text-[#0B1B33] placeholder-[#94A3B8] outline-none transition-colors"></textarea>
            </div>

            {{-- Submit buttons --}}
            <div class="pt-2 flex flex-col sm:flex-row gap-3">
                <button type="button" onclick="sendFormToWhatsApp()" class="flex-1 py-3 rounded-lg font-bold text-sm text-white bg-[#0870B8] hover:bg-[#065A96] transition-colors flex items-center justify-center gap-2">
                    <i class="fa-brands fa-whatsapp text-lg"></i>
                    <span>Kirim ke WhatsApp</span>
                </button>
                <button type="submit" id="modal-submit-btn" class="flex-1 py-3 rounded-lg font-bold text-sm text-[#0B1B33] bg-[#EAF2F8] hover:bg-[#D5E1EC] border border-[#D5E1EC] transition-colors flex items-center justify-center gap-2">
                    <i class="fa-solid fa-envelope text-xs"></i>
                    <span>Kirim Formulir</span>
                </button>
            </div>
        </form>

    </div>
</div>
