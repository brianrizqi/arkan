@extends('layouts.app')

@php $noFooter = true; @endphp

@section('content')
<div class="sections-wrapper relative overflow-x-hidden">
    <!-- Hero Section -->
    <section id="hero-section" class="section-panel relative min-h-screen flex flex-col justify-between overflow-hidden bg-black" style="z-index: 50">
        <div class="absolute inset-0 overflow-hidden">
            <video autoplay muted loop playsinline class="w-full h-full object-cover" src="{{ asset('assets/video/Hero Footage.MOV') }}"></video>
        </div>
        <div class="absolute inset-0 bg-black/30"></div>
        <main class="relative z-10 flex-grow flex flex-col items-center justify-center text-center px-[var(--space-4)]">
            <div class="hero-content stack-space-4">
                <div class="logo-text opacity-0 scale-95">
                    <img src="{{ asset('assets/img/logo-arkan.svg') }}" alt="Arkan Logo" class="w-full max-w-2xl mx-auto h-auto" />
                </div>
                <p class="tagline opacity-0 text-[10px] sm:text-xs md:text-lg font-manrope tracking-[0.4em] md:tracking-[0.6em] text-white/70 uppercase">
                    Crafting the standard of refined hospitality
                </p>
            </div>
        </main>
    </section>

    <!-- About Section -->
    <section id="about" class="relative bg-[#F5F1E8] p-0" style="z-index: 50">
        <div id="about-scroll-wrapper" class="relative w-full h-[250vh]">
            <div class="absolute inset-0 z-10 pointer-events-none hidden md:block">
                <div class="about-natural-item speed-up absolute top-[8%] left-[5%] w-[22vw] max-w-[340px]"><img src="{{ asset('assets/img/about-1.png') }}" class="w-full h-auto rounded-sm" /></div>
                <div class="about-natural-item speed-slow absolute top-[38%] left-[10%] w-[18vw] max-w-[280px]"><img src="{{ asset('assets/img/about-3.png') }}" class="w-full h-auto rounded-sm" /></div>
                <div class="about-natural-item speed-up absolute top-[68%] left-[3%] w-[20vw] max-w-[320px]"><img src="{{ asset('assets/img/about-6.png') }}" class="w-full h-auto rounded-sm" /></div>
                <div class="about-natural-item speed-up absolute top-[18%] right-[6%] w-[20vw] max-w-[320px]"><img src="{{ asset('assets/img/about-4.png') }}" class="w-full h-auto rounded-sm" /></div>
                <div class="about-natural-item speed-slow absolute top-[48%] right-[3%] w-[18vw] max-w-[280px]"><img src="{{ asset('assets/img/about-2.png') }}" class="w-full h-auto rounded-sm" /></div>
                <div class="about-natural-item speed-up absolute top-[78%] right-[7%] w-[22vw] max-w-[340px]"><img src="{{ asset('assets/img/about-8.png') }}" class="w-full h-auto rounded-sm" /></div>
            </div>
            <div id="about-pin-viewport" class="relative z-20 w-full h-screen flex items-center justify-center pointer-events-none">
                <div id="about-fixed-narrative" class="w-full max-w-5xl px-6 text-center pointer-events-auto opacity-0 translate-y-8">
                    <div class="flex justify-center mb-10">
                        <svg viewBox="0 0 108 109" fill="none" class="w-16 md:w-24 h-auto animate-pulse-slow">
                            <path d="M54.9408 38.9644H52.9609V0.000488281L54.9408 0.000488369V38.9644Z" fill="#B99668" />
                            <path d="M54.9408 108.9H52.9609V69.9357H54.9408V108.9Z" fill="#B99668" />
                            <path d="M69.293 55.4491V53.4509H107.899V55.4491H69.293Z" fill="#B99668" />
                            <path d="M0 55.4491L1.73082e-07 53.4509H38.6064V55.4491H0Z" fill="#B99668" />
                            <path d="M61.3003 48.4452L59.9004 47.0323L76.6997 30.0774L78.0997 31.4903L61.3003 48.4452Z" fill="#B99668" />
                            <path d="M31.2007 78.8225L29.8008 77.4096L46.6001 60.4547L48 61.8677L31.2007 78.8225Z" fill="#B99668" />
                            <path d="M59.9004 61.8677L61.3003 60.4548L78.0997 77.4096L76.6997 78.8225L59.9004 61.8677Z" fill="#B99668" />
                            <path d="M29.8008 31.4902L31.2007 30.0773L48 47.0322L46.6 48.445L29.8008 31.4902Z" fill="#B99668" />
                            <path d="M62.35 53.4363L53.9504 61.9137L45.5508 53.4363L53.9504 44.9589L62.35 53.4363ZM48.3506 53.4363L53.9504 59.0879L59.5502 53.4363L53.9504 47.7846L48.3506 53.4363Z" fill="#B99668" />
                        </svg>
                    </div>
                    <div class="relative min-h-[350px] flex items-center justify-center">
                        <div id="about-v1" class="about-v-phase absolute inset-0 flex items-center justify-center">
                            <h2 class="text-5xl sm:text-7xl lg:text-8xl font-radley text-[#1B1B18] font-normal leading-[1.1] tracking-tight">Crafted in Saudi.<br /><span class="italic font-light">Refined Worldwide.</span></h2>
                        </div>
                        <div id="about-v2" class="about-v-phase absolute inset-0 flex items-center justify-center opacity-0 pointer-events-none">
                            <p class="text-xl md:text-3xl font-sans font-light text-[#333333] max-w-3xl mx-auto leading-relaxed">Arkan is a Saudi based luxury hospitality company combining leading hospitality production with exceptional design talent. We craft premium amenities with a focus on quality, precision, and international standards.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="about-mobile-moments" class="md:hidden absolute inset-0 z-10 pointer-events-none overflow-hidden">
                <div class="about-mobile-float speed-up absolute top-[15%] left-[-10%] w-[60vw]"><img src="{{ asset('assets/img/about-1.png') }}" class="w-full h-auto rounded-sm" /></div>
                <div class="about-mobile-float speed-slow absolute top-[40%] right-[-15%] w-[55vw]"><img src="{{ asset('assets/img/about-4.png') }}" class="w-full h-auto rounded-sm" /></div>
                <div class="about-mobile-float speed-up absolute top-[65%] left-[-5%] w-[65vw]"><img src="{{ asset('assets/img/about-6.png') }}" class="w-full h-auto rounded-sm" /></div>
                <div class="about-mobile-float speed-slow absolute top-[85%] right-[-10%] w-[60vw]"><img src="{{ asset('assets/img/about-2.png') }}" class="w-full h-auto rounded-sm" /></div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="relative min-h-screen py-20 flex flex-col justify-center bg-[#F5F1E8]" style="z-index: 60">
        <div id="services-star-container" class="hidden sticky top-0 left-0 w-full h-screen flex items-center justify-center z-0 pointer-events-none">
            <div id="services-star" class="opacity-0 scale-[0.6] w-96 h-96 md:w-[600px] md:h-[600px] lg:w-[800px] lg:h-[800px] flex justify-center items-center transition-opacity duration-500">
                <img src="{{ asset('assets/img/ARKAN STAR.svg') }}" alt="ARKAN Star" class="w-full h-full aspect-square object-contain" />
            </div>
        </div>
        <div id="services-content-wrapper" class="container mx-auto px-[var(--space-4)] md:px-[var(--space-6)] lg:px-[var(--space-8)] max-w-[1600px] relative z-10">
            <div class="text-center mb-[var(--space-6)] md:mb-[var(--space-8)]">
                <h2 class="services-title section-title opacity-0 text-5xl md:text-7xl font-radley text-[#1B1B18]"><span class="italic">Our</span> Craft</h2>
            </div>
            <div class="flex flex-col lg:flex-row items-center lg:items-start justify-center gap-12 lg:gap-24 max-w-[1400px] mx-auto">
                <div class="w-full lg:w-[45%]">
                    <div class="flex flex-col">
                        <div class="service-item opacity-0 cursor-pointer group/item flex items-center justify-between py-6 md:py-8 border-t border-[#1B1B18]/10 transition-all hover:bg-black/5 px-4 -mx-4 rounded-lg" data-service-image="{{ asset('assets/img/about-1.png') }}"><div class="flex items-start"><h4 class="text-xl md:text-2xl lg:text-3xl font-radley text-[#1B1B18] tracking-tight leading-snug group-hover/item:translate-x-2 transition-transform">Hospitality Amenities Thoughtfully Made</h4></div><img src="{{ asset('assets/img/ARKAN STAR 2.svg') }}" class="service-hover-star w-8 h-8 md:w-10 md:h-10 shrink-0 ml-4" /></div>
                        <div class="service-item opacity-0 cursor-pointer group/item flex items-center justify-between py-6 md:py-8 border-t border-[#1B1B18]/10 transition-all hover:bg-black/5 px-4 -mx-4 rounded-lg" data-service-image="{{ asset('assets/img/about-2.png') }}"><div class="flex items-start"><h4 class="text-xl md:text-2xl lg:text-3xl font-radley text-[#1B1B18] tracking-tight leading-snug group-hover/item:translate-x-2 transition-transform">Bespoke Product Creation</h4></div><img src="{{ asset('assets/img/ARKAN STAR 2.svg') }}" class="service-hover-star w-8 h-8 md:w-10 md:h-10 shrink-0 ml-4" /></div>
                        <div class="service-item opacity-0 cursor-pointer group/item flex items-center justify-between py-6 md:py-8 border-t border-[#1B1B18]/10 transition-all hover:bg-black/5 px-4 -mx-4 rounded-lg" data-service-image="{{ asset('assets/img/about-3.png') }}"><div class="flex items-start"><h4 class="text-xl md:text-2xl lg:text-3xl font-radley text-[#1B1B18] tracking-tight leading-snug group-hover/item:translate-x-2 transition-transform">Materials & Finish Selection</h4></div><img src="{{ asset('assets/img/ARKAN STAR 2.svg') }}" class="service-hover-star w-8 h-8 md:w-10 md:h-10 shrink-0 ml-4" /></div>
                        <div class="service-item opacity-0 cursor-pointer group/item flex items-center justify-between py-6 md:py-8 border-t border-[#1B1B18]/10 transition-all hover:bg-black/5 px-4 -mx-4 rounded-lg" data-service-image="{{ asset('assets/img/about-4.png') }}"><div class="flex items-start"><h4 class="text-xl md:text-2xl lg:text-3xl font-radley text-[#1B1B18] tracking-tight leading-snug group-hover/item:translate-x-2 transition-transform">From Design to Production</h4></div><img src="{{ asset('assets/img/ARKAN STAR 2.svg') }}" class="service-hover-star w-8 h-8 md:w-10 md:h-10 shrink-0 ml-4" /></div>
                        <div class="service-item opacity-0 cursor-pointer group/item flex items-center justify-between py-6 md:py-8 border-t border-[#1B1B18]/10 transition-all hover:bg-black/5 px-4 -mx-4 rounded-lg" data-service-image="{{ asset('assets/img/about-5.png') }}"><div class="flex items-start"><h4 class="text-xl md:text-2xl lg:text-3xl font-radley text-[#1B1B18] tracking-tight leading-snug group-hover/item:translate-x-2 transition-transform">Curated Packaging & Presentation</h4></div><img src="{{ asset('assets/img/ARKAN STAR 2.svg') }}" class="service-hover-star w-8 h-8 md:w-10 md:h-10 shrink-0 ml-4" /></div>
                        <div class="service-item opacity-0 cursor-pointer group/item flex items-center justify-between py-6 md:py-8 border-t border-[#1B1B18]/10 transition-all hover:bg-black/5 px-4 -mx-4 rounded-lg" data-service-image="{{ asset('assets/img/about-6.png') }}"><div class="flex items-start"><h4 class="text-xl md:text-2xl lg:text-3xl font-radley text-[#1B1B18] tracking-tight leading-snug group-hover/item:translate-x-2 transition-transform">Precision Production & Quality Oversight</h4></div><img src="{{ asset('assets/img/ARKAN STAR 2.svg') }}" class="service-hover-star w-8 h-8 md:w-10 md:h-10 shrink-0 ml-4" /></div>
                    </div>
                </div>
                <div class="w-full lg:w-[45%]">
                    <div class="services-image-container opacity-0 relative overflow-hidden rounded-2xl md:rounded-[2rem] aspect-square lg:aspect-[4/5] bg-[#1B1B18]">
                        <img src="{{ asset('assets/img/our-services.png') }}" id="service-display-image" alt="Our Services" class="w-full h-full object-cover transition-all duration-700" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Industries Section -->
    <section id="industries" class="relative py-[var(--space-5)] md:py-[var(--space-7)] px-[var(--space-2)] md:px-[var(--space-4)] bg-[#F5F1E8]" style="z-index: 70">
        <div class="max-w-[1920px] mx-auto">
            <div class="industries-slider-wrapper relative overflow-hidden rounded-xl border-[var(--space-1)] border-[#F5F1E8] aspect-[1/1] sm:aspect-[4/3] md:aspect-[16/9] lg:aspect-[16/10]">
                <div class="industries-slider w-full h-full relative">
                    <div class="industry-slide absolute inset-0 opacity-0 z-0 overflow-hidden"><div class="absolute inset-0"><img src="{{ asset('assets/img/industries/Hotel.jpg') }}" class="slide-bg w-full h-full object-cover" /><div class="absolute inset-0 bg-black/40"></div></div><div class="relative z-20 h-full flex flex-col items-center justify-center text-center px-6"><p class="text-[10px] md:text-sm uppercase tracking-[0.3em] text-white/70 mb-4 font-manrope">Industry We Serve</p><div class="relative inline-block"><h2 class="text-3xl sm:text-5xl md:text-6xl lg:text-8xl font-radley text-white">Luxury Hotels &amp; Resorts</h2></div></div></div>
                    <div class="industry-slide absolute inset-0 opacity-0 z-0 overflow-hidden"><div class="absolute inset-0"><img src="{{ asset('assets/img/industries/Aviation.jpg') }}" class="slide-bg w-full h-full object-cover" /><div class="absolute inset-0 bg-black/40"></div></div><div class="relative z-20 h-full flex flex-col items-center justify-center text-center px-6"><p class="text-[10px] md:text-sm uppercase tracking-[0.3em] text-white/70 mb-4 font-manrope">Industry We Serve</p><div class="relative inline-block"><h2 class="text-3xl sm:text-5xl md:text-6xl lg:text-8xl font-radley text-white">Aviation &amp; Premium Travels</h2></div></div></div>
                    <div class="industry-slide absolute inset-0 opacity-0 z-0 overflow-hidden"><div class="absolute inset-0"><img src="{{ asset('assets/img/industries/Wellness.jpg') }}" class="slide-bg w-full h-full object-cover" /><div class="absolute inset-0 bg-black/40"></div></div><div class="relative z-20 h-full flex flex-col items-center justify-center text-center px-6"><p class="text-[10px] md:text-sm uppercase tracking-[0.3em] text-white/70 mb-4 font-manrope">Industry We Serve</p><div class="relative inline-block"><h2 class="text-3xl sm:text-5xl md:text-6xl lg:text-8xl font-radley text-white">Private Healthcare &amp; Wellness</h2></div></div></div>
                    <div class="industry-slide absolute inset-0 opacity-0 z-0 overflow-hidden"><div class="absolute inset-0"><img src="{{ asset('assets/img/industries/Marine.jpg') }}" class="slide-bg w-full h-full object-cover" /><div class="absolute inset-0 bg-black/40"></div></div><div class="relative z-20 h-full flex flex-col items-center justify-center text-center px-6"><p class="text-[10px] md:text-sm uppercase tracking-[0.3em] text-white/70 mb-4 font-manrope">Industry We Serve</p><div class="relative inline-block"><h2 class="text-3xl sm:text-5xl md:text-6xl lg:text-8xl font-radley text-white">Yacht &amp; Marine Hospitality</h2></div></div></div>
                    <div class="industry-slide absolute inset-0 opacity-0 z-0 overflow-hidden"><div class="absolute inset-0"><img src="{{ asset('assets/img/industries/Property.jpg') }}" class="slide-bg w-full h-full object-cover" /><div class="absolute inset-0 bg-black/40"></div></div><div class="relative z-20 h-full flex flex-col items-center justify-center text-center px-6"><p class="text-[10px] md:text-sm uppercase tracking-[0.3em] text-white/70 mb-4 font-manrope">Industry We Serve</p><div class="relative inline-block"><h2 class="text-3xl sm:text-5xl md:text-6xl lg:text-8xl font-radley text-white">Branded Residence &amp; Real Estate</h2></div></div></div>
                    <div class="industry-slide absolute inset-0 opacity-0 z-0 overflow-hidden"><div class="absolute inset-0"><img src="{{ asset('assets/img/industries/Retail & Experience.jpg') }}" class="slide-bg w-full h-full object-cover" /><div class="absolute inset-0 bg-black/40"></div></div><div class="relative z-20 h-full flex flex-col items-center justify-center text-center px-6"><p class="text-[10px] md:text-sm uppercase tracking-[0.3em] text-white/70 mb-4 font-manrope">Industry We Serve</p><div class="relative inline-block"><h2 class="text-3xl sm:text-5xl md:text-6xl lg:text-8xl font-radley text-white">Luxury Retail &amp; Experience Spaces</h2></div></div></div>
                </div>
                <div class="absolute inset-x-0 top-1/2 -translate-y-1/2 z-30 flex justify-between px-4 md:px-12 pointer-events-none">
                    <button id="prev-industry" class="nav-btn transition-all duration-500 opacity-0 pointer-events-none w-12 h-12 md:w-16 md:h-16 rounded-full border border-white/20 flex items-center justify-center text-white backdrop-blur-sm pointer-events-auto hover:bg-white hover:text-black"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M15 19l-7-7 7-7" stroke-linecap="round" stroke-linejoin="round" /></svg></button>
                    <button id="next-industry" class="nav-btn transition-all duration-500 w-12 h-12 md:w-16 md:h-16 rounded-full border border-white/20 flex items-center justify-center text-white backdrop-blur-sm pointer-events-auto hover:bg-white hover:text-black"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" /></svg></button>
                </div>
                <div id="industry-dots" class="absolute bottom-6 md:bottom-10 left-1/2 -translate-x-1/2 z-30 flex gap-3"></div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section id="process" class="relative bg-[#F5F1E8]" style="z-index: 80">
        <div id="process-pin-container" class="relative h-screen w-full overflow-hidden flex flex-col pt-[80px] md:pt-[100px] pb-0 px-4 md:px-8">
            <div class="relative text-center max-w-7xl mx-auto mb-0 shrink-0">
                <div class="process-ornament opacity-0 flex justify-center items-center mb-1 md:mb-2 text-[#1B1B18]">
                    <svg viewBox="0 0 108 109" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-8 md:w-10 aspect-square">
                        <g clip-path="url(#clip0_process)">
                            <path d="M54.9408 38.9644H52.9609V0.000488281L54.9408 0.000488369V38.9644Z" fill="currentColor" />
                            <path d="M54.9408 108.9H52.9609V69.9357H54.9408V108.9Z" fill="currentColor" />
                            <path d="M69.293 55.4491V53.4509H107.899V55.4491H69.293Z" fill="currentColor" />
                            <path d="M0 55.4491L1.73082e-07 53.4509H38.6064V55.4491H0Z" fill="currentColor" />
                            <path d="M61.3003 48.4452L59.9004 47.0323L76.6997 30.0774L78.0997 31.4903L61.3003 48.4452Z" fill="currentColor" />
                            <path d="M31.2007 78.8225L29.8008 77.4096L46.6001 60.4547L48 61.8677L31.2007 78.8225Z" fill="currentColor" />
                            <path d="M59.9004 61.8677L61.3003 60.4548L78.0997 77.4096L76.6997 78.8225L59.9004 61.8677Z" fill="currentColor" />
                            <path d="M29.8008 31.4902L31.2007 30.0773L48 47.0322L46.6 48.445L29.8008 31.4902Z" fill="currentColor" />
                            <path d="M62.35 53.4363L53.9504 61.9137L45.5508 53.4363L53.9504 44.9589L62.35 53.4363ZM48.3506 53.4363L53.9504 59.0879L59.5502 53.4363L53.9504 47.7846L48.3506 53.4363Z" fill="currentColor" />
                        </g>
                        <defs><clipPath id="clip0_process"><rect width="107.9" height="108.899" fill="white" transform="translate(0 0.000488281)" /></clipPath></defs>
                    </svg>
                </div>
                <h2 class="process-header-title section-title opacity-0 text-5xl md:text-7xl font-radley text-[#1B1B18] mb-1 md:mb-2"><span class="italic font-radley">Design</span> <span class="font-radley">to Delivery</span></h2>
                <div class="max-w-3xl mx-auto"><p class="process-header-text section-description opacity-0 text-xs md:text-sm font-sans tracking-wide text-[#1B1B18]/70 leading-relaxed">An integrated 5PL platform that manages hospitality OS&E from concept to site ready delivery. ARKAN connects design, production, digital control, global logistics, and fulfillment into one seamless system, ensuring consistency, efficiency, and reliability across every stage of operations.</p></div>
            </div>
            <div class="process-card-wrapper relative w-full flex-1 max-w-[1920px] mx-auto overflow-hidden group">
                <div class="absolute inset-0 z-0">
                    <div class="process-bg-wrapper absolute inset-0 overflow-hidden" style="z-index: 10"><div class="process-bg w-full h-full overflow-hidden"><div class="absolute inset-[-75%] flex items-center justify-center"><iframe src="https://www.youtube.com/embed/VKAKbueezMk?autoplay=1&mute=1&loop=1&playlist=VKAKbueezMk&controls=0&showinfo=0&rel=0&modestbranding=1&playsinline=1&enablejsapi=1" class="w-full h-full border-0 pointer-events-none" allow="autoplay; encrypted-media" allowfullscreen></iframe></div></div><div class="absolute inset-0 bg-black/30 pointer-events-none"></div></div>
                    <div class="process-bg-wrapper process-bg-2 absolute inset-0 overflow-hidden" style="z-index: 20"><div class="process-bg w-full h-full overflow-hidden"><div class="absolute inset-[-75%] flex items-center justify-center"><iframe data-src="https://www.youtube.com/embed/2v_7UH_nLv4?autoplay=1&mute=1&loop=1&playlist=2v_7UH_nLv4&controls=0&showinfo=0&rel=0&modestbranding=1&playsinline=1&enablejsapi=1" class="w-full h-full border-0 pointer-events-none yt-lazy" loading="lazy" allow="autoplay; encrypted-media" allowfullscreen></iframe></div></div><div class="absolute inset-0 bg-black/30 pointer-events-none"></div></div>
                    <div class="process-bg-wrapper process-bg-3 absolute inset-0 overflow-hidden" style="z-index: 30"><div class="process-bg w-full h-full overflow-hidden"><div class="absolute inset-[-75%] flex items-center justify-center"><iframe src="https://www.youtube.com/embed/jPkBJY1KI_Q?autoplay=1&mute=1&loop=1&playlist=jPkBJY1KI_Q&controls=0&showinfo=0&rel=0&modestbranding=1&playsinline=1&enablejsapi=1" class="w-full h-full border-0 pointer-events-none" allow="autoplay; encrypted-media" allowfullscreen></iframe></div></div><div class="absolute inset-0 bg-black/30 pointer-events-none"></div></div>
                    <div class="process-bg-wrapper process-bg-4 absolute inset-0 overflow-hidden" style="z-index: 40"><div class="process-bg w-full h-full overflow-hidden bg-black flex items-center justify-center"><img src="{{ asset('assets/img/about-2.png') }}" class="w-full h-full object-cover opacity-80" /></div><div class="absolute inset-0 bg-black/30 pointer-events-none"></div></div>
                    <div class="process-bg-wrapper process-bg-5 absolute inset-0 overflow-hidden" style="z-index: 50"><div class="process-bg w-full h-full overflow-hidden bg-black flex items-center justify-center"><img src="{{ asset('assets/img/about-1.png') }}" class="w-full h-full object-cover opacity-80" /></div><div class="absolute inset-0 bg-black/30 pointer-events-none"></div></div>
                </div>
                <div class="relative z-50 w-full h-full flex flex-col items-center justify-center text-center">
                    <div class="process-phase phase-design absolute inset-0 flex flex-col items-center justify-center opacity-100"><h3 class="text-2xl sm:text-6xl md:text-8xl lg:text-[6.2rem] xl:text-[10rem] font-sans font-bold text-white tracking-normal uppercase">Design</h3></div>
                    <div class="process-phase phase-production absolute inset-0 flex flex-col items-center justify-center opacity-0"><h3 class="text-2xl sm:text-6xl md:text-8xl lg:text-[6.2rem] xl:text-[10rem] font-sans text-white tracking-normal uppercase font-bold">Production</h3></div>
                    <div class="process-phase phase-digitalization absolute inset-0 flex flex-col items-center justify-center opacity-0"><h3 class="text-2xl sm:text-6xl md:text-8xl lg:text-[5.5rem] xl:text-[8.5rem] font-sans text-white tracking-normal uppercase font-bold">Digitalization</h3></div>
                    <div class="process-phase phase-logistics absolute inset-0 flex flex-col items-center justify-center opacity-0"><h3 class="text-2xl sm:text-6xl md:text-8xl lg:text-[6.2rem] xl:text-[10rem] font-sans text-white tracking-normal uppercase font-bold">Logistics</h3></div>
                    <div class="process-phase phase-fulfillment absolute inset-0 flex flex-col items-center justify-center opacity-0"><h3 class="text-2xl sm:text-6xl md:text-8xl lg:text-[6.2rem] xl:text-[10rem] font-sans text-white tracking-normal uppercase font-bold">Fulfillment</h3></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Journal Section -->
    <section id="journal" class="relative bg-[#F5F1E8] py-[var(--space-6)] md:py-[var(--space-7)] px-[var(--space-2)] md:px-[var(--space-4)]" style="z-index: 90">
        <div class="max-w-[1920px] mx-auto">
            <div class="flex flex-col items-center text-center mb-[var(--space-6)] md:mb-[var(--space-10)]">
                <span class="journal-label opacity-0 text-[10px] md:text-xs font-sans font-bold tracking-[0.4em] text-[#52422D]/40 uppercase mb-4">Sustainability</span>
                <h2 class="journal-title section-title opacity-0 text-5xl md:text-7xl font-radley text-[#333333] mb-1 md:mb-2"><span class="italic font-radley">Featured</span> <span class="font-radley">Projects</span></h2>
                <div class="journal-ornament opacity-0 w-12 h-[1px] bg-[#52422D]/20"></div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-[var(--space-2)] md:gap-[var(--space-3)]">
                @forelse($portfolios as $portfolio)
                <div class="journal-item opacity-0 group cursor-pointer overflow-hidden relative">
                    <div class="aspect-square overflow-hidden">
                        <img src="{{ asset('storage/' . $portfolio->image) }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
                    </div>
                    <div class="absolute inset-0 bg-black/40 flex flex-col items-center justify-center text-center p-6 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        <span class="text-[10px] md:text-xs font-sans font-bold tracking-[0.3em] text-white/70 uppercase mb-2">{{ $portfolio->category }}</span>
                        <h3 class="text-lg md:text-2xl font-radley text-white uppercase leading-tight">{{ $portfolio->title }}</h3>
                    </div>
                </div>
                @empty
                <div class="journal-item opacity-100 group overflow-hidden relative border border-dashed border-[#52422D]/40">
                    <div class="aspect-square bg-black/5 flex flex-col items-center justify-center text-center p-6 grayscale transition-all duration-500 hover:grayscale-0">
                        <h3 class="text-xl md:text-3xl font-radley text-[#333333] uppercase leading-tight font-light">ARKAN PORTFOLIO</h3>
                    </div>
                </div>
                @endforelse
            </div>
            <div class="flex justify-center mt-12 md:mt-20 mb-12">
                <a href="{{ url('/sustainability') }}" class="journal-button opacity-0 inline-flex items-center group/btn relative px-16 py-6 overflow-hidden rounded-full border border-[#52422D]/60 text-[10px] md:text-xs font-sans font-bold tracking-[0.4em] text-[#52422D] uppercase transition-all duration-500 hover:text-white hover:border-[#52422D]">
                    <span class="absolute inset-0 bg-[#52422D] translate-y-full transition-transform duration-500 ease-expo group-hover/btn:translate-y-0"></span>
                    <span class="relative z-10 flex items-center">See More <svg width="18" height="18" viewBox="0 0 24 24" fill="none" class="ml-6 transform transition-transform duration-500 group-hover/btn:translate-x-3"><path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /></svg></span>
                </a>
            </div>
        </div>
    </section>

    <!-- Spacer to allow Journal to reveal OSE -->
    <div id="ose-spacer" class="relative pointer-events-none" style="z-index: 5; height: 150vh; background: transparent"></div>

    <!-- OSE Section (Reveal trigger) -->
    <section id="ose" class="fixed bottom-0 left-0 w-full overflow-hidden bg-black z-20 h-screen flex flex-col items-center justify-center">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('assets/img/bg-ose.png') }}" class="w-full h-full object-cover opacity-60" />
            <div class="ose-blue-gradient absolute inset-0 bg-gradient-to-b from-transparent via-[#083D6E]/20 to-[#083D6E]/40 opacity-0"></div>
        </div>
        <div id="ose-pin-container" class="relative w-full flex flex-col items-center justify-center text-center px-[var(--space-4)] md:px-[var(--space-6)] z-10">
            <div class="ose-final-ornament opacity-0 flex justify-center items-center mb-[var(--space-5)] md:mb-[var(--space-6)] text-[#D2BB9C]">
                <img src="{{ asset('assets/img/ARKAN STAR 2.svg') }}" class="w-72 md:w-80 lg:w-[32rem] aspect-square brightness-0 invert opacity-[0.25]" />
            </div>
            <div class="max-w-5xl mx-auto stack-space-5 md:stack-space-6">
                <h2 class="ose-cta-title section-title opacity-0 text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-radley text-[#D2BB9C]">Let’s bring it to <span class="italic font-radley">life</span>,<br /><span class="italic font-radley">together.</span></h2>
                <div class="ose-cta-button opacity-0 mt-8 md:mt-12">
                    <a href="{{ url('/contact') }}" class="inline-block px-10 py-3 md:px-12 md:py-4 rounded-full border border-[#D2BB9C]/40 text-[#D2BB9C] font-sans text-xs sm:text-sm tracking-[0.3em] uppercase hover:bg-[#D2BB9C] hover:text-[#083D6E] transition-all duration-500">Contact Us</a>
                </div>
            </div>
        </div>
    </section>

    @include('partials.footer', ['isReveal' => true])

    <!-- Revealable Footer Spacer -->
    <div id="footer-spacer" class="relative pointer-events-none" style="z-index: 5; background: transparent"></div>
