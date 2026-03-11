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
        <h1 class="font-radley text-4xl md:text-6xl text-[#1B1B18] mb-12 reveal">Terms & Conditions</h1>
        
        <div class="space-y-12 text-sm md:text-base text-[#333333]">
            <section class="reveal">
                <h2 class="font-radley italic text-2xl text-[#1B1B18] mb-4">1. Introduction</h2>
                <p class="font-sans leading-relaxed">Welcome to ARKAN. These Terms and Conditions govern your use of our website and services. By accessing or using our platform, you agree to be bound by these terms. If you do not agree, please refrain from using our services.</p>
            </section>
    
            <section class="reveal">
                <h2 class="font-radley italic text-2xl text-[#1B1B18] mb-4">2. Services</h2>
                <p class="font-sans leading-relaxed">ARKAN provides a 5PL Hospitality OS&E (Operating Supplies and Equipment) platform. We facilitate the design, production, logistics, and fulfillment of hospitality products. Our services are tailored to professional hospitality providers globally, focusing on high standards and precision.</p>
            </section>
    
            <section class="reveal">
                <h2 class="font-radley italic text-2xl text-[#1B1B18] mb-4">3. Intellectual Property</h2>
                <p class="font-sans leading-relaxed">All content, designs, trademarks, and logos on this platform are the property of ARKAN or our licensors. You may not reproduce, distribute, or create derivative works without our explicit written consent.</p>
            </section>
    
            <section class="reveal">
                <h2 class="font-radley italic text-2xl text-[#1B1B18] mb-4">4. User Responsibilities</h2>
                <p class="font-sans leading-relaxed">Users are responsible for providing accurate information and maintaining the confidentiality of any account credentials. Any misuse of our platform or interference with its operation is strictly prohibited.</p>
            </section>
    
            <section class="reveal">
                <h2 class="font-radley italic text-2xl text-[#1B1B18] mb-4">5. Limitation of Liability</h2>
                <p class="font-sans leading-relaxed">ARKAN aims for excellence, but we do not guarantee that our platform will always be error-free or uninterrupted. To the maximum extent permitted by law, ARKAN shall not be liable for any indirect, incidental, or consequential damages arising from your use of our services.</p>
            </section>
    
            <section class="reveal">
                <h2 class="font-radley italic text-2xl text-[#1B1B18] mb-4">6. Governing Law</h2>
                <p class="font-sans leading-relaxed">These terms are governed by the laws of the Kingdom of Saudi Arabia. Any disputes shall be subject to the exclusive jurisdiction of the courts in Riyadh.</p>
            </section>
    
            <section class="reveal">
                <h2 class="font-radley italic text-2xl text-[#1B1B18] mb-4">7. Changes to Terms</h2>
                <p class="font-sans leading-relaxed">We reserve the right to update these terms at any time. Significant changes will be communicated via our website. Your continued use of the platform after such changes constitutes acceptance of the new terms.</p>
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
