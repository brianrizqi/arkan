<?php

// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Ensure required /tmp directories exist for Vercel
$tmpDirs = [
    '/tmp/views',
    '/tmp/sessions',
    '/tmp/cache',
];

foreach ($tmpDirs as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
}

// Forward Vercel requests to normal Laravel entry point
require __DIR__ . '/../public/index.php';
