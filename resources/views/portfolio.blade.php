@extends('layouts.app')

@php 
    $navbarTheme = 'navbar-light-theme'; 
    $navDark = true; 
    $navbarEntrance = false;
    $bodyClass = 'bg-[#FCFAF8]';
@endphp

@section('content')
<div class="sections-wrapper relative overflow-x-hidden">
<main class="w-full pt-24 lg:pt-24 overflow-x-hidden">

    <!-- 5PL Hospitality OS&E Platform Section -->
    <section class="w-full max-w-[1920px] mx-auto px-4 md:px-8 lg:px-16 xl:px-24 pt-16 md:pt-32 pb-16 md:pb-24">
        <!-- Section Header -->
        <div class="flex flex-col items-center text-center mb-16 md:mb-24">
            <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-[4rem] font-manrope font-normal text-[#1B1B18] tracking-tight mb-6">
                5PL Hospitality OS&E Platform
            </h2>
            <p class="font-sans text-[#8a8174] text-sm md:text-base max-w-3xl leading-relaxed">
                An integrated 5PL platform that manages hospitality OS&E from
                concept to site ready delivery. ARKAN connects design, production,
                digital control, global logistics, and fulfillment into one
                seamless system, ensuring consistency, efficiency, and reliability
                across every stage of operations.
            </p>
        </div>

        <!-- Tabs Navigation -->
        <div class="w-full border-b border-[#E5E0D8] mb-12 md:mb-20">
            <ul class="flex flex-wrap justify-center gap-x-8 md:gap-x-16 lg:gap-x-24 gap-y-4" id="ose-tabs">
                <li>
                    <button class="ose-tab-btn active font-manrope text-[10px] md:text-xs tracking-[0.2em] uppercase pb-4 md:pb-6 relative text-[#1B1B18] font-semibold transition-all" data-target="ose-production">
                        Production
                        <span class="absolute bottom-[-1px] left-0 w-full h-[2px] bg-[#D2BB9C] scale-x-100 transition-transform origin-left tab-indicator"></span>
                    </button>
                </li>
                <li>
                    <button class="ose-tab-btn font-manrope text-[10px] md:text-xs tracking-[0.2em] uppercase pb-4 md:pb-6 relative text-[#8a8174] hover:text-[#1B1B18] font-semibold transition-all" data-target="ose-design">
                        Design
                        <span class="absolute bottom-[-1px] left-0 w-full h-[2px] bg-[#D2BB9C] scale-x-0 transition-transform origin-left tab-indicator"></span>
                    </button>
                </li>
                <li>
                    <button class="ose-tab-btn font-manrope text-[10px] md:text-xs tracking-[0.2em] uppercase pb-4 md:pb-6 relative text-[#8a8174] hover:text-[#1B1B18] font-semibold transition-all" data-target="ose-digitalization">
                        Digitalization
                        <span class="absolute bottom-[-1px] left-0 w-full h-[2px] bg-[#D2BB9C] scale-x-0 transition-transform origin-left tab-indicator"></span>
                    </button>
                </li>
                <li>
                    <button class="ose-tab-btn font-manrope text-[10px] md:text-xs tracking-[0.2em] uppercase pb-4 md:pb-6 relative text-[#8a8174] hover:text-[#1B1B18] font-semibold transition-all" data-target="ose-logistics">
                        Logistics
                        <span class="absolute bottom-[-1px] left-0 w-full h-[2px] bg-[#D2BB9C] scale-x-0 transition-transform origin-left tab-indicator"></span>
                    </button>
                </li>
                <li>
                    <button class="ose-tab-btn font-manrope text-[10px] md:text-xs tracking-[0.2em] uppercase pb-4 md:pb-6 relative text-[#8a8174] hover:text-[#1B1B18] font-semibold transition-all" data-target="ose-fulfillment">
                        Fulfillment
                        <span class="absolute bottom-[-1px] left-0 w-full h-[2px] bg-[#D2BB9C] scale-x-0 transition-transform origin-left tab-indicator"></span>
                    </button>
                </li>
            </ul>
        </div>

        <!-- Tabs Content Area -->
        <div class="w-full max-w-6xl mx-auto relative min-h-[500px]">
            <!-- Tab 2: Production (Active by default) -->
            <div id="ose-production" class="ose-tab-content absolute inset-0 w-full flex flex-col md:flex-row gap-12 md:gap-20 transition-opacity duration-500 opacity-100 z-10">
                <div class="w-full md:w-1/2 aspect-[4/3] bg-[#E2D9C8] flex items-center justify-center overflow-hidden">
                    <img src="{{ asset('assets/img/about-1.png') }}" class="w-full h-full object-cover" alt="Production">
                </div>
                <div class="w-full md:w-1/2 flex flex-col justify-center">
                    <h3 class="text-4xl md:text-5xl lg:text-[4rem] font-radley text-[#1B1B18] mb-4">Production</h3>
                    <p class="font-sans text-[10px] md:text-xs tracking-[0.2em] text-[#D2BB9C] uppercase mb-8 md:mb-12 border-b border-[#E5E0D8] inline-block pb-6">Manufacturing · Quality Control · Sampling</p>
                    <p class="font-sans text-sm md:text-[15px] text-[#8a8174] leading-relaxed mb-8 md:mb-12">
                        We transform designs into tangible luxury. Partnering with a global network of vetted, premium manufacturers, we oversee every step of the production process. From rigorous prototyping to stringent localized quality assurance, we guarantee that the final OS&E products match the original specifications impeccably.
                    </p>
                    <ul class="space-y-3 font-sans text-xs md:text-sm text-[#8a8174]">
                        <li class="flex items-start"><span class="mr-3 text-[#D2BB9C] mt-[2px]">•</span> Real-time end-to-end supply chain visibility</li>
                        <li class="flex items-start"><span class="mr-3 text-[#D2BB9C] mt-[2px]">•</span> Centralized documentation and compliance tracking</li>
                        <li class="flex items-start"><span class="mr-3 text-[#D2BB9C] mt-[2px]">•</span> Automated purchasing and inventory forecasting</li>
                        <li class="flex items-start"><span class="mr-3 text-[#D2BB9C] mt-[2px]">•</span> Custom analytics and financial reporting</li>
                    </ul>
                </div>
            </div>

            <!-- Tab 1: Design -->
            <div id="ose-design" class="ose-tab-content absolute inset-0 w-full flex flex-col md:flex-row gap-12 md:gap-20 transition-opacity duration-500 opacity-0 pointer-events-none z-0">
                <div class="w-full md:w-1/2 aspect-[4/3] bg-[#E2D9C8] flex items-center justify-center overflow-hidden">
                    <img src="{{ asset('assets/img/about-2.png') }}" class="w-full h-full object-cover" alt="Design">
                </div>
                <div class="w-full md:w-1/2 flex flex-col justify-center">
                    <h3 class="text-4xl md:text-5xl lg:text-[4rem] font-radley text-[#1B1B18] mb-4">Design</h3>
                    <p class="font-sans text-[10px] md:text-xs tracking-[0.2em] text-[#D2BB9C] uppercase mb-8 md:mb-12 border-b border-[#E5E0D8] inline-block pb-6">Concept · Standards · Specification</p>
                    <p class="font-sans text-sm md:text-[15px] text-[#8a8174] leading-relaxed mb-8 md:mb-12">
                        Every exceptional hospitality space begins with meticulous design thinking. Our design team translates your brand vision into precise OS&E specifications — from material selection and colour palettes to ergonomic standards and custom production briefs — ensuring every touchpoint reflects your guests' expectations before a single item is produced.
                    </p>
                    <ul class="space-y-3 font-sans text-xs md:text-sm text-[#8a8174]">
                        <li class="flex items-start"><span class="mr-3 text-[#D2BB9C] mt-[2px]">•</span> Brand-aligned concept development and mood boarding</li>
                        <li class="flex items-start"><span class="mr-3 text-[#D2BB9C] mt-[2px]">•</span> Custom OS&E specification packages per category</li>
                        <li class="flex items-start"><span class="mr-3 text-[#D2BB9C] mt-[2px]">•</span> Material and finish selection with sourcing recommendations</li>
                        <li class="flex items-start"><span class="mr-3 text-[#D2BB9C] mt-[2px]">•</span> Design review and approval workflows</li>
                    </ul>
                </div>
            </div>

            <!-- Tab 3: Digitalization -->
            <div id="ose-digitalization" class="ose-tab-content absolute inset-0 w-full flex flex-col md:flex-row gap-12 md:gap-20 transition-opacity duration-500 opacity-0 pointer-events-none z-0">
                <div class="w-full md:w-1/2 aspect-[4/3] bg-[#E2D9C8] flex items-center justify-center overflow-hidden">
                    <img src="{{ asset('assets/img/about-7.png') }}" class="w-full h-full object-cover" alt="Digitalization">
                </div>
                <div class="w-full md:w-1/2 flex flex-col justify-center">
                    <h3 class="text-4xl md:text-5xl lg:text-[4rem] font-radley text-[#1B1B18] mb-4">Digitalization</h3>
                    <p class="font-sans text-[10px] md:text-xs tracking-[0.2em] text-[#D2BB9C] uppercase mb-8 md:mb-12 border-b border-[#E5E0D8] inline-block pb-6">Tracking · Tech Integration · Reporting</p>
                    <p class="font-sans text-sm md:text-[15px] text-[#8a8174] leading-relaxed mb-8 md:mb-12">
                        Visibility and transparency are paramount. Our proprietary 5PL platform provides real-time digital oversight of your entire OS&E pipeline. Track production milestones, monitor global freight movement, and access centralized documentation through intuitive dashboards tailored for hospitality procurement teams.
                    </p>
                    <ul class="space-y-3 font-sans text-xs md:text-sm text-[#8a8174]">
                        <li class="flex items-start"><span class="mr-3 text-[#D2BB9C] mt-[2px]">•</span> Prototyping and pre-production sampling</li>
                        <li class="flex items-start"><span class="mr-3 text-[#D2BB9C] mt-[2px]">•</span> Manufacturing oversight and vendor management</li>
                        <li class="flex items-start"><span class="mr-3 text-[#D2BB9C] mt-[2px]">•</span> Strict Quality Control (QC) standards and inspections</li>
                        <li class="flex items-start"><span class="mr-3 text-[#D2BB9C] mt-[2px]">•</span> Ethical and sustainable sourcing practices</li>
                    </ul>
                </div>
            </div>

            <!-- Tab 4: Logistics -->
            <div id="ose-logistics" class="ose-tab-content absolute inset-0 w-full flex flex-col md:flex-row gap-12 md:gap-20 transition-opacity duration-500 opacity-0 pointer-events-none z-0">
                <div class="w-full md:w-1/2 aspect-[4/3] bg-[#E2D9C8] flex items-center justify-center overflow-hidden">
                    <img src="{{ asset('assets/img/about-bg-2.png') }}" class="w-full h-full object-cover" alt="Logistics">
                </div>
                <div class="w-full md:w-1/2 flex flex-col justify-center">
                    <h3 class="text-4xl md:text-5xl lg:text-[4rem] font-radley text-[#1B1B18] mb-4">Logistics</h3>
                    <p class="font-sans text-[10px] md:text-xs tracking-[0.2em] text-[#D2BB9C] uppercase mb-8 md:mb-12 border-b border-[#E5E0D8] inline-block pb-6">Freight · Customs · Warehousing</p>
                    <p class="font-sans text-sm md:text-[15px] text-[#8a8174] leading-relaxed mb-8 md:mb-12">
                        Navigating global trade complexities with precision. We orchestrate the reliable movement of goods from international manufacturing hubs directly to your project destination. Our experts handle multi-modal freight forwarding, complex customs clearance, and strategic regional warehousing to prevent luxury hotel launch delays.
                    </p>
                    <ul class="space-y-3 font-sans text-xs md:text-sm text-[#8a8174]">
                        <li class="flex items-start"><span class="mr-3 text-[#D2BB9C] mt-[2px]">•</span> Multi-modal global freight forwarding (Air, Sea, Land)</li>
                        <li class="flex items-start"><span class="mr-3 text-[#D2BB9C] mt-[2px]">•</span> Expert customs clearance and duty optimization</li>
                        <li class="flex items-start"><span class="mr-3 text-[#D2BB9C] mt-[2px]">•</span> Climate-controlled regional staging and warehousing</li>
                        <li class="flex items-start"><span class="mr-3 text-[#D2BB9C] mt-[2px]">•</span> Consolidation services for fragmented OS&E orders</li>
                    </ul>
                </div>
            </div>

            <!-- Tab 5: Fulfillment -->
            <div id="ose-fulfillment" class="ose-tab-content absolute inset-0 w-full flex flex-col md:flex-row gap-12 md:gap-20 transition-opacity duration-500 opacity-0 pointer-events-none z-0">
                <div class="w-full md:w-1/2 aspect-[4/3] bg-[#E2D9C8] flex items-center justify-center overflow-hidden">
                    <img src="{{ asset('assets/img/our-jurnal-1.png') }}" class="w-full h-full object-cover" alt="Fulfillment">
                </div>
                <div class="w-full md:w-1/2 flex flex-col justify-center">
                    <h3 class="text-4xl md:text-5xl lg:text-[4rem] font-radley text-[#1B1B18] mb-4">Fulfillment</h3>
                    <p class="font-sans text-[10px] md:text-xs tracking-[0.2em] text-[#D2BB9C] uppercase mb-8 md:mb-12 border-b border-[#E5E0D8] inline-block pb-6">Site Delivery · White-glove setup · Handover</p>
                    <p class="font-sans text-sm md:text-[15px] text-[#8a8174] leading-relaxed mb-8 md:mb-12">
                        The critical final mile. Our fulfillment teams ensure that every piece of OS&E arrives at the property exactly when the construction and operational teams are ready. From synchronized room-by-room staging to white-glove installation and final debris removal, we ensure a pristine, site-ready handover for your grand opening.
                    </p>
                    <ul class="space-y-3 font-sans text-xs md:text-sm text-[#8a8174]">
                        <li class="flex items-start"><span class="mr-3 text-[#D2BB9C] mt-[2px]">•</span> Synchronized Just-in-Time (JIT) site deliveries</li>
                        <li class="flex items-start"><span class="mr-3 text-[#D2BB9C] mt-[2px]">•</span> Room-in-a-box packing and sequential unpacking</li>
                        <li class="flex items-start"><span class="mr-3 text-[#D2BB9C] mt-[2px]">•</span> White-glove interior placement and setup services</li>
                        <li class="flex items-start"><span class="mr-3 text-[#D2BB9C] mt-[2px]">•</span> Comprehensive final handover and project sign-off</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section class="max-w-[1920px] mx-auto px-4 md:px-8 lg:px-16 xl:px-24 pb-16 md:pb-24">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Project items - In a real app these would be dynamic -->
            @php
                $portfolioItems = [
                    ['img' => 'about-1.png', 'cat' => 'Hospitality Manufacturing', 'title' => 'The Art of Precision in Luxury Hospitality Production'],
                    ['img' => 'about-bg-2.png', 'cat' => 'Design Excellence', 'title' => 'Crafting bespoke architectural details'],
                    ['img' => 'about-3.png', 'cat' => 'Material Innovation', 'title' => 'Refined textures for premium interiors'],
                    ['img' => 'about-4.png', 'cat' => 'Global Standards', 'title' => 'International quality, local soul'],
                    ['img' => 'about-5.png', 'cat' => 'Curation', 'title' => 'Bespoke amenity kits for elite travel'],
                    ['img' => 'about-6.png', 'cat' => 'Wellness', 'title' => 'Soothing scents and organic care'],
                    ['img' => 'about-7.png', 'cat' => 'Atmosphere', 'title' => 'Elevating guest experiences with aroma'],
                    ['img' => 'about-8.png', 'cat' => 'Hospitality OS&E', 'title' => 'Complete solutions from design to site'],
                    ['img' => 'our-jurnal-1.png', 'cat' => 'Legacy', 'title' => 'Establishing the ARKAN standard'],
                ];
            @endphp

            @foreach($portfolioItems as $item)
            <div class="portfolio-item opacity-0 group cursor-pointer overflow-hidden relative">
                <div class="aspect-square overflow-hidden">
                    <img src="{{ asset('assets/img/' . $item['img']) }}" alt="{{ $item['title'] }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
                </div>
                <div class="absolute inset-0 bg-black/40 flex flex-col items-center justify-center text-center p-6 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    <span class="text-[10px] md:text-xs font-sans font-bold tracking-[0.3em] text-white/70 uppercase mb-2">{{ $item['cat'] }}</span>
                    <h3 class="text-lg md:text-2xl font-radley text-white uppercase leading-tight">{{ $item['title'] }}</h3>
                </div>
            </div>
            @endforeach
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

@push('styles')
<style>
    /* Portfolio Hover Effects */
    .portfolio-item h3 {
      transform: translateY(20px);
      transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .portfolio-item span {
      transform: translateY(10px);
      transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1) 0.1s;
    }

    .portfolio-item:hover h3,
    .portfolio-item:hover span {
      transform: translateY(0);
    }
</style>
@endpush


@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const tabs = document.querySelectorAll(".ose-tab-btn");
        const contents = document.querySelectorAll(".ose-tab-content");
        let currentTabIndex = 0;
        let tabInterval;
        const intervalTime = 1500; // 1.5 seconds

        function switchTab(index) {
            const tab = tabs[index];
            const targetId = tab.dataset.target;

            // Update tabs
            tabs.forEach((t, i) => {
                const isTarget = i === index;
                t.classList.toggle("active", isTarget);
                t.classList.toggle("text-[#1B1B18]", isTarget);
                t.classList.toggle("text-[#8a8174]", !isTarget);
                t.querySelector(".tab-indicator").classList.toggle("scale-x-100", isTarget);
                t.querySelector(".tab-indicator").classList.toggle("scale-x-0", !isTarget);
            });

            // Update contents
            contents.forEach(c => {
                const isTarget = c.id === targetId;
                if (isTarget) {
                    c.classList.remove("opacity-0", "pointer-events-none", "z-0");
                    c.classList.add("opacity-100", "z-10");
                } else {
                    c.classList.add("opacity-0", "pointer-events-none", "z-0");
                    c.classList.remove("opacity-100", "z-10");
                }
            });
            
            currentTabIndex = index;
        }

        function startInterval() {
            stopInterval();
            tabInterval = setInterval(() => {
                currentTabIndex = (currentTabIndex + 1) % tabs.length;
                switchTab(currentTabIndex);
            }, intervalTime);
        }

        function stopInterval() {
            if (tabInterval) clearInterval(tabInterval);
        }

        tabs.forEach((tab, index) => {
            tab.addEventListener("click", () => {
                switchTab(index);
                stopInterval(); // Stop auto-play on manual click
            });
        });

        // Initialize
        switchTab(0);
        startInterval();

        // Pause on hover
        const container = document.querySelector(".sections-wrapper");
        if (container) {
            container.addEventListener("mouseenter", stopInterval);
            container.addEventListener("mouseleave", startInterval);
        }

        // GSAP Portfolio staggered entrance
        if (typeof gsap !== 'undefined') {
            gsap.to(".portfolio-item", {
                opacity: 1, 
                y: 0, 
                startAt: { y: 40, opacity: 0 },
                duration: 1.2, 
                stagger: 0.15, 
                ease: "expo.out",
                scrollTrigger: { 
                    trigger: ".portfolio-item", 
                    start: "top 85%",
                    toggleActions: "play none none none"
                }
            });
        }
    });
</script>
@endpush
