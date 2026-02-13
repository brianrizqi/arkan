<section id="hero-section" class="section-panel relative min-h-screen flex flex-col justify-between overflow-hidden bg-[#0A192F]" style="z-index: 1;">
    <!-- Premium Gradient Background -->
    <div class="absolute inset-0 bg-gradient-to-b from-[#0A2647] via-[#144272] to-[#205295] opacity-90"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,_transparent_0%,_rgba(10,25,47,0.5)_100%)]"></div>

    <!-- Navigation Header -->
    <header class="relative z-10 w-full px-8 py-8 flex justify-between items-center text-white/90">
        <div class="nav-item opacity-0">
            <a href="#" class="text-sm tracking-[0.3em] font-cinzel hover:text-white transition-colors">ARKAN</a>
        </div>
        <nav class="absolute left-1/2 -translate-x-1/2 space-x-8 text-xs tracking-[0.2em] font-montserrat uppercase hidden md:flex">
            <a href="#" class="nav-item opacity-0 hover:text-white transition-colors">About</a>
            <a href="#" class="nav-item opacity-0 hover:text-white transition-colors">Work</a>
            <a href="#" class="nav-item opacity-0 hover:text-white transition-colors">Archive</a>
        </nav>
        <div class="nav-item opacity-0">
            <a href="#" class="group text-sm tracking-widest font-montserrat flex items-center hover:text-white transition-colors">
                Contact <span class="ml-2 group-hover:translate-x-1 transition-transform">→</span>
            </a>
        </div>
    </header>

    <!-- Main Content -->
    <main class="relative z-10 flex-grow flex flex-col items-center justify-center text-center px-4">
        <div class="hero-content">
            <div class="logo-text opacity-0 scale-95">
                <img src="{{ asset('assets/img/heading.png') }}" alt="Arkan Logo" class="w-full max-w-4xl mx-auto h-auto">
            </div>
            <p class="tagline opacity-0 mt-8 text-sm md:text-lg font-inter tracking-[0.6em] text-white/70 uppercase">
                Crafting the standard of refined hospitality
            </p>
        </div>
    </main>

    <!-- Footer / Scroll Indicator -->
    <footer class="relative z-10 w-full pb-12 flex flex-col items-center text-white/60">
        <div class="scroll-indicator opacity-0 flex flex-col items-center cursor-pointer group">
            <span class="text-xs italic font-cinzel tracking-widest mb-2 group-hover:text-white transition-colors">Our Services</span>
            <div class="w-px h-8 bg-white/30 group-hover:bg-white/60 transition-colors animate-bounce"></div>
        </div>
    </footer>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        gsap.registerPlugin(ScrollTrigger);

        // === Entrance Animation ===
        const tl = gsap.timeline({ defaults: { ease: 'power3.out', duration: 1.5 } });

        tl.to('.logo-text', {
            opacity: 1,
            y: 0,
            scale: 1,
            startAt: { y: 30, scale: 0.95 },
            duration: 2
        })
        .to('.tagline', {
            opacity: 1,
            y: 0,
            startAt: { y: 20 },
            duration: 1.2
        }, '-=1')
        .to('.nav-item', {
            opacity: 1,
            y: 0,
            startAt: { y: -20 },
            stagger: 0.1,
            duration: 1
        }, '-=0.8')
        .to('.scroll-indicator', {
            opacity: 1,
            y: 0,
            startAt: { y: 20 },
            duration: 1
        }, '-=0.5');
    });
</script>
