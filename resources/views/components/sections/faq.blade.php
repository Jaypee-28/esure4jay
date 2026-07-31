<section id="faq" class="py-32 bg-surface relative z-10 border-t border-white/5">
    <div class="max-w-4xl mx-auto px-6 md:px-12">
        
        <div class="mb-16 md:mb-24 text-center faq-header">
            <h2 class="text-4xl md:text-5xl font-heading font-bold text-white mb-6">Frequently Asked Questions</h2>
            <p class="text-lg text-muted">Everything you need to know about working with me.</p>
        </div>

        @php
            $faqs = [
                ['q' => 'What is your typical project timeline?', 'a' => 'Depending on the complexity, a standard corporate website takes 2-4 weeks from discovery to launch. Complex e-commerce or custom web applications can take 4-8 weeks.'],
                ['q' => 'How much does a new website cost?', 'a' => 'My projects are tailored to your requirements, complexity, and desired timeline. Contact me via Chat on WhatsApp or the contact form for an exact quote.'],
                ['q' => 'Do you provide ongoing maintenance and hosting?', 'a' => 'Yes! I offer ongoing maintenance and server optimization to ensure high availability, daily backups, security updates, and performance monitoring.'],
                ['q' => 'Will my website be SEO optimized?', 'a' => 'Absolutely. Technical SEO is baked directly into my development workflow. I ensure lightning-fast load times, semantic HTML, proper meta tags, and structured data to give you the best foundation.'],
                ['q' => 'What technologies do you use?', 'a' => 'I specialize in modern stacks including Laravel, PHP 8.4+, Tailwind CSS 4, GSAP, Alpine.js, Next.js, and Vite to ensure maximum speed and scalability.']
            ];
        @endphp

        <div class="space-y-4 faq-list" x-data="{ active: null }">
            @foreach($faqs as $index => $faq)
            <div class="bg-background border border-white/10 rounded-2xl overflow-hidden faq-item transition-colors hover:border-primary/50">
                <button @click="active = active === {{ $index }} ? null : {{ $index }}" 
                        class="w-full flex items-center justify-between p-6 text-left focus:outline-none">
                    <span class="text-lg font-bold text-white">{{ $faq['q'] }}</span>
                    <div class="w-8 h-8 rounded-full bg-surface border border-white/5 flex items-center justify-center text-primary transform transition-transform duration-300"
                         :class="{ 'rotate-180 bg-primary text-white': active === {{ $index }} }">
                        <i data-lucide="chevron-down" class="w-5 h-5"></i>
                    </div>
                </button>
                <div x-show="active === {{ $index }}" 
                     x-collapse
                     class="px-6 pb-6 text-muted leading-relaxed">
                    {{ $faq['a'] }}
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>


