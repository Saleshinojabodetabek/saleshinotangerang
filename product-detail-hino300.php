<?php
include 'admin/config.php';

// aktifkan webp loader
include 'webp_loader.php';
ob_start('convertImgToWebp');

$slug = $conn->real_escape_string($_GET['slug'] ?? '');
if ($slug === '') {
    http_response_code(404);
    exit('Produk tidak ditemukan.');
}

// Ambil data produk
$res = $conn->query("SELECT * FROM produk WHERE slug='$slug'");
if (!$res || $res->num_rows === 0) {
    http_response_code(404);
    exit('Produk tidak ditemukan.');
}

$produk = $res->fetch_assoc();
$produk_id = (int) $produk['id'];

// Ambil data karoseri
$karoseri = [];
$qk = $conn->query("
    SELECT k.nama, k.slug
    FROM produk_karoseri pk
    JOIN karoseri k ON pk.karoseri_id = k.id
    WHERE pk.produk_id = $produk_id
");
while ($row = $qk->fetch_assoc()) {
    $karoseri[] = $row;
}

// Grup spesifikasi
$spec_groups = [
    'PERFORMA' => ['label' => 'PERFORMA'],
    'MODEL MESIN' => ['label' => 'MODEL MESIN'],
    'KOPLING' => ['label' => 'KOPLING'],
    'TRANSMISI' => ['label' => 'TRANSMISI'],
    'KEMUDI' => ['label' => 'KEMUDI'],
    'SUMBU' => ['label' => 'SUMBU'],
    'REM' => ['label' => 'REM'],
    'RODA & BAN' => ['label' => 'RODA & BAN'],
    'SISTIM LISTRIK ACCU' => ['label' => 'SISTIM LISTRIK ACCU'],
    'TANGKI SOLAR' => ['label' => 'TANGKI SOLAR'],
    'DIMENSI' => ['label' => 'DIMENSI'],
    'SUSPENSI' => ['label' => 'SUSPENSI'],
    'BERAT CHASIS' => ['label' => 'BERAT CHASIS'],
];

// Ambil spesifikasi
$specs = [];
$res_spec = $conn->query("
    SELECT grup, label, nilai, sort_order
    FROM produk_spesifikasi
    WHERE produk_id = $produk_id
    ORDER BY FIELD(grup, '" . implode("','", array_keys($spec_groups)) . "'), sort_order ASC
");
while ($row = $res_spec->fetch_assoc()) {
    $specs[$row['grup']][] = $row;
}

// Meta description bersih
$meta_desc = mb_strimwidth(strip_tags($produk['deskripsi']), 0, 160);

// URL gambar full
$gambar_full = 'https://saleshinotangerang.com/admin/uploads/produk/' . $produk['gambar'];
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?= htmlspecialchars($produk['nama_produk']) ?> | Harga & Spesifikasi Hino 300 Dutro</title>

<meta name="description" content="<?= htmlspecialchars($meta_desc) ?>">
<meta name="keywords" content="<?= htmlspecialchars($produk['nama_produk']) ?>, harga hino 300, hino dutro, truk hino euro 4">
<meta name="author" content="Sales Hino Tangerang">

<link rel="canonical" href="https://saleshinotangerang.com/product-detail-hino300.php?slug=<?= urlencode($produk['slug']) ?>">

<link rel="icon" type="image/png" sizes="512x512" href="/favicon_512.png">
<link rel="icon" type="image/x-icon" href="/favicon.ico">
<link rel="apple-touch-icon" href="/favicon_512.png">
<meta name="theme-color" content="#ffffff">

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/whatsapp.css">
<link rel="stylesheet" href="css/navbar.css">
<link rel="stylesheet" href="css/product/hero.css">
<link rel="stylesheet" href="css/product/kategori.css">
<link rel="stylesheet" href="css/product/product.css">
<link rel="stylesheet" href="css/product/detail.css">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

<script src="js/script.js"></script>

<!-- Open Graph -->
<meta property="og:title" content="<?= htmlspecialchars($produk['nama_produk']) ?> | Hino 300 Dutro">
<meta property="og:description" content="<?= htmlspecialchars($meta_desc) ?>">
<meta property="og:image" content="<?= $gambar_full ?>">
<meta property="og:url" content="https://saleshinotangerang.com/product-detail-hino300.php?slug=<?= urlencode($produk['slug']) ?>">
<meta property="og:type" content="product">
<meta property="og:site_name" content="Sales Hino Tangerang">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= htmlspecialchars($produk['nama_produk']) ?>">
<meta name="twitter:description" content="<?= htmlspecialchars($meta_desc) ?>">
<meta name="twitter:image" content="<?= $gambar_full ?>">

<!-- Schema Product -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "<?= htmlspecialchars($produk['nama_produk']) ?>",
  "image": ["<?= $gambar_full ?>"],
  "description": "<?= htmlspecialchars($meta_desc) ?>",
  "brand": { "@type": "Brand", "name": "Hino" },
  "category": "Truck",
  "offers": {
    "@type": "Offer",
    "url": "https://saleshinotangerang.com/product-detail-hino300.php?slug=<?= urlencode($produk['slug']) ?>",
    "priceCurrency": "IDR",
    "availability": "https://schema.org/InStock",
    "itemCondition": "https://schema.org/NewCondition"
  }
}
</script>
</head>

<body>

<!-- HEADER -->
<?php include 'header.php'; ?>

<!-- HERO -->
<section class="hero-product">
  <img src="images/Euro 4 Hino 300.webp" alt="Hino 300 Series" class="hero-product-img">
</section>

<section id="hero-section" class="hero-diagonal">
  <div class="hero-text">
    <h3>TRUK</h3>
    <h1><?= htmlspecialchars($produk['nama_produk']) ?></h1>
  </div>
  <div class="hero-image">
    <img src="/admin/uploads/produk/<?= htmlspecialchars($produk['gambar']) ?>" alt="<?= htmlspecialchars($produk['nama_produk']) ?>">
  </div>
</section>

<!-- SPESIFIKASI -->
<section class="detail-specs">
<h2>Spesifikasi</h2>

<?php if (!empty($karoseri)): ?>
<div class="spec-accordion">
<button class="accordion-btn">KAROSERI <span class="icon">+</span></button>
<div class="accordion-content">
<div class="karoseri-grid">
<?php foreach ($karoseri as $k): ?>
<div class="karoseri-item">
<img src="admin/uploads/karoseri/<?= htmlspecialchars($k['slug']) ?>.webp" alt="<?= htmlspecialchars($k['nama']) ?>">
<p><?= htmlspecialchars($k['nama']) ?></p>
</div>
<?php endforeach; ?>
</div>
</div>
</div>
<?php endif; ?>

<?php foreach ($spec_groups as $g => $meta):
if (!empty($specs[$g])): ?>
<div class="spec-accordion">
<button class="accordion-btn"><?= htmlspecialchars($meta['label']) ?> <span class="icon">+</span></button>
<div class="accordion-content">
<table class="spec-table">
<tbody>
<?php foreach ($specs[$g] as $r): ?>
<tr>
<td class="spec-label"><?= htmlspecialchars($r['label']) ?></td>
<td class="spec-value"><?= htmlspecialchars($r['nilai']) ?></td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>
</div>
<?php endif; endforeach; ?>
</section>

<!-- WHATSAPP -->
<div id="wa-widget-container">
<div id="wa-floating-btn">
<img src="https://saleshinotangerang.com/images/wa.png" alt="wa">
<span>WhatsApp</span>
</div>

<div id="wa-chatbox">
<div class="wa-header">
<img src="https://saleshinotangerang.com/images/NT.jpeg" class="wa-avatar" alt="Sales Hino Tangerang">
<div>
<h4>Nathan Hino</h4>
<p>Online <span class="wa-dot"></span></p>
</div>
<div class="wa-close" onclick="toggleWA()">✕</div>
</div>

<div class="wa-body">
<p>Halo 👋<br>Saya siap membantu info produk Hino 😊</p>
</div>

<a href="https://wa.me/6285975287684" class="wa-button" target="_blank">Chat on WhatsApp</a>
</div>
</div>

<script>
const waBox = document.getElementById("wa-chatbox");
const waBtn = document.getElementById("wa-floating-btn");
function toggleWA(){ waBox.classList.toggle("show"); }
waBtn.addEventListener("click", toggleWA);
</script>

<?php include 'footer.php'; ?>

</body>
</html>

<?php ob_end_flush(); ?>
