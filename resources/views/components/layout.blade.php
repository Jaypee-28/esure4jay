<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ESURE4JAY | Software Engineer & Full-Stack Architect</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="/images/logo/favicon.svg">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Esure4Jay is a Software Engineer & Full-Stack Architect building world-class, performant, and scalable digital experiences.">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Scripts & Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased selection:bg-primary selection:text-white">
    <x-navigation />

    <main id="smooth-wrapper">
        <div id="smooth-content">
            {{ $slot }}
            <x-sections.footer />
        </div>
    </main>
</body>
</html>
