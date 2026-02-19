<section id="process" class="relative bg-[#F5F1E8]" style="z-index: 5;">
    <!-- Intro Area -->
    <div class="relative py-24 px-6 text-center max-w-7xl mx-auto">
        <!-- Ornament -->
        <div class="process-ornament opacity-0 mb-8 flex justify-center">
            <img src="{{ asset('assets/img/ornament.svg') }}" alt="" class="w-16 h-16 md:w-20 md:h-20 object-contain">
        </div>

        <!-- Title -->
        <h2 class="process-header-title opacity-0 text-4xl md:text-6xl font-serif-luxury text-[#1B1B18] mb-8">
            <span class="italic font-radley">Our</span> Process
        </h2>

        <!-- Description -->
        <div class="max-w-4xl mx-auto">
            <p class="process-header-text opacity-0 text-xs md:text-sm font-lato tracking-wide text-[#1B1B18]/70 leading-relaxed uppercase">
                An integrated 5PL platform that manages hospitality OS&E from concept to site ready delivery. ARKAN connects design, production, digital control, global logistics, and fulfillment into one seamless system, ensuring consistency, efficiency, and reliability across every stage of operations.
            </p>
        </div>
    </div>

    <!-- Pinned Interactive Area -->
    <div id="process-pin-container" class="relative h-screen w-full overflow-hidden flex items-center justify-center px-6 md:px-12 pb-12">
        <div class="process-card-wrapper relative w-full h-full max-w-[1920px] mx-auto rounded-[2rem] md:rounded-[3rem] overflow-hidden group">
            
            <!-- Shared Background Image -->
            <div class="absolute inset-0 z-0">
                <img src="{{ asset('assets/img/bg-our-process.png') }}" 
                     alt="Our Process Background" 
                     class="w-full h-full object-cover">
                <!-- Soft Overlay -->
                <div class="absolute inset-0 bg-white/20"></div>
            </div>

            <!-- Content Phases -->
            <div class="relative z-10 w-full h-full flex flex-col items-center justify-center text-center">
                
                <!-- Phase 1: DESIGN -->
                <div class="process-phase phase-design absolute inset-0 flex flex-col items-center justify-center opacity-100">
                    <span class="text-xs md:text-sm font-lato tracking-[0.3em] text-[#3E536B]/60 uppercase mb-4 md:mb-8">01. Step</span>
                    <h3 class="text-4xl sm:text-6xl md:text-8xl lg:text-[10rem] font-medium text-[#3E536B] tracking-[-0.02em] uppercase">
                        Design
                    </h3>
                    <div class="absolute bottom-12 px-6 flex flex-wrap justify-center gap-4 md:gap-8 text-white font-lato text-[10px] md:text-sm lg:text-base tracking-widest uppercase">
                        <span>/Concept</span>
                        <span>/Standards</span>
                        <span>/Specifications</span>
                    </div>
                </div>

                <!-- Phase 2: PRODUCTION -->
                <div class="process-phase phase-production absolute inset-0 flex flex-col items-center justify-center opacity-0 translate-y-12">
                    <span class="text-xs md:text-sm font-lato tracking-[0.3em] text-[#3E536B]/60 uppercase mb-4 md:mb-8">02. Step</span>
                    <h3 class="text-4xl sm:text-6xl md:text-8xl lg:text-[10rem] font-medium text-[#3E536B] tracking-[-0.02em] uppercase">
                        Production
                    </h3>
                    <div class="absolute bottom-12 px-6 flex flex-wrap justify-center gap-4 md:gap-8 text-white font-lato text-[10px] md:text-sm lg:text-base tracking-widest uppercase">
                        <span>/Manufacturing</span>
                        <span>/Quality Control</span>
                        <span>/Scalability</span>
                    </div>
                </div>

                <!-- Phase 3: DIGITALIZATION -->
                <div class="process-phase phase-digitalization absolute inset-0 flex flex-col items-center justify-center opacity-0 translate-y-12">
                    <span class="text-xs md:text-sm font-lato tracking-[0.3em] text-[#3E536B]/60 uppercase mb-4 md:mb-8">03. Step</span>
                    <h3 class="text-4xl sm:text-6xl md:text-8xl lg:text-[10rem] font-medium text-[#3E536B] tracking-[-0.02em] uppercase">
                        Digitalization
                    </h3>
                    <div class="absolute bottom-12 px-6 flex flex-wrap justify-center gap-4 md:gap-8 text-white font-lato text-[10px] md:text-sm lg:text-base tracking-widest uppercase">
                        <span>/Efficiency</span>
                        <span>/Connectivity</span>
                        <span>/Traceability</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    gsap.registerPlugin(ScrollTrigger);

    // Intro Animation
    const introTl = gsap.timeline({
        scrollTrigger: {
            trigger: '#process',
            start: 'top 80%',
            toggleActions: 'play none none none'
        }
    });

    introTl.to('.process-ornament', { opacity: 1, scale: 1, startAt: { scale: 0.8 }, duration: 1, ease: 'power2.out' })
           .to('.process-header-title', { opacity: 1, y: 0, startAt: { y: 30 }, duration: 1.2, ease: 'power3.out' }, '-=0.8')
           .to('.process-header-text', { opacity: 1, y: 0, startAt: { y: 20 }, duration: 1, ease: 'power3.out' }, '-=0.8');

    // Pinned Phases Animation
    const processTimeline = gsap.timeline({
        scrollTrigger: {
            trigger: '#process-pin-container',
            start: 'top top',
            end: '+=300%',
            pin: true,
            scrub: 1,
        }
    });

    // Switch from Design to Production
    processTimeline.to('.phase-design', {
        opacity: 0,
        y: -50,
        duration: 2,
        ease: 'power2.inOut'
    })
    .to('.phase-production', {
        opacity: 1,
        y: 0,
        duration: 2,
        ease: 'power2.inOut'
    }, '-=2')
    
    // Hold Production
    .to({}, { duration: 1 })

    // Switch from Production to Digitalization
    .to('.phase-production', {
        opacity: 0,
        y: -50,
        duration: 2,
        ease: 'power2.inOut'
    })
    .to('.phase-digitalization', {
        opacity: 1,
        y: 0,
        duration: 2,
        ease: 'power2.inOut'
    }, '-=2')

    // Final Hold
    .to({}, { duration: 1 });
});
</script>
