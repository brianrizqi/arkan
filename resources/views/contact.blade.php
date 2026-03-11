@extends('layouts.app')

@php 
    $navbarTheme = 'navbar-light-theme'; 
    $navDark = false; 
    $navbarEntrance = false;
    $bodyClass = 'bg-[#022A4F] text-white font-manrope';
@endphp

@section('content')
<div class="sections-wrapper relative overflow-x-hidden">
<main class="relative min-h-screen flex flex-col justify-center items-center pt-32 pb-12 px-6 md:px-12 xl:px-16 overflow-hidden" style="background: linear-gradient(180deg, #022A4F 0%, #083D6E 30%, #5E7D9A 70%, #A4B9D0 100%);">
    <div class="max-w-[1400px] mx-auto w-full relative z-10 flex flex-col">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between w-full gap-16 lg:gap-12 xl:gap-24">

            <!-- Left Column -->
            <div class="w-full lg:w-5/12 flex flex-col">
                <div>
                    <!-- Contact Us -->
                    <p class="font-sans text-xs md:text-sm mb-4 lg:mb-6 text-white/60 uppercase tracking-[0.2em]">
                        Contact Us
                    </p>

                    <!-- Get in Touch -->
                    <h1 class="text-5xl md:text-7xl lg:text-[6rem] xl:text-[7rem] font-radley leading-none text-white tracking-tight mb-8 lg:mb-12 whitespace-nowrap">
                        Get in <span class="italic">Touch.</span>
                    </h1>

                    <!-- Intro Paragraph -->
                    <div class="mb-10 lg:mb-12 pr-4 lg:pr-12">
                        <p class="font-manrope text-base md:text-lg lg:text-[1.1rem] leading-[1.6] text-white/90 font-light">
                            If you have any questions or you'd like to find<br />
                            out more about our services,<br />
                            please get in touch.
                        </p>
                    </div>

                    <!-- Contact Details -->
                    <div class="mb-8 lg:mb-12">
                        <h3 class="font-sans font-bold text-base md:text-lg mb-4 text-white">
                            Contact details :
                        </h3>
                        <p class="font-sans text-sm md:text-[15px] text-white/80 leading-[1.6] mb-8 lg:mb-10 max-w-sm font-light">
                            Ready to discuss your project? Feel like<br />
                            we might be a great fit? I would love to<br />
                            hear about it?
                        </p>

                        <!-- Address & Email -->
                        <div class="font-sans text-xs md:text-sm text-white/80 leading-[1.8] font-light">
                            <p class="mb-6">
                                <span class="text-white/40 block mb-0.5 uppercase tracking-wider">Email Us</span>
                                <a href="mailto:Info@arkan365.com" class="text-white hover:text-white/70 transition-colors text-base md:text-lg">Info@arkan365.com</a>
                            </p>
                            <p>
                                <span class="text-white/40 block mb-0.5 uppercase tracking-wider">Location</span>
                                Abi Bakr As Siddiq Rd, An Nafal<br />
                                Riyadh 13312<br />
                                Saudi Arabia
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Socials -->
                <div class="flex gap-4 mt-8 pb-4">
                    <a href="#" class="px-8 py-3 rounded-full bg-white text-[#111] text-[12px] md:text-[13px] font-sans font-medium tracking-wide hover:bg-white/90 transition-all flex items-center justify-center min-w-[120px]">Instagram</a>
                    <a href="#" class="px-8 py-3 rounded-full bg-white text-[#111] text-[12px] md:text-[13px] font-sans font-medium tracking-wide hover:bg-white/90 transition-all flex items-center justify-center min-w-[120px]">LinkedIn</a>
                </div>
            </div>

            <!-- Right Column -->
            <div class="w-full lg:w-6/12 flex flex-col pt-4">
                <div>
                    <!-- Form -->
                    <form class="w-full relative z-10 mb-8" action="#" method="POST">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-12">
                            <div class="flex flex-col">
                                <label class="text-[12px] md:text-[13px] font-manrope uppercase tracking-widest mb-2 text-white/60">Name</label>
                                <input type="text" name="name" class="bg-transparent border-b border-white/20 pb-2 text-base focus:outline-none focus:border-white transition-colors text-white font-manrope font-light" />
                            </div>
                            <div class="flex flex-col">
                                <label class="text-[12px] md:text-[13px] font-manrope uppercase tracking-widest mb-2 text-white/60">Email</label>
                                <input type="email" name="email" class="bg-transparent border-b border-white/20 pb-2 text-base focus:outline-none focus:border-white transition-colors text-white font-manrope font-light" />
                            </div>
                            <div class="flex flex-col md:col-span-2 mt-2">
                                <label class="text-[12px] md:text-[13px] font-manrope uppercase tracking-widest mb-2 text-white/60">Company</label>
                                <input type="text" name="company" class="bg-transparent border-b border-white/20 pb-2 text-base focus:outline-none focus:border-white transition-colors text-white font-manrope font-light" />
                            </div>
                            <div class="flex flex-col md:col-span-2 mt-2">
                                <label class="text-[12px] md:text-[13px] font-manrope uppercase tracking-widest mb-2 text-white/60">Messages</label>
                                <textarea name="message" rows="1" class="bg-transparent border-b border-white/20 pb-16 text-base focus:outline-none focus:border-white transition-colors text-white resize-none font-manrope font-light" placeholder="How can we help?"></textarea>
                            </div>
                        </div>
                    </form>

                    <!-- Submit Button -->
                    <div class="mt-8 pb-4">
                        <button type="submit" class="w-full py-4 rounded-full bg-white text-[#111] text-[14px] md:text-[15px] font-manrope font-bold uppercase tracking-[0.2em] hover:bg-white/90 transition-all">
                            Send Messages
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Amenities Highlight Section -->
<section class="relative w-full h-[600px] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('assets/img/about-6.png') }}" class="w-full h-full object-cover" alt="Amenities Background" />
        <div class="absolute inset-0 bg-black/40"></div>
    </div>
    <div class="relative z-10 flex flex-col items-center text-center px-6 max-w-4xl mx-auto">
        <h2 class="text-xl md:text-3xl lg:text-4xl font-manrope mb-8 leading-snug font-medium text-white">
            We craft premium amenities with a focus on quality, precision, and
            international standards, supported by some of the strongest.
        </h2>
        <a href="{{ url('/about') }}" class="px-8 py-3 rounded-full border border-white/30 text-[10px] font-manrope uppercase tracking-[0.2em] text-white hover:bg-white hover:text-black transition-colors">
            About Us
        </a>
    </div>
</section>
</div>
@push('scripts')
<script>
    history.scrollRestoration = 'manual';
    window.scrollTo(0, 0);
</script>
@endpush
@endsection
