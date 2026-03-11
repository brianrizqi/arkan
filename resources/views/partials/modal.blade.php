<!-- ══════════════════════════════════════════
     APPLICATION MODAL (CONSOLIDATED)
══════════════════════════════════════════ -->
<div id="application-modal" style="display: none;"
  class="fixed inset-0 z-[1000] transition-opacity duration-500 opacity-0" data-lenis-prevent>
  <!-- Overlay -->
  <div class="fixed inset-0 bg-[#4A433A]/80 backdrop-blur-sm" id="modal-overlay"></div>

  <!-- Scrollable Wrapper -->
  <div class="fixed inset-0 z-[1001] overflow-y-auto" id="modal-scroll-wrapper" data-lenis-prevent>
    <div class="flex min-h-full items-start justify-center p-4 text-center sm:p-0 py-12 md:py-24 pointer-events-none">

      <!-- Modal Content -->
      <div
        class="relative transform bg-[#F2F0E9] text-left shadow-2xl transition-all sm:my-8 w-full max-w-[640px] flex flex-col translate-y-12 duration-500 pointer-events-auto"
        id="modal-content">

        <!-- Modal Header -->
        <div class="px-8 md:px-12 py-8 border-b border-[#D2BB9C]/20 flex items-start justify-between bg-[#F2F0E9]">
          <div>
            <span
              class="font-manrope text-[9px] uppercase tracking-[0.2em] text-[#8a8174] font-semibold mb-3 block">DESIGN</span>
            <h3 class="font-radley text-3xl md:text-[34px] text-[#4A433A] tracking-tight">Senior <span
                class="italic">Product Designer</span></h3>
          </div>
          <button id="close-modal-btn" class="text-[#8a8174] hover:text-[#4A433A] transition-colors p-2 -mr-4 -mt-4">
            <svg class="w-5 h-5 font-light" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M6 18L18 6M6 6l12 12">
              </path>
            </svg>
          </button>
        </div>

        <!-- Modal Body (Form) -->
        <div class="px-8 md:px-12 py-8 md:py-10">
          <form class="space-y-6" id="apply-form" onsubmit="event.preventDefault()">
            <div class="flex flex-col md:flex-row gap-6">
              <div class="flex flex-col w-full">
                <label class="font-manrope text-[9px] uppercase tracking-[0.2em] text-[#8a8174] font-bold mb-3">First Name</label>
                <input type="text" placeholder="John"
                  class="w-full bg-white px-5 py-4 placeholder:text-[#8a8174]/40 text-[#4A433A] font-manrope text-[13px] focus:outline-none focus:ring-1 focus:ring-[#C4A882] transition-colors rounded-sm" />
              </div>
              <div class="flex flex-col w-full">
                <label class="font-manrope text-[9px] uppercase tracking-[0.2em] text-[#8a8174] font-bold mb-3">Last Name</label>
                <input type="text" placeholder="Doe"
                  class="w-full bg-white px-5 py-4 placeholder:text-[#8a8174]/40 text-[#4A433A] font-manrope text-[13px] focus:outline-none focus:ring-1 focus:ring-[#C4A882] transition-colors rounded-sm" />
              </div>
            </div>

            <div class="flex flex-col">
              <label class="font-manrope text-[9px] uppercase tracking-[0.2em] text-[#8a8174] font-bold mb-3">Email Address</label>
              <input type="email" placeholder="your@email.com"
                class="w-full bg-white px-5 py-4 placeholder:text-[#8a8174]/40 text-[#4A433A] font-manrope text-[13px] focus:outline-none focus:ring-1 focus:ring-[#C4A882] transition-colors rounded-sm" />
            </div>

            <div class="flex flex-col md:flex-row gap-6">
              <div class="flex flex-col w-full">
                <label class="font-manrope text-[9px] uppercase tracking-[0.2em] text-[#8a8174] font-bold mb-3">Phone</label>
                <input type="tel" placeholder="+966 5X XXX XXXX"
                  class="w-full bg-white px-5 py-4 placeholder:text-[#8a8174]/40 text-[#4A433A] font-manrope text-[13px] focus:outline-none focus:ring-1 focus:ring-[#C4A882] transition-colors rounded-sm" />
              </div>
              <div class="flex flex-col w-full">
                <label class="font-manrope text-[9px] uppercase tracking-[0.2em] text-[#8a8174] font-bold mb-3">LinkedIn Profile</label>
                <input type="url" placeholder="linkedin.com/in/yourname"
                  class="w-full bg-white px-5 py-4 placeholder:text-[#8a8174]/40 text-[#4A433A] font-manrope text-[13px] focus:outline-none focus:ring-1 focus:ring-[#C4A882] transition-colors rounded-sm" />
              </div>
            </div>

            <div class="flex flex-col">
              <label class="font-manrope text-[9px] uppercase tracking-[0.2em] text-[#8a8174] font-bold mb-3">Portfolio / Website</label>
              <input type="url" placeholder="yourportfolio.com"
                class="w-full bg-white px-5 py-4 placeholder:text-[#8a8174]/40 text-[#4A433A] font-manrope text-[13px] focus:outline-none focus:ring-1 focus:ring-[#C4A882] transition-colors rounded-sm" />
            </div>

            <div class="flex flex-col">
              <label class="font-manrope text-[9px] uppercase tracking-[0.2em] text-[#8a8174] font-bold mb-3">Cover Letter</label>
              <textarea rows="5" placeholder="Tell us about yourself and why you'd like to join ARKAN..."
                class="w-full bg-white px-5 py-4 placeholder:text-[#8a8174]/40 text-[#4A433A] font-manrope text-[13px] focus:outline-none focus:ring-1 focus:ring-[#C4A882] transition-colors resize-none rounded-sm"></textarea>
            </div>

            <div class="flex flex-col">
              <label class="font-manrope text-[9px] uppercase tracking-[0.2em] text-[#8a8174] font-bold mb-3">Upload CV (PDF or DOCX)</label>
              <div class="w-full bg-white border border-dashed border-[#D2BB9C]/40 px-5 py-5 flex items-center justify-between text-[#8a8174]/60 font-manrope text-[11px] cursor-pointer hover:bg-white transition-colors relative rounded-sm">
                <span>Choose file or drag & drop</span>
                <span>↑</span>
                <input type="file" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" accept=".pdf,.doc,.docx" />
              </div>
            </div>

            <div class="flex flex-col mt-4 pt-8 border-t border-[#D2BB9C]/20">
              <button type="submit"
                class="w-full py-4 bg-[#4A433A] hover:bg-[#322c26] text-white font-manrope text-[10px] uppercase tracking-[0.2em] font-semibold transition-colors rounded-sm">
                SUBMIT APPLICATION
              </button>
              <p class="text-[9px] text-[#8a8174]/60 text-center font-manrope mt-5 uppercase tracking-wider">By submitting, you agree to ARKAN storing your data for recruitment purposes.</p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@push('scripts')
