@extends('layouts.app')

@section('content')
<div class="min-h-screen flex flex-col md:flex-row bg-[#FDFCFB] overflow-hidden">
    <!-- Left Column: Branding & Imagery -->
    <div class="hidden md:flex md:w-[55%] lg:w-[60%] relative items-center justify-center p-12 overflow-hidden bg-[#F4F1EE]">
        <!-- Background Imagery with Parallax/Zoom Effect -->
        <div class="absolute inset-0 z-0 bg-image-container">
            <img src="{{ asset('assets/img/login-light-bg.png') }}" alt="ARKAN atmosphere" class="w-full h-full object-cover opacity-90 scale-110 branding-bg">
        </div>
        <div class="absolute inset-0 z-1 bg-gradient-to-r from-white/40 via-transparent to-transparent"></div>
        
        <!-- Branding Content (Subtle overlay for readability) -->
        <div class="relative z-10 max-w-2xl text-center md:text-left">
            <div class="branding-content opacity-0 translate-y-[20px]">
                <h2 class="font-cinzel text-black text-[10px] tracking-[0.6em] mb-6 opacity-60 uppercase">The ARKAN Standard</h2>
                <h1 class="font-serif-luxury text-[#1A1A1A] text-6xl lg:text-7xl mb-8 leading-[1.1] tracking-tight">Elegance in Every Interaction.</h1>
                <div class="w-16 h-px bg-[#C19A6B] my-8 mx-auto md:mx-0"></div>
                <p class="font-inter text-[#4A4A4A] text-sm lg:text-base max-w-sm leading-relaxed tracking-wide italic">
                    "Crafting the future of hospitality through refined management and impeccable presence."
                </p>
            </div>
        </div>

        <!-- Scroll Indicator / Corner Detail -->
        <div class="absolute bottom-12 left-12 branding-footer opacity-0">
            <p class="text-[9px] font-inter tracking-[0.4em] text-black/30 uppercase font-medium">© 2026 ARKAN GROUP</p>
        </div>
    </div>

    <!-- Right Column: Authentication Form -->
    <div class="flex-grow flex items-center justify-center p-8 md:p-12 lg:p-24 relative z-10 bg-white">
        <!-- Mobile Background Detail (only visible on small screens) -->
        <div class="md:hidden absolute inset-0 z-0">
            <img src="{{ asset('assets/img/login-light-bg.png') }}" alt="ARKAN atmosphere" class="w-full h-full object-cover opacity-30">
            <div class="absolute inset-0 bg-gradient-to-b from-white/20 to-white"></div>
        </div>

        <div class="w-full max-w-sm relative z-10">
            <!-- Header -->
            <div class="form-header opacity-0 translate-y-8 text-center md:text-left mb-16">
                <h3 class="font-cinzel text-[#C19A6B] text-[10px] tracking-[0.4em] mb-4 font-bold md:hidden">ARKAN</h3>
                <h2 class="font-serif-luxury text-[#1A1A1A] text-4xl mb-4">Management Access</h2>
                <p class="font-inter text-black/40 text-[10px] tracking-[0.2em] uppercase font-medium">Please authenticate to proceed to the portal</p>
            </div>

            <form method="POST" action="{{ route('login') }}" class="space-y-10 auth-form opacity-0 translate-y-8">
                @csrf

                <!-- Identity Field -->
                <div class="input-group group">
                    <label for="username" class="block text-[9px] font-inter tracking-[0.3em] text-black/50 uppercase mb-4 transition-colors group-focus-within:text-[#C19A6B] font-bold">Management Identity</label>
                    <div class="relative overflow-hidden">
                        <input id="username" type="text" name="username" value="{{ old('username') }}" required autofocus
                            class="w-full bg-transparent border-b border-black/5 py-4 text-[#1A1A1A] font-inter text-sm focus:outline-none transition-all duration-500 placeholder:text-black/10"
                            placeholder="username">
                        <div class="absolute bottom-0 left-0 w-full h-px bg-[#C19A6B] translate-x-[-100%] transition-transform duration-700 ease-out group-focus-within:translate-x-0"></div>
                    </div>
                    @error('username')
                        <p class="text-red-500 text-[9px] mt-3 italic tracking-wide font-medium">{{ $message }}</p>
                    @enderror
                </div>


                <!-- Security Key Field -->
                <div class="input-group group">
                    <div class="flex justify-between items-center mb-4">
                        <label for="password" class="block text-[9px] font-inter tracking-[0.3em] text-black/50 uppercase transition-colors group-focus-within:text-[#C19A6B] font-bold">Security Key</label>
                    </div>
                    <div class="relative overflow-hidden">
                        <input id="password" type="password" name="password" required
                            class="w-full bg-transparent border-b border-black/5 py-4 text-[#1A1A1A] font-inter text-sm focus:outline-none transition-all duration-500 placeholder:text-black/10"
                            placeholder="••••••••••••">
                        <div class="absolute bottom-0 left-0 w-full h-px bg-[#C19A6B] translate-x-[-100%] transition-transform duration-700 ease-out group-focus-within:translate-x-0"></div>
                    </div>
                </div>

                <!-- Remember Me & State -->
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-3 group cursor-pointer remember-wrapper">
                        <div class="relative w-4 h-4 rounded border border-black/10 flex items-center justify-center transition-colors group-hover:border-[#C19A6B]">
                            <input type="checkbox" name="remember" id="remember" class="peer absolute inset-0 opacity-0 cursor-pointer">
                            <svg class="w-3 h-3 text-[#C19A6B] opacity-0 peer-checked:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <label for="remember" class="text-[9px] font-inter tracking-[0.15em] text-black/40 uppercase cursor-pointer select-none group-hover:text-black/60 transition-colors font-medium">Keep Secured</label>
                    </div>
                    <a href="#" class="text-[9px] font-inter tracking-[0.1em] text-black/20 hover:text-[#C19A6B] transition-colors uppercase font-medium italic underline underline-offset-4 decoration-black/5">Recovery</a>
                </div>

                <!-- Action -->
                <div class="pt-8">
                    <button type="submit" class="w-full relative group bg-[#1A1A1A] text-white font-cinzel tracking-[0.4em] py-6 overflow-hidden transition-all duration-700 hover:bg-[#C19A6B]">
                        <span class="relative z-10 text-xs">ENTER PORTAL</span>
                        <div class="absolute bottom-0 left-0 w-0 h-[2px] bg-white transition-all duration-500 group-hover:w-full"></div>
                    </button>
                    
                    <p class="text-center mt-10 md:hidden">
                        <a href="{{ url('/') }}" class="text-[9px] font-inter tracking-[0.2em] text-black/30 uppercase underline underline-offset-4 decoration-black/10">Return to Public Reach</a>
                    </p>
                </div>
            </form>

            <!-- Desktop Back Link -->
            <div class="hidden md:block absolute -bottom-20 left-0 back-link opacity-0">
                <a href="{{ url('/') }}" class="group flex items-center text-[10px] font-inter tracking-[0.3em] text-black/20 hover:text-black transition-colors uppercase">
                    <span class="mr-4 group-hover:translate-x-[-6px] transition-transform duration-500">←</span> Return to Brand Site
                </a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const tl = gsap.timeline({ defaults: { ease: 'power3.out' } });

        // Branding entrance
        tl.to('.branding-bg', {
            scale: 1,
            duration: 4,
            opacity: 0.9,
            ease: 'sine.inOut'
        }, 0)
        .to('.branding-content', {
            opacity: 1,
            y: 0,
            duration: 1.8
        }, 0.5)
        .to('.branding-footer', {
            opacity: 1,
            duration: 1.5
        }, 1.5);

        // Form entrance
        tl.to('.form-header', {
            opacity: 1,
            y: 0,
            duration: 1.4
        }, 0.8)
        .to('.auth-form', {
            opacity: 1,
            y: 0,
            duration: 1.4
        }, 1.1)
        .to('.back-link', {
            opacity: 1,
            duration: 1.5
        }, 1.8);
    });
</script>

<style>
    input::placeholder {
        font-weight: 300;
        letter-spacing: 0.05em;
        opacity: 0.3 !important;
    }
    
    input:-webkit-autofill,
    input:-webkit-autofill:hover, 
    input:-webkit-autofill:focus {
        -webkit-text-fill-color: #1A1A1A;
        -webkit-box-shadow: 0 0 0px 1000px white inset;
        transition: background-color 5000s ease-in-out 0s;
    }

    body {
        cursor: default;
    }

    ::selection {
        background: rgba(193, 154, 107, 0.2);
        color: #1A1A1A;
    }

    .form-header h2 {
        letter-spacing: -0.02em;
    }
</style>
@endsection
