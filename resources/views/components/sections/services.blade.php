<section id="services" class="py-32 bg-background relative z-10">
    <div class="max-w-7xl mx-auto px-6 md:px-12">
        
        <div class="mb-16 md:mb-24 text-center max-w-3xl mx-auto section-header">
            <h2 class="text-4xl md:text-5xl font-heading font-bold text-white mb-6">Services I Offer</h2>
            <p class="text-lg text-muted">I provide end-to-end digital solutions designed to elevate your brand, increase conversion rates, and dominate your industry.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            @php
                $services = [
                    ['title' => 'E-commerce Website', 'icon' => 'shopping-cart', 'desc' => 'Conversion-optimized online stores that provide seamless shopping experiences and secure checkouts.'],
                    ['title' => 'Online Banking Website', 'icon' => 'landmark', 'desc' => 'Highly secure, encrypted banking portals with seamless financial transactions and robust user management.'],
                    ['title' => 'Consignment/Logistics Website', 'icon' => 'truck', 'desc' => 'Advanced tracking systems and logistics platforms for smooth freight and package delivery management.'],
                    ['title' => 'Investment Website', 'icon' => 'trending-up', 'desc' => 'Professional investment and portfolio management platforms with real-time data and secure dashboards.'],
                    ['title' => 'SEO Optimization', 'icon' => 'search', 'desc' => 'Data-driven search engine optimization to improve your visibility and drive high-quality organic traffic.'],
                    ['title' => 'Custom Website Development', 'icon' => 'layout', 'desc' => 'Tailor-made, high-performance websites built with modern frameworks to ensure scalability and speed.']
                ];
            @endphp

            @foreach($services as $index => $service)
            <div class="service-card group bg-surface border border-white/5 p-8 rounded-2xl hover:border-primary/50 transition-colors duration-300 relative overflow-hidden transform hover:-translate-y-2 hover:shadow-[0_20px_40px_rgba(37,99,235,0.15)]">
                <!-- Hover Gradient -->
                <div class="absolute inset-0 bg-gradient-to-br from-primary/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                
                <div class="relative z-10">
                    <div class="w-14 h-14 bg-white/5 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary/20 transition-colors duration-300 text-primary">
                        <i data-lucide="{{ $service['icon'] }}" class="w-6 h-6"></i>
                    </div>
                    <h3 class="text-xl font-heading font-bold text-white mb-4">{{ $service['title'] }}</h3>
                    <p class="text-muted leading-relaxed">{{ $service['desc'] }}</p>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
