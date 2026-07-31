<section id="contact" class="py-32 bg-background relative z-10">
    <div class="max-w-7xl mx-auto px-6 md:px-12">
        
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-16">
            
            <!-- Left Side: Contact Info -->
            <div class="lg:col-span-2 contact-info">
                <h2 class="text-4xl md:text-5xl font-heading font-bold text-white mb-6">Let's Work Together.</h2>
                <p class="text-lg text-muted mb-12 leading-relaxed">
                    Have a project in mind? Fill out the form or reach out to me directly via Chat on WhatsApp. I'm excited to hear from you.
                </p>

                <div class="space-y-8">
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-surface border border-white/5 rounded-full flex items-center justify-center text-primary flex-shrink-0">
                            <i data-lucide="message-square" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <h4 class="text-sm font-medium text-muted uppercase tracking-wider mb-1">Chat on WhatsApp</h4>
                            <a href="https://wa.me/2349069625256?text=Hi%20Esure4Jay,%20I'd%20like%20to%20start%20a%20project!" target="_blank" rel="noopener noreferrer" class="text-lg font-medium text-success hover:underline flex items-center">
                                Chat on WhatsApp
                                <i data-lucide="external-link" class="w-4 h-4 ml-1"></i>
                            </a>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-surface border border-white/5 rounded-full flex items-center justify-center text-primary flex-shrink-0">
                            <i data-lucide="mail" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <h4 class="text-sm font-medium text-muted uppercase tracking-wider mb-1">Email Me</h4>
                            <a href="mailto:info@esure4jay.com" class="text-lg font-medium text-white hover:text-primary transition-colors">info@esure4jay.com</a>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-surface border border-white/5 rounded-full flex items-center justify-center text-primary flex-shrink-0">
                            <i data-lucide="phone" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <h4 class="text-sm font-medium text-muted uppercase tracking-wider mb-1">Call Me</h4>
                            <a href="tel:+2349069625256" class="text-lg font-medium text-white hover:text-primary transition-colors">+234 906 962 5256</a>
                        </div>
                    </div>
                    
                </div>
                
                <hr class="border-white/10 my-10">
                
                <div>
                    <h4 class="text-sm font-medium text-muted uppercase tracking-wider mb-4">Connect</h4>
                    <div class="flex space-x-4">
                        <a href="https://www.snapchat.com/add/iam_jaymonie?share_id=N6U6IExVS9ankgFn0aHYIA&locale=en_US" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-full bg-surface border border-white/10 flex items-center justify-center text-muted hover:text-[#FFFC00] hover:border-[#FFFC00]/50 transition-all text-lg" aria-label="Snapchat">
                            <i class="fa-brands fa-snapchat"></i>
                        </a>
                        <a href="https://www.instagram.com/esure4jay?utm_source=qr" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-full bg-surface border border-white/10 flex items-center justify-center text-muted hover:text-[#E1306C] hover:border-[#E1306C]/50 transition-all text-lg" aria-label="Instagram">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="https://wa.me/2349069625256?text=Hi%20Esure4Jay,%20I'd%20like%20to%20start%20a%20project!" target="_blank" class="w-10 h-10 rounded-full bg-surface border border-white/10 flex items-center justify-center text-muted hover:text-[#25D366] hover:border-[#25D366]/50 transition-all text-lg" aria-label="WhatsApp">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-surface border border-white/10 flex items-center justify-center text-muted hover:text-[#00F2FE] hover:border-[#00F2FE]/50 transition-all text-lg" aria-label="TikTok">
                            <i class="fa-brands fa-tiktok"></i>
                        </a>
                    </div>
                </div>

            </div>

            <!-- Right Side: Contact Form -->
            <div class="lg:col-span-3 contact-form">
                <div class="bg-surface border border-white/10 p-8 md:p-12 rounded-3xl">
                    
                    @if(session('success'))
                        <div class="bg-success/10 border border-success/20 text-success px-6 py-4 rounded-xl mb-8 flex items-center space-x-3">
                            <i data-lucide="check-circle" class="w-5 h-5"></i>
                            <span>{{ session('success') }}</span>
                        </div>
                    @endif

                    <form action="/contact" method="POST" class="space-y-6">
                        @csrf
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Name -->
                            <div>
                                <label for="name" class="block text-sm font-medium text-muted mb-2">Full Name</label>
                                <input type="text" id="name" name="name" required class="w-full bg-background border border-white/10 rounded-xl px-5 py-4 text-white focus:outline-none focus:border-primary transition-colors focus:ring-1 focus:ring-primary" placeholder="John Doe" value="{{ old('name') }}">
                                @error('name') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                            </div>
                            
                            <!-- Email -->
                            <div>
                                <label for="email" class="block text-sm font-medium text-muted mb-2">Email Address</label>
                                <input type="email" id="email" name="email" required class="w-full bg-background border border-white/10 rounded-xl px-5 py-4 text-white focus:outline-none focus:border-primary transition-colors focus:ring-1 focus:ring-primary" placeholder="john@example.com" value="{{ old('email') }}">
                                @error('email') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Company -->
                            <div>
                                <label for="company" class="block text-sm font-medium text-muted mb-2">Company (Optional)</label>
                                <input type="text" id="company" name="company" class="w-full bg-background border border-white/10 rounded-xl px-5 py-4 text-white focus:outline-none focus:border-primary transition-colors focus:ring-1 focus:ring-primary" placeholder="Your Company" value="{{ old('company') }}">
                            </div>
                            
                            <!-- Project Type (Custom Dropdown) -->
                            <div x-data="{ open: false, selected: '', options: ['E-commerce Website', 'Online Banking Website', 'Consignment/Logistics Website', 'Investment Website', 'SEO Optimization', 'Custom Website Development', 'Other'] }" class="relative">
                                <label class="block text-sm font-medium text-muted mb-2">Project Type</label>
                                <input type="hidden" id="type" name="type" :value="selected" required>
                                
                                <button type="button" @click="open = !open" @click.away="open = false" 
                                    class="w-full bg-background border border-white/10 rounded-xl px-5 py-4 text-left focus:outline-none transition-colors flex justify-between items-center"
                                    :class="{ 'border-primary ring-1 ring-primary': open, 'text-white': selected, 'text-muted': !selected }">
                                    <span x-text="selected ? selected : 'Select Project Type'"></span>
                                    <i data-lucide="chevron-down" class="w-5 h-5 text-muted transition-transform duration-300" :class="{ 'rotate-180': open }"></i>
                                </button>
                                
                                <div x-show="open" 
                                     x-transition:enter="transition ease-out duration-200"
                                     x-transition:enter-start="opacity-0 scale-95 -translate-y-2"
                                     x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                                     x-transition:leave="transition ease-in duration-100"
                                     x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                                     x-transition:leave-end="opacity-0 scale-95 -translate-y-2"
                                     class="absolute z-50 w-full mt-2 bg-surface border border-white/10 rounded-xl shadow-2xl py-2 max-h-60 overflow-y-auto" style="display: none;">
                                    <template x-for="option in options" :key="option">
                                        <button type="button" @click="selected = option; open = false" 
                                            class="w-full text-left px-5 py-3 text-sm hover:bg-white/5 transition-colors flex items-center justify-between"
                                            :class="{ 'text-primary font-medium bg-white/5': selected === option, 'text-white': selected !== option }">
                                            <span x-text="option"></span>
                                            <i data-lucide="check" class="w-4 h-4 text-primary" x-show="selected === option"></i>
                                        </button>
                                    </template>
                                </div>
                            </div>
                        </div>

                        <!-- Message -->
                        <div>
                            <label for="message" class="block text-sm font-medium text-muted mb-2">Project Details</label>
                            <textarea id="message" name="message" required rows="4" class="w-full bg-background border border-white/10 rounded-xl px-5 py-4 text-white focus:outline-none focus:border-primary transition-colors focus:ring-1 focus:ring-primary resize-none" placeholder="Tell me about your project goals and timeline...">{{ old('message') }}</textarea>
                            @error('message') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="w-full py-4 bg-primary text-white font-bold rounded-xl hover:bg-primary/90 transition-all shadow-[0_0_15px_rgba(37,99,235,0.3)] hover:shadow-[0_0_25px_rgba(37,99,235,0.5)] flex items-center justify-center">
                            Send Message
                            <i data-lucide="send" class="ml-2 w-5 h-5"></i>
                        </button>

                    </form>
                </div>
            </div>

        </div>
    </div>
</section>


