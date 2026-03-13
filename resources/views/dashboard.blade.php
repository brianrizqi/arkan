@extends('layouts.app')

@php
    $noNavbar = true;
    $noLoader = true;
    $noFooter = true;
@endphp

@section('content')
<div class="min-h-screen bg-[#FDFCFB] flex">
    <x-dashboard.sidebar active="dashboard" />

    <!-- Main Content Area -->
    <main class="flex-grow flex flex-col min-w-0">
        <x-dashboard.header />

        <!-- Dashboard Body -->
        <div class="flex-grow p-8 lg:p-12 space-y-12 overflow-y-auto">
            <!-- Welcome Section -->
            <section class="stagger-item opacity-0">
                <h2 class="font-serif-luxury text-4xl text-[#1A1A1A] mb-4">The State of Presence</h2>
                <div class="w-12 h-px bg-[#C19A6B]"></div>
            </section>

            <!-- Statistics Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white border border-[#F0EDEA] p-8 rounded-xl shadow-sm hover:shadow-md transition-shadow stagger-item opacity-0 translate-y-4">
                    <h4 class="text-[9px] font-inter tracking-[0.3em] text-[#C19A6B] uppercase mb-4 font-bold">Current Occupancy</h4>
                    <p class="font-serif-luxury text-3xl text-[#1A1A1A]">94.2%</p>
                    <div class="mt-4 flex items-center space-x-2">
                        <span class="text-[8px] font-inter text-green-500 font-bold">+2.4%</span>
                        <span class="text-[8px] font-inter text-[#888] uppercase tracking-tighter italic">vs last month</span>
                    </div>
                </div>
                <div class="bg-white border border-[#F0EDEA] p-8 rounded-xl shadow-sm hover:shadow-md transition-shadow stagger-item opacity-0 translate-y-4">
                    <h4 class="text-[9px] font-inter tracking-[0.3em] text-[#C19A6B] uppercase mb-4 font-bold">Standard Revenue</h4>
                    <p class="font-serif-luxury text-3xl text-[#1A1A1A]">$12.4M</p>
                    <div class="mt-4 flex items-center space-x-2">
                        <span class="text-[8px] font-inter text-green-500 font-bold">+8.1%</span>
                        <span class="text-[8px] font-inter text-[#888] uppercase tracking-tighter italic">exceptional growth</span>
                    </div>
                </div>
                <div class="bg-white border border-[#F0EDEA] p-8 rounded-xl shadow-sm hover:shadow-md transition-shadow stagger-item opacity-0 translate-y-4">
                    <h4 class="text-[9px] font-inter tracking-[0.3em] text-[#C19A6B] uppercase mb-4 font-bold">Guest Satisfaction</h4>
                    <p class="font-serif-luxury text-3xl text-[#1A1A1A]">4.91</p>
                    <div class="mt-4 flex items-center space-x-2">
                        <span class="text-[8px] font-inter text-[#888] uppercase tracking-tighter italic">Out of 5.0</span>
                    </div>
                </div>
            </div>

            <!-- Management Section: Recent Career Applications -->
            <section class="bg-white border border-[#F0EDEA] rounded-xl overflow-hidden shadow-sm stagger-item opacity-0 translate-y-4">
                <div class="p-8 border-b border-[#F0EDEA] flex justify-between items-center bg-[#FDFCFB]">
                    <h3 class="font-serif-luxury text-xl text-[#1A1A1A]">Recent Career Applications</h3>
                    <a href="{{ route('career-application.index') }}" class="text-[9px] font-inter tracking-[0.2em] text-[#C19A6B] uppercase font-bold border-b border-[#C19A6B]/30 hover:border-[#C19A6B] transition-all">View All Applications</a>
                </div>
                <div class="p-0">
                    <table class="w-full text-left font-inter text-sm">
                        <thead class="bg-[#F8F5F2] text-[9px] font-inter tracking-[0.3em] text-[#888] uppercase font-bold">
                            <tr>
                                <th class="px-8 py-5">Applicant</th>
                                <th class="px-8 py-5">Position</th>
                                <th class="px-8 py-5">Status</th>
                                <th class="px-8 py-5">Date</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-[#F0EDEA]">
                            @forelse($recent_applications as $app)
                            <tr class="hover:bg-[#FDFCFB] transition-colors">
                                <td class="px-8 py-6 font-medium text-[#1A1A1A]">{{ $app->first_name }} {{ $app->last_name }}</td>
                                <td class="px-8 py-6 text-[#888] italic">{{ $app->career->title ?? 'N/A' }}</td>
                                <td class="px-8 py-6">
                                    <span class="px-3 py-1 rounded-full bg-blue-50 text-blue-600 text-[8px] font-bold uppercase tracking-widest">New</span>
                                </td>
                                <td class="px-8 py-6 font-medium">{{ $app->created_at->format('M d, Y') }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="px-8 py-12 text-center text-[#888] italic">No recent applications.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </main>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const tl = gsap.timeline({ defaults: { ease: 'power3.out' } });

        tl.to('.dashboard-sidebar', {
            opacity: 1,
            x: 0,
            duration: 1.2
        }, 0)
        .to('.dashboard-header', {
            opacity: 1,
            y: 0,
            duration: 1
        }, 0.3)
        .to('.stagger-item', {
            opacity: 1,
            y: 0,
            stagger: 0.2,
            duration: 1.2
        }, 0.5);
    });
</script>

<style>
    body {
        cursor: default;
    }
    ::selection {
        background: rgba(193, 154, 107, 0.2);
        color: #1A1A1A;
    }
</style>
@endsection
