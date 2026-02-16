<section id="services" class="relative min-h-screen overflow-hidden" style="top: 0; z-index: 3;">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="{{ asset('assets/img/bg-our-service.png') }}" 
             alt="" 
             class="w-full h-full object-cover"
             style="object-position: center bottom;">
    </div>

    <!-- Content -->
    <div class="relative min-h-screen flex flex-col px-12 py-24 max-w-[1920px] mx-auto">
        
        <!-- Title Section -->
        <div class="mb-32" style="opacity: 1;">
            <h2 class="services-title text-white font-radley" 
                style="font-size: 50px; 
                       letter-spacing: -0.05em; 
                       line-height: 92%; 
                       opacity: 0;">
                <span style="font-style: italic;">Our</span> Services
            </h2>
        </div>

        <!-- Services List -->
        <div class="mt-auto" style="max-width: 50%;">
            @php
                $services = [
                    "Hospitality amenity production",
                    "Custom Product Development",
                    "Material and finish consultation",
                    "Design transition into production ready outputs",
                    "Packaging, kits, and curated hospitality terms",
                    "Quality control and production alignment",
                ];
            @endphp

            @foreach($services as $index => $service)
                <div class="service-item flex items-start justify-between py-4" 
                     style="border-top: 1px solid rgba(250, 245, 235, 0.4); opacity: 0;">
                    
                    <!-- Number -->
                    <div class="flex-shrink-0" style="width: 100px;">
                        <p class="text-white font-inter" 
                           style="font-family: 'Archivo', sans-serif; 
                                  font-size: 14px;">
                            {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                        </p>
                    </div>

                    <!-- Service Text -->
                    <div class="flex-1 text-right">
                        <h4 class="text-white" 
                            style="font-family: 'Helvetica Neue', -apple-system, BlinkMacSystemFont, sans-serif; 
                                   font-size: 28px; 
                                   font-weight: 400;
                                   letter-spacing: -0.02em; 
                                   line-height: 1.2;">
                            {{ $service }}
                        </h4>
                    </div>
                </div>
            @endforeach

            <!-- Bottom Border -->
            <div style="border-bottom: 1px solid rgba(250, 245, 235, 0.4);"></div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    gsap.registerPlugin(ScrollTrigger);

    const tl = gsap.timeline({
        scrollTrigger: {
            trigger: '#services',
            start: 'top 60%',
            toggleActions: 'play none none none'
        }
    });

    tl.fromTo('.services-title',
        { y: 40, opacity: 0 },
        { y: 0, opacity: 1, duration: 1.5, ease: "power4.out" }
    )
    .fromTo('.service-item',
        { y: 20, opacity: 0 },
        { 
            y: 0, 
            opacity: 1, 
            duration: 0.8,
            stagger: 0.12,
            ease: "power3.out"
        },
        "-=0.8"
    );
});
</script>
