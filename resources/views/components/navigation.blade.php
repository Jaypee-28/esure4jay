<nav x-data="{ scrolled: false, mobileMenuOpen: false }"
     @scroll.window="scrolled = (window.pageYOffset > 20) ? true : false"
     :class="{ 'bg-surface/80 backdrop-blur-md border-b border-white/5': scrolled, 'bg-transparent': !scrolled }"
     class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 ease-in-out py-4">
    <div class="max-w-7xl mx-auto px-6 md:px-12 flex justify-between items-center">
        <!-- Logo -->
        <a href="#" class="flex items-center space-x-3 group">
            <img src="/images/logo/logo-icon.svg" alt="E4J Logo" class="h-10 w-auto group-hover:scale-105 transition-transform duration-300">
            <span class="text-xl font-bold tracking-tight text-primary transition-colors duration-300">Esure4Jay</span>
        </a>

        <!-- Desktop Links -->
        <div class="hidden md:flex items-center space-x-8">
            <a href="#services" class="text-sm font-medium text-muted hover:text-white transition-colors">Services</a>
            <a href="#process" class="text-sm font-medium text-muted hover:text-white transition-colors">Process</a>
            <a href="#about" class="text-sm font-medium text-muted hover:text-white transition-colors">About Me</a>
            <a href="https://wa.me/2349069625256?text=Hi%20Esure4Jay,%20I'd%20like%20to%20start%20a%20project!" target="_blank" rel="noopener noreferrer" class="px-5 py-2.5 text-sm font-medium bg-primary text-white rounded-full hover:bg-primary/90 transition-all shadow-[0_0_15px_rgba(37,99,235,0.3)] hover:shadow-[0_0_25px_rgba(37,99,235,0.5)]">
                Start Your Project
            </a>
        </div>

        <!-- Mobile Menu Toggle -->
        <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden text-white focus:outline-none">
            <i data-lucide="menu" x-show="!mobileMenuOpen"></i>
            <i data-lucide="x" x-show="mobileMenuOpen" style="display: none;"></i>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div x-show="mobileMenuOpen" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         class="md:hidden absolute top-full left-0 right-0 bg-surface border-b border-white/5 py-4 px-6 shadow-xl"
         style="display: none;">
        <div class="flex flex-col space-y-4">
            <a href="#services" @click="mobileMenuOpen = false" class="text-sm font-medium text-muted hover:text-white transition-colors">Services</a>
            <a href="#process" @click="mobileMenuOpen = false" class="text-sm font-medium text-muted hover:text-white transition-colors">Process</a>
            <a href="#about" @click="mobileMenuOpen = false" class="text-sm font-medium text-muted hover:text-white transition-colors">About Me</a>
            <a href="https://wa.me/2349069625256?text=Hi%20Esure4Jay,%20I'd%20like%20to%20start%20a%20project!" target="_blank" rel="noopener noreferrer" @click="mobileMenuOpen = false" class="text-sm font-medium text-primary hover:text-white transition-colors">Chat on WhatsApp</a>
        </div>
    </div>
</nav>
