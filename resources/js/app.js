import './bootstrap';

// ==========================================
// 1. MODAL PREVIEW PORTOFOLIO WEBSITE
// ==========================================
window.openWebsitePreview = function(imgSrc, title, client, summary, liveUrl) {
    const modal = document.getElementById('website-preview-modal');
    if (!modal) return;

    const modalTitle = document.getElementById('preview-modal-title');
    const modalClient = document.getElementById('preview-modal-client');
    const modalSummary = document.getElementById('preview-modal-summary');
    const modalImg = document.getElementById('preview-modal-img');
    const modalLink = document.getElementById('preview-modal-link');

    if (modalTitle) modalTitle.textContent = title;
    if (modalClient) modalClient.textContent = client;
    if (modalSummary) modalSummary.textContent = summary;
    if (modalImg) modalImg.src = imgSrc;

    if (modalLink) {
        if (liveUrl && liveUrl.trim() !== '') {
            modalLink.href = liveUrl;
            modalLink.classList.remove('hidden');
            modalLink.classList.add('inline-flex');
        } else {
            modalLink.classList.add('hidden');
            modalLink.classList.remove('inline-flex');
        }
    }

    modal.classList.remove('hidden');
    document.body.classList.add('overflow-hidden');
};

window.closeWebsitePreview = function() {
    const modal = document.getElementById('website-preview-modal');
    if (modal) {
        modal.classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
    }
};

// ==========================================
// 2. CONTACT MODAL & WHATSAPP INTEGRATION
// ==========================================
window.openContactModal = function(source = 'Website') {
    const modal = document.getElementById('contact-modal');
    const sourceInput = document.getElementById('modal-source');
    if (sourceInput) sourceInput.value = source;
    if (modal) modal.classList.remove('hidden');
};

window.closeContactModal = function() {
    const modal = document.getElementById('contact-modal');
    if (modal) modal.classList.add('hidden');
};

window.sendFormToWhatsApp = function() {
    const name = document.getElementById('modal-name')?.value.trim();
    const phone = document.getElementById('modal-phone')?.value.trim();
    const email = document.getElementById('modal-email')?.value.trim();
    const service = document.getElementById('modal-service')?.value;
    const budget = document.getElementById('modal-budget')?.value;
    const msg = document.getElementById('modal-message')?.value.trim();

    if (!name || !phone || !msg) {
        showToast('Mohon lengkapi Nama, No WhatsApp, dan Kebutuhan Proyek.', 'warning');
        return;
    }

    let waText = `Halo Soutprint.In, saya ingin konsultasi pembuatan website:\n\n`;
    waText += `• Nama/Usaha: ${name}\n`;
    waText += `• WhatsApp: ${phone}\n`;
    if (email) waText += `• Email: ${email}\n`;
    waText += `• Pilihan Paket: ${service}\n`;
    waText += `• Perkiraan Budget: ${budget}\n`;
    waText += `• Kebutuhan Proyek: ${msg}\n\n`;
    waText += `Mohon info estimasi biaya dan waktu pengerjaan. Terima kasih!`;

    const url = `https://wa.me/6281234567890?text=${encodeURIComponent(waText)}`;
    window.open(url, '_blank');
    closeContactModal();
    showToast('Membuka WhatsApp...', 'success');
};

function showToast(message, type = 'info') {
    const container = document.getElementById('toast-container');
    if (!container) return;

    const toast = document.createElement('div');
    const bgClass = type === 'success' ? 'bg-[#E8F5E9] border-[#C8E6C9] text-[#1B5E20]' :
                    type === 'warning' ? 'bg-[#FFF9C4] border-[#FFF176] text-[#F57F17]' :
                    'bg-[#FFFFFF] border-[#D5E1EC] text-[#0B1B33]';

    toast.className = `p-4 rounded-xl border shadow-lg text-sm font-semibold pointer-events-auto transition-all transform translate-y-2 opacity-0 flex items-center gap-3 ${bgClass}`;
    toast.innerHTML = `
        <i class="fa-solid ${type === 'success' ? 'fa-circle-check text-[#2E7D32]' : type === 'warning' ? 'fa-triangle-exclamation text-[#F57F17]' : 'fa-circle-info text-[#0870B8]'}"></i>
        <span>${message}</span>
    `;

    container.appendChild(toast);

    requestAnimationFrame(() => {
        toast.classList.remove('translate-y-2', 'opacity-0');
    });

    setTimeout(() => {
        toast.classList.add('opacity-0', 'translate-x-4');
        setTimeout(() => toast.remove(), 300);
    }, 4000);
}

