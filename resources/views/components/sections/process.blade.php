<section id="process" class="py-32 bg-surface relative overflow-hidden">
    <!-- Decorative background element -->
    <div class="absolute right-0 top-0 w-1/2 h-full bg-gradient-to-l from-primary/5 to-transparent opacity-50 pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-6 md:px-12 relative z-10">
        
        <div class="mb-20 text-center max-w-3xl mx-auto process-header">
            <h2 class="text-4xl md:text-5xl font-heading font-bold text-white mb-6">My Proven Process</h2>
            <p class="text-lg text-muted">A streamlined, transparent approach to bringing your vision to life with precision and engineering excellence.</p>
        </div>

        <div class="relative max-w-4xl mx-auto">
            <!-- Timeline Line -->
            <div class="absolute left-[28px] md:left-1/2 top-0 bottom-0 w-px bg-white/10 md:-translate-x-1/2 timeline-line hidden sm:block"></div>
            <!-- Animated Timeline Line Progress -->
            <div class="absolute left-[28px] md:left-1/2 top-0 w-px bg-primary md:-translate-x-1/2 timeline-progress hidden sm:block origin-top scale-y-0"></div>

            @php
                $steps = [
                    ['num' => '01', 'title' => 'Discovery', 'desc' => 'I start by understanding your brand, goals, target audience, and technical requirements to define project scope.'],
                    ['num' => '02', 'title' => 'Planning', 'desc' => 'Creating detailed sitemaps, wireframes, and technical architecture to ensure a solid foundation.'],
                    ['num' => '03', 'title' => 'Design', 'desc' => 'Crafting pixel-perfect, premium UI/UX designs that align with your brand identity and engage users.'],
                    ['num' => '04', 'title' => 'Development', 'desc' => 'Writing clean, scalable, and performant code using the latest modern web technologies.'],
                    ['num' => '05', 'title' => 'Launch', 'desc' => 'Rigorous testing, QA, and deployment to ensure a flawless release to the public.'],
                    ['num' => '06', 'title' => 'Support', 'desc' => 'Ongoing maintenance, performance monitoring, and updates to keep your project ahead of the curve.']
                ];
            @endphp

            <div class="space-y-12 md:space-y-24">
                @foreach($steps as $index => $step)
                <div class="relative flex flex-col md:flex-row items-start md:items-center justify-between process-step">
                    
                    <!-- Left Content (Empty on odd, Content on even on Desktop) -->
                    <div class="w-full md:w-5/12 {{ $index % 2 == 0 ? 'md:text-right pr-0 md:pr-12' : 'md:order-3 pl-0 md:pl-12' }} pl-16 md:pl-0">
                        <div class="bg-background border border-white/5 p-6 rounded-2xl shadow-lg relative {{ $index % 2 == 0 ? 'md:-mr-4' : 'md:-ml-4' }}">
                            <div class="text-primary font-heading font-bold text-lg mb-2">Step {{ $step['num'] }}</div>
                            <h3 class="text-2xl font-bold text-white mb-3">{{ $step['title'] }}</h3>
                            <p class="text-muted leading-relaxed">{{ $step['desc'] }}</p>
                        </div>
                    </div>

                    <!-- Center Marker -->
                    <div class="absolute left-0 md:left-1/2 top-6 md:top-1/2 w-14 h-14 bg-surface border-4 border-background rounded-full md:-translate-x-1/2 md:-translate-y-1/2 flex items-center justify-center z-10 shadow-[0_0_15px_rgba(37,99,235,0.2)] marker">
                        <div class="w-3 h-3 bg-primary rounded-full"></div>
                    </div>

                    <!-- Right Content (Spacer) -->
                    <div class="w-full md:w-5/12 {{ $index % 2 == 0 ? 'md:order-3' : 'md:order-1' }} hidden md:block"></div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</section>


