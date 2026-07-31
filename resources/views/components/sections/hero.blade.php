<section id="hero" class="relative min-h-screen flex items-center justify-center pt-24 overflow-hidden">
    <!-- Background Effects -->
    <div class="absolute inset-0 bg-background">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(37,99,235,0.1)_0,transparent_50%)]"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 md:px-12 relative z-10 w-full grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <!-- Text Content -->
        <div class="text-left hero-content">
            <div class="inline-flex items-center space-x-2 bg-surface border border-white/5 rounded-full px-4 py-2 mb-6">
                <span class="w-2 h-2 rounded-full bg-success animate-pulse"></span>
                <span class="text-xs font-medium text-muted uppercase tracking-wider">Available for new projects</span>
            </div>
            
            <h1 class="text-5xl md:text-7xl font-heading font-bold leading-tight mb-6 text-white hero-title">
                Building <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-accent">Digital</span> Experiences That Convert.
            </h1>
            
            <p class="text-lg md:text-xl text-muted mb-10 max-w-xl hero-subtitle leading-relaxed">
                Hi I'm <strong class="text-primary">Esure4Jay</strong>, a Software Engineer & Full-Stack Architect crafting world-class, performant, and scalable digital solutions.
            </p>
            
            <div class="flex flex-col sm:flex-row items-start sm:items-center space-y-4 sm:space-y-0 sm:space-x-6 hero-actions">
                <a href="https://wa.me/2349069625256?text=Hi%20Esure4Jay,%20I'd%20like%20to%20start%20a%20project!" target="_blank" rel="noopener noreferrer" class="px-8 py-4 bg-primary text-white font-medium rounded-full hover:bg-primary/90 transition-all shadow-[0_0_20px_rgba(37,99,235,0.4)] hover:shadow-[0_0_30px_rgba(37,99,235,0.6)] flex items-center group">
                    Start Your Project
                    <i data-lucide="arrow-right" class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform"></i>
                </a>
                <a href="#services" class="px-8 py-4 bg-surface border border-white/10 text-white font-medium rounded-full hover:bg-white/5 transition-colors flex items-center">
                    My Services
                </a>
            </div>
        </div>

        <!-- Animated Browser Mockup -->
        <div class="relative lg:h-[600px] flex items-center justify-center hero-mockup perspective-1000">
            <div class="relative w-full max-w-lg aspect-square lg:aspect-[4/5] bg-surface rounded-2xl border border-white/10 shadow-2xl overflow-hidden transform-gpu rotate-y-[-10deg] rotate-x-[5deg]">
                <!-- Browser Header -->
                <div class="h-10 border-b border-white/10 flex items-center px-4 space-x-2 bg-black/20">
                    <div class="w-3 h-3 rounded-full bg-red-500/80"></div>
                    <div class="w-3 h-3 rounded-full bg-yellow-500/80"></div>
                    <div class="w-3 h-3 rounded-full bg-success/80"></div>
                </div>
                <!-- Browser Content -->
                <div class="p-6 h-full flex flex-col space-y-6 bg-gradient-to-br from-surface to-background/50">
                    <div class="w-3/4 h-8 bg-white/5 rounded-lg skeleton-loading"></div>
                    <div class="w-full h-32 bg-white/5 rounded-lg skeleton-loading"></div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="h-24 bg-white/5 rounded-lg skeleton-loading delay-100"></div>
                        <div class="h-24 bg-white/5 rounded-lg skeleton-loading delay-200"></div>
                    </div>
                </div>
                
                <!-- Floating Elements -->
                <div class="absolute -right-8 top-20 bg-surface border border-white/10 p-4 rounded-xl shadow-xl floating-element-1">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 rounded-full bg-success/20 flex items-center justify-center text-success">
                            <i data-lucide="check" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <div class="text-sm font-medium text-white">Lighthouse Score</div>
                            <div class="text-2xl font-bold text-success">100</div>
                        </div>
                    </div>
                </div>
                
                <div class="absolute -left-12 bottom-32 bg-surface border border-white/10 p-4 rounded-xl shadow-xl floating-element-2 delay-300">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center text-primary">
                            <i data-lucide="zap" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <div class="text-sm font-medium text-white">Performance</div>
                            <div class="text-2xl font-bold text-white">Optimized</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<style>
    .perspective-1000 { perspective: 1000px; }
    .skeleton-loading {
        position: relative;
        overflow: hidden;
    }
    .skeleton-loading::after {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        transform: translateX(-100%);
        background-image: linear-gradient(
            90deg,
            rgba(255, 255, 255, 0) 0,
            rgba(255, 255, 255, 0.05) 20%,
            rgba(255, 255, 255, 0.1) 60%,
            rgba(255, 255, 255, 0)
        );
        animation: shimmer 2s infinite;
    }
    .delay-100::after { animation-delay: 0.1s; }
    .delay-200::after { animation-delay: 0.2s; }
    
    @keyframes shimmer {
        100% { transform: translateX(100%); }
    }
</style>
