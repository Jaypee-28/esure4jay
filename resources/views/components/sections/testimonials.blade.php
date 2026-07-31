<section id="testimonials" class="py-32 bg-surface relative border-t border-white/5 overflow-hidden">
    <!-- Background Decor -->
    <div class="absolute left-0 top-1/2 -translate-y-1/2 w-1/3 h-2/3 bg-primary/10 blur-[120px] rounded-full pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-6 md:px-12 relative z-10">
        
        <div class="mb-16 md:mb-24 text-center max-w-3xl mx-auto testimonial-header">
            <h2 class="text-4xl md:text-5xl font-heading font-bold text-white mb-6">Client Testimonials</h2>
            <p class="text-lg text-muted">Don't just take my word for it. Hear what clients have to say about working with me.</p>
        </div>

        @php
            $testimonials = [
                [
                    'quote' => 'Esure4Jay completely transformed our online presence. The new website is not only stunning but has increased our conversion rate by over 150%. His attention to detail and engineering quality is unmatched.',
                    'name' => 'Sarah Jenkins',
                    'title' => 'CMO, TechNova',
                    'rating' => 5
                ],
                [
                    'quote' => 'Working with Esure4Jay felt like having an elite lead engineer and designer in one. He understood our vision immediately and delivered a platform that exceeded our expectations in every way.',
                    'name' => 'Michael Chen',
                    'title' => 'Founder, NexaCorp',
                    'rating' => 5
                ],
                [
                    'quote' => 'The fastest, most performant application we have ever launched. Esure4Jay is an absolute expert in modern web architecture. Highly recommended for any ambitious project.',
                    'name' => 'Elena Rodriguez',
                    'title' => 'VP of Engineering, Elevate',
                    'rating' => 5
                ]
            ];
        @endphp

        <!-- Alpine.js Carousel -->
        <div x-data="{ activeSlide: 0, slides: {{ count($testimonials) }} }" class="relative max-w-5xl mx-auto testimonial-carousel">
            
            <div class="overflow-hidden relative">
                <div class="flex transition-transform duration-700 ease-in-out" :style="'transform: translateX(-' + (activeSlide * 100) + '%)'">
                    
                    @foreach($testimonials as $index => $testimonial)
                    <div class="w-full flex-shrink-0 px-4 md:px-12">
                        <div class="bg-background border border-white/10 p-10 md:p-16 rounded-3xl relative">
                            <!-- Quote Icon -->
                            <div class="absolute top-10 right-10 text-white/5">
                                <i data-lucide="quote" class="w-24 h-24"></i>
                            </div>
                            
                            <!-- Rating -->
                            <div class="flex space-x-1 mb-8">
                                @for($i = 0; $i < $testimonial['rating']; $i++)
                                    <i data-lucide="star" class="w-5 h-5 text-yellow-500 fill-yellow-500"></i>
                                @endfor
                            </div>
                            
                            <p class="text-xl md:text-3xl text-white font-heading font-medium leading-relaxed mb-10 relative z-10">
                                "{{ $testimonial['quote'] }}"
                            </p>
                            
                            <div class="flex items-center space-x-4">
                                <div class="w-14 h-14 bg-surface rounded-full flex items-center justify-center text-xl font-bold text-primary border border-white/10">
                                    {{ substr($testimonial['name'], 0, 1) }}
                                </div>
                                <div>
                                    <h4 class="text-lg font-bold text-white">{{ $testimonial['name'] }}</h4>
                                    <p class="text-muted">{{ $testimonial['title'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>

            <!-- Controls -->
            <div class="flex justify-center items-center mt-12 space-x-6">
                <button @click="activeSlide = activeSlide === 0 ? slides - 1 : activeSlide - 1" class="w-12 h-12 rounded-full border border-white/10 flex items-center justify-center text-white hover:bg-white/5 transition-colors focus:outline-none">
                    <i data-lucide="arrow-left" class="w-5 h-5"></i>
                </button>
                
                <div class="flex space-x-3">
                    <template x-for="i in slides" :key="i">
                        <button @click="activeSlide = i - 1" 
                                :class="{ 'w-8 bg-primary': activeSlide === i - 1, 'w-2 bg-white/20': activeSlide !== i - 1 }"
                                class="h-2 rounded-full transition-all duration-300 focus:outline-none"></button>
                    </template>
                </div>
                
                <button @click="activeSlide = activeSlide === slides - 1 ? 0 : activeSlide + 1" class="w-12 h-12 rounded-full border border-white/10 flex items-center justify-center text-white hover:bg-white/5 transition-colors focus:outline-none">
                    <i data-lucide="arrow-right" class="w-5 h-5"></i>
                </button>
            </div>

        </div>

    </div>
</section>


