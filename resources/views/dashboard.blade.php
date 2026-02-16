@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-[#FDFCFB] flex">
    <!-- Sophisticated Side Navigation -->
    <aside class="w-72 bg-white border-r border-[#F0EDEA] hidden lg:flex flex-col z-20 dashboard-sidebar opacity-0 translate-x-[-20px]">
        <div class="p-8 border-b border-[#F0EDEA]">
            <h1 class="font-cinzel text-xl tracking-[0.4em] text-[#1A1A1A]">ARKAN</h1>
            <p class="text-[9px] font-inter tracking-[0.2em] text-[#C19A6B] uppercase mt-2 font-bold">Management Portal</p>
        </div>
        
        <nav class="flex-grow p-6 space-y-2">
            <a href="#" class="group flex items-center px-4 py-3 rounded-lg bg-[#F8F5F2] text-[#1A1A1A] transition-all duration-300">
                <span class="text-[10px] font-inter tracking-[0.2em] uppercase font-bold">Resort Overview</span>
            </a>
            <a href="#" class="group flex items-center px-4 py-3 rounded-lg text-[#888] hover:bg-[#FDFCFB] hover:text-[#1A1A1A] transition-all duration-300">
                <span class="text-[10px] font-inter tracking-[0.2em] uppercase font-medium">Guest Management</span>
            </a>
            <a href="#" class="group flex items-center px-4 py-3 rounded-lg text-[#888] hover:bg-[#FDFCFB] hover:text-[#1A1A1A] transition-all duration-300">
                <span class="text-[10px] font-inter tracking-[0.2em] uppercase font-medium">Analytics Portal</span>
            </a>
            <a href="#" class="group flex items-center px-4 py-3 rounded-lg text-[#888] hover:bg-[#FDFCFB] hover:text-[#1A1A1A] transition-all duration-300">
                <span class="text-[10px] font-inter tracking-[0.2em] uppercase font-medium">Global Settings</span>
            </a>
        </nav>

        <div class="p-8 border-t border-[#F0EDEA]">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="w-full text-left text-[9px] font-inter tracking-[0.3em] text-[#C19A6B] uppercase font-bold hover:text-red-500 transition-colors">
                    Logout
                </button>

            </form>
        </div>
    </aside>

    <!-- Main Content Area -->
    <main class="flex-grow flex flex-col min-w-0">
        <!-- Top Navigation / Header -->
        <header class="h-20 bg-white border-b border-[#F0EDEA] flex items-center justify-between px-8 z-10 dashboard-header opacity-0 translate-y-[-10px]">
            <div class="flex items-center space-x-4 lg:hidden">
                <h1 class="font-cinzel text-lg tracking-[0.3em]">ARKAN</h1>
            </div>
            
            <div class="hidden md:block">
                <p class="text-[10px] font-inter tracking-[0.2em] text-[#888] uppercase italic">Welcome back, <span class="text-[#1A1A1A] font-bold">{{ Auth::user()->name }}</span></p>
            </div>

            <div class="flex items-center space-x-6">
                <div class="w-8 h-8 rounded-full border border-[#C19A6B] flex items-center justify-center text-[10px] font-serif-luxury text-[#C19A6B]">
                    {{ substr(Auth::user()->name, 0, 1) }}
                </div>
            </div>


        </header>

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

            <!-- Management Section Placeholder -->
            <section class="bg-white border border-[#F0EDEA] rounded-xl overflow-hidden shadow-sm stagger-item opacity-0 translate-y-4">
                <div class="p-8 border-b border-[#F0EDEA] flex justify-between items-center bg-[#FDFCFB]">
                    <h3 class="font-serif-luxury text-xl text-[#1A1A1A]">Exclusive Arrivals</h3>
                    <a href="#" class="text-[9px] font-inter tracking-[0.2em] text-[#C19A6B] uppercase font-bold border-b border-[#C19A6B]/30 hover:border-[#C19A6B] transition-all">View All Entries</a>
                </div>
                <div class="p-0">
                    <table class="w-full text-left font-inter text-sm">
                        <thead class="bg-[#F8F5F2] text-[9px] font-inter tracking-[0.3em] text-[#888] uppercase font-bold">
                            <tr>
                                <th class="px-8 py-5">Identity</th>
                                <th class="px-8 py-5">Suite Type</th>
                                <th class="px-8 py-5">Status</th>
                                <th class="px-8 py-5">Value</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-[#F0EDEA]">
                            <tr class="hover:bg-[#FDFCFB] transition-colors">
                                <td class="px-8 py-6 font-medium text-[#1A1A1A]">Alexander Sterling</td>
                                <td class="px-8 py-6 text-[#888] italic">Royal Penthouse</td>
                                <td class="px-8 py-6">
                                    <span class="px-3 py-1 rounded-full bg-green-50 text-green-600 text-[8px] font-bold uppercase tracking-widest">Confirmed</span>
                                </td>
                                <td class="px-8 py-6 font-medium">$42,500</td>
                            </tr>
                            <tr class="hover:bg-[#FDFCFB] transition-colors">
                                <td class="px-8 py-6 font-medium text-[#1A1A1A]">Elena Vancover</td>
                                <td class="px-8 py-6 text-[#888] italic">Ocean Horizon Wing</td>
                                <td class="px-8 py-6">
                                    <span class="px-3 py-1 rounded-full bg-blue-50 text-blue-600 text-[8px] font-bold uppercase tracking-widest">In Transit</span>
                                </td>
                                <td class="px-8 py-6 font-medium">$28,200</td>
                            </tr>
                            <tr class="hover:bg-[#FDFCFB] transition-colors">
                                <td class="px-8 py-6 font-medium text-[#1A1A1A]">Marcus Thorne</td>
                                <td class="px-8 py-6 text-[#888] italic">Heritage Suite</td>
                                <td class="px-8 py-6">
                                    <span class="px-3 py-1 rounded-full bg-amber-50 text-amber-600 text-[8px] font-bold uppercase tracking-widest">Pending</span>
                                </td>
                                <td class="px-8 py-6 font-medium">$15,800</td>
                            </tr>
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
