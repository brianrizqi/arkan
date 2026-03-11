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
        <h1 class="font-radley text-4xl md:text-6xl text-[#1B1B18] mb-12 reveal">Privacy Policy</h1>
        
        <div class="space-y-12 text-sm md:text-base text-[#333333]">
            <section class="reveal">
                <h2 class="font-radley italic text-2xl text-[#1B1B18] mb-4">1. Overview</h2>
                <p class="font-sans leading-relaxed">Your privacy is important to us. This Privacy Policy explains how ARKAN collects, uses, and protects your personal data when you interact with our 5PL Hospitality platform.</p>
            </section>
    
            <section class="reveal">
                <h2 class="font-radley italic text-2xl text-[#1B1B18] mb-4">2. Data Collection</h2>
                <p class="font-sans leading-relaxed">We collect information you provide directly, such as your name, contact details, and company information when you inquire about our services or apply for a career. We also collect technical data like IP addresses and browsing behavior to improve our website experience.</p>
            </section>
    
            <section class="reveal">
                <h2 class="font-radley italic text-2xl text-[#1B1B18] mb-4">3. How We Use Data</h2>
                <p class="font-sans mb-4">We use your data to:</p>
                <ul class="list-disc pl-5 font-sans space-y-2">
                    <li>Provide and improve our hospitality solutions.</li>
                    <li>Communicate regarding projects, inquiries, or applications.</li>
                    <li>Ensure the security and integrity of our platform.</li>
                    <li>Comply with legal and regulatory obligations.</li>
                </ul>
            </section>
    
            <section class="reveal">
                <h2 class="font-radley italic text-2xl text-[#1B1B18] mb-4">4. Data Sharing</h2>
                <p class="font-sans leading-relaxed">ARKAN does not sell your personal information. We may share data with trusted partners, such as logistics providers or manufacturers, solely to fulfill our services to you. All partners are required to maintain strict confidentiality.</p>
            </section>
    
            <section class="reveal">
                <h2 class="font-radley italic text-2xl text-[#1B1B18] mb-4">5. Data Security</h2>
                <p class="font-sans leading-relaxed">We implement industry-standard security measures to protect your information from unauthorized access, alteration, or disclosure. However, no digital transmission is entirely secure, and we encourage you to use our platform responsibly.</p>
            </section>
    
            <section class="reveal">
                <h2 class="font-radley italic text-2xl text-[#1B1B18] mb-4">6. Your Rights</h2>
                <p class="font-sans leading-relaxed">You have the right to access, update, or request the deletion of your personal data. To exercise these rights, please contact us at info@arkan.sa.</p>
            </section>
    
            <section class="pt-8 border-t border-[#1B1B18]/10 reveal">
                <p class="text-xs text-[#1B1B18]/60 uppercase tracking-widest font-sans">Last updated: March 10, 2026</p>
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
