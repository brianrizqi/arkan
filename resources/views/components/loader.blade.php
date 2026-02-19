<div id="loader" class="fixed inset-0 z-[9999] flex items-center justify-center overflow-hidden bg-black transition-opacity duration-700">
    <div class="loader-bg absolute inset-0 bg-cover bg-center bg-no-repeat opacity-100" 
         style="background-image: url('{{ asset('assets/img/loading-bg.png') }}');">
    </div>
    <div class="relative z-10 flex flex-col items-center">
        <img src="{{ asset('assets/img/loading-logo.svg') }}" 
             id="loader-logo" 
             class="w-32 md:w-48 lg:w-56" 
             alt="Arkan Logo">
    </div>
</div>

<style>
    #loader {
        pointer-events: none;
        user-select: none;
    }
    .loader-bg {
        /* Optional: add a subtle zoom animation for the background */
        animation: subtleZoom 20s infinite alternate ease-in-out;
    }
    @keyframes subtleZoom {
        from { transform: scale(1); }
        to { transform: scale(1.1); }
    }
</style>
