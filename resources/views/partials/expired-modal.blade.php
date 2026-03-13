<!-- ══════════════════════════════════════════
     EXPIRED CAREER MODAL
══════════════════════════════════════════ -->
<div id="expired-modal" style="display: none;"
  class="fixed inset-0 z-[1000] transition-opacity duration-500 opacity-0" data-lenis-prevent>
  <!-- Overlay -->
  <div class="fixed inset-0 bg-[#4A433A]/80 backdrop-blur-sm" id="expired-modal-overlay"></div>

  <!-- Wrapper -->
  <div class="fixed inset-0 z-[1001] flex items-center justify-center p-4">
    <div
      class="relative transform bg-[#F2F0E9] text-left shadow-2xl transition-all w-full max-w-[480px] translate-y-12 duration-500 pointer-events-auto p-12 text-center"
      id="expired-modal-content">
      
      <div class="mb-8 flex justify-center">
        <div class="w-16 h-16 rounded-full bg-[#D2BB9C]/10 flex items-center justify-center text-[#D2BB9C]">
          <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
        </div>
      </div>

      <h3 class="font-radley text-3xl text-[#4A433A] mb-4">Application <span class="italic">Closed</span></h3>
      <p class="font-manrope text-[13px] text-[#8a8174] leading-[1.8] mb-10">
        We're sorry, but the application period for this position has ended. Please visit our main careers page to explore other open opportunities at ARKAN.
      </p>

      <div class="flex flex-col gap-3">
        <a href="{{ url('/careers') }}" 
          class="w-full py-4 bg-[#4A433A] hover:bg-[#322c26] text-white font-manrope text-[10px] uppercase tracking-[0.2em] font-semibold transition-colors rounded-sm inline-block text-center">
          VIEW ALL POSITIONS
        </a>
        <button id="close-expired-btn"
          class="w-full py-4 bg-transparent border border-[#4A433A]/20 text-[#4A433A] font-manrope text-[10px] uppercase tracking-[0.2em] font-semibold hover:bg-[#4A433A]/5 transition-colors rounded-sm">
          DISMISS
        </button>
      </div>
    </div>
  </div>
</div>

<script>
    (function() {
      const modal = document.getElementById('expired-modal');
      const content = document.getElementById('expired-modal-content');
      const overlay = document.getElementById('expired-modal-overlay');
      const closeBtn = document.getElementById('close-expired-btn');

      function openExpiredModal() {
        modal.style.display = 'block';
        setTimeout(() => {
          modal.style.opacity = '1';
          content.classList.remove('translate-y-12');
        }, 10);
        document.body.style.overflow = 'hidden';
        if (window.lenis) window.lenis.stop();
      }

      function closeExpiredModal() {
        modal.style.opacity = '0';
        content.classList.add('translate-y-12');
        setTimeout(() => {
          modal.style.display = 'none';
        }, 500);
        document.body.style.overflow = '';
        if (window.lenis) window.lenis.start();
      }

      overlay.addEventListener('click', closeExpiredModal);
      closeBtn.addEventListener('click', closeExpiredModal);
      
      window.openExpiredModal = openExpiredModal;
      window.closeExpiredModal = closeExpiredModal;
    })();
</script>
