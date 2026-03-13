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
            <span id="modal-career-category"
              class="font-manrope text-[9px] uppercase tracking-[0.2em] text-[#8a8174] font-semibold mb-3 block">CAREERS</span>
            <h3 id="modal-career-title" class="font-radley text-3xl md:text-[34px] text-[#4A433A] tracking-tight italic">Join the <span class="not-italic">Team</span></h3>
          </div>
          <button id="close-modal-btn" class="text-[#8a8174] hover:text-[#4A433A] transition-colors p-2 -mr-4 -mt-4">
            <svg class="w-5 h-5 font-light" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M6 18L18 6M6 6l12 12">
              </path>
            </svg>
          </button>
        </div>

        <!-- Modal Body (Form) -->
        <div class="px-8 md:px-12 py-8 md:py-10 relative">
          <!-- Premium Loading Overlay -->
          <div id="form-loading-overlay" class="absolute inset-0 z-50 bg-[#F2F0E9]/95 flex flex-col items-center justify-center opacity-0 pointer-events-none transition-all duration-500">
            <div class="relative w-20 h-20 mb-6 font-cinzel text-[10px] tracking-[0.3em] font-bold text-[#4A433A] flex items-center justify-center">
                <div class="absolute inset-0 border border-[#D2BB9C]/30 rounded-full animate-ping"></div>
                <div class="absolute inset-2 border border-[#C19A6B]/50 rounded-full animate-spin [animation-duration:3s]"></div>
                ARKAN
            </div>
            <p class="font-manrope text-[10px] uppercase tracking-[0.3em] text-[#8a8174] animate-pulse">Processing Submission</p>
          </div>

          <form class="space-y-6" id="apply-form" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="career_id" id="modal-career-id" value="">
            
            <div class="flex flex-col md:flex-row gap-6">
              <div class="flex flex-col w-full">
                <label class="font-manrope text-[9px] uppercase tracking-[0.2em] text-[#8a8174] font-bold mb-3">First Name</label>
                <input type="text" name="first_name" placeholder="John" required
                  class="w-full bg-white px-5 py-4 placeholder:text-[#8a8174]/40 text-[#4A433A] font-manrope text-[13px] focus:outline-none focus:ring-1 focus:ring-[#C4A882] transition-colors rounded-sm" />
              </div>
              <div class="flex flex-col w-full">
                <label class="font-manrope text-[9px] uppercase tracking-[0.2em] text-[#8a8174] font-bold mb-3">Last Name</label>
                <input type="text" name="last_name" placeholder="Doe" required
                  class="w-full bg-white px-5 py-4 placeholder:text-[#8a8174]/40 text-[#4A433A] font-manrope text-[13px] focus:outline-none focus:ring-1 focus:ring-[#C4A882] transition-colors rounded-sm" />
              </div>
            </div>

            <div class="flex flex-col">
              <label class="font-manrope text-[9px] uppercase tracking-[0.2em] text-[#8a8174] font-bold mb-3">Email Address</label>
              <input type="email" name="email" placeholder="your@email.com" required
                class="w-full bg-white px-5 py-4 placeholder:text-[#8a8174]/40 text-[#4A433A] font-manrope text-[13px] focus:outline-none focus:ring-1 focus:ring-[#C4A882] transition-colors rounded-sm" />
            </div>

            <div class="flex flex-col md:flex-row gap-6">
              <div class="flex flex-col w-full">
                <label class="font-manrope text-[9px] uppercase tracking-[0.2em] text-[#8a8174] font-bold mb-3">Phone</label>
                <input type="tel" name="phone" placeholder="+966 5X XXX XXXX"
                  class="w-full bg-white px-5 py-4 placeholder:text-[#8a8174]/40 text-[#4A433A] font-manrope text-[13px] focus:outline-none focus:ring-1 focus:ring-[#C4A882] transition-colors rounded-sm" />
              </div>
              <div class="flex flex-col w-full">
                <label class="font-manrope text-[9px] uppercase tracking-[0.2em] text-[#8a8174] font-bold mb-3">LinkedIn Profile</label>
                <input type="url" name="linkedin_url" placeholder="https://linkedin.com/in/yourname"
                  class="w-full bg-white px-5 py-4 placeholder:text-[#8a8174]/40 text-[#4A433A] font-manrope text-[13px] focus:outline-none focus:ring-1 focus:ring-[#C4A882] transition-colors rounded-sm" />
              </div>
            </div>

            <div class="flex flex-col">
              <label class="font-manrope text-[9px] uppercase tracking-[0.2em] text-[#8a8174] font-bold mb-3">Portfolio / Website</label>
              <input type="url" name="portfolio_url" placeholder="https://yourportfolio.com"
                class="w-full bg-white px-5 py-4 placeholder:text-[#8a8174]/40 text-[#4A433A] font-manrope text-[13px] focus:outline-none focus:ring-1 focus:ring-[#C4A882] transition-colors rounded-sm" />
            </div>

            <div class="flex flex-col">
              <label class="font-manrope text-[9px] uppercase tracking-[0.2em] text-[#8a8174] font-bold mb-3">Cover Letter</label>
              <textarea name="cover_letter" rows="5" placeholder="Tell us about yourself and why you'd like to join ARKAN..."
                class="w-full bg-white px-5 py-4 placeholder:text-[#8a8174]/40 text-[#4A433A] font-manrope text-[13px] focus:outline-none focus:ring-1 focus:ring-[#C4A882] transition-colors resize-none rounded-sm"></textarea>
            </div>

            <div class="flex flex-col">
              <label class="font-manrope text-[9px] uppercase tracking-[0.2em] text-[#8a8174] font-bold mb-3">Upload CV (PDF or DOCX)</label>
              <div class="w-full bg-white border border-dashed border-[#D2BB9C]/40 px-5 py-5 flex items-center justify-between text-[#8a8174]/60 font-manrope text-[11px] cursor-pointer hover:bg-white transition-colors relative rounded-sm">
                <span id="cv-filename">Choose file or drag & drop</span>
                <span>↑</span>
                <input type="file" name="cv" id="cv-upload" required class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" accept=".pdf,.doc,.docx" />
              </div>
            </div>

            <div class="flex flex-col">
              <label class="font-manrope text-[9px] uppercase tracking-[0.2em] text-[#8a8174] font-bold mb-3">Security Verification</label>
              <div class="flex items-center gap-4 bg-white px-5 py-4 rounded-sm border border-[#D2BB9C]/20">
                <span id="captcha-question" class="font-manrope text-[13px] text-[#4A433A] min-w-[60px]">Loading...</span>
                <input type="number" name="captcha_answer" id="captcha-answer" placeholder="?" required
                  class="flex-1 bg-transparent text-[#4A433A] font-manrope text-[13px] focus:outline-none placeholder:text-[#8a8174]/40" />
                <button type="button" id="refresh-captcha" class="text-[#D2BB9C] hover:text-[#4A433A] transition-colors p-1" title="Refresh Challenge">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                  </svg>
                </button>
              </div>
            </div>

            <div class="flex flex-col mt-4 pt-8 border-t border-[#D2BB9C]/20">
              <button type="submit" id="submit-btn"
                class="w-full py-4 bg-[#4A433A] hover:bg-[#322c26] text-white font-manrope text-[10px] uppercase tracking-[0.2em] font-semibold transition-colors rounded-sm disabled:opacity-50 disabled:cursor-not-allowed">
                SUBMIT APPLICATION
              </button>
              <div id="form-message" class="hidden mt-4 text-[11px] text-center font-manrope uppercase tracking-wider"></div>
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
      
      const captchaQuestion = document.getElementById('captcha-question');
      const refreshCaptchaBtn = document.getElementById('refresh-captcha');
      const captchaInput = document.getElementById('captcha-answer');

      async function fetchCaptcha() {
        try {
            captchaQuestion.textContent = '...';
            const response = await fetch('/captcha/get');
            const data = await response.json();
            captchaQuestion.textContent = data.question;
            captchaInput.value = '';
        } catch (err) {
            captchaQuestion.textContent = 'Error';
            console.error('Failed to fetch captcha:', err);
        }
      }

      if (refreshCaptchaBtn) {
          refreshCaptchaBtn.addEventListener('click', fetchCaptcha);
      }

      function openModal(e) {
        if (e) {
          e.preventDefault();
          e.stopPropagation();
        }

        const trigger = e?.target?.closest('.apply-btn-trigger');
        const careerId = trigger?.getAttribute('data-id') || '';
        const careerTitle = trigger?.getAttribute('data-title') || 'Join the <span class="not-italic">Team</span>';
        const careerCategory = trigger?.getAttribute('data-category') || 'CAREERS';

        // Update modal content
        document.getElementById('modal-career-id').value = careerId;
        document.getElementById('modal-career-title').innerHTML = careerTitle;
        document.getElementById('modal-career-category').textContent = careerCategory;
        
        modal.style.display = 'block';
        fetchCaptcha(); // Load fresh captcha on open

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
          e.preventDefault();
          if (trigger.getAttribute('data-expired') === 'true') {
            if (window.openExpiredModal) window.openExpiredModal();
          } else {
            openModal(e);
          }
          return false;
        }

        if (e.target === overlay || e.target.closest('#close-modal-btn')) {
          closeModal();
        }
      });

      document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') closeModal();
      });

      // Form Submission
      const form = document.getElementById('apply-form');
      const submitBtn = document.getElementById('submit-btn');
      const formMessage = document.getElementById('form-message');
      const cvUpload = document.getElementById('cv-upload');
      const cvFilename = document.getElementById('cv-filename');

      if (cvUpload) {
          cvUpload.addEventListener('change', (e) => {
              if (e.target.files.length > 0) {
                  cvFilename.textContent = e.target.files[0].name;
              }
          });
      }

      if (form) {
          form.addEventListener('submit', async (e) => {
              e.preventDefault();
              
              const loadingOverlay = document.getElementById('form-loading-overlay');
              
              // Reset state & Show Loading (GSAP)
              submitBtn.disabled = true;
              formMessage.classList.add('hidden');
              formMessage.classList.remove('text-green-600', 'text-red-600');
              
              if (window.gsap) {
                  gsap.to(loadingOverlay, { 
                      display: 'flex', 
                      opacity: 1, 
                      duration: 0.5,
                      pointerEvents: 'auto'
                  });
              } else {
                  loadingOverlay.classList.remove('opacity-0', 'pointer-events-none');
              }

              const formData = new FormData(form);
              
              try {
                  const response = await fetch('/careers/apply', { 
                      method: 'POST',
                      body: formData,
                      headers: {
                          'X-Requested-With': 'XMLHttpRequest',
                          'Accept': 'application/json',
                      }
                  });

                  let result;
                  const contentType = response.headers.get("content-type");
                  if (contentType && contentType.indexOf("application/json") !== -1) {
                      result = await response.json();
                  } else {
                      const text = await response.text();
                      console.error('Server response:', text);
                      throw new Error('Server returned non-JSON response');
                  }

                  if (response.ok && result.success) {
                      // Success state
                      if (window.gsap) {
                          gsap.to(loadingOverlay.querySelector('p'), { 
                              text: 'Submission Successful', 
                              color: '#16a34a',
                              duration: 0.3 
                          });
                      }

                      formMessage.textContent = result.message;
                      formMessage.classList.add('text-green-600');
                      formMessage.classList.remove('hidden');
                      form.reset();
                      cvFilename.textContent = 'Choose file or drag & drop';
                      
                      setTimeout(() => {
                          closeModal();
                          // Hide loading for next time
                          if (window.gsap) {
                              gsap.to(loadingOverlay, { 
                                  opacity: 0, 
                                  duration: 0.5, 
                                  display: 'none',
                                  pointerEvents: 'none'
                              });
                          }
                      }, 2000);
                  } else {
                      // Error state
                      if (window.gsap) {
                          gsap.to(loadingOverlay, { opacity: 0, duration: 0.3, display: 'none', pointerEvents: 'none' });
                      } else {
                          loadingOverlay.classList.add('opacity-0', 'pointer-events-none');
                      }

                      formMessage.textContent = result.message || 'Validation failed. Please check your input.';
                      formMessage.classList.add('text-red-600');
                      formMessage.classList.remove('hidden');
                      fetchCaptcha(); // Refresh on failure
                      if (result.errors) {
                         const firstError = Object.values(result.errors)[0][0];
                         formMessage.textContent = firstError;
                      }
                  }
              } catch (error) {
                  console.error('Application Error:', error);
                  if (window.gsap) {
                      gsap.to(loadingOverlay, { opacity: 0, duration: 0.3, display: 'none', pointerEvents: 'none' });
                  } else {
                      loadingOverlay.classList.add('opacity-0', 'pointer-events-none');
                  }
                  
                  formMessage.textContent = error.message.includes('Server returned non-JSON response') 
                      ? 'A server error occurred. Please check logs.' 
                      : 'An error occurred. Please check your connection.';
                  formMessage.classList.add('text-red-600');
                  formMessage.classList.remove('hidden');
                  fetchCaptcha(); // Refresh on error
              } finally {
                  submitBtn.disabled = false;
              }
          });
      }

      // Expose to window as absolute backup
      window.openApplicationModal = openModal;
      window.closeApplicationModal = closeModal;
    })();
</script>
@endpush
