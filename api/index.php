<?php

// Check if we are running on Vercel
if (isset($_SERVER['VERCEL_URL'])) {
    header('X-Vercel-PHP-Executed: true');
}

// Forward Vercel requests to normal Laravel entry point
require __DIR__ . '/../public/index.php';
