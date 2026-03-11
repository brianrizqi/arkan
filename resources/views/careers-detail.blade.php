@php
    $bodyClass = 'antialiased font-manrope';
    $navbarTheme = '';
    $navDark = false;
    $navbarEntrance = false;
@endphp

@extends('layouts.app')

@section('content')
<div class="sections-wrapper relative overflow-x-clip">
    <main class="w-full">
        <!-- ══════════════════════════════════════════
             JOB HERO SECTION
        ══════════════════════════════════════════ -->
        <section id="careers-hero" class="relative w-full min-h-screen flex items-center justify-center bg-cover bg-center" style="background: linear-gradient(180deg, #062040 0%, #0A3060 25%, #1460AA 50%, #3282CC 75%, #B0CCE0 100%);">
            <div class="relative z-10 w-full max-w-[1400px] mx-auto px-6 md:px-12 xl:px-24 flex flex-col justify-center mt-20">
                <!-- Tags -->
                <div class="flex flex-wrap gap-2 mb-6 md:mb-8 reveal">
                    <span class="px-4 py-1.5 rounded-[2px] border border-white/20 text-white/80 font-manrope text-[10px] uppercase tracking-wider">DESIGN</span>
                    <span class="px-4 py-1.5 rounded-[2px] border border-white/20 text-white/80 font-manrope text-[10px] uppercase tracking-wider">FULL-TIME</span>
                    <span class="px-4 py-1.5 rounded-[2px] border border-white/20 text-white/80 font-manrope text-[10px] uppercase tracking-wider">SENIOR LEVEL</span>
                    <span class="px-4 py-1.5 rounded-[2px] border border-white/20 text-white/80 font-manrope text-[10px] uppercase tracking-wider">ON-SITE</span>
                </div>

                <!-- Job Title -->
                <h1 class="font-radley text-5xl md:text-7xl lg:text-[5.5rem] text-white leading-[1.1] tracking-tight mb-8 reveal reveal-delay-1">
                    Senior<br />
                    <span class="italic">Product Designer</span>
                </h1>

                <!-- Meta Info -->
                <div class="flex flex-wrap items-center gap-6 md:gap-10 font-manrope text-[11px] md:text-xs text-white/80 mb-12 reveal reveal-delay-2">
                    <div class="flex items-center gap-2">
                        <span class="opacity-60">📍</span> Riyadh, Saudi Arabia
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="opacity-60">🏢</span> Design & Product
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="opacity-60">📅</span> Posted March 2026
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="opacity-60">⏱</span> Closing April 30, 2026
                    </div>
                </div>

                <!-- Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 items-start sm:items-center reveal reveal-delay-3">
                    <a href="{{ url('/careers') }}" class="px-8 py-3.5 bg-[#D2BB9C] text-[#1B1B18] font-manrope text-[10px] uppercase tracking-[0.2em] font-semibold rounded-[2px] hover:bg-[#c3aa8a] transition-colors inline-block text-center">
                        ← BACK TO ALL ROLES
                    </a>
                    <a href="javascript:void(0)" class="apply-btn-trigger px-8 py-3.5 bg-[#FCFAF8] text-[#1B1B18] font-manrope text-[10px] uppercase tracking-[0.2em] font-semibold rounded-[2px] hover:bg-white transition-colors inline-block text-center shadow-lg">
                        APPLY FOR THIS ROLE
                    </a>
                </div>
            </div>
        </section>

        <!-- ══════════════════════════════════════════
             JOB DETAILS SECTION
        ══════════════════════════════════════════ -->
        <section class="w-full bg-[#F2F0E9] py-20 md:py-32 xl:py-40 reveal">
            <div class="max-w-[1400px] mx-auto px-6 md:px-12 xl:px-24">
                <div class="flex flex-col lg:flex-row gap-16 lg:gap-24 relative">

                    <!-- Left Side: Main Content -->
                    <div class="w-full lg:w-7/12 flex flex-col space-y-20">
                        <!-- Overview -->
                        <div>
                            <span class="font-manrope text-[10px] md:text-xs tracking-[0.2em] text-[#8a8174] uppercase mb-6 md:mb-8 font-semibold block">OVERVIEW</span>
                            <h2 class="font-radley text-4xl md:text-5xl lg:text-[52px] text-[#4A433A] leading-[1.1] tracking-tight mb-8">
                                The <span class="text-[#C4A882] italic">Opportunity</span>
                            </h2>
                            <div class="font-manrope text-[13.5px] md:text-[14px] text-[#8a8174] leading-[2] space-y-6 font-medium">
                                <p>ARKAN is looking for a Senior Product Designer to lead the design of our hospitality OS&E platform — the digital infrastructure that connects design, production, logistics, and fulfillment for some of the world's finest hotel brands.</p>
                                <p>This is not a UI maintenance role. We are building an ambitious product from a position of real industry knowledge, and we need a designer who can translate complex supply chain workflows into elegant, intuitive experiences. <strong class="text-[#4A433A] font-semibold">You will own design from brief to shipped — with the freedom to set the standard.</strong></p>
                                <p>You will work closely with our Operations, Technology, and Client teams to understand how luxury hospitality procurement actually works, and turn those insights into a platform our clients trust and rely on. We are a company that moves deliberately — and we want a designer who shares that instinct.</p>
                            </div>
                        </div>

                        <!-- Divider -->
                        <div class="w-full h-[1px] bg-[#D2BB9C]/30"></div>

                        <!-- Responsibilities -->
                        <div>
                            <span class="font-manrope text-[10px] md:text-xs tracking-[0.2em] text-[#8a8174] uppercase mb-6 md:mb-8 font-semibold block">RESPONSIBILITIES</span>
                            <h2 class="font-radley text-4xl md:text-5xl lg:text-[52px] text-[#4A433A] leading-[1.1] tracking-tight mb-10">
                                What you will <span class="text-[#C4A882] italic">be doing</span>
                            </h2>
                            <ul class="font-manrope text-[13.5px] md:text-[14px] text-[#8a8174] leading-[2] space-y-6 font-medium list-none">
                                <li class="relative pl-6 before:content-['●'] before:absolute before:left-0 before:top-0.5 before:text-[8px] before:text-[#D2BB9C]">Lead end-to-end product design for ARKAN's OS&E management platform — from discovery and wireframes through to shipped, production-ready interfaces.</li>
                                <li class="relative pl-6 before:content-['●'] before:absolute before:left-0 before:top-0.5 before:text-[8px] before:text-[#D2BB9C]">Translate complex supply chain and procurement workflows into experiences that feel intuitive, fast, and trustworthy for hotel operators and procurement teams.</li>
                                <li class="relative pl-6 before:content-['●'] before:absolute before:left-0 before:top-0.5 before:text-[8px] before:text-[#D2BB9C]">Define and evolve ARKAN's design system — building consistent components, patterns, and documentation that scale across product and marketing surfaces.</li>
                                <li class="relative pl-6 before:content-['●'] before:absolute before:left-0 before:top-0.5 before:text-[8px] before:text-[#D2BB9C]">Collaborate closely with engineers, operations specialists, and client success managers to ensure design decisions are grounded in real operational context.</li>
                                <li class="relative pl-6 before:content-['●'] before:absolute before:left-0 before:top-0.5 before:text-[8px] before:text-[#D2BB9C]">Conduct user research, usability testing, and qualitative interviews with hotel clients to continuously validate and improve product decisions.</li>
                                <li class="relative pl-6 before:content-['●'] before:absolute before:left-0 before:top-0.5 before:text-[8px] before:text-[#D2BB9C]">Contribute to the visual and communication design of ARKAN's brand — including presentations, client-facing materials, and marketing assets.</li>
                                <li class="relative pl-6 before:content-['●'] before:absolute before:left-0 before:top-0.5 before:text-[8px] before:text-[#D2BB9C]">Mentor junior designers and help build a design culture within a growing team.</li>
                                <li class="relative pl-6 before:content-['●'] before:absolute before:left-0 before:top-0.5 before:text-[8px] before:text-[#D2BB9C]">Set the visual and experiential standard for what a premium hospitality supply platform should feel like — you will define it, not inherit it.</li>
                            </ul>
                        </div>

                        <!-- Divider -->
                        <div class="w-full h-[1px] bg-[#D2BB9C]/30"></div>

                        <!-- Requirements -->
                        <div>
                            <span class="font-manrope text-[10px] md:text-xs tracking-[0.2em] text-[#8a8174] uppercase mb-6 md:mb-8 font-semibold block">REQUIREMENTS</span>
                            <h2 class="font-radley text-4xl md:text-5xl lg:text-[52px] text-[#4A433A] leading-[1.1] tracking-tight mb-8">
                                Who we are <span class="text-[#C4A882] italic">looking for</span>
                            </h2>
                            <p class="font-manrope text-[13.5px] md:text-[14px] text-[#8a8174] leading-[2] mb-8 font-medium">We care more about how you think than where you have been. That said, the following will be essential:</p>
                            <ul class="font-manrope text-[13.5px] md:text-[14px] text-[#8a8174] leading-[2] space-y-6 font-medium list-none">
                                <li class="relative pl-6 before:content-['●'] before:absolute before:left-0 before:top-0.5 before:text-[8px] before:text-[#D2BB9C]">5+ years of product design experience, with a portfolio demonstrating complex UX problems solved with elegance and clarity.</li>
                                <li class="relative pl-6 before:content-['●'] before:absolute before:left-0 before:top-0.5 before:text-[8px] before:text-[#D2BB9C]">Mastery of Figma — component architecture, auto layout, prototyping, and design systems.</li>
                                <li class="relative pl-6 before:content-['●'] before:absolute before:left-0 before:top-0.5 before:text-[8px] before:text-[#D2BB9C]">Experience designing for data-rich, workflow-driven interfaces — logistics, procurement, ERP, or similar operational tools preferred.</li>
                                <li class="relative pl-6 before:content-['●'] before:absolute before:left-0 before:top-0.5 before:text-[8px] before:text-[#D2BB9C]">Strong grasp of interaction design principles, information architecture, and responsive design across web and mobile.</li>
                                <li class="relative pl-6 before:content-['●'] before:absolute before:left-0 before:top-0.5 before:text-[8px] before:text-[#D2BB9C]">Fluent in working directly with engineers — you can write clear specs, participate in design reviews, and QA your own work.</li>
                                <li class="relative pl-6 before:content-['●'] before:absolute before:left-0 before:top-0.5 before:text-[8px] before:text-[#D2BB9C]">Excellent communication skills — you can present design rationale clearly and influence decisions through well-articulated thinking.</li>
                                <li class="relative pl-6 before:content-['●'] before:absolute before:left-0 before:top-0.5 before:text-[8px] before:text-[#D2BB9C]">Comfort with ambiguity — ARKAN is a growing company and not every problem has a defined brief. You thrive in that environment.</li>
                                <li class="relative pl-6 before:content-['●'] before:absolute before:left-0 before:top-0.5 before:text-[8px] before:text-[#D2BB9C]">Genuine interest in the luxury hospitality industry — understanding what our clients care about will shape everything you design.</li>
                            </ul>
                        </div>

                        <!-- Divider -->
                        <div class="w-full h-[1px] bg-[#D2BB9C]/30"></div>

                        <!-- Benefits -->
                        <div>
                            <span class="font-manrope text-[10px] md:text-xs tracking-[0.2em] text-[#8a8174] uppercase mb-6 md:mb-8 font-semibold block">BENEFITS</span>
                            <h2 class="font-radley text-4xl md:text-5xl lg:text-[52px] text-[#4A433A] leading-[1.1] tracking-tight mb-10">
                                What ARKAN <span class="text-[#C4A882] italic">offers</span>
                            </h2>
                            <ul class="font-manrope text-[13.5px] md:text-[14px] text-[#8a8174] leading-[2] space-y-6 font-medium list-none">
                                <li class="relative pl-6 before:content-['●'] before:absolute before:left-0 before:top-0.5 before:text-[8px] before:text-[#D2BB9C]">Competitive salary benchmarked to international design market rates in the GCC.</li>
                                <li class="relative pl-6 before:content-['●'] before:absolute before:left-0 before:top-0.5 before:text-[8px] before:text-[#D2BB9C]">Direct access to leadership and meaningful influence on product direction from day one.</li>
                                <li class="relative pl-6 before:content-['●'] before:absolute before:left-0 before:top-0.5 before:text-[8px] before:text-[#D2BB9C]">A role at the intersection of luxury, craft, and technology — a rare combination in the regional market.</li>
                                <li class="relative pl-6 before:content-['●'] before:absolute before:left-0 before:top-0.5 before:text-[8px] before:text-[#D2BB9C]">Annual learning and development budget for courses, conferences, and tools.</li>
                                <li class="relative pl-6 before:content-['●'] before:absolute before:left-0 before:top-0.5 before:text-[8px] before:text-[#D2BB9C]">Private health insurance.</li>
                                <li class="relative pl-6 before:content-['●'] before:absolute before:left-0 before:top-0.5 before:text-[8px] before:text-[#D2BB9C]">Flexible working hours with a strong culture of trust and output-focus.</li>
                                <li class="relative pl-6 before:content-['●'] before:absolute before:left-0 before:top-0.5 before:text-[8px] before:text-[#D2BB9C]">The opportunity to build something genuinely significant in Saudi Arabia's fastest-growing industry.</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Right Side: Sidebar Cards -->
                    <div class="w-full lg:w-4/12 flex flex-col space-y-6 relative">
                        <div class="sticky top-32 space-y-6">
                            <!-- Recruiter Card -->
                            <div class="bg-[#EAE2D2] border border-[#D2BB9C]/30 p-8 reveal">
                                <span class="font-manrope text-[9px] md:text-[10px] tracking-[0.2em] text-[#8a8174] uppercase mb-6 font-semibold block">YOUR RECRUITER</span>
                                <div class="flex items-center gap-4 mb-6">
                                    <div class="w-12 h-12 rounded-full bg-[#1460AA] flex items-center justify-center text-white font-manrope text-sm font-semibold tracking-wider">S</div>
                                    <div>
                                        <h4 class="font-radley text-xl text-[#4A433A]">Sara Al-Qasim</h4>
                                        <p class="font-manrope text-[11px] text-[#8a8174]">Talent Acquisition, ARKAN</p>
                                    </div>
                                </div>
                                <p class="font-manrope text-[11px] text-[#8a8174] leading-[1.6]">
                                    Apply to careers@arkan365.com with subject <br />
                                    <span class="italic text-[#4A433A]">Sr Product Designer Application_YourName</span>
                                </p>
                            </div>

                            <!-- Action Card -->
                            <div id="apply" class="bg-[#EAE2D2] border border-[#D2BB9C]/30 p-8 reveal reveal-delay-1">
                                <h3 class="font-radley text-3xl md:text-4xl text-[#4A433A] mb-4">Ready to <span class="italic text-[#C4A882]">apply?</span></h3>
                                <p class="font-manrope text-[12px] text-[#8a8174] leading-[1.6] mb-8 font-medium">Take the next step. Our team reviews every application personally and responds within 5 business days.</p>
                                <div class="flex flex-col gap-3">
                                    <a href="javascript:void(0)" class="apply-btn-trigger w-full py-3.5 bg-[#4A433A] text-white font-manrope text-[10px] uppercase tracking-[0.2em] font-semibold hover:bg-[#322c26] transition-colors rounded-[2px] text-center inline-block cursor-pointer">APPLY FOR THIS ROLE</a>
                                    <a href="javascript:void(0)" class="w-full py-3.5 bg-transparent border border-[#4A433A]/20 text-[#4A433A] font-manrope text-[10px] uppercase tracking-[0.2em] font-semibold hover:bg-[#4A433A]/5 transition-colors rounded-[2px] text-center inline-block cursor-pointer">REFER A COLLEAGUE</a>
                                </div>

                                <!-- Share Buttons -->
                                <div class="mt-8 pt-6 border-t border-[#D2BB9C]/30 flex flex-col">
                                    <span class="font-manrope text-[9px] tracking-[0.2em] text-[#8a8174] uppercase mb-4 font-semibold">SHARE THIS ROLE</span>
                                    <div class="flex gap-2">
                                        <button class="flex-1 py-2 border border-[#D2BB9C]/50 text-[#8a8174] text-[10px] font-manrope hover:bg-white hover:text-[#4A433A] transition-colors rounded-[2px]">Copy Link</button>
                                        <button class="flex-1 py-2 border border-[#D2BB9C]/50 text-[#8a8174] text-[10px] font-manrope hover:bg-white hover:text-[#4A433A] transition-colors rounded-[2px]">LinkedIn</button>
                                        <button class="flex-1 py-2 border border-[#D2BB9C]/50 text-[#8a8174] text-[10px] font-manrope hover:bg-white hover:text-[#4A433A] transition-colors rounded-[2px]">Email</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Role Snapshot Card -->
                            <div class="border border-[#D2BB9C]/30 bg-[#FCFAF8] p-8 reveal reveal-delay-2">
                                <span class="font-manrope text-[9px] md:text-[10px] tracking-[0.2em] text-[#8a8174] uppercase mb-6 font-semibold block border-b border-[#D2BB9C]/30 pb-4">ROLE SNAPSHOT</span>
                                <ul class="font-manrope text-[12px] text-[#4A433A] space-y-4 font-medium divide-y divide-[#D2BB9C]/10">
                                    <li class="flex justify-between pt-3 first:pt-0">
                                        <span class="text-[#8a8174]">Department</span>
                                        <span class="text-right font-semibold">Design</span>
                                    </li>
                                    <li class="flex justify-between pt-3">
                                        <span class="text-[#8a8174]">Level</span>
                                        <span class="text-right font-semibold">Senior</span>
                                    </li>
                                    <li class="flex justify-between pt-3">
                                        <span class="text-[#8a8174]">Type</span>
                                        <span class="text-right font-semibold">Full-time</span>
                                    </li>
                                    <li class="flex justify-between pt-3">
                                        <span class="text-[#8a8174]">Location</span>
                                        <span class="text-right font-semibold">Riyadh, KSA</span>
                                    </li>
                                    <li class="flex justify-between pt-3">
                                        <span class="text-[#8a8174]">Work Mode</span>
                                        <span class="text-right font-semibold">On-site</span>
                                    </li>
                                    <li class="flex justify-between pt-3">
                                        <span class="text-[#8a8174]">Reporting to</span>
                                        <span class="text-right font-semibold">Head of Product</span>
                                    </li>
                                    <li class="flex justify-between pt-3">
                                        <span class="text-[#8a8174]">Closing Date</span>
                                        <span class="text-right font-semibold">30 April 2026</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- MORE OPEN ROLES -->
        <section class="w-full bg-[#EAE2D2] py-20 reveal border-t border-[#D2BB9C]/20">
            <div class="max-w-[1400px] mx-auto px-6 md:px-12 xl:px-24">
                <div class="flex items-end justify-between mb-12 border-b border-[#D2BB9C]/30 pb-4">
                    <h2 class="font-radley text-4xl text-[#4A433A]">
                        More <span class="italic text-[#C4A882]">open roles</span>
                    </h2>
                    <a href="{{ url('/careers') }}" class="font-manrope text-[9px] uppercase tracking-[0.2em] text-[#8a8174] font-semibold hover:text-[#4A433A] transition-colors flex items-center gap-2">
                        VIEW ALL POSITIONS →
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Role 1 -->
                    @php
                        $more_roles = [
                            ['cat' => 'DESIGN', 'title' => 'Hospitality Amenity Designer', 'type' => 'Full-time', 'level' => 'Mid-level'],
                            ['cat' => 'SUPPLY CHAIN', 'title' => 'Head of Procurement & Sourcing', 'type' => 'Full-time', 'level' => 'Leadership'],
                            ['cat' => 'TECHNOLOGY', 'title' => 'Full Stack Developer', 'type' => 'Full-time', 'level' => 'Mid-level'],
                        ];
                    @endphp
                    @foreach($more_roles as $role)
                    <a href="#" class="group py-8 md:py-10 px-8 hover:bg-[#FAF9F6] transition-all duration-300 block rounded-[2px] hover:shadow-sm">
                        <span class="font-manrope text-[9px] uppercase tracking-[0.2em] text-[#D2BB9C] block mb-3">{{ $role['cat'] }}</span>
                        <h3 class="font-radley text-2xl text-[#4A433A] mb-4 group-hover:text-[#C4A882] transition-colors">@php echo str_replace('Designer', '<span class="italic">Designer</span>', str_replace('Procurement', '<span class="italic">Procurement</span>', str_replace('Developer', '<span class="italic">Developer</span>', $role['title']))) @endphp</h3>
                        <div class="flex gap-2 mb-6">
                            <span class="px-3 py-1 border border-[#D2BB9C]/30 rounded-[2px] text-[#8a8174] text-[9px] font-manrope uppercase tracking-wider">{{ $role['type'] }}</span>
                            <span class="px-3 py-1 border border-[#D2BB9C]/30 rounded-[2px] text-[#8a8174] text-[9px] font-manrope uppercase tracking-wider">{{ $role['level'] }}</span>
                        </div>
                        <div class="flex items-center gap-2 text-[#8a8174] font-manrope text-[10px] uppercase tracking-wider">
                            <span class="text-[#D2BB9C]">→</span> Riyadh, KSA
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
</div>

@include('partials.modal')

@push('scripts')
<script>
    history.scrollRestoration = "manual";
    window.scrollTo(0, 0);

    document.addEventListener('DOMContentLoaded', () => {
        // Global reveal logic is in app.js, but ensures observer is active
        if (typeof IntersectionObserver !== 'undefined') {
            const revealObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("visible");
                    }
                });
            }, { threshold: 0.1 });
            document.querySelectorAll(".reveal").forEach((el) => revealObserver.observe(el));
        }
    });
</script>
@endpush
@endsection
