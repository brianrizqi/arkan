import './bootstrap';
import Lenis from 'lenis'
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

// Expose GSAP to window for inline scripts
window.gsap = gsap;
window.ScrollTrigger = ScrollTrigger;

gsap.registerPlugin(ScrollTrigger);

// Initialize Lenis with smooth settings similar to refined framing
const lenis = new Lenis({
    lerp: 0.1, // Smoothness intensity (0-1). Lower is smoother/slower. Default is 0.1.
    wheelMultiplier: 1, // Mouse wheel speed.
    touchMultiplier: 2, // Touch output speed.
    infinite: false,
});

// Sync Lenis scroll with GSAP ScrollTrigger
lenis.on('scroll', ScrollTrigger.update);

// Add Lenis's requestAnimationFrame to GSAP's ticker
gsap.ticker.add((time) => {
    lenis.raf(time * 1000);
});

// Disable lag smoothing in GSAP to prevent jumps during heavy loads
gsap.ticker.lagSmoothing(0);

// Expose lenis instance
window.lenis = lenis;
