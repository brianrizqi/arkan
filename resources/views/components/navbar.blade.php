<header id="global-navbar" class="fixed top-0 left-0 right-0 z-[100] transition-all duration-500">
    <div class="w-full px-6 md:px-12 py-6 md:py-8 flex justify-between items-center text-white/90 transition-colors duration-500" id="navbar-container">
        <!-- Logo -->
        <div class="nav-item opacity-0">
            <a href="#" class="block hover:opacity-70 transition-opacity">
                <img src="{{ asset('assets/img/logo-arkan.svg') }}" alt="ARKAN" class="navbar-logo h-4 md:h-5 w-auto object-contain brightness-0 invert transition-all duration-500">
            </a>
        </div>

        <!-- Desktop Navigation (Hidden on Tablet/Mobile) -->
        <nav class="absolute left-1/2 -translate-x-1/2 space-x-8 text-xs tracking-[0.2em] font-radley uppercase hidden lg:flex">
            <a href="#about" class="nav-item opacity-0 hover:text-white transition-colors">About</a>
            <a href="#services" class="nav-item opacity-0 hover:text-white transition-colors">Work</a>
            <a href="#archive" class="nav-item opacity-0 hover:text-white transition-colors">Archive</a>
        </nav>

        <!-- Right Side: Contact & Hamburger -->
        <div class="flex items-center space-x-6 md:space-x-8">
            <div class="nav-item opacity-0 hidden md:block">
                <a href="#" class="group text-sm tracking-widest font-radley flex items-center hover:text-white transition-colors">
                    Contact <span class="ml-2 group-hover:translate-x-1 transition-transform">→</span>
                </a>
            </div>
            
            <!-- Hamburger Button -->
            <button id="mobile-menu-trigger" class="nav-item opacity-0 block lg:hidden focus:outline-none z-[110]">
                <div class="hamburger-box w-6 h-4 relative">
                    <span class="hamburger-inner absolute w-6 h-[1px] bg-current top-0 left-0 transition-all duration-300"></span>
                    <span class="hamburger-inner-mid absolute w-4 h-[1px] bg-current top-1/2 left-0 -translate-y-1/2 transition-all duration-300"></span>
                    <span class="hamburger-inner absolute w-6 h-[1px] bg-current bottom-0 left-0 transition-all duration-300"></span>
                </div>
            </button>
        </div>
    </div>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu-overlay" class="fixed inset-0 bg-[#F5F1E8] z-[105] opacity-0 pointer-events-none transition-opacity duration-500 flex flex-col items-center justify-center p-12 text-center">
        <nav class="flex flex-col space-y-8 text-2xl tracking-[0.2em] font-serif-luxury text-[#1B1B18] uppercase">
            <a href="#about" class="mobile-nav-link opacity-0">About</a>
            <a href="#services" class="mobile-nav-link opacity-0">Work</a>
            <a href="#archive" class="mobile-nav-link opacity-0">Archive</a>
            <a href="#" class="mobile-nav-link opacity-0">Contact</a>
        </nav>
        
        <div class="mt-20 mobile-nav-footer opacity-0">
            <img src="{{ asset('assets/img/logo-arkan.svg') }}" alt="ARKAN" class="h-6 w-auto mx-auto brightness-0 mb-4 opacity-30">
            <p class="text-[10px] uppercase tracking-widest text-[#1B1B18]/40">ARKAN Standard © 2026</p>
        </div>
    </div>
</header>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const trigger = document.getElementById('mobile-menu-trigger');
    const overlay = document.getElementById('mobile-menu-overlay');
    const navbar = document.getElementById('global-navbar');
    const links = document.querySelectorAll('.mobile-nav-link');
    let isMenuOpen = false;

    const toggleMenu = () => {
        isMenuOpen = !isMenuOpen;
        
        if (isMenuOpen) {
            navbar.classList.add('menu-open');
            overlay.classList.remove('pointer-events-none');
            gsap.to(overlay, { opacity: 1, duration: 0.5, ease: 'power2.inOut' });
            gsap.to('.hamburger-inner-mid', { opacity: 0, duration: 0.2 });
            gsap.to('.hamburger-inner:first-child', { y: 7.5, rotate: 45, duration: 0.3 });
            gsap.to('.hamburger-inner:last-child', { y: -7.5, rotate: -45, duration: 0.3 });
            
            gsap.to(links, { 
                opacity: 1, 
                y: 0, 
                startAt: { y: 20 }, 
                stagger: 0.1, 
                duration: 0.8, 
                ease: 'power3.out',
                delay: 0.2 
            });
            gsap.to('.mobile-nav-footer', { opacity: 1, duration: 1, delay: 0.6 });
        } else {
            navbar.classList.remove('menu-open');
            overlay.classList.add('pointer-events-none');
            gsap.to(overlay, { opacity: 0, duration: 0.5, ease: 'power2.inOut' });
            gsap.to('.hamburger-inner-mid', { opacity: 1, duration: 0.2, delay: 0.1 });
            gsap.to('.hamburger-inner:first-child', { y: 0, rotate: 0, duration: 0.3 });
            gsap.to('.hamburger-inner:last-child', { y: 0, rotate: 0, duration: 0.3 });
            gsap.to(links, { opacity: 0, y: 10, duration: 0.3 });
            gsap.to('.mobile-nav-footer', { opacity: 0, duration: 0.3 });
        }
    };

    trigger.addEventListener('click', toggleMenu);
    
    // Close menu on link click
    links.forEach(link => {
        link.addEventListener('click', () => {
            if (isMenuOpen) toggleMenu();
        });
    });
});
</script>

<style>
    .navbar-logo {
        transition: filter 0.5s ease;
    }

    #global-navbar.nav-scrolled {
        background-color: rgba(253, 251, 248, 0.8);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.03);
    }

    #global-navbar.nav-scrolled #navbar-container {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
        color: #1B1B18;
    }

    #global-navbar.nav-scrolled .navbar-logo {
        filter: brightness(0);
    }

    #global-navbar.nav-scrolled .nav-item a,
    #global-navbar.nav-scrolled #mobile-menu-trigger {
        color: rgba(27, 27, 24, 0.7);
    }

    #global-navbar.nav-scrolled .nav-item a:hover,
    #global-navbar.nav-scrolled #mobile-menu-trigger:hover {
        color: #1B1B18;
    }

    #global-navbar.nav-dark #navbar-container {
        color: #1B1B18;
    }

    #global-navbar.nav-dark .navbar-logo {
        filter: brightness(0);
    }

    #global-navbar.nav-dark .nav-item a,
    #global-navbar.nav-dark #mobile-menu-trigger {
        color: rgba(27, 27, 24, 0.7);
    }

    /* Menu Open State Styles */
    #global-navbar.menu-open #navbar-container {
        color: #1B1B18 !important;
    }
    #global-navbar.menu-open .navbar-logo {
        filter: brightness(0) !important;
    }
    #global-navbar.menu-open #mobile-menu-trigger {
        color: #1B1B18 !important;
    }
</style>
