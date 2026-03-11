@php
    $navbarTheme = 'navbar-light-theme';
    $navDark = true;
    $navbarEntrance = false;
    $bodyClass = 'bg-[#FCFAF8]';
@endphp

@extends('layouts.app')

@section('content')
<div class="sections-wrapper relative overflow-x-hidden">
    <main class="w-full flex-grow pt-24 lg:pt-24 pb-0 overflow-x-hidden">
        <!-- Article Header & Intro -->
        <section class="w-full max-w-[1920px] mx-auto px-4 md:px-8 lg:px-16 xl:px-24 pt-12 md:pt-24 pb-12 reveal">
            <div class="flex flex-col gap-8 md:gap-12 relative h-full">
                <!-- Title area -->
                <div class="w-full text-center md:text-left">
                    <span class="font-radley text-[#6b5c49] text-xs md:text-sm tracking-widest mb-4 md:mb-6 block">Sustainability / The Art Of Precision In Luxury Hospitality Production</span>
                    <h1 class="text-[#333333] text-4xl md:text-[3.5rem] lg:text-[4.5rem] leading-[1.2] font-radley tracking-tight max-w-4xl">
                        The Art of Precision in Luxury Hospitality Production
                    </h1>
                </div>

                <!-- Split sub-content area (Category & Paragraph) -->
                <div class="w-full flex flex-col md:flex-row items-start justify-between gap-6 md:gap-16 pt-4 md:pt-6 border-b border-[#5c4f3d]/10 pb-12">
                    <!-- Left side: Category pill -->
                    <div class="flex-shrink-0">
                        <span class="inline-flex items-center justify-center px-4 md:px-6 py-1.5 md:py-2 rounded-sm bg-[#E1E4D5] text-[#5c4f3d] font-radley text-[16px] md:text-[18px]">Hospitality Manufacturing</span>
                    </div>

                    <!-- Right side: Text description -->
                    <div class="w-full max-w-3xl">
                        <p class="text-[#8a8174] font-sans text-[15px] md:text-[17px] leading-[1.6]">
                            To be the Saudi champion in Total Facility and Hospitality Management by setting the standard for how spaces are operated, cared for, and experienced.
                        </p>

                        <!-- Tags Row -->
                        <div class="flex flex-wrap justify-start md:justify-end gap-3 mt-6">
                            @foreach(['Tag 1', 'Tag 2', 'Tag 3', 'Tag 4', 'Tag 5', 'Tag 6'] as $tag)
                            <span class="inline-flex items-center justify-center px-4 py-1 bg-[#E1E4D5] text-[#5c4f3d] font-radley text-sm rounded-sm">{{ $tag }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured Image Area -->
        <section class="w-full max-w-[1920px] mx-auto px-4 md:px-8 lg:px-16 xl:px-24 pb-12 md:pb-16 reveal">
            <div class="w-full relative aspect-[16/10] md:aspect-[21/9] overflow-hidden rounded-sm">
                <img src="{{ asset('assets/img/our-jurnal-1.png') }}" alt="Hospitality Fabric" class="absolute inset-0 w-full h-full object-cover" />
            </div>
        </section>

        <!-- WYSIWYG Content Area -->
        <article class="w-full max-w-[1920px] mx-auto px-4 md:px-8 pb-24 md:pb-32 font-sans text-[#5c4f3d] article-content reveal">
            <p class="text-[15px] md:text-[16px] leading-relaxed mb-8 text-[#111111]/80">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <p class="text-[15px] md:text-[16px] leading-relaxed mb-8 text-[#111111]/80">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <p class="text-[15px] md:text-[16px] leading-relaxed mb-8 text-[#111111]/80">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <p class="text-[15px] md:text-[16px] leading-relaxed mb-8 text-[#111111]/80">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <p class="text-[15px] md:text-[16px] leading-relaxed mb-8 text-[#111111]/80">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <p class="text-[15px] md:text-[16px] leading-relaxed text-[#111111]/80">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </article>

        <!-- CTA Section -->
        <section class="reveal relative w-full h-[60vh] md:h-[70vh] min-h-[400px] flex items-center justify-center overflow-hidden">
            <img src="{{ asset('assets/img/our-jurnal-1.png') }}" alt="Contact Arkan background" class="absolute inset-0 w-full h-full object-cover z-0 pointer-events-none" />
            <div class="absolute inset-0 bg-black/40 xl:bg-black/30 z-0 pointer-events-none"></div>
            <div class="relative z-10 flex flex-col items-center justify-center text-center px-4 md:px-12 max-w-4xl mx-auto">
                <h2 class="text-white font-sans font-medium text-2xl md:text-3xl lg:text-4xl leading-snug md:leading-normal mb-8 md:mb-12">
                    We craft premium amenities with a focus on quality, precision, and<br class="hidden md:block" />
                    international standards, supported by some of the strongest.
                </h2>
                <a href="{{ url('/contact') }}" class="inline-block px-10 py-3.5 rounded-full border border-white text-white text-[10px] md:text-xs font-sans font-bold tracking-[0.3em] hover:bg-white hover:text-black transition-all duration-300 pointer-events-auto uppercase">
                    Contact Us
                </a>
            </div>
        </section>
    </main>
</div>

@push('scripts')
<script>
    history.scrollRestoration = "manual";
    window.scrollTo(0, 0);

    document.addEventListener('DOMContentLoaded', () => {
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
