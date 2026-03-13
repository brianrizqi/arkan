<header class="h-20 bg-white border-b border-[#F0EDEA] flex items-center justify-between px-8 z-10 dashboard-header">
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
