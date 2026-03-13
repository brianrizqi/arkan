@props(['active' => 'dashboard'])

<aside class="w-72 bg-white border-r border-[#F0EDEA] hidden lg:flex flex-col z-20 dashboard-sidebar">
    <div class="p-8 border-b border-[#F0EDEA]">
        <a href="{{ url('/') }}" class="block">
            <h1 class="font-cinzel text-xl tracking-[0.4em] text-[#1A1A1A]">ARKAN</h1>
            <p class="text-[9px] font-inter tracking-[0.2em] text-[#C19A6B] uppercase mt-2 font-bold">Management Portal</p>
        </a>
    </div>
    
    <nav class="flex-grow p-6 space-y-2">
        <a href="{{ route('dashboard') }}" class="group flex items-center px-4 py-3 rounded-lg {{ $active === 'dashboard' ? 'bg-[#F8F5F2] text-[#1A1A1A]' : 'text-[#888] hover:bg-[#FDFCFB] hover:text-[#1A1A1A]' }} transition-all duration-300">
            <span class="text-[10px] font-inter tracking-[0.2em] uppercase {{ $active === 'dashboard' ? 'font-bold' : 'font-medium' }}">Resort Overview</span>
        </a>
        <a href="{{ route('portfolio.index') }}" class="group flex items-center px-4 py-3 rounded-lg {{ $active === 'portfolio' ? 'bg-[#F8F5F2] text-[#1A1A1A]' : 'text-[#888] hover:bg-[#FDFCFB] hover:text-[#1A1A1A]' }} transition-all duration-300">
            <span class="text-[10px] font-inter tracking-[0.2em] uppercase {{ $active === 'portfolio' ? 'font-bold' : 'font-medium' }}">Portfolio Management</span>
        </a>
        <a href="{{ route('career.index') }}" class="group flex items-center px-4 py-3 rounded-lg {{ $active === 'career' ? 'bg-[#F8F5F2] text-[#1A1A1A]' : 'text-[#888] hover:bg-[#FDFCFB] hover:text-[#1A1A1A]' }} transition-all duration-300">
            <span class="text-[10px] font-inter tracking-[0.2em] uppercase {{ $active === 'career' ? 'font-bold' : 'font-medium' }}">Career Management</span>
        </a>
        <a href="{{ route('career-category.index') }}" class="group flex items-center px-8 py-2 rounded-lg {{ $active === 'career-category' ? 'text-[#1A1A1A]' : 'text-[#888] hover:text-[#1A1A1A]' }} transition-all duration-300">
            <span class="text-[9px] font-inter tracking-[0.2em] uppercase font-medium">↳ Manage Categories</span>
        </a>
        <a href="{{ route('career-application.index') }}" class="group flex items-center px-4 py-3 rounded-lg {{ $active === 'career-application' ? 'bg-[#F8F5F2] text-[#1A1A1A]' : 'text-[#888] hover:bg-[#FDFCFB] hover:text-[#1A1A1A]' }} transition-all duration-300">
            <span class="text-[10px] font-inter tracking-[0.2em] uppercase {{ $active === 'career-application' ? 'font-bold' : 'font-medium' }}">Career Applications</span>
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
