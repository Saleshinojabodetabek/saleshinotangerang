<?php
// ===========================================================
// 🚫 BLOKIR LINK MALWARE - Dealer Hino Indonesia
// ===========================================================

$request_uri = $_SERVER['REQUEST_URI'] ?? '';
$query       = $_SERVER['QUERY_STRING'] ?? '';
$path_info   = $_SERVER['PATH_INFO'] ?? '';

// Gabungkan agar simpel dicek
$current_request = $request_uri . ' ' . $query . ' ' . $path_info;

// Daftar pola malware yang sering menyerang website
$malware_patterns = [
    '#index\.php\?detail/[0-9]+#i',   // index.php?detail/1234
    '#/detail/[0-9]+#i',              // /detail/1234
    '#detail=[0-9]+#i',               // ?detail=1234
    '#\?w=[0-9]+#i',                  // ?w=768850
    '#\?[0-9]+\.shtml#i',             // ?2256707.shtml
    '#/[0-9]+\.shtml#i',              // /2256707.shtml
    '#\.(shtml|cgi|pl|asp|jsp)$#i'    // file mencurigakan
];

// Cek apakah URL mengandung pola aneh
foreach ($malware_patterns as $pattern) {
    if (preg_match($pattern, $current_request)) {

        // Header error 410 (lebih kuat dari 404 untuk malware)
        header("HTTP/1.1 410 Gone");
        header("Content-Type: text/html; charset=UTF-8");
        header("X-Robots-Tag: noindex, follow", true);

        // Panggil halaman 410
        include __DIR__ . '/410.php';
        exit();
    }
}
