@php
    $bodyClass = 'antialiased font-manrope';
    $navbarTheme = '';
    $navDark = false;
    $navbarEntrance = false;
    
    $isExpired = false;
    if ($career->closing_date) {
        $isExpired = \Carbon\Carbon::parse($career->closing_date)->isPast() && !\Carbon\Carbon::parse($career->closing_date)->isToday();
    }
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
                    <span class="px-4 py-1.5 rounded-[2px] border border-white/20 text-white/80 font-manrope text-[10px] uppercase tracking-wider">{{ $career->category->name ?? 'ARKAN' }}</span>
                    <span class="px-4 py-1.5 rounded-[2px] border border-white/20 text-white/80 font-manrope text-[10px] uppercase tracking-wider">{{ $career->type }}</span>
                    <span class="px-4 py-1.5 rounded-[2px] border border-white/20 text-white/80 font-manrope text-[10px] uppercase tracking-wider">{{ $career->level }}</span>
                    <span class="px-4 py-1.5 rounded-[2px] border border-white/20 text-white/80 font-manrope text-[10px] uppercase tracking-wider">{{ $career->location }}</span>
                </div>

                <!-- Job Title -->
                <h1 class="font-radley text-5xl md:text-7xl lg:text-[5.5rem] text-white leading-[1.1] tracking-tight mb-8 reveal reveal-delay-1">
                    @php 
                        $titleParts = explode(' ', $career->title);
                        $lastWord = array_pop($titleParts);
                        $rest = implode(' ', $titleParts);
                    @endphp
                    {{ $rest }}<br />
                    <span class="italic">{{ $lastWord }}</span>
                </h1>

                <!-- Meta Info -->
                <div class="flex flex-wrap items-center gap-6 md:gap-10 font-manrope text-[11px] md:text-xs text-white/80 mb-12 reveal reveal-delay-2">
                    <div class="flex items-center gap-2">
                        <span class="opacity-60">📍</span> {{ $career->location }}
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="opacity-60">🏢</span> {{ $career->category->name ?? 'N/A' }}
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="opacity-60">📅</span> Posted {{ $career->created_at->format('F Y') }}
                    </div>
                    @if($career->closing_date)
                    <div class="flex items-center gap-2">
                        <span class="opacity-60">⏱</span> Closing {{ date('F d, Y', strtotime($career->closing_date)) }}
                    </div>
                    @endif
                </div>

                <!-- Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 items-start sm:items-center reveal reveal-delay-3">
                    <a href="{{ url('/careers') }}" class="px-8 py-3.5 bg-[#D2BB9C] text-[#1B1B18] font-manrope text-[10px] uppercase tracking-[0.2em] font-semibold rounded-[2px] hover:bg-[#c3aa8a] transition-colors inline-block text-center">
                        ← BACK TO ALL ROLES
                    </a>
                    <a href="javascript:void(0)" 
                        {!! $isExpired ? 'data-expired="true"' : '' !!} 
                        data-id="{{ $career->id }}"
                        data-title='{!! str_replace(["Designer", "Manager", "Developer", "Procurement"], ["<span class=\"italic\">Designer</span>", "<span class=\"italic\">Manager</span>", "<span class=\"italic\">Developer</span>", "<span class=\"italic\">Procurement</span>"], $career->title) !!}'
                        data-category="{{ $career->category->name ?? 'CAREERS' }}"
                        class="apply-btn-trigger px-8 py-3.5 bg-[#FCFAF8] text-[#1B1B18] font-manrope text-[10px] uppercase tracking-[0.2em] font-semibold rounded-[2px] hover:bg-white transition-colors inline-block text-center shadow-lg">
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
                                {!! nl2br(e($career->description)) !!}
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
                                @foreach(explode("\n", str_replace("\r", "", $career->responsibilities)) as $item)
                                    @if(trim($item))
                                    <li class="relative pl-6 before:content-['●'] before:absolute before:left-0 before:top-0.5 before:text-[8px] before:text-[#D2BB9C]">{{ trim($item) }}</li>
                                    @endif
                                @endforeach
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
                                @foreach(explode("\n", str_replace("\r", "", $career->requirements)) as $item)
                                    @if(trim($item))
                                    <li class="relative pl-6 before:content-['●'] before:absolute before:left-0 before:top-0.5 before:text-[8px] before:text-[#D2BB9C]">{{ trim($item) }}</li>
                                    @endif
                                @endforeach
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
                                @foreach(explode("\n", str_replace("\r", "", $career->benefits)) as $item)
                                    @if(trim($item))
                                    <li class="relative pl-6 before:content-['●'] before:absolute before:left-0 before:top-0.5 before:text-[8px] before:text-[#D2BB9C]">{{ trim($item) }}</li>
                                    @endif
                                @endforeach
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
                                    <span class="italic text-[#4A433A]">{{ $career->title }} Application_YourName</span>
                                </p>
                            </div>

                            <!-- Action Card -->
                            <div id="apply" class="bg-[#EAE2D2] border border-[#D2BB9C]/30 p-8 reveal reveal-delay-1">
                                <h3 class="font-radley text-3xl md:text-4xl text-[#4A433A] mb-4">
                                    @if($isExpired)
                                        Application <span class="italic text-[#C4A882]">Closed</span>
                                    @else
                                        Ready to <span class="italic text-[#C4A882]">apply?</span>
                                    @endif
                                </h3>
                                <p class="font-manrope text-[12px] text-[#8a8174] leading-[1.6] mb-8 font-medium">
                                    @if($isExpired)
                                        The application period for this position has ended. Thank you for your interest in joining ARKAN.
                                    @else
                                        Take the next step. Our team reviews every application personally and responds within 5 business days.
                                    @endif
                                </p>
                                <div class="flex flex-col gap-3">
                                    <a href="javascript:void(0)" {!! $isExpired ? 'data-expired="true"' : '' !!} class="apply-btn-trigger w-full py-3.5 bg-[#4A433A] text-white font-manrope text-[10px] uppercase tracking-[0.2em] font-semibold hover:bg-[#322c26] transition-colors rounded-[2px] text-center inline-block cursor-pointer">APPLY FOR THIS ROLE</a>
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
                                        <span class="text-right font-semibold">{{ $career->category->name ?? 'N/A' }}</span>
                                    </li>
                                    <li class="flex justify-between pt-3">
                                        <span class="text-[#8a8174]">Level</span>
                                        <span class="text-right font-semibold">{{ $career->level }}</span>
                                    </li>
                                    <li class="flex justify-between pt-3">
                                        <span class="text-[#8a8174]">Type</span>
                                        <span class="text-right font-semibold">{{ $career->type }}</span>
                                    </li>
                                    <li class="flex justify-between pt-3">
                                        <span class="text-[#8a8174]">Location</span>
                                        <span class="text-right font-semibold">{{ $career->location }}</span>
                                    </li>
                                    <li class="flex justify-between pt-3">
                                        <span class="text-[#8a8174]">Work Mode</span>
                                        <span class="text-right font-semibold">{{ $career->work_mode ?? 'On-site' }}</span>
                                    </li>
                                    <li class="flex justify-between pt-3">
                                        <span class="text-[#8a8174]">Reporting to</span>
                                        <span class="text-right font-semibold">{{ $career->reporting_to ?? 'Department Head' }}</span>
                                    </li>
                                    @if($career->closing_date)
                                    <li class="flex justify-between pt-3">
                                        <span class="text-[#8a8174]">Closing Date</span>
                                        <span class="text-right font-semibold">{{ date('d M Y', strtotime($career->closing_date)) }}</span>
                                    </li>
                                    @endif
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
                    @foreach($more_roles as $role)
                    <a href="{{ url('/careers/' . $role->slug) }}" class="group py-8 md:py-10 px-8 hover:bg-[#FAF9F6] transition-all duration-300 block rounded-[2px] hover:shadow-sm">
                        <span class="font-manrope text-[9px] uppercase tracking-[0.2em] text-[#D2BB9C] block mb-3">{{ $role->category->name ?? 'RESOURCES' }}</span>
                        <h3 class="font-radley text-2xl text-[#4A433A] mb-4 group-hover:text-[#C4A882] transition-colors">@php echo str_replace(['Designer', 'Procurement', 'Developer'], ['<span class="italic">Designer</span>', '<span class="italic">Procurement</span>', '<span class="italic">Developer</span>'], $role->title) @endphp</h3>
                        <div class="flex gap-2 mb-6">
                            <span class="px-3 py-1 border border-[#D2BB9C]/30 rounded-[2px] text-[#8a8174] text-[9px] font-manrope uppercase tracking-wider">{{ $role->type }}</span>
                            <span class="px-3 py-1 border border-[#D2BB9C]/30 rounded-[2px] text-[#8a8174] text-[9px] font-manrope uppercase tracking-wider">{{ $role->level }}</span>
                        </div>
                        <div class="flex items-center gap-2 text-[#8a8174] font-manrope text-[10px] uppercase tracking-wider">
                            <span class="text-[#D2BB9C]">→</span> {{ $role->location }}
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
</div>

@include('partials.modal')
@include('partials.expired-modal')

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
