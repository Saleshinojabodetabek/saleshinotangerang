<?php
include 'admin/config.php';

// aktifkan webp loader
include 'webp_loader.php';
ob_start('convertImgToWebp');

$slug = $conn->real_escape_string($_GET['slug'] ?? '');
if ($slug === '') {
    die("Produk tidak ditemukan.");
}

// Ambil data produk
$res = $conn->query("SELECT * FROM produk WHERE slug='$slug'");
if (!$res || $res->num_rows == 0) {
    die("Produk tidak ditemukan.");
}
$produk = $res->fetch_assoc();
$produk_id = (int)$produk['id']; // masih dipakai untuk ambil spesifikasi & karoseri

// Ambil data karoseri terkait
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

// Daftar grup spesifikasi (urutan & label)
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

// Ambil spesifikasi produk
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
?>

<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= htmlspecialchars($produk['nama_produk']) ?> | Harga & Spesifikasi Hino 500 Ranger Tangerang</title>

    <meta name="description" content="Harga Hino 500 Ranger Tangerang. Spesifikasi lengkap, pilihan karoseri, dan promo terbaik dari Sales Hino Tangerang." />

    <meta name="keywords"
    content="<?= htmlspecialchars($produk['nama_produk']) ?>, harga Hino 500, hino ranger, spesifikasi hino ranger, truk hino euro 4" />

    <meta name="author" content="Sales Hino Tangerang" />

    <link rel="canonical" href="https://saleshinotangerang.com/hino500/<?= htmlspecialchars($produk['slug']) ?>" />

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
    <link rel="stylesheet" href="/css/product/hero.css" />
    <link rel="stylesheet" href="/css/product/kategori.css" />
    <link rel="stylesheet" href="/css/product/product.css" />
    <link rel="stylesheet" href="/css/product/detail.css" />

    <!-- Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Open+Sans:wght@400;600&display=swap"
      rel="stylesheet"
    />

    <!-- JS -->
    <script src="/js/script.js"></script>

    <style>
      /* Tambahan CSS untuk search */
      .produk-controls {
        text-align: center;
        margin: 20px 0;
      }

      #search-input {
        width: 100%;
        max-width: 400px;
        padding: 12px 16px;
        border: 1px solid #ddd;
        border-radius: 8px;
        font-size: 14px;
      }
    </style>

    <!-- Open Graph -->
    <meta property="og:title" content="<?= htmlspecialchars($produk['nama_produk']) ?> | Hino 500 Ranger Tangerang" />
    <meta property="og:description" content="Harga Hino 500 Ranger Tangerang. Spesifikasi lengkap, pilihan karoseri, dan promo terbaik dari Sales Hino Tangerang." />
    <meta property="og:image" content="https://saleshinotangerang.com/admin/uploads/produk/<?= htmlspecialchars($produk['gambar']) ?>" />
    <meta property="og:url" content="https://saleshinotangerang.com/hino500/<?= htmlspecialchars($produk['slug']) ?>" />
    <meta property="og:type" content="product" />
    <meta property="og:site_name" content="Sales Hino Tangerang" />
    <meta property="og:locale" content="id_ID" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?= htmlspecialchars($produk['nama_produk']) ?> | Hino 500 Ranger Tangerang" />
    <meta name="twitter:description" content="Harga Hino 500 Ranger Tangerang. Spesifikasi lengkap, pilihan karoseri, dan promo terbaik dari Sales Hino Tangerang." />
    <meta name="twitter:image" content="https://saleshinotangerang.com/admin/uploads/produk/<?= htmlspecialchars($produk['gambar']) ?>" />
    
    <!-- Schema JSON -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [

        {
          "@type": "WebSite",
          "@id": "https://saleshinotangerang.com/#website",
          "url": "https://saleshinotangerang.com/",
          "name": "Sales Hino Tangerang",
          "publisher": {
            "@id": "https://saleshinotangerang.com/#organization"
          }
        },

        {
          "@type": "WebPage",
          "@id": "https://saleshinotangerang.com/hino500/<?= htmlspecialchars($produk['slug']) ?>#webpage",
          "url": "https://saleshinotangerang.com/hino500/<?= htmlspecialchars($produk['slug']) ?>",
          "name": "<?= htmlspecialchars($produk['nama_produk']) ?> | Hino 500 Ranger",
          "description": "Harga Hino 500 Ranger Tangerang. Spesifikasi lengkap, pilihan karoseri, dan promo terbaik dari Sales Hino Tangerang.",
          "inLanguage": "id-ID",
          "isPartOf": {
            "@id": "https://saleshinotangerang.com/#website"
          },
          "breadcrumb": {
            "@id": "https://saleshinotangerang.com/hino500/<?= htmlspecialchars($produk['slug']) ?>#breadcrumb"
          }
        },

        {
          "@type": "BreadcrumbList",
          "@id": "https://saleshinotangerang.com/hino500/<?= htmlspecialchars($produk['slug']) ?>#breadcrumb",
          "itemListElement": [
            {
              "@type": "ListItem",
              "position": 1,
              "name": "Home",
              "item": "https://saleshinotangerang.com/"
            },
            {
              "@type": "ListItem",
              "position": 2,
              "name": "Hino 500 Series",
              "item": "https://saleshinotangerang.com/hino500"
            },
            {
              "@type": "ListItem",
              "position": 3,
              "name": "<?= htmlspecialchars($produk['nama_produk']) ?>",
              "item": "https://saleshinotangerang.com/hino500/<?= htmlspecialchars($produk['slug']) ?>"
            }
          ]
        },

        {
          "@type": "Product",
          "@id": "https://saleshinotangerang.com/hino500/<?= htmlspecialchars($produk['slug']) ?>#product",
          "name": "<?= htmlspecialchars($produk['nama_produk']) ?>",
          "image": [
            "https://saleshinotangerang.com/admin/uploads/produk/<?= htmlspecialchars($produk['gambar']) ?>"
          ],
          "description": "Harga Hino 500 Ranger Tangerang. Spesifikasi lengkap, pilihan karoseri, dan promo terbaik dari Sales Hino Tangerang.",
          "brand": {
            "@type": "Brand",
            "name": "Hino"
          },
          "category": "Truck",
          "seller": {
            "@id": "https://saleshinotangerang.com/#organization"
          },
          "offers": {
            "@type": "AggregateOffer",
            "url": "https://saleshinotangerang.com/hino500/<?= htmlspecialchars($produk['slug']) ?>",
            "priceCurrency": "IDR",
            "lowPrice": "0",
            "highPrice": "0",
            "offerCount": "1",
            "availability": "https://schema.org/InStock",
            "seller": {
              "@type": "Organization",
              "name": "Sales Hino Tangerang"
            }
          }
        },

        {
          "@type": "Organization",
          "@id": "https://saleshinotangerang.com/#organization",
          "name": "Sales Hino Tangerang",
          "url": "https://saleshinotangerang.com/",
          "logo": {
            "@type": "ImageObject",
            "url": "https://saleshinotangerang.com/images/logo3.webp"
          },
          "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+62-859-7528-7684",
            "contactType": "sales",
            "areaServed": "ID",
            "availableLanguage": "id"
          }
        }

      ]
    }
    </script>


  </head>

  <body>
    <!-- Header -->
    <header>
      <div class="container header-content navbar">
        <div class="header-title">
          <a href="https://saleshinotangerang.com">
            <img src="/images/logo3.webp" alt="Logo Hino" loading="lazy" style="height: 60px" />
          </a>
        </div>
        <div class="hamburger-menu">&#9776;</div>
        <nav class="nav links">
          <a href="/">Home</a>
          <a href="/hino300">Hino 300 Series</a>
          <a href="/hino500">Hino 500 Series</a>
          <a href="/hinobus">Hino Bus Series</a>
          <a href="/contact">Contact</a>
          <a href="/artikel">Blog & Artikel</a>
        </nav>
      </div>
    </header>

    <!-- Hero Product -->
    <section class="hero-product">
      <img src="/images/Euro 4 Hino 500.webp" alt="Hino 500 Series" class="hero-product-img" />
    </section>

    <!-- Produk Pilihan -->
    <div class="kategori-section">
      <div class="kategori">
        <h1>Hino 500 Series</h1>
        <img src="/images/euro4.webp" alt="Euro4 Logo">
      </div>

      <div class="produk-controls">
        <div class="tabs">
          <a href="/hino500#kategori-section" class="tab">ALL</a>
          <a href="/hino500#kategori-section" class="tab">CARGO</a>
          <a href="/hino500#kategori-section" class="tab">DUMP</a>
          <a href="/hino500#kategori-section" class="tab">MIXER</a>
        </div>

        <!-- Search Bar -->
        <input type="text" id="search-input" placeholder="Cari produk..." />
      </div>
    </div>

    <!-- Hero Section -->
    <section id="hero-section" class="hero-diagonal">
      <div class="hero-text">
        <h3>TRUK</h3>
        <h1><?= htmlspecialchars($produk['nama_produk']) ?></h1>
      </div>
      <div class="hero-image">
        <img
          src="/admin/uploads/produk/<?= htmlspecialchars($produk['gambar']) ?>"
          alt="<?= htmlspecialchars($produk['nama_produk']) ?>"
        />
      </div>
    </section>

    <!-- Detail Specs -->
    <section class="detail-specs">
      <h2>Spesifikasi</h2>

      <!-- Karoseri -->
      <?php if (!empty($karoseri)): ?>
        <div class="spec-accordion">
          <button class="accordion-btn">KAROSERI <span class="icon">+</span></button>
          <div class="accordion-content">
            <div class="karoseri-grid">
              <?php foreach ($karoseri as $k): ?>
                <div class="karoseri-item">
                  <img
                    src="/admin/uploads/karoseri/<?= htmlspecialchars($k['slug']) ?>.webp"
                    alt="<?= htmlspecialchars($k['nama']) ?>"
                  />
                  <p><?= htmlspecialchars($k['nama']) ?></p>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      <?php endif; ?>

      <!-- Spesifikasi Lain -->
      <?php foreach ($spec_groups as $slug => $meta):
        if (!empty($specs[$slug])): ?>
          <div class="spec-accordion">
            <button class="accordion-btn">
              <?= htmlspecialchars($meta['label']) ?> <span class="icon">+</span>
            </button>
            <div class="accordion-content">
              <table class="spec-table">
                <tbody>
                  <?php foreach ($specs[$slug] as $r): ?>
                    <tr>
                      <td class="spec-label"><?= htmlspecialchars($r['label']) ?></td>
                      <td class="spec-value"><?= htmlspecialchars($r['nilai']) ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        <?php endif;
      endforeach; ?>
    </section>

    <!-- Back to Top Button -->
    <button id="back-to-top" title="Kembali ke atas">&#8679;</button>

    <!-- JS -->
    <script>
      // Accordion
      document.querySelectorAll('.accordion-btn').forEach(btn => {
        btn.addEventListener('click', () => {
          btn.classList.toggle('active');
          const content = btn.nextElementSibling;
          content.style.display = content.style.display === "block" ? "none" : "block";
        });
      });

      // Back to Top
      const backToTopBtn = document.getElementById("back-to-top");
      window.addEventListener("scroll", () => {
        backToTopBtn.style.display = window.scrollY > 300 ? "block" : "none";
      });
      backToTopBtn.addEventListener("click", () => {
        window.scrollTo({ top: 0, behavior: "smooth" });
      });
    </script>

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

    <?php include 'footer.php'; ?>

    <script>
    document.addEventListener("DOMContentLoaded", function () {
      const hero = document.getElementById("hero-section");
      if (hero) {
        const yOffset = -80; // sesuaikan tinggi navbar
        const y = hero.getBoundingClientRect().top + window.pageYOffset + yOffset;
        window.scrollTo({ top: y, behavior: "smooth" });
      }
    });
  </script>

  </body>
</html>

<?php ob_end_flush(); ?>
