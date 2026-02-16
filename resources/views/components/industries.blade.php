@php
    $industries = [
        [
            'number' => '01',
            'title' => 'Luxury Hotels & Resorts',
            'image' => asset('assets/img/industries/luxury_hotel.png'),
        ],
        [
            'number' => '02',
            'title' => 'Aviation & Premium Travels',
            'image' => asset('assets/img/industries/aviation_travel.png'),
        ],
        [
            'number' => '03',
            'title' => 'Private Healthcare & Wellness',
            'image' => asset('assets/img/industries/private_healthcare.png'),
        ],
        [
            'number' => '04',
            'title' => 'Yacht & Marine Hospitality',
            'image' => asset('assets/img/industries/yacht_hospitality.png'),
        ],
        [
            'number' => '05',
            'title' => 'Branded Residence & Real Estate',
            'image' => asset('assets/img/industries/branded_residence.png'),
        ],
        [
            'number' => '06',
            'title' => 'Luxury Retail & Experience Spaces',
            'image' => asset('assets/img/industries/luxury_retail.png'),
        ],
    ];
@endphp

<section id="industries" class="relative py-24 px-12 min-h-screen" style="position: relative; z-index: 4;">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="{{ asset('assets/img/bg-texture.png') }}" 
             alt="" 
             class="w-full h-full object-cover opacity-30">
    </div>

    <div class="max-w-[1920px] mx-auto relative z-10">
        <!-- Title -->
        <div class="mb-16">
            <h2 class="industries-title font-radley text-[50px] leading-[92%] tracking-[-0.05em] text-[#1A1A1A]">
                <span class="italic">The</span> Industries We<br>Serve
            </h2>
        </div>

        <!-- Grid Container -->
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-6 gap-4">
            @foreach($industries as $industry)
                <div class="industry-tile flex flex-col group opacity-0 translate-y-8">
                    <!-- Image Wrapper -->
                    <div class="aspect-[2/3] overflow-hidden mb-6 bg-gray-200">
                        <img src="{{ $industry['image'] ?? $industry['placeholder'] }}" 
                             alt="{{ $industry['title'] }}" 
                             class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700 ease-in-out scale-100 group-hover:scale-110">
                    </div>

                    <!-- Info -->
                    <div class="flex items-start gap-3">
                        <div class="flex-shrink-0 w-8 h-8 rounded-full border border-[#1A1A1A] flex items-center justify-center text-[12px] font-archivo">
                            {{ $industry['number'] }}
                        </div>
                        <h3 class="text-[16px] leading-tight font-archivo text-[#1A1A1A]">
                            {{ $industry['title'] }}
                        </h3>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- "And Others" -->
        <div class="mt-16 flex justify-end">
            <div class="text-right">
                <p class="italic text-[16px] text-[#1A1A1A] font-radley opacity-60">and</p>
                <p class="text-[16px] text-[#1A1A1A] font-radley opacity-60">others</p>
            </div>
        </div>
    </div>
</section>

<style>
    @font-face {
        font-family: 'Radley';
        src: url('https://fonts.googleapis.com/css2?family=Radley:ital@0;1&display=swap');
    }
    @font-face {
        font-family: 'Archivo';
        src: url('https://fonts.googleapis.com/css2?family=Archivo:wght@400;500&display=swap');
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
    if (typeof gsap !== 'undefined') {
        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: '#industries',
                start: 'top 70%',
                toggleActions: 'play none none none'
            }
        });

        tl.fromTo('.industries-title', 
            { y: 50, opacity: 0 },
            { y: 0, opacity: 1, duration: 1.2, ease: 'power4.out' }
        )
        .to('.industry-tile', {
            opacity: 1,
            y: 0,
            duration: 1,
            stagger: 0.15,
            ease: 'power3.out'
        }, '-=0.8');
    }
});
</script>
