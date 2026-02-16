<header id="global-navbar" class="fixed top-0 left-0 right-0 z-[100] transition-all duration-500">
    <div class="w-full px-8 py-8 flex justify-between items-center text-white/90 transition-colors duration-500" id="navbar-container">
        <div class="nav-item opacity-0">
            <a href="#" class="text-sm tracking-[0.3em] font-cinzel hover:text-white transition-colors">ARKAN</a>
        </div>
        <nav class="absolute left-1/2 -translate-x-1/2 space-x-8 text-xs tracking-[0.2em] font-montserrat uppercase hidden md:flex">
            <a href="#about" class="nav-item opacity-0 hover:text-white transition-colors">About</a>
            <a href="#services" class="nav-item opacity-0 hover:text-white transition-colors">Work</a>
            <a href="#archive" class="nav-item opacity-0 hover:text-white transition-colors">Archive</a>
        </nav>
        <div class="nav-item opacity-0">
            <a href="#" class="group text-sm tracking-widest font-montserrat flex items-center hover:text-white transition-colors">
                Contact <span class="ml-2 group-hover:translate-x-1 transition-transform">→</span>
            </a>
        </div>
    </div>
</header>

<style>
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

    #global-navbar.nav-scrolled .nav-item a {
        color: rgba(27, 27, 24, 0.7);
    }

    #global-navbar.nav-scrolled .nav-item a:hover {
        color: #1B1B18;
    }

    #global-navbar.nav-dark #navbar-container {
        color: #1B1B18;
    }

    #global-navbar.nav-dark .nav-item a {
        color: rgba(27, 27, 24, 0.7);
    }

    #global-navbar.nav-dark .nav-item a:hover {
        color: #1B1B18;
    }
</style>
