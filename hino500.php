<?php
include 'webp_loader.php'; // panggil fungsi convertImgToWebp
ob_start('convertImgToWebp'); // aktifkan output buffering
?>

<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Hino 500 Series (Ranger) | Harga & Promo Truk Hino Tangerang</title>

    <meta name="description"
    content="Hino 500 Series (Ranger) – Truk tangguh untuk angkutan berat dan jarak jauh. Dapatkan harga terbaru, spesifikasi lengkap, promo resmi, serta kredit dan cicilan ringan dari Dealer Hino Tangerang." />

    <meta name="keywords"
    content="hino 500 series, hino ranger, harga hino 500, truk hino ranger, hino dump truck, hino euro 4, dealer hino tangerang" />

    <meta name="author" content="Sales Hino Tangerang" />
    <meta name="robots" content="index, follow">

    <link rel="canonical" href="https://saleshinotangerang.com/hino500" />

    <!-- Favicon untuk semua browser modern -->
    <link rel="icon" type="image/png" sizes="512x512" href="/favicon_512.png">
    
    <!-- Favicon untuk browser lama -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    
    <!-- Apple Touch Icon (iPhone/iPad) -->
    <link rel="apple-touch-icon" href="/favicon_512.png">
    
    <!-- Google Lighthouse Recommendation -->
    <meta name="theme-color" content="#ffffff">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/whatsapp.css" />
    <link rel="stylesheet" href="css/navbar.css" />
    <link rel="stylesheet" href="css/product/hero.css" />
    <link rel="stylesheet" href="css/product/kategori.css" />
    <link rel="stylesheet" href="css/product/product.css" />

    <!-- Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap"
      rel="stylesheet"
    />

    <!-- JS -->
    <script src="js/script.js"></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Open+Sans:wght@400;600&display=swap"
      rel="stylesheet"
    />

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
    <meta property="og:title" content="Hino 500 Series (Ranger) | Harga & Promo Truk Hino Tangerang" />
    <meta property="og:description" content="Informasi lengkap Hino 500 Series (Ranger) untuk kebutuhan angkutan berat dan jarak jauh. Harga terbaik & promo resmi." />
    <meta property="og:image" content="https://saleshinotangerang.com/images/Euro 4 Hino 500.webp" />
    <meta property="og:url" content="https://saleshinotangerang.com/hino500" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Sales Hino Tangerang" />
    <meta property="og:locale" content="id_ID" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Hino Ranger 500 Series | Harga & Spesifikasi Terbaru" />
    <meta name="twitter:description" content="Dapatkan informasi lengkap Hino Ranger 500 Series — truk tangguh untuk kebutuhan angkut berat dan jarak jauh." />
    <meta name="twitter:image" content="https://saleshinotangerang.com/images/Euro 4 Hino 500.webp" />

    <!-- Schema.org JSON-LD untuk SEO Dealer Hino -->
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
          "@id": "https://saleshinotangerang.com/hino500#webpage",
          "url": "https://saleshinotangerang.com/hino500",
          "name": "Hino 500 Series (Ranger) | Harga & Promo Truk Hino Tangerang",
          "description": "Hino 500 Series (Ranger) – Truk Hino tangguh untuk kebutuhan angkutan berat dan jarak jauh dengan harga terbaik dan promo resmi.",
          "inLanguage": "id-ID",
          "isPartOf": {
            "@id": "https://saleshinotangerang.com/#website"
          },
          "breadcrumb": {
            "@id": "https://saleshinotangerang.com/hino500#breadcrumb"
          }
        },

        {
          "@type": "BreadcrumbList",
          "@id": "https://saleshinotangerang.com/hino500#breadcrumb",
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
              "name": "Produk",
              "item": "https://saleshinotangerang.com/#products-section"
            },
            {
              "@type": "ListItem",
              "position": 3,
              "name": "Hino 500 Series",
              "item": "https://saleshinotangerang.com/hino500"
            }
          ]
        },

        {
          "@type": "CollectionPage",
          "@id": "https://saleshinotangerang.com/hino500#collection",
          "name": "Hino 500 Series (Ranger)",
          "description": "Daftar lengkap varian Hino 500 Series (Ranger) untuk kebutuhan logistik, konstruksi, dan angkutan berat.",
          "url": "https://saleshinotangerang.com/hino500",
          "mainEntity": {
            "@type": "ItemList",
            "name": "Daftar Produk Hino 500 Series",
            "itemListOrder": "https://schema.org/ItemListOrderAscending"
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
            <img src="images/logo3.webp" alt="Logo Hino" loading="lazy" style="height: 60px" />
          </a>
        </div>

        <div class="hamburger-menu">&#9776;</div>

        <nav class="nav links">
          <a href="https://saleshinotangerang.com/">Home</a>
          <a href="https://saleshinotangerang.com/hino300">Hino 300 Series</a>
          <a href="https://saleshinotangerang.com/hino500">Hino 500 Series</a>
          <a href="https://saleshinotangerang.com/hinobus">Hino Bus Series</a>
          <a href="https://saleshinotangerang.com/contact">Contact</a>
          <a href="https://saleshinotangerang.com/artikel">Blog & Artikel</a>
        </nav>
      </div>
    </header>

    <!-- Hero Product -->
    <section class="hero-product">
      <img src="images/Euro 4 Hino 500.webp" alt="Hino 500 Series" class="hero-product-img" />
    </section>

    <!-- Produk Pilihan -->
    <div id="kategori-section" class="kategori-section">
      <div class="kategori">
        <h1>Hino 500 Series</h1>
        <img src="images/euro4.webp" alt="Euro4 Logo" />
      </div>

      <div class="produk-controls">
        <div class="tabs">
          <div class="tab active">ALL</div>
          <div class="tab">CARGO</div>
          <div class="tab">DUMP</div>
          <div class="tab">MIXER</div>
          <div class="tab">TRACTOR HEAD</div>
        </div>

        <input type="text" id="search-input" placeholder="Cari produk..." />
      </div>
    </div>

    <!-- Product -->
    <div id="produk-list" class="produk-grid"></div>

    <script>
      let currentVarian = 'ALL';
      let currentSearch = '';
      let seriesId = 5;

      function loadProduk() {
        fetch(`admin/api/get_product.php?series_id=${seriesId}&varian=${currentVarian}&search=${encodeURIComponent(currentSearch)}`)
          .then(res => res.json())
          .then(data => {
            let html = "";
            if (data.length === 0) {
              html = "<p>Tidak ada produk untuk kategori ini.</p>";
            } else {
              data.forEach(p => {
                html += `
                  <div class="produk-card">
                    <img src="admin/uploads/produk/${p.gambar}" alt="${p.nama_produk}">
                    <h3>${p.nama_produk}</h3>
                    <a href="/hino500/${p.slug}" class="btn-detail">Lihat Detail</a>
                  </div>
                `;
              });
            }
            document.getElementById("produk-list").innerHTML = html;
          })
          .catch(err => {
            document.getElementById("produk-list").innerHTML = "<p style='color:red'>Gagal load produk.</p>";
            console.error("Error load produk:", err);
          });
      }

      document.getElementById("search-input").addEventListener("input", function() {
        currentSearch = this.value.trim();
        loadProduk();
      });

      document.addEventListener("DOMContentLoaded", () => {
        if (window.location.hash) {
          const target = document.querySelector(window.location.hash);
          if (target) {
            const yOffset = -80;
            const y = target.getBoundingClientRect().top + window.pageYOffset + yOffset;
            window.scrollTo({ top: y, behavior: "smooth" });
          }
        }

        document.querySelectorAll(".tabs .tab").forEach(tab => {
          tab.addEventListener("click", e => {
            e.preventDefault();
            const target = document.getElementById("kategori-section");
            if (target) {
              const yOffset = -105;
              const y = target.getBoundingClientRect().top + window.pageYOffset + yOffset;
              window.scrollTo({ top: y, behavior: "smooth" });
            }
            document.querySelectorAll(".tabs .tab").forEach(t => t.classList.remove("active"));
            tab.classList.add("active");
            currentVarian = tab.textContent.trim();
            loadProduk();
          });
        });

        loadProduk();
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

      <script>
        // Toggle open/close
        document.getElementById("wa-button").onclick = function () {
          document.getElementById("wa-box").classList.toggle("show");
        };
      </script>

    <?php include 'footer.php'; ?>
  </body>
</html>

<?php ob_end_flush(); ?>