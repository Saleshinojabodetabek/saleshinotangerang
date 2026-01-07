<?php
include 'webp_loader.php'; // panggil fungsi convertImgToWebp
ob_start('convertImgToWebp'); // aktifkan output buffering
?>

<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Hubungi Sales Hino Tangerang untuk konsultasi harga, promo, dan kredit truk Hino Dutro, Ranger, dan Bus. Layanan resmi Jabodetabek & Jawa Barat. Chat Nathan Hino sekarang." />
    <meta name="keywords" content="kontak sales hino tangerang, sales hino jabodetabek, nomor sales hino resmi, dealer hino tangerang, konsultasi harga truk hino, promo hino terbaru, kredit truk hino" />
    <meta name="author" content="Sales Hino Tangerang" />
    <meta name="robots" content="index, follow">
    <title>Kontak Sales Hino Tangerang | Harga & Promo Truk Hino Resmi</title>

    <!-- Favicon untuk semua browser modern -->
    <link rel="icon" type="image/png" sizes="512x512" href="/favicon_512.png">
    
    <!-- Favicon untuk browser lama -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    
    <!-- Apple Touch Icon (iPhone/iPad) -->
    <link rel="apple-touch-icon" href="/favicon_512.png">
    
    <!-- Google Lighthouse Recommendation -->
    <meta name="theme-color" content="#ffffff">

    <link rel="canonical" href="https://saleshinotangerang.com/contact" />

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/whatsapp.css" />
    <link rel="stylesheet" href="css/navbar.css" />
    <link rel="stylesheet" href="css/contact/hero.css" />
    <link rel="stylesheet" href="css/contact/contact.css" />

    <!-- JS -->
    <script src="js/script.js"></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Open+Sans:wght@400;600&display=swap"
      rel="stylesheet"
    />

    <!-- Open Graph -->
    <meta property="og:title" content="Kontak Sales Hino Tangerang | Dealer Resmi Truk Hino" />
    <meta property="og:description" content="Butuh harga terbaik truk Hino? Hubungi Sales Hino Tangerang untuk promo, kredit, dan konsultasi pembelian resmi." />
    <meta property="og:image" content="https://saleshinotangerang.com/images/contact-hino.webp" />
    <meta property="og:url" content="https://saleshinotangerang.com/contact" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Sales Hino Tangerang" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Kontak Sales Hino Tangerang | Dealer Resmi Truk Hino" />
    <meta name="twitter:description" content="Hubungi Sales Hino Tangerang untuk promo harga, kredit, dan info truk Hino terbaru." />
    <meta name="twitter:image" content="https://saleshinotangerang.com/images/contact-hino.webp" />

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
            "@type": "Organization",
            "name": "Sales Hino Tangerang",
            "logo": {
              "@type": "ImageObject",
              "url": "https://saleshinotangerang.com/favicon_512.png"
            }
          }
        },

        {
          "@type": "AutoDealer",
          "@id": "https://saleshinotangerang.com/#dealer",
          "name": "Sales Hino Tangerang",
          "url": "https://saleshinotangerang.com/",
          "logo": "https://saleshinotangerang.com/favicon_512.png",
          "image": "https://saleshinotangerang.com/images/contact-hino.webp",
          "telephone": "+62-859-7528-7684",
          "priceRange": "$$$",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "Jl. Tj. Pura No.9-10, Pegadungan, Kalideres",
            "addressLocality": "Jakarta Barat",
            "addressRegion": "DKI Jakarta",
            "postalCode": "11830",
            "addressCountry": "ID"
          },
          "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
              "Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"
            ],
            "opens": "08:00",
            "closes": "17:00"
          },
          "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+62-859-7528-7684",
            "contactType": "sales",
            "areaServed": "ID",
            "availableLanguage": ["id"]
          }
        },

        {
          "@type": "ContactPage",
          "@id": "https://saleshinotangerang.com/contact#contact",
          "url": "https://saleshinotangerang.com/contact",
          "name": "Kontak Sales Hino Tangerang",
          "description": "Halaman kontak resmi Sales Hino Tangerang untuk konsultasi harga, promo, dan pembelian truk Hino."
        },

        {
          "@type": "BreadcrumbList",
          "@id": "https://saleshinotangerang.com/contact#breadcrumb",
          "itemListElement": [
            {
              "@type": "ListItem",
              "position": 1,
              "name": "Sales Hino Tangerang",
              "item": "https://saleshinotangerang.com/"
            },
            {
              "@type": "ListItem",
              "position": 2,
              "name": "Kontak",
              "item": "https://saleshinotangerang.com/contact"
            }
          ]
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

    <!-- Hero Contact -->
    <section class="hero-contact">
      <!-- Aksen bulat -->
      <div class="dot dot-yellow"></div>
      <div class="dot dot-blue"></div>

      <div class="hero-contact-content">
        <!-- Teks -->
        <div class="hero-contact-text">
          <h1>Kontak Kami</h1>
          <p>
            Kami siap membantu Anda mendapatkan solusi terbaik untuk kebutuhan truk Hino di seluruh Indonesia.
          </p>
          <a href="#contact-form" class="btn-contact">Kirim Pesan</a>
        </div>

        <!-- Gambar -->
        <div class="hero-contact-image">
          <img src="images/contact.webp" alt="Customer Service Hino" />
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <div class="wrapper" id="contact-form">
      <h2>Contact Us</h2>
      <p>Fill out the form below to get in touch with us.</p>

      <div class="container">
        <div class="contact-form">
          <form id="contactForm" method="POST" action="admin/simpan_kontak.php">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required />

            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required />

            <label for="phone">Your Phone Number:</label>
            <input type="tel" id="phone" name="phone" required />

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="6" required></textarea>

            <button type="submit"><strong>Submit</strong></button>
          </form>
        </div>

        <div class="map1">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63471.95288843176!2d106.65860738294855!3d-6.131096504333846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a1d775401fa6d%3A0xc7e25a8d81b821ec!2sDealer%20Hino%20Jabodetabek%20Resmi!5e0!3m2!1sen!2sus!4v1760817261750!5m2!1sen!2sus"
            width="600"
            height="450"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
      </div>
    </div>

    <script>
      document.querySelector('.btn-contact').addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector('#contact-form');
        if (target) {
          target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
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
