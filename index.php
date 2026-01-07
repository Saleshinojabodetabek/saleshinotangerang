<?php
include 'anti-mallink.php';
include 'webp_loader.php'; // panggil fungsi convertImgToWebp
ob_start('convertImgToWebp'); // aktifkan output buffering
?>

<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Dealer Hino Tangerang resmi dengan sales berpengalaman. Dapatkan harga truk Hino terbaru, promo resmi, dan layanan profesional." />
    <meta
      name="keywords"
      content="dealer hino, dealer hino tangerang, dealer hino tangerang selatan, promo hino tangerang, dealer hino jakarta, dealer hino jabodetabek, dealer hino jakarta barat, dealer hino jakarta timur, dealer hino jakarta utara, dealer hino jakarta selatan, dealer hino tangerang, dealer hino bekasi, dealer hino depok, dealer hino bogor, dealer hino bandung, dealer resmi hino indonesia, sales hino, promo hino, harga truk hino, jual truk hino, kredit truk hino, cicilan truk hino, hino ready stock, stok unit hino terbaru, harga hino terbaru, promo kredit hino"
    />
    <title>Dealer Hino Tangerang | Sales Resmi Hino Tangerang & Jabodetabek</title>

    <!-- Favicon untuk semua browser modern -->
    <link rel="icon" type="image/png" sizes="512x512" href="/favicon_512.png">
    
    <!-- Favicon untuk browser lama -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    
    <!-- Apple Touch Icon (iPhone/iPad) -->
    <link rel="apple-touch-icon" href="/favicon_512.png">
    

    <link rel="canonical" href="https://saleshinotangerang.com/" />

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/whatsapp.css" />
    <link rel="stylesheet" href="css/navbar.css" />
    <link rel="stylesheet" href="css/home/hero.css" />
    <link rel="stylesheet" href="css/home/promoutama.css" />
    <link rel="stylesheet" href="css/home/produk.css" />
    <link rel="stylesheet" href="css/home/feature.css" />
    <link rel="stylesheet" href="css/home/contact.css" />
    <link rel="stylesheet" href="css/home/blog.css" />

    <!-- JS -->
    <script src="js/script.js"></script>

    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Open+Sans:wght@400;600&display=swap"
      rel="stylesheet"
    />

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Dealer Hino Tangerang | Sales Resmi Hino Tangerang" />
    <meta property="og:description" content="Dealer Hino Tangerang resmi dengan sales berpengalaman. Dapatkan harga truk Hino terbaru, promo resmi, dan layanan profesional." />
    <meta property="og:image" content="https://saleshinotangerang.com/images/promohino1.webp" />
    <meta property="og:url" content="https://saleshinotangerang.com/" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Sales Hino Tangerang" />
    <meta property="og:locale" content="id_ID" />
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Dealer Hino Tangerang | Sales Resmi Hino Tangerang" />
    <meta name="twitter:description" content="Dealer Hino Tangerang resmi dengan sales berpengalaman. Dapatkan harga truk Hino terbaru, promo resmi, dan layanan profesional." />
    <meta name="twitter:image" content="https://saleshinotangerang.com/images/promohino1.webp" />
    <meta name="twitter:site" content="@SalesHinoTangerang" />
    
    <!-- SEO Extra -->
    <meta name="author" content="Sales Hino Tangerang" />
    <meta name="robots" content="index, follow" />
    <meta name="theme-color" content="#006A31" />

    <!-- Schema Json -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [

        {
          "@type": "WebSite",
          "@id": "https://saleshinotangerang.com/#website",
          "url": "https://saleshinotangerang.com/",
          "name": "Sales Hino Tangerang",
          "description": "Dealer Hino Tangerang resmi dengan sales berpengalaman. Harga truk Hino terbaru, promo resmi, dan layanan profesional.",
          "inLanguage": "id-ID",
          "publisher": {
            "@id": "https://saleshinotangerang.com/#organization"
          }
        },

        {
          "@type": "WebPage",
          "@id": "https://saleshinotangerang.com/#webpage",
          "url": "https://saleshinotangerang.com/",
          "name": "Dealer Hino Tangerang | Sales Resmi Hino Tangerang & Jabodetabek",
          "description": "Dealer Hino Tangerang resmi. Dapatkan harga truk Hino terbaru, promo menarik, serta layanan konsultasi dan pembelian profesional.",
          "inLanguage": "id-ID",
          "isPartOf": {
            "@id": "https://saleshinotangerang.com/#website"
          },
          "primaryImageOfPage": {
            "@id": "https://saleshinotangerang.com/#mainimage"
          },
          "breadcrumb": {
            "@id": "https://saleshinotangerang.com/#breadcrumb"
          }
        },

        {
          "@type": "Organization",
          "@id": "https://saleshinotangerang.com/#organization",
          "name": "Sales Hino Tangerang",
          "url": "https://saleshinotangerang.com/",
          "logo": {
            "@type": "ImageObject",
            "url": "https://saleshinotangerang.com/images/logo3.webp",
            "width": 600,
            "height": 60
          },
          "address": {
            "@type": "PostalAddress",
            "addressLocality": "Tangerang",
            "addressRegion": "Banten",
            "addressCountry": "ID"
          },
          "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+62-859-7528-7684",
            "contactType": "sales",
            "areaServed": "ID",
            "availableLanguage": "id"
          },
          "sameAs": [
            "https://www.facebook.com/profile.php?id=61573843992250",
            "https://www.instagram.com/saleshinojabodetabek",
            "https://www.tiktok.com/@saleshinoindonesia",
            "https://www.youtube.com/@dealerhinojakarta"
          ]
        },

        {
          "@type": "BreadcrumbList",
          "@id": "https://saleshinotangerang.com/#breadcrumb",
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
              "name": "Kontak",
              "item": "https://saleshinotangerang.com/contact"
            }
          ]
        },

        {
          "@type": "ImageObject",
          "@id": "https://saleshinotangerang.com/#mainimage",
          "url": "https://saleshinotangerang.com/images/promohino1.webp",
          "width": 1200,
          "height": 630,
          "caption": "Dealer Hino Tangerang Resmi"
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
          <a href="#promo-utama">Penawaran Harga</a>
          <a href="#products-section">Produk</a>
          <a href="#features">Keunggulan Hino</a>
          <a href="https://saleshinotangerang.com/contact">Contact</a>
          <a href="https://saleshinotangerang.com/artikel">Blog & Artikel</a>
        </nav>
      </div>
    </header>

    <!-- Hero -->
    <section class="hero">
      <div class="slider">
        <img src="images/Euro 4 Hino 300.webp" class="slide active" alt="Hino 300 Series" loading="lazy"/>
        <img src="images/Euro 4 Hino 500.webp" class="slide" alt="Hino 500 Series" loading="lazy"/>
        <img src="images/Euro 4 Hino Bus.webp" class="slide" alt="Hino Bus Series" loading="lazy"/>
      </div>
      <div class="container">
        <h1>Dealer Hino Tangerang | Sales Resmi Hino Tangerang & Jabodetabek</h1>
        <p>Dealer Hino Tangerang resmi dengan sales berpengalaman. Dapatkan harga truk Hino terbaru, promo resmi, dan layanan profesional.</p>
        <div class="hero-buttons">
          <a 
              href="https://wa.me/+6285975287684?text=Halo%20Saya%20Dapat%20Nomor%20Anda%20Dari%20Google" 
              class="btn btn-contact" 
              target="_blank" 
              rel="noopener noreferrer"
            >
              Hubungi Nathan Sekarang
            </a>
        </div>
      </div>
    </section>

    <main>
      <!-- About Company -->
      <section class="about-company">
        <div class="container">
          <div class="about-content">
            <div class="text">
              <h2>Sales Hino Tangerang</h2>
              <h3>Dealer Hino Tangerang | Sales Resmi Hino Tangerang</h3>
              <div class="divider"></div>
              <p>
              Nathan adalah sales resmi <strong>Dealer Hino Tangerang</strong> yang berpengalaman, profesional, dan siap membantu Anda menemukan solusi kendaraan niaga terbaik. Melayani wilayah Tangerang, Jakarta, dan sekitarnya, Nathan menyediakan berbagai pilihan truk dan bus Hino sesuai kebutuhan bisnis, mulai dari distribusi, logistik, hingga konstruksi. Dengan pelayanan cepat, komunikasi responsif, serta pemahaman produk yang mendalam, Nathan menjadi pilihan tepat bagi Anda yang mencari <strong>dealer Hino terdekat</strong> dengan penawaran terbaik.
              </p>
              <p>
              Sebagai bagian dari <strong>dealer resmi Hino Tangerang</strong>, komitmen Nathan tidak hanya berhenti pada proses penjualan. Anda akan mendapatkan pendampingan menyeluruh mulai dari konsultasi kebutuhan armada, simulasi kredit fleksibel, hingga layanan purna jual yang responsif dan terpercaya. Percayakan kebutuhan truk dan bus Hino Anda kepada <strong>Nathan – Dealer Hino Jabodetabek</strong>, dan rasakan pengalaman pembelian yang aman, nyaman, serta menguntungkan untuk jangka panjang.
              </p>
              <div class="contact-buttons">
                <a href="https://wa.me/6285975287684" class="btn whatsapp-btn"><i class="fab fa-whatsapp"></i> +62 859-7528-7684</a>
                <a href="mailto:saleshinojabodetabek@gmail.com" class="btn email-btn"><i class="fas fa-envelope"></i> saleshinojabodetabek@gmail.com</a>
              </div>
            </div>
            <div class="image-gallery">
              <img src="images/promohino.webp" alt="Promo Hino" />
            </div>
            </div>
          </div>
        </section>

      <!-- Produk -->
      <section id="products-section" class="products-section fade-element">
        <h2 class="section-title">Produk Truk Hino Unggulan</h2>
        <div class="products">
          <div class="product">
            <img src="images/Euro 4 Hino 300.webp" alt="Hino 300 Dutro" loading="lazy"/>
            <h3><a href="https://saleshinotangerang.com/hino300" target="_blank" rel="noopener noreferrer">Hino 300 Series (Dutro)</a></h3>
            <p>Truk ringan Hino yang irit bahan bakar, mudah perawatan, dan dirancang untuk mendukung kelancaran operasional bisnis harian Anda.</p>
          </div>
          <div class="product">
            <img src="images/Euro 4 Hino 500.webp" alt="Hino 500 Ranger" loading="lazy"/>
            <h3><a href="https://saleshinotangerang.com/hino500" target="_blank" rel="noopener noreferrer">Hino 500 Series (Ranger)</a></h3>
            <p>Performa handal untuk pengangkutan berat dan jarak jauh.</p>
          </div>
          <div class="product">
            <img src="images/Euro 4 Hino Bus.webp" alt="Hino Bus Series" loading="lazy"/>
            <h3><a href="https://saleshinotangerang.com/hinobus" target="_blank" rel="noopener noreferrer">Hino Bus Series</a></h3>
            <p>Bus Hino yang mengutamakan kenyamanan, keamanan, dan efisiensi untuk layanan transportasi penumpang maupun pariwisata.</p>
          </div>
        </div>
      </section>
      
      <!-- Section: Promo Utama -->
      <section id="promo-utama" class="promo-section fade-element">
        <div class="promo-text">
          <h2>Harga Terbaik & Promo Truk Hino Resmi Langsung dari Sales Hino Tangerang</h2>
          <ul>
            <li>Mencari harga truk Hino paling kompetitif?</li>
            <li>Butuh rekomendasi unit yang sesuai kebutuhan bisnis?</li>
            <li>Ingin proses cepat, aman, dan terpercaya?</li>
            <li>Hubungi Nathan Hino dan dapatkan penawaran terbaik hari ini!</li>
          </ul>
          <p>Nathan Hino siap membantu Anda mendapatkan truk Hino baru dengan harga terbaik untuk seluruh Indonesia, khususnya Jabodetabek dan Jawa Barat. Pelayanan profesional, respons cepat, dan tanpa ribet.</p>
          <div class="promo-buttons">
            <a href="https://wa.me/6285975287684" class="btn-primary" target="_blank" rel="noopener noreferrer">Konsultasi Pembelian</a>
          </div>
        </div>
        <img src="images/hino.webp" alt="Truk Hino Hijau" loading="lazy" class="promo-main-image"/>
      </section>
      
      <!-- Fitur -->
      <section id="features" class="features fade-element">
        <h2 class="section-title">Kenapa Pilih Hino?</h2>
        <div class="feature-list">
          <div class="feature">
            <div class="icon">🛻</div>
            <h3>Durabilitas Teruji</h3>
            <p>Dirancang untuk operasional berat dengan mesin tangguh dan daya tahan jangka panjang.</p>
          </div>
          <div class="feature">
            <div class="icon">👥</div>
            <h3>Konsultasi Profesional</h3>
            <p>Pendampingan dan rekomendasi unit terbaik sesuai kebutuhan bisnis Anda.</p>
          </div>
          <div class="feature">
            <div class="icon">🔧</div>
            <h3>Servis dan Support</h3>
            <p>Didukung jaringan bengkel resmi dan ketersediaan suku cadang di seluruh Indonesia.</p>
          </div>
        </div>
      </section>

      <!-- Kontak -->
      <section id="contact" class="contact fade-element">
        <h2>Butuh Bantuan atau Info Harga?</h2>
        <p>Hubungi Nathan langsung via WhatsApp. Nathan siap membantu Anda memilih truk terbaik.</p>
        <a href="https://wa.me/6285975287684" class="whatsapp-link" target="_blank" rel="noopener noreferrer">Chat WhatsApp Sekarang</a>
      </section>

      <!-- Blog Section -->
      <section class="blog-section fade-element">
        <div class="container">
          <h2>Blog & Artikel</h2>
          <p>Dapatkan informasi terbaru seputar Truk Hino, perawatan, dan promo terbaik.</p>
          <div class="blog-grid">
            <?php
              $artikelData = json_decode(file_get_contents("https://saleshinotangerang.com/admin/api/get_artikel.php?page=1&perPage=3"), true);
              if (isset($artikelData['data']) && is_array($artikelData['data'])) {
                $terbaru = array_slice($artikelData['data'], 0, 3);
                foreach ($terbaru as $artikel):
            ?>
              <div class="blog-card">
                <img src="<?= htmlspecialchars($artikel['gambar']) ?>" alt="<?= htmlspecialchars($artikel['judul']) ?>" loading="lazy"/>
                <div class="blog-card-content">
                  <h3>
                    <a href="/artikel/<?= urlencode($artikel['slug']) ?>">
                      <?= htmlspecialchars($artikel['judul']) ?>
                    </a>
                  </h3>
                  <p><?= htmlspecialchars(substr(strip_tags($artikel['isi']), 0, 100)) ?>...</p>
                  <a href="/artikel/<?= urlencode($artikel['slug']) ?>" class="read-more">Baca Selengkapnya</a>
                </div>
              </div>
            <?php endforeach; } else { echo "<p>Tidak ada artikel ditemukan.</p>"; } ?>
          </div>
        </div>
      </section>
    </main>

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

    <!-- Load Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <script>feather.replace()</script>
  </body>
</html>
<?php ob_end_flush(); ?>