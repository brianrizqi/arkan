@php
    $navbarTheme = 'navbar-light-theme';
    $navDark = true;
    $navbarEntrance = false;
    $bodyClass = 'bg-[#F5F1E8]';
@endphp

@extends('layouts.app')

@section('content')
<div class="sections-wrapper relative overflow-x-hidden">
    <main class="pt-32 pb-24 px-6 md:px-12 max-w-4xl mx-auto legal-content">
        <h1 class="font-radley text-4xl md:text-6xl text-[#1B1B18] mb-12 reveal">Help & Support</h1>
        
        <div class="space-y-12 text-sm md:text-base">
            <section class="reveal">
                <h2 class="font-radley italic text-2xl text-[#1B1B18] mb-4">How can we help?</h2>
                <p class="font-sans text-[#333333] leading-relaxed">Our dedicated support team is here to assist you with any questions regarding our 5PL hospitality services. Whether you are a client looking for project updates or a partner exploring collaboration, we are ready to help.</p>
            </section>
    
            <section class="grid grid-cols-1 md:grid-cols-2 gap-8 reveal">
                <div class="p-8 bg-white/50 border border-[#1B1B18]/10 rounded-sm">
                    <h3 class="font-radley text-xl mb-4 italic text-[#1B1B18]">General Inquiries</h3>
                    <p class="text-sm font-sans text-[#333333]">For overall platform questions or information about ARKAN Standard.</p>
                    <p class="mt-4 font-semibold font-sans text-[#1B1B18]">info@arkan.sa</p>
                </div>
                <div class="p-8 bg-white/50 border border-[#1B1B18]/10 rounded-sm">
                    <h3 class="font-radley text-xl mb-4 italic text-[#1B1B18]">Project Support</h3>
                    <p class="text-sm font-sans text-[#333333]">Existing clients requiring assistance with ongoing OS&E projects.</p>
                    <p class="mt-4 font-semibold font-sans text-[#1B1B18]">projects@arkan.sa</p>
                </div>
            </section>
    
            <section class="reveal">
                <h2 class="font-radley text-2xl mb-6 italic text-[#1B1B18]">Frequently Asked Questions</h2>
                <div class="space-y-8 text-[#333333]">
                    <div>
                        <h4 class="font-sans font-semibold mb-2">What is 5PL in hospitality?</h4>
                        <p class="font-sans">5PL (Fifth-Party Logistics) manages global supply chains by overseeing multiple providers. In hospitality OS&E, ARKAN acts as the central orchestrator from design through fulfillment.</p>
                    </div>
                    <div>
                        <h4 class="font-sans font-semibold mb-2">How do I start a project with ARKAN?</h4>
                        <p class="font-sans">Simply reach out via our contact page or email us. Our team will schedule a discovery call to understand your brand vision and requirements.</p>
                    </div>
                    <div>
                        <h4 class="font-sans font-semibold mb-2">Do you provide custom design services?</h4>
                        <p class="font-sans">Yes, we combine world-class design talent with precise production capabilities to create bespoke amenities and items for luxury hospitality brands.</p>
                    </div>
                </div>
            </section>
    
            <section class="pt-8 border-t border-[#1B1B18]/10 text-center reveal">
                <p class="mb-4 font-sans text-[#333333]">Need immediate assistance?</p>
                <a href="{{ url('/contact') }}" class="inline-block px-12 py-4 bg-[#1B1B18] text-white font-sans text-xs uppercase tracking-widest hover:opacity-90 transition-opacity">
                    Visit Contact Page
                </a>
            </section>
        </div>
    </main>
</div>
@endsection

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