<script>
    (function() {
      const modal = document.getElementById('application-modal');
      const content = document.getElementById('modal-content');
      const wrapper = document.getElementById('modal-scroll-wrapper');
      const overlay = document.getElementById('modal-overlay');
      const closeBtn = document.getElementById('close-modal-btn');

      function openModal(e) {
        if (e) {
          e.preventDefault();
          e.stopPropagation();
        }
        
        modal.style.display = 'block';
        setTimeout(() => {
          modal.style.opacity = '1';
          content.classList.remove('translate-y-12');
        }, 10);
        
        wrapper.scrollTo(0, 0);
        document.body.style.overflow = 'hidden';
        if (window.lenis) window.lenis.stop();
      }

      function closeModal() {
        modal.style.opacity = '0';
        content.classList.add('translate-y-12');
        
        setTimeout(() => {
          modal.style.display = 'none';
        }, 500);
        
        document.body.style.overflow = '';
        if (window.lenis) window.lenis.start();
      }

      // GLOBAL CLICK LISTENER
      document.addEventListener('click', function(e) {
        const trigger = e.target.closest('.apply-btn-trigger');
        if (trigger) {
          openModal(e);
          return false;
        }

        if (e.target === overlay || e.target.closest('#close-modal-btn')) {
          closeModal();
        }
      });

      document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') closeModal();
      });

      // Expose to window as absolute backup
      window.openApplicationModal = openModal;
      window.closeApplicationModal = closeModal;
    })();
</script>
@endpush
