<?php
// Minimal test to verify PHP execution
echo "PHP is executing correctly. Vercel URL: " . ($_SERVER['VERCEL_URL'] ?? 'Local');
// require __DIR__ . '/../public/index.php'; // Temporarily commented out
