<div id="loader" class="fixed inset-0 z-[9999] flex items-center justify-center overflow-hidden bg-black">
    <div class="loader-bg absolute inset-0 bg-cover bg-[center_87%] bg-no-repeat opacity-100"
        style="background-image: url('{{ asset('assets/img/loading-bg.jpg') }}')"></div>
    <div class="relative z-10 flex flex-col items-center">
        <img src="{{ asset('assets/img/loading-logo-2.svg') }}" id="loader-logo" class="w-70 md:w-100 lg:w-200"
            alt="Arkan Logo" />
    </div>
</div>
