<?php
// Ambil data kategori dari API
$kategoriData = json_decode(file_get_contents("https://saleshinotangerang.com/admin/api/get_kategoriartikel.php"), true);

// Ambil parameter filter
$search = $_GET['search'] ?? '';
$selectedKategori = $_GET['kategori'] ?? '';
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$perPage = 6;

// Bangun URL API artikel
$apiUrl = "https://saleshinotangerang.com/admin/api/get_artikel.php?page=$page&perPage=$perPage";
if ($search !== '') {
    $apiUrl .= "&search=" . urlencode($search);
}
if ($selectedKategori !== '') {
    $apiUrl .= "&kategori=" . urlencode($selectedKategori);
}

// Ambil data artikel dari API
$response = json_decode(file_get_contents($apiUrl), true);

// Pastikan data valid
$page = $response['page'] ?? 1;
$totalPages = $response['totalPages'] ?? 1;
$artikel = $response['data'] ?? [];

// Buat base URL pagination
$baseUrl = "?";
if ($search !== '') $baseUrl .= "search=" . urlencode($search) . "&";
if ($selectedKategori !== '') $baseUrl .= "kategori=" . urlencode($selectedKategori) . "&";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Meta Description -->
    <?php
    if ($page > 1) {
    $description = "Halaman $page berisi artikel terbaru seputar truk Hino, tips bisnis, harga terbaru, dan promo resmi Sales Hino Tangerang.";
    } elseif (!empty($selectedKategori)) {
    $description = "Artikel kategori $selectedKategori membahas info, tips, promo, dan berita terbaru seputar truk Hino untuk kebutuhan bisnis.";
    } else {
    $description = "Kumpulan blog dan artikel terbaru seputar truk Hino, promo, harga, tips bisnis, dan panduan pembelian resmi Sales Hino Tangerang.";
    }
    ?>
    <meta name="description" content="<?= htmlspecialchars($description) ?>">

    <meta name="keywords" content="harga truk hino terbaru, tips memilih truk hino, perbandingan hino dutro dan ranger, review truk hino, update harga hino 2025, berita hino terbaru, artikel hino Tangerang, promo hino terbaru, panduan kredit truk hino, cara memilih truk bisnis" />
    <meta name="robots" content="index, follow">
    <meta name="author" content="Sales Hino Tangerang" />
    
    <!-- Canonical FINAL FIX -->
    <?php
    $canonical = "https://saleshinotangerang.com/artikel";

    $params = [];

    if (!empty($selectedKategori)) {
        $params['kategori'] = $selectedKategori;
    }

    if ($page > 1) {
        $params['page'] = $page;
    }

    if (!empty($params)) {
        $canonical .= '?' . http_build_query($params);
    }
    ?>
    <link rel="canonical" href="<?= htmlspecialchars($canonical) ?>">

    <!--Title-->
    <?php
    if ($page > 1) {
    $title = "Artikel Hino Terbaru Halaman $page | Sales Hino Tangerang";
    } elseif (!empty($selectedKategori)) {
    $title = "Artikel Hino Kategori $selectedKategori | Sales Hino Tangerang";
    } else {
    $title = "Blog & Artikel Truk Hino Terbaru | Sales Hino Tangerang";
    }
    ?>
    <title><?= htmlspecialchars($title) ?></title>

    <!-- Favicon untuk semua browser modern -->
    <link rel="icon" type="image/png" sizes="512x512" href="/favicon_512.png">
    
    <!-- Favicon untuk browser lama -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    
    <!-- Apple Touch Icon (iPhone/iPad) -->
    <link rel="apple-touch-icon" href="/favicon_512.png">
    
    <!-- Google Lighthouse Recommendation -->
    <meta name="theme-color" content="#ffffff">

    <!-- CSS -->
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/whatsapp.css" />
    <link rel="stylesheet" href="/css/navbar.css" />
    <link rel="stylesheet" href="/css/blog/artikel.css" />
    <link rel="stylesheet" href="/css/blog/hero.css" />

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet" />

    <!-- JS -->
    <script src="/js/script.js"></script>

    <!-- Open Graph -->
    <meta property="og:title" content="Blog & Artikel Truk Hino | Sales Hino Tangerang" />
    <meta property="og:description" content="Artikel terbaru seputar truk Hino, promo, harga, tips bisnis, dan berita resmi dari Sales Hino Tangerang." />
    <meta property="og:image" content="https://saleshinotangerang.com/images/promohino1.webp" />
    <meta property="og:url" content="https://saleshinotangerang.com/artikel" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Sales Hino Tangerang" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Blog & Artikel Truk Hino | Sales Hino Tangerang" />
    <meta name="twitter:description" content="Tips, promo, harga, dan berita terbaru seputar truk Hino untuk kebutuhan bisnis Anda." />
    <meta name="twitter:image" content="https://saleshinotangerang.com/images/promohino1.webp" />


    <!-- Schema.org JSON-LD untuk SEO Dealer Hino -->
    <?php
    $itemList = [];
    $pos = 1;

    foreach ($artikel as $row) {
        if (empty($row['slug'])) continue;

        $itemList[] = [
            "@type" => "ListItem",
            "position" => $pos++,
            "name" => strip_tags($row['judul']),
            "url" => "https://saleshinotangerang.com/artikel/" . urlencode(trim($row['slug']))
        ];
    }

    $schema = [
        "@context" => "https://schema.org",
        "@graph" => [

            [
                "@type" => "WebSite",
                "@id" => "https://saleshinotangerang.com/#website",
                "url" => "https://saleshinotangerang.com/",
                "name" => "Sales Hino Tangerang",
                "publisher" => [
                    "@type" => "Organization",
                    "name" => "Sales Hino Tangerang",
                    "logo" => [
                        "@type" => "ImageObject",
                        "url" => "https://saleshinotangerang.com/favicon_512.png"
                    ]
                ]
            ],

            [
                "@type" => "BreadcrumbList",
                "@id" => "https://saleshinotangerang.com/artikel#breadcrumb",
                "itemListElement" => [
                    [
                        "@type" => "ListItem",
                        "position" => 1,
                        "name" => "Sales Hino Tangerang",
                        "item" => "https://saleshinotangerang.com/"
                    ],
                    [
                        "@type" => "ListItem",
                        "position" => 2,
                        "name" => "Artikel",
                        "item" => "https://saleshinotangerang.com/artikel"
                    ]
                ]
            ],

            [
                "@type" => "ItemList",
                "@id" => "https://saleshinotangerang.com/artikel#list",
                "name" => "Artikel Truk Hino Terbaru",
                "itemListOrder" => "https://schema.org/ItemListOrderDescending",
                "numberOfItems" => count($itemList),
                "itemListElement" => $itemList
            ]

        ]
    ];
    ?>
    <script type="application/ld+json">
    <?= json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
    </script>

