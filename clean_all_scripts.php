<?php

$dir = __DIR__ . '/resources/views/components/sections';
$files = glob($dir . '/*.blade.php');

foreach ($files as $file) {
    $content = file_get_contents($file);
    // Remove <script ...>...</script> blocks
    $content = preg_replace('/<script[\s\S]*?<\/script>/i', '', $content);
    file_put_contents($file, $content);
}

echo "All inline scripts removed successfully.\n";
