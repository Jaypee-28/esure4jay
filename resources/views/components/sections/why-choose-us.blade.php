<section id="why-us" class="py-32 bg-background relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 md:px-12 relative z-10">
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            
            <!-- Left Side: Text -->
            <div class="why-text">
                <div class="inline-flex items-center space-x-2 bg-surface border border-white/5 rounded-full px-4 py-2 mb-6">
                    <i data-lucide="shield-check" class="w-4 h-4 text-success"></i>
                    <span class="text-xs font-medium text-primary uppercase tracking-wider">The ESURE4JAY Advantage</span>
                </div>
                
                <h2 class="text-4xl md:text-5xl font-heading font-bold text-white mb-6 leading-tight">
                    Why Clients <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-accent">Choose Me</span>
                </h2>
                
                <p class="text-lg text-muted mb-8 leading-relaxed">
                    I don't just build websites; I engineer digital ecosystems designed for growth. I combine elite design aesthetics with robust engineering to deliver unparalleled results.
                </p>

                <div class="space-y-6">
                    @php
                        $benefits = [
                            ['title' => 'Lightning Fast Delivery', 'desc' => 'Optimized workflows ensure your project launches on time without compromising quality.'],
                            ['title' => 'Clean, Maintainable Code', 'desc' => 'Built following strict architectural patterns for long-term scalability and ease of updates.'],
                            ['title' => 'SEO Ready from Day One', 'desc' => 'Technical SEO best practices baked into the core structure of every project.'],
                        ];
                    @endphp

                    @foreach($benefits as $benefit)
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-surface border border-white/10 flex items-center justify-center text-primary mt-1">
                            <i data-lucide="check" class="w-6 h-6"></i>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-white mb-2">{{ $benefit['title'] }}</h4>
                            <p class="text-muted">{{ $benefit['desc'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Right Side: Grid -->
            <div class="grid grid-cols-2 gap-4 md:gap-6 why-grid relative">
                <!-- Background glow -->
                <div class="absolute inset-0 bg-primary/20 blur-[100px] rounded-full pointer-events-none"></div>
                
                @php
                    $features = [
                        ['icon' => 'smartphone', 'label' => 'Mobile First'],
                        ['icon' => 'lock', 'label' => 'Secure'],
                        ['icon' => 'activity', 'label' => 'Scalable'],
                        ['icon' => 'code', 'label' => 'Modern Tech'],
                    ];
                @endphp

                @foreach($features as $index => $feature)
                <div class="bg-surface border border-white/10 p-8 rounded-2xl flex flex-col items-center justify-center text-center hover:border-primary/50 transition-colors transform {{ $index % 2 == 1 ? 'translate-y-8' : '' }} feature-card">
                    <i data-lucide="{{ $feature['icon'] }}" class="w-10 h-10 text-primary mb-4"></i>
                    <h5 class="text-lg font-bold text-white">{{ $feature['label'] }}</h5>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</section>