</div>
@endsection

@push('scripts')
<script type="module">
    window.initHeroEntrance = () => {
        const tl = gsap.timeline({ defaults: { ease: "power3.out", duration: 1.5 } });
        tl.to(".logo-text", { opacity: 1, y: 0, scale: 1, startAt: { y: 30, scale: 0.95 }, duration: 2 })
          .to(".tagline", { opacity: 1, y: 0, startAt: { y: 20 }, duration: 1.2 }, "-=1.2")
          .to(".nav-item", { opacity: 1, y: 0, startAt: { y: -20 }, stagger: 0.1, duration: 1 }, "-=1")
          .to(".scroll-indicator", { opacity: 1, y: 0, startAt: { y: 20 }, duration: 1 }, "-=0.8");
    };

    document.addEventListener("DOMContentLoaded", () => {
        gsap.config({ force3D: true });
        ScrollTrigger.create({ trigger: "#hero-section", start: "top top", pin: true, pinSpacing: false, end: "bottom top" });

        const trigger = document.getElementById("mobile-menu-trigger");
        const overlay = document.getElementById("mobile-menu-overlay");
        const navbar = document.getElementById("global-navbar");
        const links = document.querySelectorAll(".mobile-nav-link");
        let isMenuOpen = false;

        window.toggleMenu = () => {
            isMenuOpen = !isMenuOpen;
            if (isMenuOpen) {
                navbar.classList.add("menu-open");
                overlay.classList.remove("pointer-events-none");
                gsap.to(overlay, { opacity: 1, duration: 0.5, ease: "power2.inOut" });
                gsap.to(".hamburger-inner-mid", { opacity: 0, duration: 0.2 });
                gsap.to(".hamburger-inner:first-child", { y: 8, rotate: 45, duration: 0.3 });
                gsap.to(".hamburger-inner:last-child", { y: -8, rotate: -45, duration: 0.3 });
                gsap.to(".hamburger-inner", { backgroundColor: "#111111", duration: 0.3 });
                gsap.to(links, { opacity: 1, y: 0, startAt: { y: 20 }, stagger: 0.1, duration: 0.8, ease: "power3.out", delay: 0.2 });
                gsap.to(".mobile-nav-footer", { opacity: 1, duration: 1, delay: 0.6 });
            } else {
                navbar.classList.remove("menu-open");
                overlay.classList.add("pointer-events-none");
                gsap.to(overlay, { opacity: 0, duration: 0.5, ease: "power2.inOut" });
                gsap.to(".hamburger-inner-mid", { opacity: 1, duration: 0.2, delay: 0.1 });
                gsap.to(".hamburger-inner:first-child", { y: 0, rotate: 0, duration: 0.3 });
                gsap.to(".hamburger-inner:last-child", { y: 0, rotate: 0, duration: 0.3 });
                gsap.to(".hamburger-inner", { clearProps: "backgroundColor", duration: 0.3 });
                gsap.to(links, { opacity: 0, y: 10, duration: 0.3 });
                gsap.to(".mobile-nav-footer", { opacity: 0, duration: 0.3 });
            }
        };
        if (trigger) trigger.addEventListener("click", window.toggleMenu);

        // About Section Logic
        const aboutWrapper = document.getElementById('about-scroll-wrapper');
        const aboutNarrative = document.getElementById('about-fixed-narrative');
        const v1 = document.getElementById('about-v1');
        const v2 = document.getElementById('about-v2');

        if (aboutWrapper && aboutNarrative) {
            gsap.to(aboutNarrative, {
                opacity: 1, y: 0, duration: 1.5, ease: "power2.out",
                scrollTrigger: { trigger: aboutWrapper, start: "top 70%" }
            });

            const storyTimeline = gsap.timeline({
                scrollTrigger: {
                    trigger: aboutWrapper,
                    start: "top top",
                    end: "bottom bottom",
                    pin: "#about-pin-viewport",
                    pinSpacing: false,
                    scrub: 1.2
                }
            });

            storyTimeline.to(v1, { opacity: 0, filter: "blur(20px)", scale: 0.98, duration: 1 }, 0.25)
                         .fromTo(v2, { opacity: 0, filter: "blur(20px)", scale: 1.02 }, { opacity: 1, filter: "blur(0px)", scale: 1, pointerEvents: "auto", duration: 1 }, 0.45)
                         .to(v2, { opacity: 1, duration: 2 });

            const isMobile = window.innerWidth <= 768;
            gsap.utils.toArray('.speed-up').forEach(el => {
                gsap.to(el, { y: isMobile ? -100 : -150, ease: "none", scrollTrigger: { trigger: aboutWrapper, scrub: isMobile ? 2 : 1 } });
            });
            gsap.utils.toArray('.speed-slow').forEach(el => {
                gsap.to(el, { y: isMobile ? -40 : -60, ease: "none", scrollTrigger: { trigger: aboutWrapper, scrub: isMobile ? 2 : 1 } });
            });
        }

        // Services Scroll
        window.servicesTl = gsap.timeline({ scrollTrigger: { trigger: "#services", start: "top top", end: "+=200%", scrub: 0.8, pin: true, anticipatePin: 1 } });
        window.servicesTl.to(".services-title", { opacity: 1, y: 0, startAt: { y: 40 }, duration: 1, ease: "expo.out" }, 0)
                        .to(".service-item", { opacity: 1, y: 0, startAt: { y: 20 }, duration: 0.8, stagger: 0.1, ease: "expo.out" }, 0.2)
                        .to(".services-image-container", { opacity: 1, x: 0, startAt: { x: 80 }, duration: 1.2, ease: "expo.out" }, 0.4)
                        .to({}, { duration: 2 });

        // Service Item Hover Logic
        const serviceItems = document.querySelectorAll('.service-item');
        const displayImage = document.getElementById('service-display-image');
        serviceItems.forEach(item => {
            item.addEventListener('mouseenter', () => {
                const newImg = item.dataset.serviceImage;
                if (newImg && displayImage) {
                    gsap.to(displayImage, {
                        opacity: 0,
                        duration: 0.3,
                        onComplete: () => {
                            displayImage.src = newImg;
                            gsap.to(displayImage, { opacity: 1, duration: 0.3 });
                        }
                    });
                }
                serviceItems.forEach(si => si.classList.remove('active-service'));
                item.classList.add('active-service');
            });
        });

        // Industry Reveal
        gsap.fromTo(".industries-slider-wrapper", { scale: 0.9, y: 100 }, { scale: 1, y: 0, duration: 1, ease: "expo.out", scrollTrigger: { trigger: "#industries", start: "top bottom", end: "bottom top", scrub: true } });
        
        gsap.utils.toArray(".slide-bg").forEach((bg) => {
            gsap.fromTo(bg, { scale: 1.2 }, {
                scale: 1,
                ease: "none",
                scrollTrigger: {
                    trigger: "#industries",
                    start: "top bottom",
                    end: "bottom top",
                    scrub: true
                }
            });
        });

        // Industry Slider Logic
        let currentIndustry = 0;
        const industrySlides = document.querySelectorAll(".industry-slide");
        const totalIndustries = industrySlides.length;
        let isTransitioning = false;
        let industryAutoplayTimer;
        const nextIndustryBtn = document.getElementById("next-industry");
        const prevIndustryBtn = document.getElementById("prev-industry");
        const industryDotsContainer = document.getElementById("industry-dots");

        if (industrySlides.length > 0) {
            industrySlides.forEach((_, i) => {
                const dot = document.createElement("button");
                dot.className = `industry-dot w-2 h-2 md:w-2.5 md:h-2.5 rounded-full transition-all duration-300 ${i === 0 ? "bg-white scale-125" : "bg-white/40 hover:bg-white/60"}`;
                dot.onclick = () => { if (i !== currentIndustry && !isTransitioning) goToIndustrySlide(i, i > currentIndustry ? "next" : "prev"); };
                if (industryDotsContainer) industryDotsContainer.appendChild(dot);
            });
            const dots = document.querySelectorAll(".industry-dot");

            const updateIndustryNav = () => {
                dots.forEach((dot, i) => {
                    dot.className = `industry-dot w-2 h-2 md:w-2.5 md:h-2.5 rounded-full transition-all duration-300 ${i === currentIndustry ? "bg-white scale-125" : "bg-white/40 hover:bg-white/60"}`;
                });
                if (prevIndustryBtn) gsap.to(prevIndustryBtn, { opacity: currentIndustry === 0 ? 0 : 1, pointerEvents: currentIndustry === 0 ? "none" : "auto", duration: 0.5 });
                if (nextIndustryBtn) gsap.to(nextIndustryBtn, { opacity: currentIndustry === totalIndustries - 1 ? 0 : 1, pointerEvents: currentIndustry === totalIndustries - 1 ? "none" : "auto", duration: 0.5 });
            };

            const goToIndustrySlide = (index, direction) => {
                if (isTransitioning || index === currentIndustry) return;
                isTransitioning = true;
                const currentSlide = industrySlides[currentIndustry];
                const nextSlide = industrySlides[index];
                const enterX = direction === "next" ? 100 : -100;
                const exitX = -enterX;

                const tl = gsap.timeline({ onComplete: () => { currentSlide.classList.remove("z-10"); currentSlide.classList.add("z-0"); isTransitioning = false; updateIndustryNav(); } });
                gsap.set(nextSlide, { xPercent: enterX, opacity: 1, zIndex: 10 });
                gsap.set(nextSlide.querySelector(".slide-bg"), { xPercent: -enterX * 0.3 });
                gsap.set(nextSlide.querySelectorAll("p, h2"), { y: 40, opacity: 0 });

                tl.to(currentSlide, { xPercent: exitX, duration: 1.4, ease: "expo.inOut" }, 0)
                  .to(currentSlide.querySelector(".slide-bg"), { xPercent: -exitX * 0.3, duration: 1.4, ease: "expo.inOut" }, 0)
                  .to(nextSlide, { xPercent: 0, duration: 1.4, ease: "expo.inOut", onStart: () => { nextSlide.classList.remove("z-0"); nextSlide.classList.add("z-10"); } }, 0)
                  .to(nextSlide.querySelector(".slide-bg"), { xPercent: 0, duration: 1.4, ease: "expo.inOut" }, 0)
                  .to(nextSlide.querySelectorAll("p, h2"), { y: 0, opacity: 1, duration: 1, stagger: 0.1, ease: "power3.out" }, 0.6);
                currentIndustry = index;
            };

            gsap.set(industrySlides[0], { opacity: 1, xPercent: 0, zIndex: 10 });
            industryAutoplayTimer = setInterval(() => { if (!isTransitioning) goToIndustrySlide((currentIndustry + 1) % totalIndustries, "next"); }, 5000);
            
            if (nextIndustryBtn) nextIndustryBtn.addEventListener("click", () => { clearInterval(industryAutoplayTimer); if (currentIndustry < totalIndustries - 1) goToIndustrySlide(currentIndustry + 1, "next"); });
            if (prevIndustryBtn) prevIndustryBtn.addEventListener("click", () => { clearInterval(industryAutoplayTimer); if (currentIndustry > 0) goToIndustrySlide(currentIndustry - 1, "prev"); });
            updateIndustryNav();
        }
        
        // Process Logic
        const processIntroTl = gsap.timeline({ scrollTrigger: { trigger: "#process", start: "top 110%", toggleActions: "play none none none" } });
        processIntroTl.to(".process-ornament", { opacity: 1, scale: 1, startAt: { scale: 0.8 }, duration: 1, ease: "expo.out" })
                     .to(".process-header-title", { opacity: 1, y: 0, startAt: { y: 30 }, duration: 1.2, ease: "expo.out" }, "-=0.8")
                     .to(".process-header-text", { opacity: 1, y: 0, startAt: { y: 20 }, duration: 1, ease: "expo.out" }, "-=0.8");

        gsap.set(".process-bg-2, .process-bg-3, .process-bg-4, .process-bg-5", { xPercent: 101 });
        gsap.set(".process-bg-wrapper .process-bg", { scale: 1.2 });

        const processPinTl = gsap.timeline({ scrollTrigger: { trigger: "#process-pin-container", start: "top top", end: "+=1000%", pin: true, scrub: 0.8 } });
        processPinTl.to(".process-bg-wrapper .process-bg", { scale: 1, duration: 10, ease: "none" }, 0)
                    .to(".phase-design h3", { y: -50, opacity: 0, duration: 2, ease: "power2.in" }, 0.5)
                    .to(".process-bg-2", { xPercent: 0, duration: 3, ease: "expo.inOut" }, 1)
                    .fromTo(".process-bg-2 .process-bg", { xPercent: 30 }, { xPercent: 0, duration: 3, ease: "expo.inOut" }, 1)
                    .to(".phase-production", { opacity: 1, duration: 0.5 }, 2)
                    .fromTo(".phase-production h3", { y: 50, opacity: 0 }, { y: 0, opacity: 1, duration: 1.5, ease: "power3.out" }, 2.5)
                    .to({}, { duration: 2 })
                    .to(".phase-production h3", { y: -50, opacity: 0, duration: 2, ease: "power2.in" }, 5.5)
                    .to(".process-bg-3", { xPercent: 0, duration: 3, ease: "expo.inOut" }, 6)
                    .fromTo(".process-bg-3 .process-bg", { xPercent: 30 }, { xPercent: 0, duration: 3, ease: "expo.inOut" }, 6)
                    .to(".phase-digitalization", { opacity: 1, duration: 0.5 }, 7)
                    .fromTo(".phase-digitalization h3", { y: 50, opacity: 0 }, { y: 0, opacity: 1, duration: 1.5, ease: "power3.out" }, 7.5)
                    .to({}, { duration: 2 })
                    .to(".phase-digitalization h3", { y: -50, opacity: 0, duration: 2, ease: "power2.in" }, 10.5)
                    .to(".process-bg-4", { xPercent: 0, duration: 3, ease: "expo.inOut" }, 11)
                    .fromTo(".process-bg-4 .process-bg", { xPercent: 30 }, { xPercent: 0, duration: 3, ease: "expo.inOut" }, 11)
                    .to(".phase-logistics", { opacity: 1, duration: 0.5 }, 12)
                    .fromTo(".phase-logistics h3", { y: 50, opacity: 0 }, { y: 0, opacity: 1, duration: 1.5, ease: "power3.out" }, 12.5)
                    .to({}, { duration: 2 })
                    .to(".phase-logistics h3", { y: -50, opacity: 0, duration: 2, ease: "power2.in" }, 15.5)
                    .to(".process-bg-5", { xPercent: 0, duration: 3, ease: "expo.inOut" }, 16)
                    .fromTo(".process-bg-5 .process-bg", { xPercent: 30 }, { xPercent: 0, duration: 3, ease: "expo.inOut" }, 16)
                    .to(".phase-fulfillment", { opacity: 1, duration: 0.5 }, 17)
                    .fromTo(".phase-fulfillment h3", { y: 50, opacity: 0 }, { y: 0, opacity: 1, duration: 1.5, ease: "power3.out" }, 17.5);

        // Journal Scroll Logic
        const journalTl = gsap.timeline({
            scrollTrigger: {
                trigger: "#journal",
                start: "top 80%",
                toggleActions: "play none none none",
            },
        });

        journalTl.to(".journal-label", { opacity: 1, y: 0, startAt: { y: 20 }, duration: 1, ease: "expo.out" })
                 .to(".journal-title", { opacity: 1, y: 0, startAt: { y: 30 }, duration: 1.2, ease: "expo.out" }, "-=0.8")
                 .to(".journal-ornament", { opacity: 1, scaleX: 1, startAt: { scaleX: 0, opacity: 0 }, duration: 1, ease: "expo.out" }, "-=0.8")
                 .to(".journal-item", { opacity: 1, y: 0, startAt: { y: 40 }, duration: 1, stagger: 0.1, ease: "expo.out" }, "-=0.6")
                 .to(".journal-button", { opacity: 1, y: 0, startAt: { y: 20 }, duration: 1, ease: "expo.out" }, "-=0.6");

        // OSE & Footer Reveal logic matching original build
        const footerReveal = document.getElementById("footer-reveal");
        const footerContainer = document.getElementById("footer-container");
        const footerSpacer = document.getElementById("footer-spacer");
        const oseSection = document.getElementById("ose");

        if (footerReveal && footerContainer && footerSpacer && oseSection) {
            // Setup Reveal state for Home Page
            gsap.set(footerReveal, { position: 'fixed', bottom: 0, left: 0, width: '100%', zIndex: 10, visibility: 'visible', opacity: 1 });
            
            const updateFooterSpacer = () => {
                footerSpacer.style.height = footerReveal.offsetHeight + "px";
            };
            updateFooterSpacer();
            window.addEventListener("resize", updateFooterSpacer);

            // Blue gradient reveal trigger
            gsap.to(".ose-blue-gradient", { 
                opacity: 1, 
                ease: "none", 
                scrollTrigger: { 
                    trigger: "#ose-spacer", 
                    start: "top 40%", 
                    end: "center center", 
                    scrub: true 
                } 
            });

            // Re-parallax OSE up to reveal the Footer behind it
            gsap.to(oseSection, {
                y: () => -footerReveal.offsetHeight,
                ease: "none",
                scrollTrigger: {
                    trigger: "#footer-spacer",
                    start: "top bottom",
                    end: "bottom bottom",
                    scrub: true,
                    invalidateOnRefresh: true,
                }
            });

            // Reveal Animation for Internal Footer items
            gsap.to("#footer-container", {
                y: 0,
                opacity: 1,
                ease: "none",
                scrollTrigger: {
                    trigger: "#footer-spacer",
                    start: "top bottom",
                    end: "bottom bottom",
                    scrub: true,
                }
            });

            const oseTl = gsap.timeline({ scrollTrigger: { trigger: "#ose-spacer", start: "top 40%", toggleActions: "play none none none" } });
            oseTl.to(".ose-final-ornament", { opacity: 0.5, scale: 1, y: 0, startAt: { scale: 0.8, y: -50 }, duration: 2, ease: "expo.out" })
                 .to(".ose-cta-title", { opacity: 1, y: 0, startAt: { y: 20 }, duration: 1.5, ease: "expo.out" }, "-=1.5")
                 .to(".ose-cta-button", { opacity: 1, y: 0, startAt: { y: 20 }, duration: 1.2, ease: "expo.out" }, "-=1.2");
        }
    });
</script>

<style>
    #about-content-1, #about-content-2 { will-change: opacity; }
    .active-service { background-color: rgba(0, 0, 0, 0.05); }
    .industry-dot.active { background-color: white; transform: scale(1.25); }
</style>
@endpush
