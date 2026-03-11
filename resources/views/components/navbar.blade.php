<!-- Navbar Component -->
<header id="global-navbar" class="fixed top-0 left-0 right-0 z-[100] transition-all duration-500">
    <div class="w-full px-6 md:px-12 py-6 md:py-8 flex justify-between items-center text-white/90 transition-colors duration-500"
        id="navbar-container">
        <!-- Logo -->
        <div class="nav-item opacity-0">
            <a href="{{ url('/') }}" class="block hover:opacity-70 transition-opacity">
                <img src="{{ asset('assets/img/logo-arkan.svg') }}" alt="ARKAN"
                    class="navbar-logo h-4 md:h-5 w-auto object-contain brightness-0 invert transition-all duration-500" />
            </a>
        </div>

        <!-- Desktop Navigation -->
        <nav
            class="absolute left-1/2 -translate-x-1/2 space-x-8 text-xs tracking-[0.2em] font-sans uppercase hidden xl:flex">
            <a href="{{ url('/about') }}" class="nav-item opacity-0 hover:text-white transition-colors">About</a>
            <a href="{{ url('/portfolio') }}" class="nav-item opacity-0 hover:text-white transition-colors">The ARKAN Way</a>
            <a href="{{ url('/sustainability') }}"
                class="nav-item opacity-0 hover:text-white transition-colors">Sustainability</a>
        </nav>

        <!-- Tablet Navigation (Contact Us Centered) -->
        <div class="nav-item opacity-0 absolute left-1/2 -translate-x-1/2 hidden md:block xl:hidden">
            <a href="{{ url('/contact') }}"
                class="inline-block px-8 py-2.5 rounded-full border border-white/30 text-[10px] tracking-[0.3em] font-sans uppercase hover:bg-white hover:text-[#1B1B18] transition-all duration-300">
                Contact Us
            </a>
        </div>

        <!-- Right Side: Contact & Hamburger -->
        <div class="flex items-center space-x-6 md:space-x-8">
            <div class="nav-item opacity-0 hidden xl:block">
                <a href="{{ url('/contact') }}"
                    class="inline-block px-8 py-2.5 rounded-full border border-white/30 text-[10px] tracking-[0.3em] font-sans uppercase hover:bg-white hover:text-[#1B1B18] transition-all duration-300">
                    Contact Us
                </a>
            </div>

            <button id="mobile-menu-trigger"
                class="nav-item opacity-0 block xl:hidden focus:outline-none relative z-[120]">
                <div class="hamburger-box w-6 h-4 relative">
                    <span
                        class="hamburger-inner absolute w-6 h-[1px] bg-current top-0 left-0 transition-all duration-300"></span>
                    <span
                        class="hamburger-inner-mid absolute w-4 h-[1px] bg-current top-1/2 left-0 -translate-y-1/2 transition-all duration-300"></span>
                    <span
                        class="hamburger-inner absolute w-6 h-[1px] bg-current bottom-0 left-0 transition-all duration-300"></span>
                </div>
            </button>
        </div>
    </div>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu-overlay"
        class="fixed inset-0 bg-[#F5F1E8] z-[105] opacity-0 pointer-events-none transition-opacity duration-500 flex flex-col items-center justify-center p-12 text-center">
        <nav class="flex flex-col space-y-8 text-2xl tracking-[0.2em] font-sans text-[#1B1B18] uppercase">
            <a href="{{ url('/about') }}" class="mobile-nav-link opacity-0">About</a>
            <a href="{{ url('/portfolio') }}" class="mobile-nav-link opacity-0">The ARKAN Way</a>
            <a href="{{ url('/sustainability') }}" class="mobile-nav-link opacity-0">Sustainability</a>
            <a href="{{ url('/contact') }}" class="mobile-nav-link opacity-0">Contact Us</a>
        </nav>

        <div class="mt-20 mobile-nav-footer opacity-0">
            <img src="{{ asset('assets/img/logo-arkan.svg') }}" alt="ARKAN"
                class="h-6 w-auto mx-auto brightness-0 mb-4 opacity-30" />
            <p class="text-[10px] uppercase tracking-widest text-[#1B1B18]/40">
                ARKAN Standard © 2026
            </p>
        </div>
    </div>
</header>
