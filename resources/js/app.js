import './bootstrap';
import Alpine from 'alpinejs';
import Lenis from 'lenis';
import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import { createIcons, icons } from 'lucide';

// Initialize Alpine.js
window.Alpine = Alpine;
Alpine.start();

// Register GSAP plugins
gsap.registerPlugin(ScrollTrigger);
window.gsap = gsap;
window.ScrollTrigger = ScrollTrigger;

// Initialize Lenis (Smooth Scrolling)
const lenis = new Lenis({
    duration: 1.2,
    easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
    smoothWheel: true,
    smoothTouch: false,
});

function raf(time) {
    lenis.raf(time);
    requestAnimationFrame(raf);
}
requestAnimationFrame(raf);

lenis.on('scroll', () => {
    ScrollTrigger.update();
});

// Safe icon initialization
try {
    createIcons({ icons });
} catch (e) {
    console.warn('Lucide icons warning:', e);
}

// Initialize All GSAP Animations Centrally
function initAnimations() {
    // 1. Hero Section
    try {
        if (document.querySelector('#hero')) {
            const tl = gsap.timeline();
            tl.fromTo(".hero-title", { y: 50, opacity: 0 }, { y: 0, opacity: 1, duration: 1, ease: "power4.out", delay: 0.2 })
              .fromTo(".hero-subtitle", { y: 30, opacity: 0 }, { y: 0, opacity: 1, duration: 0.8, ease: "power3.out" }, "-=0.6")
              .fromTo(".hero-actions", { y: 20, opacity: 0 }, { y: 0, opacity: 1, duration: 0.6, ease: "power3.out" }, "-=0.4")
              .fromTo(".hero-mockup", { x: 50, opacity: 0, rotationY: -20 }, { x: 0, opacity: 1, rotationY: 0, duration: 1.2, ease: "power4.out" }, "-=1")
              .fromTo(".floating-element-1", { y: 20, opacity: 0 }, { y: 0, opacity: 1, duration: 0.8, ease: "back.out(1.7)" }, "-=0.4")
              .fromTo(".floating-element-2", { y: -20, opacity: 0 }, { y: 0, opacity: 1, duration: 0.8, ease: "back.out(1.7)" }, "-=0.6");

            gsap.to(".floating-element-1", { y: -10, duration: 2, yoyo: true, repeat: -1, ease: "sine.inOut" });
            gsap.to(".floating-element-2", { y: 10, duration: 2.5, yoyo: true, repeat: -1, ease: "sine.inOut", delay: 0.5 });
        }
    } catch (e) { console.error("Hero animation error:", e); }

    // 2. Statistics Section
    try {
        if (document.querySelector('#statistics')) {
            const counters = document.querySelectorAll('.counter');
            ScrollTrigger.create({
                trigger: "#statistics",
                start: "top 90%",
                onEnter: () => {
                    counters.forEach(counter => {
                        const target = +counter.getAttribute('data-target');
                        if (target) {
                            gsap.to(counter, {
                                innerHTML: target,
                                duration: 2,
                                snap: { innerHTML: 1 },
                                ease: "power2.out"
                            });
                        }
                    });
                    gsap.fromTo(".stat-item", 
                        { y: 30, opacity: 0 },
                        { y: 0, opacity: 1, duration: 0.8, stagger: 0.1, ease: "power2.out" }
                    );
                },
                once: true
            });
        }
    } catch (e) { console.error("Stats animation error:", e); }

    // 3. Services Section
    try {
        if (document.querySelector('#services')) {
            gsap.fromTo("#services .section-header", 
                { y: 30, opacity: 0 },
                { 
                    y: 0, opacity: 1, duration: 0.8, ease: "power2.out",
                    scrollTrigger: { trigger: "#services", start: "top 90%", toggleActions: "play none none none" }
                }
            );
            gsap.fromTo(".service-card", 
                { y: 50, opacity: 0 },
                { 
                    y: 0, opacity: 1, duration: 0.8, stagger: 0.1, ease: "power3.out",
                    scrollTrigger: { trigger: "#services", start: "top 90%", toggleActions: "play none none none" }
                }
            );
        }
    } catch (e) { console.error("Services animation error:", e); }

    // 4. Process Section
    try {
        if (document.querySelector('#process')) {
            gsap.fromTo(".process-header", 
                { y: 30, opacity: 0 },
                { 
                    y: 0, opacity: 1, duration: 0.8, ease: "power2.out",
                    scrollTrigger: { trigger: "#process", start: "top 90%", toggleActions: "play none none none" }
                }
            );
            const timelineProgress = document.querySelector('.timeline-progress');
            if (timelineProgress) {
                gsap.to(timelineProgress, {
                    scrollTrigger: {
                        trigger: ".process-step",
                        start: "top center",
                        endTrigger: ".process-step:last-child",
                        end: "center center",
                        scrub: 1,
                    },
                    scaleY: 1, ease: "none"
                });
            }
            const steps = gsap.utils.toArray('.process-step');
            steps.forEach((step, i) => {
                const isEven = i % 2 === 0;
                const content = step.querySelector('.bg-background');
                const marker = step.querySelector('.marker');
                const desktopX = isEven ? -50 : 50;
                if (content) {
                    gsap.fromTo(content, 
                        { x: window.innerWidth > 768 ? desktopX : 30, opacity: 0 },
                        { 
                            x: 0, opacity: 1, duration: 0.8, ease: "power3.out",
                            scrollTrigger: { trigger: step, start: "top 90%", toggleActions: "play none none none" }
                        }
                    );
                }
                if (marker) {
                    gsap.fromTo(marker, 
                        { scale: 0 },
                        { 
                            scale: 1, duration: 0.5, ease: "back.out(2)",
                            scrollTrigger: { trigger: step, start: "top 90%", toggleActions: "play none none none" }
                        }
                    );
                }
            });
        }
    } catch (e) { console.error("Process animation error:", e); }

    // 5. Why Choose Us Section
    try {
        if (document.querySelector('#why-us')) {
            gsap.fromTo(".why-text", 
                { x: -50, opacity: 0 },
                { 
                    x: 0, opacity: 1, duration: 0.8, ease: "power3.out",
                    scrollTrigger: { trigger: "#why-us", start: "top 90%", toggleActions: "play none none none" }
                }
            );
            gsap.fromTo(".feature-card", 
                { y: 50, opacity: 0 },
                { 
                    y: 0, opacity: 1, duration: 0.6, stagger: 0.1, ease: "power2.out",
                    scrollTrigger: { trigger: "#why-us", start: "top 90%", toggleActions: "play none none none" }
                }
            );
        }
    } catch (e) { console.error("Why Us animation error:", e); }

    // 6. Testimonials Section
    try {
        if (document.querySelector('#testimonials')) {
            gsap.fromTo(".testimonial-header", 
                { y: 30, opacity: 0 },
                { 
                    y: 0, opacity: 1, duration: 0.8, ease: "power2.out",
                    scrollTrigger: { trigger: "#testimonials", start: "top 90%", toggleActions: "play none none none" }
                }
            );
            gsap.fromTo(".testimonial-carousel", 
                { y: 50, opacity: 0 },
                { 
                    y: 0, opacity: 1, duration: 1, ease: "power3.out", delay: 0.2,
                    scrollTrigger: { trigger: ".testimonial-carousel", start: "top 90%", toggleActions: "play none none none" }
                }
            );
        }
    } catch (e) { console.error("Testimonials animation error:", e); }

    // 7. About Section
    try {
        if (document.querySelector('#about')) {
            gsap.fromTo(".about-image", 
                { x: -50, opacity: 0 },
                { 
                    x: 0, opacity: 1, duration: 1, ease: "power3.out",
                    scrollTrigger: { trigger: "#about", start: "top 90%", toggleActions: "play none none none" }
                }
            );
            gsap.fromTo(".about-content", 
                { x: 50, opacity: 0 },
                { 
                    x: 0, opacity: 1, duration: 1, ease: "power3.out",
                    scrollTrigger: { trigger: "#about", start: "top 90%", toggleActions: "play none none none" }
                }
            );
        }
    } catch (e) { console.error("About animation error:", e); }

    // 8. FAQ Section
    try {
        if (document.querySelector('#faq')) {
            gsap.fromTo(".faq-header", 
                { y: 30, opacity: 0 },
                { 
                    y: 0, opacity: 1, duration: 0.8, ease: "power2.out",
                    scrollTrigger: { trigger: "#faq", start: "top 90%", toggleActions: "play none none none" }
                }
            );
            gsap.fromTo(".faq-item", 
                { y: 20, opacity: 0 },
                { 
                    y: 0, opacity: 1, duration: 0.6, stagger: 0.1, ease: "power2.out",
                    scrollTrigger: { trigger: ".faq-list", start: "top 90%", toggleActions: "play none none none" }
                }
            );
        }
    } catch (e) { console.error("FAQ animation error:", e); }

    // 9. CTA Section
    try {
        if (document.querySelector('.cta-content')) {
            gsap.fromTo(".cta-content", 
                { scale: 0.95, opacity: 0, y: 30 },
                { 
                    scale: 1, opacity: 1, y: 0, duration: 1, ease: "power3.out",
                    scrollTrigger: { trigger: ".cta-content", start: "top 90%", toggleActions: "play none none none" }
                }
            );
        }
    } catch (e) { console.error("CTA animation error:", e); }

    // 10. Contact Section
    try {
        if (document.querySelector('#contact')) {
            gsap.fromTo(".contact-info", 
                { x: -50, opacity: 0 },
                { 
                    x: 0, opacity: 1, duration: 0.8, ease: "power3.out",
                    scrollTrigger: { trigger: "#contact", start: "top 90%", toggleActions: "play none none none" }
                }
            );
            gsap.fromTo(".contact-form", 
                { y: 50, opacity: 0 },
                { 
                    y: 0, opacity: 1, duration: 0.8, ease: "power3.out",
                    scrollTrigger: { trigger: "#contact", start: "top 90%", toggleActions: "play none none none" }
                }
            );
        }
    } catch (e) { console.error("Contact animation error:", e); }

    setTimeout(() => {
        ScrollTrigger.refresh();
    }, 200);
}

// Execute initialization
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initAnimations);
} else {
    initAnimations();
}

window.addEventListener('load', () => {
    ScrollTrigger.refresh();
});