</head>
<body>
    <!-- Header -->
    <header>
        <div class="container header-content navbar">
            <div class="header-title">
                <a href="https://saleshinotangerang.com">
                    <img src="/images/logo3.webp" alt="Logo Hino Tangerang" loading="lazy" style="height: 60px" />
                </a>
            </div>
            <div class="hamburger-menu">&#9776;</div>
            <nav class="nav links">
                <a href="https://saleshinotangerang.com/">Home</a>
                <a href="https://saleshinotangerang.com/hino300">Hino 300 Series</a>
                <a href="https://saleshinotangerang.com/hino500">Hino 500 Series</a>
                <a href="https://saleshinotangerang.com/hinobus">Hino Bus Series</a>
                <a href="https://saleshinotangerang.com/contact">Contact</a>
                <a href="https://saleshinotangerang.com/artikel" class="active">Blog & Artikel</a>
            </nav>
        </div>
    </header>

    <!-- Hero -->
    <section class="hero-blog">
        <div class="hero-blog-content">
            <div class="hero-blog-text">
                <h1>
                <?php
                if ($page > 1) {
                    echo "Artikel Hino Terbaru - Halaman $page";
                } 
                elseif (!empty($selectedKategori)) {
                    if (strtolower($selectedKategori) == 'berita') {
                        echo "Berita Terbaru Truk Hino";
                    } 
                    elseif (strtolower($selectedKategori) == 'promo') {
                        echo "Promo Hino Terbaru";
                    } 
                    else {
                        echo "Artikel Hino Kategori " . htmlspecialchars($selectedKategori);
                    }
                } 
                else {
                    echo "Blog & Artikel Truk Hino Terbaru";
                }
                ?>
                </h1>
                <p>Dapatkan informasi terbaru, tips, dan berita seputar Hino untuk mendukung bisnis Anda.</p>
                <a href="#artikel" class="btn-blog">Lihat Artikel</a>
            </div>
            <div class="hero-blog-image"></div>
        </div>
        <div class="dot dot-yellow"></div>
        <div class="dot dot-blue"></div>
    </section>

    <!-- Blog & Artikel -->
    <section class="content-section" id="artikel">
        <div class="container">

            <!-- Filter -->
            <form method="get" class="blog-filter" style="margin-bottom: 20px;">
                <input type="text" name="search" placeholder="Cari artikel..." value="<?= htmlspecialchars($search) ?>" />
                <select name="kategori" onchange="this.form.submit()">
                    <option value="">Semua Kategori</option>
                    <?php if (is_array($kategoriData)): ?>
                        <?php foreach ($kategoriData as $kat): ?>
                            <option value="<?= htmlspecialchars($kat['nama']) ?>" <?= $selectedKategori === $kat['nama'] ? 'selected' : '' ?>>
                                <?= htmlspecialchars($kat['nama']) ?>
                            </option>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </select>
                <button type="submit">Filter</button>
            </form>

            <!-- Artikel Grid -->
            <div class="blog-grid">
                <?php if (is_array($artikel) && count($artikel) > 0): ?>
                    <?php foreach ($artikel as $row): ?>
                        <div class="blog-post">
                            <img src="<?= htmlspecialchars($row['gambar']) ?>"
                                 alt="Artikel Hino - <?= htmlspecialchars($row['judul']) ?>"
                                 loading="lazy" />
                            <h2>
                                <a href="/artikel/<?= urlencode($row['slug']) ?>">
                                    <?= htmlspecialchars($row['judul']) ?>
                                </a>
                            </h2>
                            <p><?= substr(strip_tags($row['isi']), 0, 120) ?>...</p>
                            <div class="card-footer">
                                <a href="/artikel/<?= urlencode($row['slug']) ?>"> Baca <?= htmlspecialchars($row['judul']) ?> Selengkapnya</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>Tidak ada artikel yang ditemukan.</p>
                <?php endif; ?>
            </div>

    <!-- Pagination -->
    <?php if ($totalPages > 1): ?>
        <div class="pagination" aria-label="Navigasi halaman">
            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
    
                <?php
                    // Selalu bangun URL dari awal, jangan pakai $baseUrl
                    $params = [];
    
                    if (!empty($selectedKategori)) {
                        $params['kategori'] = $selectedKategori;
                    }
    
                    if ($i > 1) {
                        $params['page'] = $i;
                    }
    
                    $pageUrl = "/artikel" . (!empty($params) ? "?" . http_build_query($params) : "");
                ?>
    
                <a class="<?= $i === $page ? 'active' : '' ?>" href="<?= $pageUrl ?>">
                    <?= $i ?>
                </a>
    
            <?php endfor; ?>
        </div>
    </section>    
    <?php endif; ?>


  <!-- WhatsApp Floating Widget -->
  <div id="wa-widget-container">

    <!-- Floating Button -->
    <div id="wa-floating-btn">
      <img src="https://saleshinotangerang.com/images/wa.png" alt="wa" />
      <span>WhatsApp</span>
    </div>

    <!-- Chat Box -->
    <div id="wa-chatbox">
      <div class="wa-header">
        <img 
          src="https://saleshinotangerang.com/images/NT.jpeg" 
          class="wa-avatar" 
          alt="Sales Hino Tangerang"
        />
        <div>
          <h4>Nathan Hino</h4>
          <p>Online <span class="wa-dot"></span></p>
        </div>
        <div class="wa-close" onclick="toggleWA()">✕</div>
      </div>

      <div class="wa-body">
        <div class="wa-message">
          <p>Halo 👋</p>
          <p>Saya siap membantu untuk info produk Hino.<br>
          Silakan tanya apa saja 😊</p>
        </div>
      </div>

      <a
        href="https://wa.me/6285975287684?text=Halo%20kak%20Nathan.%20Saya%20mau%20bertanya%20tentang%20produk%20Hino."
        class="wa-button"
        target="_blank"
        rel="noopener noreferrer"
      >
        Chat on WhatsApp
      </a>
    </div>
  </div>

  <script>
    const waBox = document.getElementById("wa-chatbox");
    const waBtn = document.getElementById("wa-floating-btn");

    waBtn.onclick = toggleWA;

    function toggleWA() {
      waBox.classList.toggle("show");
    }
  </script>


      <script>
        // Toggle open/close
        document.getElementById("wa-button").onclick = function () {
          document.getElementById("wa-box").classList.toggle("show");
        };
      </script>

    <?php include 'footer.php'; ?>

    <script>feather.replace();</script>
</body>
</html>
