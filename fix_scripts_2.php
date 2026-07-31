<?php

$dir = __DIR__ . '/resources/views/components/sections';
$files = glob($dir . '/*.blade.php');

foreach ($files as $file) {
    if (strpos($file, 'services.blade.php') !== false) {
        continue; // skip services because I already fixed it manually
    }
    $content = file_get_contents($file);
    
    // Fix the missing closing brace for the `if` statement
    $content = preg_replace('/\}\);\s*<\/script>/', "} }, 50);\n</script>", $content);
    
    file_put_contents($file, $content);
}

echo "Scripts fixed successfully.\n";
