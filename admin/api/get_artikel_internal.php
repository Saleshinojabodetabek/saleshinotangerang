<?php
require_once __DIR__ . '/../config.php';

$page = 1;
$perPage = 3;

// ambil data artikel langsung dari DB
// return ARRAY, bukan echo JSON
return getArtikel($page, $perPage);