// ==========================================
// 3. INITIALIZATION ON DOM READY
// ==========================================
document.addEventListener('DOMContentLoaded', () => {
    
    // Portfolio Category Tabs
    const filterBtns = document.querySelectorAll('.portfolio-filter-btn');
    const portfolioCards = document.querySelectorAll('.portfolio-card');

    if (filterBtns.length > 0 && portfolioCards.length > 0) {
        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                filterBtns.forEach(b => {
                    b.classList.remove('bg-[#0870B8]', 'text-white', 'shadow-xs');
                    b.classList.add('bg-white', 'text-[#0B1B33]', 'border', 'border-[#D5E1EC]');
                });
                btn.classList.add('bg-[#0870B8]', 'text-white', 'shadow-xs');
                btn.classList.remove('bg-white', 'text-[#0B1B33]');

                const filter = btn.getAttribute('data-filter') || 'all';

                portfolioCards.forEach(card => {
                    const cat = card.getAttribute('data-category');
                    if (filter === 'all' || cat === filter) {
                        card.style.display = 'flex';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    }

    // FAQ Accordion
    const faqToggles = document.querySelectorAll('.faq-toggle');
    faqToggles.forEach(toggle => {
        toggle.addEventListener('click', () => {
            const parent = toggle.closest('div');
            const content = parent.querySelector('.faq-content');
            const icon = parent.querySelector('.faq-icon');
            const isExpanded = toggle.getAttribute('aria-expanded') === 'true';

            // Close all items
            document.querySelectorAll('#faq-accordion .faq-content').forEach(c => c.classList.add('hidden'));
            document.querySelectorAll('#faq-accordion .faq-icon').forEach(i => i.classList.remove('rotate-180'));
            document.querySelectorAll('#faq-accordion .faq-toggle').forEach(t => t.setAttribute('aria-expanded', 'false'));

            // Toggle current item if it was closed
            if (!isExpanded && content) {
                content.classList.remove('hidden');
                icon?.classList.add('rotate-180');
                toggle.setAttribute('aria-expanded', 'true');
            }
        });
    });

    // Mobile Hamburger Menu
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');

    if (mobileMenuBtn && mobileMenu) {
        const toggleMobileMenu = (forceClose = false) => {
            const isHidden = mobileMenu.classList.contains('hidden');
            if (forceClose || !isHidden) {
                mobileMenu.classList.add('hidden');
                mobileMenuBtn.setAttribute('aria-expanded', 'false');
                if (menuIcon) {
                    menuIcon.classList.remove('fa-xmark');
                    menuIcon.classList.add('fa-bars');
                }
            } else {
                mobileMenu.classList.remove('hidden');
                mobileMenuBtn.setAttribute('aria-expanded', 'true');
                if (menuIcon) {
                    menuIcon.classList.remove('fa-bars');
                    menuIcon.classList.add('fa-xmark');
                }
            }
        };

        mobileMenuBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            toggleMobileMenu();
        });

        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', () => toggleMobileMenu(true));
        });

        document.addEventListener('click', (e) => {
            if (!mobileMenu.contains(e.target) && !mobileMenuBtn.contains(e.target)) {
                toggleMobileMenu(true);
            }
        });
    }

    // Contact Form AJAX Submit
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            const submitBtn = document.getElementById('modal-submit-btn');
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.innerHTML = `<i class="fa-solid fa-spinner animate-spin"></i> Mengirim...`;
            }

            const formData = new FormData(contactForm);
            try {
                const res = await fetch(contactForm.action, {
                    method: 'POST',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json',
                    },
                    body: formData
                });

                const data = await res.json();
                if (data.success) {
                    showToast(data.message, 'success');
                    contactForm.reset();
                    closeContactModal();
                } else {
                    showToast('Silakan hubungi kami langsung via WhatsApp.', 'warning');
                }
            } catch (err) {
                showToast('Form terkirim. Tim kami akan menghubungi Anda segera via WhatsApp.', 'success');
                contactForm.reset();
                closeContactModal();
            } finally {
                if (submitBtn) {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = `<i class="fa-solid fa-envelope text-xs"></i> <span>Kirim Formulir</span>`;
                }
            }
        });
    }

    // Floating Back to Top Button
    const backToTopBtn = document.getElementById('back-to-top-btn');
    if (backToTopBtn) {
        const toggleBackToTop = () => {
            if (window.scrollY > 300) {
                backToTopBtn.classList.remove('opacity-0', 'pointer-events-none');
                backToTopBtn.classList.add('opacity-100', 'pointer-events-auto');
            } else {
                backToTopBtn.classList.add('opacity-0', 'pointer-events-none');
                backToTopBtn.classList.remove('opacity-100', 'pointer-events-auto');
            }
        };
        window.addEventListener('scroll', toggleBackToTop, { passive: true });
        toggleBackToTop();
    }
});
