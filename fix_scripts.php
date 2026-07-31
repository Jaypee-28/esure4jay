<?php

$dir = __DIR__ . '/resources/views/components/sections';
$files = glob($dir . '/*.blade.php');

foreach ($files as $file) {
    $content = file_get_contents($file);
    
    // Replace <script> with <script type="module">
    $content = str_replace('<script>', '<script type="module">', $content);
    
    // Replace the DOMContentLoaded wrapper with a check for gsap
    $content = preg_replace('/document\.addEventListener\("DOMContentLoaded",\s*\(\)\s*=>\s*\{/', 'const initGsap = setInterval(() => { if (window.gsap && window.ScrollTrigger) { clearInterval(initGsap);', $content);
    
    // If we have services.blade.php that was modified differently, let's just make sure it's covered or rewrite it completely.
    file_put_contents($file, $content);
}

echo "Scripts updated successfully.\n";
