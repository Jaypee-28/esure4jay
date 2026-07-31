<?php
$lines = file('C:\Users\CHITECH\.gemini\antigravity-ide\brain\bd0b23d3-782b-4f48-bee8-19623694e4a6\.system_generated\logs\transcript_full.jsonl');
foreach ($lines as $line) {
    $data = json_decode($line, true);
    if (isset($data['type']) && $data['type'] === 'USER_INPUT' && isset($data['content'])) {
        if (strpos($data['content'], '/9j/4AAQSk') !== false) {
            preg_match('/\/9j\/[A-Za-z0-9+\/=]+/', $data['content'], $matches);
            if (!empty($matches)) {
                $base64 = $matches[0];
                file_put_contents('C:\xampp\htdocs\esure4jay\public\images\logo\macbook_logo.jpg', base64_decode($base64));
                echo "Image successfully extracted to public/images/logo/macbook_logo.jpg\n";
                break;
            }
        }
    }
}
