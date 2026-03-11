@extends('layouts.app')

@php 
    $navbarTheme = 'navbar-light-theme'; 
    $navDark = true; 
    $navbarEntrance = false;
    $bodyClass = 'bg-[#FCFAF8]';
@endphp

@section('content')
<div class="sections-wrapper relative overflow-x-clip">
<main class="w-full overflow-x-clip">

    <!-- SECTION 1 — Cream Hero -->
    <section class="w-full min-h-screen bg-[#F5F1E8] flex flex-col items-center justify-center text-center px-6 pt-28 pb-20">
        <!-- Star ornament -->
        <div class="reveal mb-6">
            <img src="{{ asset('assets/img/ARKAN Star baru.svg') }}" alt="Star Ornament" class="h-14 md:h-[4rem] w-auto mx-auto" />
        </div>

        <!-- Eyebrow label -->
        <p class="reveal reveal-delay-1 font-sans text-[10px] md:text-[11px] tracking-[0.3em] text-[#B99668] uppercase mb-6 md:mb-8">
            Sustainability &nbsp;—&nbsp; ARKAN Standard
        </p>

        <!-- Main heading -->
        <h1 class="reveal reveal-delay-2 font-radley text-5xl sm:text-6xl md:text-7xl lg:text-[5rem] text-[#1B1B18] tracking-tight mb-0">
            Crafted <span class="font-radley" style="font-style: italic;">with</span>
        </h1>
        <h1 class="reveal reveal-delay-2 purpose-word text-5xl sm:text-6xl md:text-7xl lg:text-[5rem] tracking-tight mb-0 font-manrope">
            Purpose.
        </h1>

        <!-- Thin vertical divider -->
        <div class="reveal reveal-delay-2 divider-line my-6 md:my-8"></div>

        <!-- Body text -->
        <p class="reveal reveal-delay-3 font-sans text-xs md:text-sm text-[#8a8174] max-w-sm md:max-w-md leading-relaxed mb-10 md:mb-12">
            The Saudi hospitality industry is at an inflection point. ARKAN's commitment is to
            reshape it — and the world beyond — through supply practices that are as refined in
            their environmental intent as they are in their craft.
        </p>

        <!-- Buttons -->
        <div class="reveal reveal-delay-3 flex flex-wrap justify-center gap-4">
            <a href="{{ url('/about') }}" class="inline-block px-8 py-3 bg-[#C4A882] text-white text-[10px] tracking-[0.25em] font-sans uppercase hover:bg-[#b0956e] transition-colors duration-300">
                About Us
            </a>
            <a href="{{ url('/careers') }}" class="inline-block px-8 py-3 border border-[#1B1B18]/30 text-[#1B1B18] text-[10px] tracking-[0.25em] font-sans uppercase hover:bg-[#1B1B18] hover:text-white transition-all duration-300">
                Careers
            </a>
        </div>
    </section>

    <!-- SECTION 2 — Dark quote -->
    <section class="relative w-full min-h-[65vh] flex items-center justify-center overflow-hidden">
        <!-- Background photo with dark overlay -->
        <img src="{{ asset('assets/img/our-jurnal-1.png') }}" alt="Sustainability background" class="absolute inset-0 w-full h-full object-cover" />
        <div class="absolute inset-0 bg-[#1B1B18]/70"></div>

        <!-- Quote -->
        <div class="relative z-10 max-w-3xl mx-auto px-6 md:px-12 text-center py-20 md:py-28 reveal">
            <p class="font-sans text-xl md:text-2xl lg:text-3xl text-white font-normal leading-[1.6]">
                "The Kingdom is rewriting the story of luxury
                hospitality. At ARKAN, we believe the next
                chapter must be written with
                <em class="italic font-normal text-[#C4A882]">responsibility at its centre</em>
                — and that the supply chain is where that
                <span class="text-[#C4A882]">change begins.</span>"
            </p>
            <p class="mt-8 font-sans text-[10px] tracking-[0.3em] text-white/30 uppercase">
                ARKAN · Riyadh, Saudi Arabia
            </p>
        </div>
    </section>

    <!-- SECTION 3 — Our Commitment Split -->
    <section class="w-full bg-[#F5F1E8] px-6 md:px-12 py-20 md:py-32 xl:py-40">
        <div class="max-w-[1600px] mx-auto flex flex-col lg:flex-row gap-16 lg:gap-24 items-center">
            <!-- Left Text Content -->
            <div class="w-full lg:w-1/2 flex flex-col reveal">
                <!-- Eyebrow -->
                <div class="flex items-center gap-4 mb-8">
                    <div class="h-[1px] w-8 bg-[#8a8174]/40"></div>
                    <span class="font-sans text-[10px] md:text-[11px] tracking-[0.3em] text-[#8a8174] uppercase">
                        Our Commitment
                    </span>
                </div>

                <!-- Heading -->
                <h2 class="font-radley text-4xl md:text-5xl lg:text-6xl text-[#1B1B18] font-normal leading-[1.1] mb-8 md:mb-10">
                    Luxury and<br />
                    sustainability<br />
                    are not <span class="font-radley" style="font-style:italic; color: #C4A882;">opposites.</span>
                </h2>

                <!-- Paragraph 1 -->
                <p class="font-sans text-xs md:text-[13.5px] text-[#8a8174] leading-[1.8] md:leading-[2] mb-10 max-w-lg">
                    For too long, the hospitality supply chain has operated on a logic of volume and cost
                    — a logic that leaves a measurable environmental footprint behind every hotel
                    opening, every room restock, every amenity discarded. <strong class="font-medium text-[#1B1B18]">ARKAN is here to change that.</strong>
                </p>

                <!-- Quote Block -->
                <div class="border-l border-[#8a8174]/30 pl-6 md:pl-8 py-2 mb-10 max-w-lg">
                    <p class="font-radley text-[22px] md:text-2xl text-[#8a8174] leading-[1.5]">
                        "We craft premium amenities with a focus on
                        quality, precision, and international standards —
                        now we add a fourth: <span class="italic text-[#C4A882]">sustainability.</span>"
                    </p>
                </div>

                <!-- Paragraph 2 -->
                <p class="font-sans text-xs md:text-[13.5px] text-[#8a8174] leading-[1.8] md:leading-[2] mb-6 max-w-lg">
                    Saudi Arabia's Vision 2030 has placed environmental leadership at the heart of the
                    Kingdom's transformation. The Saudi Green Initiative has activated over 77
                    sustainability programmes with investment exceeding US$186 billion.
                </p>

                <!-- Paragraph 3 -->
                <p class="font-sans text-xs md:text-[13.5px] text-[#8a8174] leading-[1.8] md:leading-[2] max-w-lg">
                    <strong class="font-medium text-[#1B1B18]">ARKAN's commitment is to be part of that transformation</strong> — in the way we source,
                    produce, consolidate, and deliver. Not as compliance. As character.
                </p>
            </div>

            <!-- Right Image -->
            <div class="w-full lg:w-1/2 reveal reveal-delay-2">
                <div class="w-full aspect-[4/5] object-cover rounded-sm shadow-xl" style="background: linear-gradient(180deg, #AABCAB 0%, #5F7360 80%, #465548 100%);">
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 4 — Sustainability Pillars -->
    <section class="w-full bg-[#F5F1E8] px-6 md:px-12 pb-20 md:pb-32 xl:pb-40">
        <div class="max-w-[1400px] mx-auto">
            <!-- Header Area -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-10 mb-16 md:mb-24 reveal">
                <div class="max-w-2xl">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="h-[1px] w-8 bg-[#8a8174]/40"></div>
                        <span class="font-sans text-[10px] md:text-[11px] tracking-[0.3em] text-[#8a8174] uppercase">
                            Our Sustainability Pillars
                        </span>
                    </div>
                    <h2 class="font-radley text-4xl md:text-5xl lg:text-6xl text-[#1B1B18] leading-[1.1]">
                        How we are <span style="font-style:italic;">reshaping</span><br />
                        the supply chain.
                    </h2>
                </div>
                <div class="max-w-xs md:text-right">
                    <p class="font-sans text-xs md:text-[13.5px] text-[#8a8174] leading-[1.8] md:leading-[2]">
                        Six actionable commitments — woven into every
                        sourcing decision, production brief, and delivery
                        we make.
                    </p>
                </div>
            </div>

            <!-- Pillars List -->
            <div class="flex flex-col border-t border-[#8a8174]/20">
                @php
                    $pillars = [
                        ['num' => '01', 'title' => 'Responsible Sourcing', 'desc' => 'We qualify suppliers not only on quality and compliance, but on environmental practice. From raw material traceability to factory energy audits, our supplier onboarding integrates sustainability benchmarks as a non-negotiable standard.'],
                        ['num' => '02', 'title' => 'Circular Product Design', 'desc' => 'We are transitioning our amenity and OS&E specifications toward materials that are recyclable, biodegradable, or sustainably certified — without compromising the sensory or aesthetic standards our hotel clients demand.'],
                        ['num' => '03', 'title' => 'Packaging Reduction', 'desc' => 'Single-use plastics have no place in the future we are building. ARKAN is systematically eliminating unnecessary packaging from our product lines — replacing it with recycled, plant-based, or minimal-material alternatives.'],
                        ['num' => '04', 'title' => 'Smarter Logistics', 'desc' => 'Our 5PL model was built for efficiency — and efficiency is inherently green. Consolidated shipments, optimised routing, and digital inventory management reduce unnecessary freight movement and the carbon footprint.'],
                        ['num' => '05', 'title' => 'Partner Enablement', 'desc' => 'We help our hospitality clients meet their own ESG commitments. Sustainability-graded product options, green certification support, and environmental impact reporting at the project level — ARKAN becomes the partner that makes a hotel\'s green ambitions operationally achievable.'],
                        ['num' => '06', 'title' => 'Saudi-Led, Globally Relevant', 'desc' => 'Our sustainability programme is built in the Kingdom, aligned with the Saudi Green Initiative, and calibrated to international standards. We intend for ARKAN\'s approach to become a reference — demonstrating that a Saudi supply partner can lead, not follow, on environmental responsibility.'],
                    ];
                @endphp
                @foreach($pillars as $index => $p)
                <div class="flex flex-col md:flex-row py-10 md:py-16 border-b border-[#8a8174]/20 reveal reveal-delay-{{ $index % 3 }}">
                    <div class="w-full md:w-[15%] mb-4 md:mb-0">
                        <span class="font-radley text-2xl md:text-3xl text-[#D2BB9C]/60">{{ $p['num'] }}</span>
                    </div>
                    <div class="w-full md:w-[35%] pr-8 mb-6 md:mb-0">
                        <h3 class="font-radley text-xl md:text-2xl text-[#1B1B18] leading-[1.3]">
                            @if($p['title'] == 'Circular Product Design')
                                Circular<br><span style="font-style:italic;">Product Design</span>
                            @else
                                {!! str_replace(' ', '<br>', $p['title']) !!}
                            @endif
                        </h3>
                    </div>
                    <div class="w-full md:w-[50%]">
                        <p class="font-sans text-xs md:text-[13.5px] text-[#8a8174] leading-[1.8] md:leading-[2] max-w-xl">
                            {{ $p['desc'] }}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- SECTION 5 — Scale of Impact -->
    <section class="relative w-full py-24 md:py-32 flex flex-col items-center justify-center overflow-hidden">
        <img src="{{ asset('assets/img/our-jurnal-1.png') }}" alt="Scale of Impact Background" class="absolute inset-0 w-full h-full object-cover" />
        <div class="absolute inset-0 bg-[#2D2821]/80 mix-blend-multiply"></div>

        <div class="relative z-10 w-full max-w-[1400px] mx-auto px-6 md:px-12 text-center text-white reveal">
            <div class="flex items-center justify-center gap-4 mb-8">
                <div class="h-[1px] w-8 bg-white/30"></div>
                <span class="font-sans text-[10px] md:text-[11px] tracking-[0.3em] text-white/60 uppercase">
                    The Scale of Impact
                </span>
                <div class="h-[1px] w-8 bg-white/30"></div>
            </div>

            <h2 class="font-radley text-4xl md:text-5xl lg:text-6xl font-normal leading-[1.1] mb-20 md:mb-24">
                Every delivery is an<br />
                <span class="italic text-[#C4A882]">opportunity to do better.</span>
            </h2>

            <div class="flex flex-wrap justify-center gap-4 md:gap-8 lg:gap-12 xl:gap-20">
                @php
                    $stats = [
                        ['target' => '500', 'suffix' => '+', 'label' => 'Properties', 'sub' => 'Supplied Globally'],
                        ['target' => '30', 'suffix' => '%', 'label' => 'Packaging Reduction', 'sub' => 'Target by 2026'],
                        ['target' => '77', 'suffix' => '+', 'label' => 'Saudi Green Initiative', 'sub' => 'Active Programmes'],
                        ['target' => '2060', 'suffix' => '', 'label' => 'Saudi Arabia', 'sub' => 'Net Zero Target'],
                    ];
                @endphp
                @foreach($stats as $s)
                <div class="group flex flex-col items-center text-center relative px-8 py-10 transition-colors duration-500">
                    <div class="absolute inset-0 border border-white/20 bg-white/5 backdrop-blur-sm pointer-events-none opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative z-10 transition-transform duration-500 group-hover:-translate-y-2">
                        <h3 class="font-sans text-5xl md:text-6xl text-[#E5E0D8] group-hover:text-[#C4A882] transition-colors duration-500 mb-4">
                            <span class="counter" data-target="{{ $s['target'] }}">0</span><span class="@if($s['suffix'] == '%') text-4xl @else text-3xl @endif">{{ $s['suffix'] }}</span>
                        </h3>
                        <p class="font-sans text-[9px] md:text-[10px] tracking-[0.2em] text-white/70 uppercase max-w-[140px] leading-[1.8] group-hover:text-white transition-colors duration-500">
                            {{ $s['label'] }}<br>{{ $s['sub'] }}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- SECTION 6 — How We Operate -->
    <section class="w-full bg-white px-6 md:px-12 py-20 md:py-32 xl:py-40 border-b border-[#8a8174]/20">
        <div class="max-w-[1400px] mx-auto flex flex-col lg:flex-row gap-16 lg:gap-24">
            <div class="w-full lg:w-5/12 reveal relative">
                <div class="sticky top-40">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="h-[1px] w-8 bg-[#8a8174]/40"></div>
                        <span class="font-sans text-[10px] md:text-[11px] tracking-[0.3em] text-[#8a8174] uppercase">
                            How We Operate
                        </span>
                    </div>
                    <h2 class="font-radley text-4xl md:text-5xl lg:text-6xl text-[#1B1B18] font-normal leading-[1.1] mb-8">
                        Sustainability<br />
                        built <span class="italic">into</span><br />
                        the process.
                    </h2>
                    <p class="font-sans text-xs md:text-[13.5px] text-[#8a8174] leading-[1.8] md:leading-[2] max-w-sm">
                        Our 5PL model gives us a unique advantage: we touch every stage of the
                        supply chain. That means every stage is an opportunity to embed
                        responsible practice.
                    </p>
                </div>
            </div>

            <div class="w-full lg:w-7/12 flex flex-col border-t border-[#8a8174]/20">
                @php
                    $steps = [
                        ['num' => '01', 'title' => 'Design with Intention', 'desc' => 'Sustainability starts at the specification stage. We integrate material sustainability criteria into every brief — evaluating recyclability, traceability, and environmental certifications.'],
                        ['num' => '02', 'title' => 'Qualify Responsibly', 'desc' => 'Our supplier qualification process includes environmental audits alongside quality assessments. We prioritise manufacturers who invest in cleaner production.'],
                        ['num' => '03', 'title' => 'Consolidate Intelligently', 'desc' => 'Grouped shipments. Optimised routes. Reduced air freight dependency. Fewer movements means less carbon — and stronger margins for our clients.'],
                        ['num' => '04', 'title' => 'Deliver Precisely', 'desc' => 'Room-ready delivery with zero over-ordering. Right quantities, right-sized packaging, data-driven PAR management. Less waste at the property level.'],
                        ['num' => '05', 'title' => 'Report Transparently', 'desc' => 'We are building environmental impact reporting at the project level — giving our clients the data they need to fulfil ESG obligations.'],
                    ];
                @endphp
                @foreach($steps as $index => $s)
                <div class="flex flex-col md:flex-row py-8 md:py-12 border-b border-[#8a8174]/20 reveal reveal-delay-{{ $index % 3 }}">
                    <div class="w-full md:w-[15%] mb-2 md:mb-0">
                        <span class="font-radley text-xl md:text-2xl text-[#D2BB9C]/60">{{ $s['num'] }}</span>
                    </div>
                    <div class="w-full md:w-[85%]">
                        <h3 class="font-radley text-lg md:text-xl text-[#1B1B18] leading-[1.3] mb-4">
                            <span style="font-style:italic;">{{ explode(' ', $s['title'])[0] }}</span> {{ substr($s['title'], strlen(explode(' ', $s['title'])[0])) }}
                        </h3>
                        <p class="font-sans text-[11px] md:text-xs text-[#8a8174] leading-[1.8] md:leading-[2] max-w-lg">
                            {{ $s['desc'] }}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- SECTION 7 — Vision 2030 Alignment -->
    <section class="w-full bg-[#E5DCC9] px-6 md:px-12 py-20 md:py-32 xl:py-40">
        <div class="max-w-[1400px] mx-auto flex flex-col lg:flex-row gap-16 lg:gap-24">
            <div class="w-full lg:w-1/2 flex flex-col reveal">
                <div class="flex items-center gap-4 mb-8">
                    <span class="font-sans text-[10px] md:text-[11px] tracking-[0.3em] text-[#8a8174] uppercase">
                        Vision 2030 Alignment
                    </span>
                </div>

                <h2 class="font-radley text-4xl md:text-5xl lg:text-6xl text-[#1B1B18] font-normal leading-[1.1] mb-8 md:mb-10">
                    Part of Saudi Arabia's<br />
                    <span class="text-[#C4A882] italic">green transformation.</span>
                </h2>

                <p class="font-sans text-xs md:text-[13.5px] text-[#8a8174] leading-[1.8] md:leading-[2] mb-6 max-w-lg">
                    Saudi Arabia's Green Initiative — launched by HRH Crown Prince Mohammed bin
                    Salman — represents one of the most ambitious environmental programmes in the
                    region's history. With over 77 active sustainability initiatives and investment
                    exceeding US$186 billion, the Kingdom is building a future where economic
                    ambition and environmental responsibility are inseparable.
                </p>

                <!-- Paragraph 2 -->
                <p class="font-sans text-xs md:text-[13.5px] text-[#8a8174] leading-[1.8] md:leading-[2] mb-10 max-w-lg">
                    ARKAN occupies a position of real influence — over the materials, packaging, and
                    logistics choices that define the environmental footprint of thousands of hotel
                    rooms across the Kingdom and beyond. We intend to use that position well.
                </p>

                <ul class="flex flex-col gap-4 font-sans text-xs md:text-[13.5px] text-[#8a8174]">
                    <li class="flex items-start gap-4">
                        <span class="text-[#C4A882] text-[10px] mt-1">✦</span>
                        <span class="leading-[1.8] md:leading-[2]">Aligned with the Saudi Green Initiative and Vision 2030 ESG goals</span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="text-[#C4A882] text-[10px] mt-1">✦</span>
                        <span class="leading-[1.8] md:leading-[2]">Supporting Saudi Arabia's ambition to reach net zero by 2060</span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="text-[#C4A882] text-[10px] mt-1">✦</span>
                        <span class="leading-[1.8] md:leading-[2]">Contributing to the Kingdom's 10 billion tree planting target</span>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="text-[#C4A882] text-[10px] mt-1">✦</span>
                        <span class="leading-[1.8] md:leading-[2]">Helping hospitality clients achieve LEED certification benchmarks</span>
                    </li>
                </ul>
            </div>

            <div class="w-full lg:w-1/2 flex flex-col justify-center gap-16 md:gap-20 reveal reveal-delay-1 lg:pl-12">
                @php
                    $vision_stats = [
                        ['val' => 'US$186', 'suffix' => 'B', 'label' => 'Invested in Saudi Green Initiative sustainability programmes'],
                        ['val' => '85', 'suffix' => '%', 'label' => 'Of LEED certified hotels in MENA are in Saudi Arabia (2023)'],
                        ['val' => '73', 'suffix' => '%', 'label' => 'Of global travellers prefer sustainable accommodation options'],
                        ['val' => '77', 'suffix' => '+', 'label' => 'Active initiatives under the Saudi Green Initiative'],
                    ];
                @endphp
                @foreach($vision_stats as $vs)
                <div class="flex flex-col">
                    <h3 class="font-sans text-5xl md:text-6xl text-[#1B1B18] mb-4">
                        {{ $vs['val'] }}<span class="text-[#C4A882] @if($vs['suffix'] == '%') text-4xl @else text-3xl @endif">{{ $vs['suffix'] }}</span>
                    </h3>
                    <p class="font-sans text-[9px] md:text-[10px] text-[#8a8174] uppercase tracking-[0.05em] leading-[1.6]">
                        {{ $vs['label'] }}
                    </p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- SECTION 8 — The Future CTA -->
    <section class="w-full bg-[#F5F1E8] px-6 md:px-12 py-32 md:py-48 xl:py-56 flex flex-col items-center justify-center text-center relative reveal">
        <div class="reveal mb-6 md:mb-8 opacity-60">
            <img src="{{ asset('assets/img/ARKAN Star baru.svg') }}" alt="ARKAN Star" class="h-14 md:h-[3rem] w-auto mx-auto" style="filter: invert(45%) sepia(13%) saturate(927%) hue-rotate(345deg) brightness(93%) contrast(85%);" />
        </div>

        <h2 class="font-radley text-5xl md:text-6xl lg:text-7xl text-[#1B1B18] leading-[1.1] mb-12 md:mb-16">
            The future of hospitality<br />
            is crafted <span style="color:#C4A882; font-style:italic;">responsibly.</span>
        </h2>

        <div class="h-10 w-[1px] bg-[#8a8174]/30 mb-12 md:mb-16"></div>

        <p class="font-sans text-xs md:text-[13.5px] text-[#8a8174] leading-[1.8] md:leading-[2] max-w-xl">
            Whether you are planning a new opening, refreshing a property, or building a<br class="hidden md:block" />
            long-term procurement programme — ARKAN is ready to be the sustainable<br class="hidden md:block" />
            supply partner your project deserves.
        </p>
    </section>
</main>
</div>
@endsection

@push('styles')
<style>
    .divider-line {
      width: 1px;
      height: 56px;
      background: linear-gradient(to bottom, transparent, #C4A882, transparent);
      margin: 20px auto 0 auto !important;
    }
    .purpose-word {
      font-family: 'Radley', serif;
      color: #C4A882;
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", () => {
        // Animated Counters for Sustainability page
        function animateCounter(el) {
            const target = parseInt(el.dataset.target);
            const duration = 2000;
            const start = performance.now();
            const easeOut = (t) => 1 - Math.pow(1 - t, 3);

            function update(now) {
                const elapsed = now - start;
                const progress = Math.min(elapsed / duration, 1);
                const value = Math.round(easeOut(progress) * target);
                el.innerText = value.toLocaleString();
                if (progress < 1) requestAnimationFrame(update);
                else el.innerText = target.toLocaleString();
            }
            requestAnimationFrame(update);
        }

        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !entry.target.classList.contains('counted')) {
                    animateCounter(entry.target);
                    entry.target.classList.add('counted');
                }
            });
        }, { threshold: 0.5 });
        document.querySelectorAll('.counter').forEach(el => counterObserver.observe(el));
    });
</script>
@endpush
