<section id="services" class="relative min-h-screen bg-[#F5F1E8] py-24 md:py-32 overflow-hidden" style="z-index: 3;">
    <div class="container mx-auto px-6 md:px-12 max-w-7xl">
        <!-- Centered Heading -->
        <div class="text-center mb-16 md:mb-24">
            <h2 class="services-title opacity-0 text-5xl md:text-7xl font-serif-luxury text-[#1B1B18] leading-[1.1]">
                What we do
            </h2>
        </div>

        <div class="flex flex-col lg:flex-row items-center lg:items-start gap-12 lg:gap-24">
            <!-- Left Column: Services List -->
            <div class="w-full lg:w-1/2">
                @php
                    $services = [
                        "Hospitality Amenity Production",
                        "Custom Product Development",
                        "Material And Finish Consultation",
                        "Design Transition Into Production Ready Outputs",
                        "Packaging, Kits, And Curated Hospitality Terms",
                        "Quality Control And Production Alignment",
                    ];
                @endphp

                <div class="flex flex-col">
                    @foreach($services as $index => $service)
                        <div class="service-item opacity-0 flex items-start py-6 md:py-8 border-t border-[#1B1B18]/10 last:border-b last:border-[#1B1B18]/10">
                            <!-- Number -->
                            <span class="text-[10px] md:text-sm font-lato text-[#1B1B18]/60 mr-6 md:mr-12 tabular-nums mt-1.5 md:mt-2">
                                ({{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }})
                            </span>
                            <!-- Service Text -->
                            <h4 class="text-xl md:text-2xl lg:text-3xl font-radley text-[#1B1B18] tracking-tight leading-snug">
                                {{ $service }}
                            </h4>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Right Column: Featured Image -->
            <div class="w-full lg:w-1/2">
                <div class="services-image-container opacity-0 relative overflow-hidden rounded-2xl md:rounded-[2rem] aspect-square lg:aspect-[4/5]">
                    <img src="{{ asset('assets/img/our-services.png') }}" 
                         alt="Our Services" 
                         class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    gsap.registerPlugin(ScrollTrigger);

    const servicesTl = gsap.timeline({
        scrollTrigger: {
            trigger: '#services',
            start: 'top 70%',
            toggleActions: 'play none none none'
        }
    });

    // Animate Title
    servicesTl.to('.services-title', {
        opacity: 1,
        y: 0,
        startAt: { y: 40 },
        duration: 1.2,
        ease: 'power4.out'
    })
    
    // Animate Services List (Staggered)
    .to('.service-item', {
        opacity: 1,
        y: 0,
        startAt: { y: 20 },
        duration: 0.8,
        stagger: 0.1,
        ease: 'power3.out'
    }, '-=0.6')

    // Animate Image
    .to('.services-image-container', {
        opacity: 1,
        scale: 1,
        startAt: { scale: 1.05 },
        duration: 1.5,
        ease: 'power2.out'
    }, '-=1');
});
</script>
