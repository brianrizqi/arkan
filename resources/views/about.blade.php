@extends('layouts.app')

@php 
    $navbarTheme = 'navbar-light-theme'; 
    $navDark = true; 
    $navbarEntrance = false;
    $bodyClass = 'bg-[#FCFAF8]';
@endphp

@section('content')
<div class="sections-wrapper relative overflow-x-clip">
<main class="w-full pt-24 lg:pt-48 overflow-x-clip">
    <!-- Hero Content -->
    <div class="flex flex-col items-center text-center max-w-5xl mx-auto mb-16 lg:mb-24 reveal">
        <!-- Ornament -->
        <img src="{{ asset('assets/img/new ARKAN STAR.svg') }}" alt="Star Ornament" class="h-16 md:h-[4.5rem] w-auto mb-8" />

        <p class="font-radley text-[16px] md:text-lg text-[#6b5c49] mb-4 md:mb-6 tracking-wide">
            About Us
        </p>

        <h1 class="font-sans text-[1.75rem] md:text-4xl lg:text-[2.4rem] font-medium text-[#5c4f3d] leading-[1.3] md:leading-[1.4] max-w-4xl tracking-tight">
            We craft premium amenities with a focus on quality, precision, and
            international standards, supported by some of the strongest.
        </h1>
    </div>

    <!-- Image Gallery -->
    <div class="w-full max-w-[1920px] mx-auto flex flex-col md:flex-row justify-between items-center mb-24 lg:mb-32 overflow-visible reveal">
        <div class="hidden md:block w-[18%] lg:w-[20%] rounded-r-sm overflow-hidden flex-shrink-0" style="aspect-ratio: 4/5">
            <img src="{{ asset('assets/img/our-jurnal-2.png') }}" class="w-full h-full object-cover object-center" alt="Gallery Left" />
        </div>
        <div class="w-full md:w-[56%] lg:w-[50%] rounded-sm shadow-[0_20px_50px_rgba(0,0,0,0.3)] border border-black/5 overflow-hidden flex-shrink-0 z-10" style="aspect-ratio: 16/10">
            <img src="{{ asset('assets/img/our-jurnal-1.png') }}" class="w-full h-full object-cover object-center" alt="Gallery Center" />
        </div>
        <div class="hidden md:block w-[18%] lg:w-[20%] rounded-l-sm overflow-hidden flex-shrink-0" style="aspect-ratio: 4/5">
            <img src="{{ asset('assets/img/our-jurnal-3.png') }}" class="w-full h-full object-cover object-center" alt="Gallery Right" />
        </div>
    </div>

    <!-- Born from the Kingdom Section -->
    <section class="w-full max-w-[1920px] mx-auto px-4 md:px-8 lg:px-16 xl:px-24 pt-16 md:pt-24 pb-12 reveal">
        <div class="flex flex-col lg:flex-row gap-12 lg:gap-20 mb-24 md:mb-32">
            <!-- Left: Image (Sticky) -->
            <div class="w-full lg:w-5/12 relative">
                <div class="sticky top-32">
                    <div class="w-full aspect-[4/5] overflow-hidden rounded-sm bg-[#E5E0D8] flex items-center justify-center reveal">
                        <img src="{{ asset('assets/img/about-2.png') }}" alt="Arkan Craftsmanship" class="w-full h-full object-cover" />
                    </div>
                </div>
            </div>

            <!-- Right: Text Content -->
            <div class="w-full lg:w-7/12 flex flex-col pt-8 lg:pt-0">
                <span class="font-sans text-[10px] md:text-xs tracking-[0.2em] text-[#8a8174] uppercase mb-4 reveal">Our Story</span>
                <h2 class="text-4xl md:text-5xl lg:text-[3.5rem] leading-[1.1] font-radley text-[#1B1B18] mb-16 md:mb-20 reveal">
                    Born from the <span class="italic text-[#D2BB9C]">Kingdom,</span><br />built for the world.
                </h2>

                <div class="flex flex-col">
                    <!-- Item 1 -->
                    <div class="flex flex-col border-b border-[#D2BB9C]/20 pb-12 mb-12 relative reveal reveal-delay-1">
                        <div class="font-radley text-[64px] font-light text-[#D2BB9C]/10 leading-none mb-[-16px]">01</div>
                        <span class="font-sans text-[9px] font-medium tracking-[0.4em] text-[#D2BB9C] uppercase mb-[18px]">The Beginning</span>
                        <h3 class="text-[32px] font-radley text-[#1B1B18] leading-[1.2] mb-5">
                            Rooted in <span class="italic text-[#D2BB9C]">Saudi Craftsmanship</span>
                        </h3>
                        <div class="font-sans text-[13.5px] text-[#8a8174] font-light leading-[2] space-y-4">
                            <p>
                                ARKAN was founded in Riyadh with a singular conviction:
                                that the Kingdom possesses the talent, ambition, and
                                cultural depth to supply the world's finest hospitality
                                spaces. What began as a precision-driven amenity studio
                                has grown into one of the region's most trusted OS&E
                                partners — without ever compromising the care embedded in
                                every product we create.
                            </p>
                            <p>
                                Our Saudi roots are not incidental. They are the source of
                                our <strong class="font-medium text-[#1B1B18]">patience, precision, and pride</strong> — qualities
                                that translate directly into the craftsmanship our clients
                                experience at every stage of delivery.
                            </p>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="flex flex-col border-b border-[#D2BB9C]/20 pb-12 mb-12 relative reveal reveal-delay-2">
                        <div class="font-radley text-[64px] font-light text-[#D2BB9C]/10 leading-none mb-[-16px]">02</div>
                        <span class="font-sans text-[9px] font-medium tracking-[0.4em] text-[#D2BB9C] uppercase mb-[18px]">The Philosophy</span>
                        <h3 class="text-[32px] font-radley text-[#1B1B18] leading-[1.2] mb-5">
                            Attention to detail as <span class="italic text-[#D2BB9C]">a discipline</span>
                        </h3>
                        <div class="font-sans text-[13.5px] text-[#8a8174] font-light leading-[2] space-y-4">
                            <p>
                                We believe that hospitality excellence is not built in
                                grand gestures — it is constructed in the accumulation of
                                considered details. The weight of a bathroom amenity. The
                                grain of a folded textile. The precision of a label that
                                aligns perfectly to its container.
                            </p>
                            <p>
                                At ARKAN, <strong class="font-medium text-[#1B1B18]">detail is not decoration. It is our standard.</strong>
                                Every specification we develop, every supplier we qualify,
                                every product we ship carries the mark of that philosophy.
                            </p>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="flex flex-col relative reveal reveal-delay-3 pb-0 mb-0 border-none">
                        <div class="font-radley text-[64px] font-light text-[#D2BB9C]/10 leading-none mb-[-16px]">03</div>
                        <span class="font-sans text-[9px] font-medium tracking-[0.4em] text-[#D2BB9C] uppercase mb-[18px]">The Standard</span>
                        <h3 class="text-[32px] font-radley text-[#1B1B18] leading-[1.2] mb-5">
                            Global refinement, <span class="italic text-[#D2BB9C]">regional mastery</span>
                        </h3>
                        <div class="font-sans text-[13.5px] text-[#8a8174] font-light leading-[2] space-y-4">
                            <p>
                                ARKAN operates across a curated global supply network
                                while maintaining the intimacy and responsiveness of a
                                regional specialist. We hold our suppliers to
                                international hotel-brand standards — auditing, sampling,
                                and approving with the same rigour expected of the world's
                                leading procurement houses.
                            </p>
                            <p>
                                The result: <strong class="font-medium text-[#1B1B18]">a product that feels international and an experience that feels personal.</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Vision & Mission Section -->
        <div class="flex flex-col items-center mt-24 md:mt-32 w-full max-w-[1000px] mx-auto reveal">
            <div class="text-center mb-12 md:mb-16">
                <span class="font-sans text-[10px] md:text-xs tracking-[0.2em] text-[#8a8174] uppercase mb-4 block">Purpose & Direction</span>
                <h2 class="text-3xl md:text-5xl font-radley text-[#1B1B18] tracking-tight">
                    What we stand for.
                    <span class="italic text-[#D2BB9C]">Where we are going</span>
                </h2>
            </div>

            <div class="w-full flex flex-col rounded-sm overflow-hidden reveal shadow-xl">
                <!-- Vision -->
                <div class="w-full p-10 md:p-16 lg:px-20 lg:py-16 relative overflow-hidden bg-[#0A3258]">
                    <div class="absolute inset-0 z-0 opacity-60 mix-blend-screen bg-cover bg-center" style="background-image: url('{{ asset('assets/img/smartboard.png') }}')"></div>
                    <div class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-[15%] z-0 opacity-80 pointer-events-none mix-blend-overlay">
                        <img src="{{ asset('assets/img/new ARKAN STAR.svg') }}" alt="" class="w-64 md:w-96 lg:w-[36rem] h-auto" style="filter: brightness(0) invert(1)" />
                    </div>
                    <div class="relative z-10 max-w-[32rem]">
                        <h3 class="text-4xl md:text-5xl lg:text-[4rem] font-radley mb-6 md:mb-8 font-light text-white leading-none">
                            <span class="italic">Our</span> Vision
                        </h3>
                        <p class="font-sans text-[15px] md:text-base leading-relaxed text-white">
                            To set a new standard for Saudi<br class="hidden md:block" />
                            <span class="italic font-medium text-white/90">led luxury hospitality</span><br class="hidden md:block" />
                            through <span class="italic font-medium text-white/90">design, production, and</span><br class="hidden md:block" />
                            <span class="italic font-medium text-white/90">quality.</span>
                        </p>
                    </div>
                </div>

                <!-- Mission -->
                <div class="w-full bg-[#E2D9C8] p-10 md:p-16 lg:px-20 lg:py-16">
                    <div class="max-w-4xl">
                        <h3 class="text-4xl md:text-5xl lg:text-[4rem] font-radley mb-6 md:mb-8 font-light text-[#A89F91] leading-none">
                            <span class="italic">Our</span> Mission
                        </h3>
                        <p class="font-sans text-[15px] md:text-base leading-relaxed text-[#5c4f3d] font-medium pr-4">
                            Unite world class production capabilities
                            <span class="italic font-bold text-[#1B1B18]">with refined design expertise</span>
                            to deliver
                            <span class="italic font-bold text-[#1B1B18]">premium hospitality</span>
                            solutions defined by consistency, precision, and attention
                            to detail. Through a seamless process from concept to
                            execution, we elevate guest experiences across every
                            touchpoint, ensuring quality that endures and results that
                            perform at the highest level, while proudly representing
                            Saudi excellence on a global stage.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Arkan Section -->
    <section class="w-full max-w-[1920px] mx-auto px-4 md:px-8 lg:px-16 xl:px-24 pt-16 md:pt-32 pb-16 md:pb-24 reveal">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-8 mb-16 md:mb-20 reveal">
            <div>
                <span class="font-sans text-[10px] md:text-xs tracking-[0.2em] text-[#8a8174] uppercase mb-4 block">Why Choose Arkan</span>
                <h2 class="text-4xl md:text-5xl lg:text-[4.5rem] leading-[1.1] font-radley text-[#1B1B18]">
                    The case for <br /><span class="italic text-[#D2BB9C]">choosing differently.</span>
                </h2>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[2px] bg-[#E5E0D8]">
            @php
                $features = [
                    ['icon' => '1 Quality.svg', 'title' => 'Uncompromising Quality Control', 'desc' => 'Every supplier in our network is audited, sampled, and approved against international hotel-brand standards. We do not ship what we have not verified.'],
                    ['icon' => '2 Bespoke.svg', 'title' => 'Bespoke Capability', 'desc' => 'We do not offer catalogues. We develop custom OS&E solutions built around your property\'s brand identity, guest profile, and operational requirements.'],
                    ['icon' => '3 Design to Delivery.svg', 'title' => 'Design-to-Delivery Integration', 'desc' => 'Our 5PL model eliminates the fragmentation of working with multiple vendors. Design, production, digitalisation, logistics, and fulfillment.'],
                    ['icon' => '4 Saudi Made.svg', 'title' => 'Saudi-Made, Internationally Refined', 'desc' => 'Rooted in the Kingdom\'s growing culture of craft and precision, ARKAN brings regional expertise to international standards.'],
                    ['icon' => '5 Realibility.svg', 'title' => 'Reliability & Execution Strength', 'desc' => 'Pre-openings are unforgiving. Our track record of on-time delivery, proactive communication, and contingency management means your project timeline is protected.'],
                    ['icon' => '6 A Partner.svg', 'title' => 'A Partner, Not a Vendor', 'desc' => 'We invest in understanding your project before we propose a solution. Long-term relationships, honest counsel, and genuine accountability.'],
                ];
            @endphp
            @foreach($features as $index => $f)
            @php 
                $delayClass = ($index % 3) + ($index >= 3 ? 1 : 0);
                $delayAttr = $delayClass > 0 ? "reveal-delay-{$delayClass}" : "";
            @endphp
            <div class="group p-8 md:px-11 md:py-14 relative flex flex-col h-full bg-[#FCFAF8] hover:bg-[#F5EED8] transition-colors duration-500 reveal {{ $delayAttr }} cursor-default overflow-hidden">
                <div class="absolute left-0 top-0 bottom-0 w-[3px] bg-gradient-to-b from-transparent via-[#D2BB9C] to-transparent scale-y-0 origin-bottom transition-transform duration-500 group-hover:scale-y-100"></div>
                <div class="w-[52px] h-[52px] border border-[#E5E0D8] group-hover:border-[#D2BB9C] flex items-center justify-center mb-8 bg-transparent text-[#1B1B18] transition-all duration-400 transform group-hover:rotate-45">
                    <img src="{{ asset('assets/img/about-icons/' . $f['icon']) }}" alt="{{ $f['title'] }}" class="w-6 h-6 transform group-hover:-rotate-45 transition-transform duration-400" />
                </div>
                <h3 class="text-[24px] font-radley leading-[1.25] text-[#1B1B18] mb-[14px]">{{ $f['title'] }}</h3>
                <p class="font-sans text-[12px] text-[#8a8174] leading-[1.95] mt-auto">{{ $f['desc'] }}</p>
            </div>
            @endforeach
        </div>

        <div class="w-full bg-[#E6D2BA] mt-8 p-10 md:p-16 lg:px-20 lg:py-16 flex flex-col md:flex-row items-center justify-between gap-8 rounded-sm reveal">
            <h3 class="text-2xl md:text-3xl lg:text-4xl font-radley text-[#1B1B18] flex-1 leading-snug text-center md:text-left">
                "The right OS&E partner does not just supply a hotel —
                <br class="hidden lg:block" /><span class="italic">they help define what the guest experiences."</span>
            </h3>
            <a href="{{ url('/contact') }}" class="flex-shrink-0 inline-block px-10 py-3 rounded-full border border-black/30 text-[#1B1B18] text-xs font-sans font-medium tracking-[0.2em] uppercase hover:bg-[#1B1B18] hover:text-white transition-all duration-300">
                Start A Conversation
            </a>
        </div>
    </section>

    <!-- Arkan At a Glance Section -->
    <section class="w-full relative overflow-hidden text-white flex justify-center pb-24 border-none glance-section reveal group/glance">
        <div class="absolute inset-0 w-full h-full z-0">
            <div class="w-full h-full relative overflow-hidden bg-[#0A3258]">
                <div class="absolute inset-0 w-full h-full bg-cover bg-center mix-blend-screen opacity-90 transition-transform duration-1000 group-hover/glance:scale-105" style="background-image: url('{{ asset('assets/img/smartboard.png') }}')"></div>
                <div class="absolute inset-0 bg-[#0E3559]/30"></div>
            </div>
        </div>

        <div class="relative z-10 w-full max-w-[1400px] mx-auto px-4 md:px-8 lg:px-12 xl:px-16 py-24 md:py-32 lg:py-40 flex flex-col items-center justify-center">
            <div class="text-center mb-16 md:mb-24">
                <span class="font-sans text-[10px] md:text-xs tracking-[0.2em] text-white/70 uppercase mb-4 block">Arkan at a Glance</span>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-radley leading-[1.1]">The numbers behind <span class="italic">the commitment</span></h2>
            </div>

            <div class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 shadow-2xl bg-white/5 backdrop-blur-sm border border-white/10 rounded-sm">
                @php
                    $stats = [
                        ['val' => '500', 'suffix' => '+', 'label' => 'Properties Supplied', 'sub' => 'Across Luxury & Lifestyle Brands'],
                        ['val' => '40', 'suffix' => '+', 'label' => 'Countries Served', 'sub' => 'Active Global Supply Network'],
                        ['val' => '98', 'suffix' => '%', 'label' => 'On-Time Delivery Rate', 'sub' => 'Verified Across All Projects'],
                        ['val' => '5', 'suffix' => 'pl', 'label' => 'Integrated Platform Layers', 'sub' => 'Design Through Fulfillment'],
                    ];
                @endphp
                @foreach($stats as $s)
                <div class="group hover:bg-[#FCFAF8] flex flex-col justify-center items-center text-center px-6 py-12 md:p-12 border-t md:border-t-0 md:border-l lg:border-l-0 border-white/10 transition-colors duration-300 cursor-default">
                    <h3 class="text-5xl md:text-6xl lg:text-[5.5rem] font-sans font-light tracking-tighter mb-4 text-white group-hover:text-[#1B1B18] transition-all">
                        <span class="counter" data-target="{{ $s['val'] }}">0</span><span class="text-3xl text-[#D2BB9C] font-radley ml-1">{{ $s['suffix'] }}</span>
                    </h3>
                    <p class="font-sans text-[11px] md:text-xs font-bold text-white group-hover:text-[#1B1B18] mb-3 transition-colors">{{ $s['label'] }}</p>
                    <p class="font-sans text-[9px] md:text-[10px] tracking-[0.2em] text-white/50 group-hover:text-[#8a8174] uppercase max-w-[150px] leading-relaxed transition-colors">{{ $s['sub'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="w-full max-w-7xl mx-auto px-4 md:px-8 lg:px-16 py-16 md:py-32 reveal">
        <div class="flex flex-col lg:flex-row gap-16 lg:gap-24 relative">
            <div class="w-full lg:w-5/12 flex flex-col z-10">
                <span class="font-radley text-[#6b5c49] text-xs md:text-sm tracking-widest uppercase mb-4 md:mb-6">FAQ</span>
                <h2 class="text-[#5c4f3d] text-4xl md:text-5xl lg:text-6xl leading-[1.1] mb-10 md:mb-16 font-radley">Frequently Asked<br />Questions</h2>
                <div class="w-full aspect-[4/5] object-cover rounded-sm overflow-hidden shadow-2xl">
                    <img src="{{ asset('assets/img/about-4.png') }}" alt="FAQ Image" class="w-full h-full object-cover" />
                </div>
            </div>

            <div class="w-full lg:w-7/12 flex flex-col justify-center z-10 lg:pl-8">
                <div class="w-full flex flex-col pt-8 lg:pt-32">
                    @php
                        $faqs = [
                            ['q' => 'Why Was Arkan Established?', 'a' => 'We aim to set a new standard in luxury hospitality by blending bespoke quality and scalable sustainability.'],
                            ['q' => 'What Types Of Clients Does Arkan Work With?', 'a' => 'We serve a range of sectors, including government, cultural and heritage sites, hospitality, residential, retail, and commercial developments.'],
                            ['q' => 'How Do We Ensure Quality?', 'a' => 'We provide end-to-end bespoke solutions tailored specifically to the conceptual desires and operational necessities of each property.'],
                            ['q' => 'What Is Our Execution Approach?', 'a' => 'By carefully integrating state-of-the-art designs and robust logistics capabilities managed by our expert team.'],
                        ];
                    @endphp
                    @foreach($faqs as $index => $faq)
                    @php $isActive = ($index === 1); @endphp
                    <div class="border-t {{ $loop->last ? 'border-b' : '' }} border-[#5c4f3d]/30 py-6 md:py-8 cursor-pointer group faq-item" onclick="toggleFaq(this)">
                        <div class="flex justify-between items-center text-[#5c4f3d]">
                            <h3 class="font-radley text-lg md:text-xl font-medium pr-4 transition-colors group-hover:text-[#D2BB9C] {{ $isActive ? 'active' : '' }}">{{ $faq['q'] }}</h3>
                            <span class="faq-icon text-xl md:text-2xl font-light font-sans transition-transform duration-300 {{ $isActive ? 'transform rotate-180' : '' }}">{{ $isActive ? '-' : '+' }}</span>
                        </div>
                        <div class="faq-content overflow-hidden transition-all duration-500 ease-in-out {{ $isActive ? 'max-h-[500px] opacity-100' : 'max-h-0 opacity-0' }}">

                            <div class="pt-4 md:pt-6 text-[#8a8174] font-sans text-[15px] md:text-base pr-8 md:pr-16 leading-relaxed">
                                {{ $faq['a'] }}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="relative w-full h-[60vh] md:h-[70vh] min-h-[400px] flex items-center justify-center overflow-hidden">
        <img src="{{ asset('assets/img/our-jurnal-1.png') }}" alt="Contact Arkan background" class="absolute inset-0 w-full h-full object-cover z-0" />
        <div class="absolute inset-0 bg-black/40 xl:bg-black/30 z-0"></div>
        <div class="relative z-10 flex flex-col items-center justify-center text-center">
            <h2 class="text-white font-sans font-medium text-2xl md:text-3xl lg:text-4xl leading-snug md:leading-normal mb-8 md:mb-12 px-6">
                We craft premium amenities with a focus on quality, precision, and<br class="hidden md:block" />
                international standards, supported by some of the strongest.
            </h2>
            <a href="{{ url('/contact') }}" class="inline-block px-8 py-3 rounded-full border border-white text-white text-xs md:text-sm font-manrope tracking-widest hover:bg-white hover:text-black transition-colors duration-300 pointer-events-auto uppercase">
                Contact Us
            </a>
        </div>
    </section>
</main>
</div>
@endsection


@push('scripts')
<script>
    // Manual Scroll Restoration
    if ('scrollRestoration' in history) {
        history.scrollRestoration = 'manual';
    }
    window.scrollTo(0, 0);

    /* ─── FAQ TOGGLE (Smoother) ─── */
    window.toggleFaq = function (element) {
      const content = element.querySelector(".faq-content");
      const icon = element.querySelector(".faq-icon");
      const heading = element.querySelector("h3");
      const allFaqs = document.querySelectorAll(".faq-content");
      const allIcons = document.querySelectorAll(".faq-icon");
      const allHeadings = document.querySelectorAll(".faq-item h3");

      const isOpen = content.classList.contains("opacity-100");

      // Close all
      allFaqs.forEach((f) => {
        f.style.maxHeight = "0";
        f.classList.remove("opacity-100");
        f.classList.add("opacity-0");
      });
      allIcons.forEach((i) => {
        i.classList.remove("rotate-180");
        i.textContent = "+";
      });
      allHeadings.forEach((h) => h.classList.remove("active"));

      if (!isOpen) {
        content.classList.remove("opacity-0");
        content.classList.add("opacity-100");
        content.style.maxHeight = content.scrollHeight + "px";
        icon.classList.add("rotate-180");
        icon.textContent = "-";
        heading.classList.add("active");
      }
    };

    document.addEventListener('DOMContentLoaded', () => {
        /* ─── SCROLL REVEAL ─── */
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("visible");
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll(".reveal").forEach((el) => revealObserver.observe(el));

        /* ─── ANIMATED COUNTERS ─── */
        function animateCounter(el) {
          const target = parseInt(el.dataset.target);
          const duration = 2000;
          const start = performance.now();
          const easeOut = (t) => 1 - Math.pow(1 - t, 3);

          function update(now) {
            const elapsed = now - start;
            const progress = Math.min(elapsed / duration, 1);
            const value = Math.round(easeOut(progress) * target);
            el.textContent = value.toLocaleString();
            if (progress < 1) requestAnimationFrame(update);
            else el.textContent = target.toLocaleString();
          }
          requestAnimationFrame(update);
        }

        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
              if (entry.isIntersecting) {
                const counters = entry.target.querySelectorAll(".counter");
                counters.forEach((c) => {
                  if (!c.dataset.animated) {
                    c.dataset.animated = "true";
                    animateCounter(c);
                  }
                });
              }
            });
          }, { threshold: 0.25 });

        const glanceSection = document.querySelector(".glance-section");
        if (glanceSection) counterObserver.observe(glanceSection);
    });
</script>
@endpush

