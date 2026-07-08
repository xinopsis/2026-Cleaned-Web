<?php
/* -------------------------------------------------------
   includes/header.php
   Rutas de assets desde la raíz del sitio (compatible con
   URLs limpias /blog/slug/ y mod_rewrite).
------------------------------------------------------- */
require_once __DIR__ . '/site-path.php';

$isHttps   = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
             || (isset($_SERVER['SERVER_PORT']) && (int)$_SERVER['SERVER_PORT'] === 443);
$scheme    = $isHttps ? 'https' : 'http';
$host      = $_SERVER['HTTP_HOST'] ?? 'localhost';
$requestUri = $_SERVER['REQUEST_URI'] ?? '/';
$currentPath = strtok($requestUri, '?') ?: '/';
$currentUrl  = $scheme . '://' . $host . $currentPath;

$novoRoot   = realpath(__DIR__ . '/..');
$scriptDir  = realpath(dirname($_SERVER['SCRIPT_FILENAME'] ?? ''));
$relDir     = '';
if ($novoRoot !== false && $scriptDir !== false) {
    $sep = str_replace('\\', '/', $novoRoot) . '/';
    $rel = str_replace('\\', '/', $scriptDir);
    if ($rel === rtrim($sep, '/')) {
        $relDir = '';
    } elseif (strpos($rel . '/', $sep) === 0) {
        $relDir = ltrim(str_replace($sep, '', $rel . '/'), '/');
        $relDir = rtrim($relDir, '/');
    }
}
$depth        = $relDir === '' ? 0 : substr_count($relDir, '/') + 1;
$assetsPrefix = site_base_href();

$scriptName = basename($_SERVER['SCRIPT_NAME'] ?? '');
$isHome     = ($depth === 0 && $scriptName === 'index.php');

// Valores por defecto que cada página puede sobreescribir antes del include
$pageTitle       = $pageTitle       ?? 'Cleaned Services - Soluciones integrales de limpieza, mantenimiento y gestión operativa';
$pageDescription = $pageDescription ?? 'Soluciones integrales de limpieza, mantenimiento y gestión operativa en Perú';
$pageImage       = $pageImage       ?? site_asset_href('images/hero-img-uniformes.webp');
$pageJsonLd      = $pageJsonLd      ?? '';
$siteName        = 'Cleaned Services';

$ogImage = $pageImage;
if ($ogImage !== '' && !preg_match('#^https?://#i', $ogImage)) {
    $ogImage = $scheme . '://' . $host . (strpos($ogImage, '/') === 0 ? $ogImage : '/' . ltrim($ogImage, '/'));
}

$eTitle  = htmlspecialchars($pageTitle,       ENT_QUOTES, 'UTF-8');
$eDesc   = htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8');
$eUrl    = htmlspecialchars($currentUrl,      ENT_QUOTES, 'UTF-8');
$eImage  = htmlspecialchars($ogImage,         ENT_QUOTES, 'UTF-8');
$eSite   = htmlspecialchars($siteName,        ENT_QUOTES, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-KV6TWP2J');</script>
  <!-- End Google Tag Manager -->
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-5G55LHTY2L"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-5G55LHTY2L');
  </script>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= $eTitle ?></title>
  <meta name="description" content="<?= $eDesc ?>" />
  <meta name="robots" content="index, follow, max-image-preview:large" />
  <link rel="canonical" href="<?= $eUrl ?>" />

  <?php if ($isHome): ?>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "Organization",
        "@id": "https://www.cleaned.pe/#organization",
        "name": "Cleaned Services",
        "legalName": "Cleaned Services S.A.C.",
        "url": "https://www.cleaned.pe",
        "logo": "https://www.cleaned.pe/images/logo_cleaned_color.svg",
        "description": "Empresa peruana especializada en soluciones integrales de limpieza corporativa, facility management, saneamiento ambiental y servicios aeroportuarios con más de 6 años de experiencia y 3,000 colaboradores.",
        "foundingDate": "2018",
        "numberOfEmployees": { "@type": "QuantitativeValue", "value": 3000 },
        "contactPoint": {
          "@type": "ContactPoint",
          "telephone": "+51 960 415 741",
          "email": "contacto@cleaned.pe",
          "contactType": "customer service",
          "availableLanguage": "Spanish"
        },
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "Av. Camino Real 390, piso 13",
          "addressLocality": "Lima",
          "addressRegion": "Lima",
          "addressCountry": "PE"
        },
        "sameAs": [
          "https://www.linkedin.com/company/cleaned-services/",
          "https://www.instagram.com/cleanedoficial",
          "https://www.facebook.com/people/Cleaned-Services/61579062865176/"
        ],
        "hasCredential": [
          { "@type": "EducationalOccupationalCredential", "name": "ISO 9001:2015", "description": "Certificación de Sistema de Gestión de Calidad" },
          { "@type": "EducationalOccupationalCredential", "name": "ISO 14001:2015", "description": "Certificación de Sistema de Gestión Ambiental" },
          { "@type": "EducationalOccupationalCredential", "name": "ISO 45001:2018", "description": "Certificación de Sistema de Gestión de Seguridad y Salud en el Trabajo" }
        ]
      },
      {
        "@type": "LocalBusiness",
        "@id": "https://www.cleaned.pe/#localbusiness",
        "name": "Cleaned Services",
        "image": "<?= $eImage ?>",
        "url": "https://www.cleaned.pe",
        "telephone": "+51 960 415 741",
        "email": "contacto@cleaned.pe",
        "priceRange": "$$",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "Av. Camino Real 390, piso 13",
          "addressLocality": "Lima",
          "addressRegion": "Lima",
          "addressCountry": "PE"
        },
        "geo": { "@type": "GeoCoordinates", "latitude": -12.0464, "longitude": -77.0428 },
        "areaServed": { "@type": "Country", "name": "Perú" },
        "parentOrganization": { "@id": "https://www.cleaned.pe/#organization" },
        "makesOffer": [
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Limpieza Corporativa" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Facility Management" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Servicios Generales" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Saneamiento Ambiental" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Servicios Aeroportuarios" } }
        ]
      },
      {
        "@type": "WebSite",
        "@id": "https://www.cleaned.pe/#website",
        "url": "https://www.cleaned.pe",
        "name": "Cleaned Services",
        "publisher": { "@id": "https://www.cleaned.pe/#organization" },
        "inLanguage": "es-PE"
      },
      {
        "@type": "FAQPage",
        "@id": "https://www.cleaned.pe/#faq",
        "mainEntity": [
          {
            "@type": "Question",
            "name": "¿Qué es Cleaned Services y dónde opera?",
            "acceptedAnswer": { "@type": "Answer", "text": "Cleaned Services es una empresa peruana de soluciones integrales de limpieza, facility management y saneamiento ambiental con sede en Lima, Perú. Atiende empresas en sectores de industria, banca, retail, educación y transporte en todo el territorio nacional." }
          },
          {
            "@type": "Question",
            "name": "¿Qué certificaciones tiene Cleaned Services?",
            "acceptedAnswer": { "@type": "Answer", "text": "Cleaned Services cuenta con certificaciones ISO 9001:2015 (calidad), ISO 14001:2015 (gestión ambiental) e ISO 45001:2018 (seguridad y salud ocupacional), además de homologaciones SGS, HODELPE y MEGA." }
          },
          {
            "@type": "Question",
            "name": "¿Qué servicios ofrece Cleaned Services?",
            "acceptedAnswer": { "@type": "Answer", "text": "Los servicios incluyen: limpieza corporativa, facility management, servicios generales y auxiliares, saneamiento ambiental (fumigación, desinfección, control de plagas) y servicios aeroportuarios. Todos con protocolos SSOMA y personal certificado." }
          },
          {
            "@type": "Question",
            "name": "¿Qué es facility management y por qué contratar este servicio en Perú?",
            "acceptedAnswer": { "@type": "Answer", "text": "Facility management es la gestión integral de las instalaciones de una empresa, incluyendo mantenimiento preventivo y correctivo, gestión de proveedores y optimización de espacios. En Perú, Cleaned Services ofrece este servicio con ingenieros especializados y plataformas digitales de supervisión en tiempo real." }
          },
          {
            "@type": "Question",
            "name": "¿Cuántos colaboradores tiene Cleaned Services?",
            "acceptedAnswer": { "@type": "Answer", "text": "Cleaned Services cuenta con más de 3,000 colaboradores capacitados operando en múltiples sedes a nivel nacional, incluyendo clientes en sectores bancario, industrial y de transporte." }
          },
          {
            "@type": "Question",
            "name": "¿Cómo solicitar una cotización de limpieza corporativa?",
            "acceptedAnswer": { "@type": "Answer", "text": "Para solicitar una cotización, puede contactar a Cleaned Services al +51 960 415 741, escribir a contacto@cleaned.pe, o completar el formulario en la sección de contacto del sitio web. El equipo comercial responde en menos de 24 horas hábiles." }
          },
          {
            "@type": "Question",
            "name": "¿Cleaned Services trabaja con empresas del sector bancario?",
            "acceptedAnswer": { "@type": "Answer", "text": "Sí. Cleaned Services tiene experiencia comprobada en el sector de banca y seguros en Perú, con protocolos de seguridad adaptados a instalaciones financieras que requieren continuidad operativa y confidencialidad." }
          },
          {
            "@type": "Question",
            "name": "¿Qué incluye el plan SSOMA de Cleaned Services?",
            "acceptedAnswer": { "@type": "Answer", "text": "Cada contrato incluye un plan SSOMA personalizado: equipos de protección personal (EPP), análisis IPERC, planes de emergencia activos, vigilancia médica ocupacional y uso exclusivo de productos biodegradables certificados." }
          }
        ]
      }
    ]
  }
  </script>
  <?php endif; ?>

  <?php if (!empty($pageJsonLd)): ?>
  <script type="application/ld+json"><?= $pageJsonLd ?></script>
  <?php endif; ?>

  <meta property="og:locale"    content="es_PE" />
  <meta property="og:type"      content="website" />
  <meta property="og:site_name" content="<?= $eSite ?>" />
  <meta property="og:title"     content="<?= $eTitle ?>" />
  <meta property="og:description" content="<?= $eDesc ?>" />
  <meta property="og:url"       content="<?= $eUrl ?>" />
  <meta property="og:image"     content="<?= $eImage ?>" />
  <meta property="og:image:alt" content="Logo oficial de Cleaned Services" />

  <meta name="twitter:card"        content="summary_large_image" />
  <meta name="twitter:title"       content="<?= $eTitle ?>" />
  <meta name="twitter:description" content="<?= $eDesc ?>" />
  <meta name="twitter:image"       content="<?= $eImage ?>" />

  <meta name="theme-color" content="#0A3D62" />
  <link rel="icon" type="image/png" sizes="32x32" href="<?= $assetsPrefix ?>images/favicon.png" />
  <link rel="icon" href="<?= $assetsPrefix ?>images/favicon.ico" sizes="any" />
  <link rel="shortcut icon" href="<?= $assetsPrefix ?>images/favicon.ico" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="<?= $assetsPrefix ?>css/styles.css" />
  <?php if ($depth > 0): // páginas internas: layouts de servicios + bloques compartidos ?>
  <link rel="stylesheet" href="<?= $assetsPrefix ?>css/service-pages.css" />
  <link rel="stylesheet" href="<?= $assetsPrefix ?>css/internal-pages.css" />
  <?php endif; ?>
</head>
<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KV6TWP2J"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <!-- HEADER -->
  <header class="header<?= $isHome ? ' header--home' : '' ?>" id="header">
    <div class="container header__inner">

      <!-- Logo -->
      <div class="header__logo">
        <a href="<?= $assetsPrefix ?>index.php" aria-label="Cleaned Services - Inicio">
          <img src="<?= $assetsPrefix ?>images/logo_cleaned_color.svg"
               alt="Cleaned Services"
               class="header__logo-img header__logo-img--color"
               width="210" height="72" />
          <?php if ($isHome): ?>
          <img src="<?= $assetsPrefix ?>images/logo_cleaned_blanco.svg"
               alt="Cleaned Services"
               class="header__logo-img header__logo-img--white"
               width="210" height="72" aria-hidden="true" />
          <?php endif; ?>
        </a>
      </div>

      <!-- Navegación principal -->
      <nav class="header__nav" id="main-nav" aria-label="Navegación principal">
        <ul class="nav__list" role="menubar">

          <!-- Servicios -->
          <li class="nav__item" role="none">
            <a href="<?= $assetsPrefix ?>servicios/index.php" class="nav__link" role="menuitem" aria-haspopup="true">
              Servicios <span class="arrow" aria-hidden="true">▾</span>
            </a>
            <div class="nav__megamenu" role="menu" aria-label="Submenú Servicios">
              <div class="nav__megamenu-item" role="none"><a href="<?= $assetsPrefix ?>servicios/limpieza.php" role="menuitem">Limpieza Corporativa</a></div>
              <div class="nav__megamenu-item" role="none"><a href="<?= $assetsPrefix ?>servicios/ingenieria-mantenimiento.php" role="menuitem">Facility Management</a></div>
              <div class="nav__megamenu-item" role="none"><a href="<?= $assetsPrefix ?>servicios/auxiliares.php" role="menuitem">Servicios Generales</a></div>
              <div class="nav__megamenu-item" role="none"><a href="<?= $assetsPrefix ?>servicios/medio-ambiente.php" role="menuitem">Saneamiento Ambiental</a></div>
              <div class="nav__megamenu-item" role="none"><a href="<?= $assetsPrefix ?>servicios/aeroportuarios.php" role="menuitem">Servicios Aeroportuarios</a></div>
            </div>
          </li>

          <!-- Sectores -->
          <li class="nav__item" role="none">
            <a href="<?= $assetsPrefix ?>sectores/index.php" class="nav__link" role="menuitem" aria-haspopup="true">
              Sectores <span class="arrow" aria-hidden="true">▾</span>
            </a>
            <div class="nav__dropdown" role="menu" aria-label="Submenú Sectores">
              <div class="nav__dropdown-item" role="none"><a href="<?= $assetsPrefix ?>sectores/industria.php" role="menuitem">Industria</a></div>
              <div class="nav__dropdown-item" role="none"><a href="<?= $assetsPrefix ?>sectores/banca-seguros.php" role="menuitem">Banca y Seguros</a></div>
              <div class="nav__dropdown-item" role="none"><a href="<?= $assetsPrefix ?>sectores/retail.php" role="menuitem">Retail</a></div>
              <div class="nav__dropdown-item" role="none"><a href="<?= $assetsPrefix ?>sectores/educacion.php" role="menuitem">Educación</a></div>
              <div class="nav__dropdown-item" role="none"><a href="<?= $assetsPrefix ?>sectores/transporte.php" role="menuitem">Transporte</a></div>
            </div>
          </li>

          <!-- Nosotros -->
          <li class="nav__item" role="none">
            <a href="<?= $assetsPrefix ?>nosotros/index.php" class="nav__link" role="menuitem" aria-haspopup="true">
              Nosotros <span class="arrow" aria-hidden="true">▾</span>
            </a>
            <div class="nav__dropdown" role="menu" aria-label="Submenú Nosotros">
              <div class="nav__dropdown-item" role="none"><a href="<?= $assetsPrefix ?>nosotros/quienes-somos.php" role="menuitem">Quiénes Somos</a></div>
              <div class="nav__dropdown-item" role="none"><a href="<?= $assetsPrefix ?>nosotros/certificaciones.php" role="menuitem">Certificaciones</a></div>
              <div class="nav__dropdown-item" role="none"><a href="<?= $assetsPrefix ?>nosotros/canal-denuncias.php" role="menuitem">Canal de Denuncias</a></div>
            </div>
          </li>

          <!-- Sostenibilidad -->
          <li class="nav__item" role="none">
            <a href="<?= $assetsPrefix ?>sostenibilidad/index.php" class="nav__link" role="menuitem">Sostenibilidad</a>
          </li>

          <!-- Contacto -->
          <li class="nav__item nav__item--cta" role="none">
            <a href="<?= $assetsPrefix ?>contacto/index.php" class="nav__link nav__link--cta" role="menuitem">Contacto</a>
          </li>

        </ul>
      </nav>

      <!-- Hamburguesa (mobile) -->
      <button class="hamburger" id="hamburger" aria-label="Abrir menú" aria-expanded="false" aria-controls="main-nav">
        <span class="hamburger__bar"></span>
        <span class="hamburger__bar"></span>
        <span class="hamburger__bar"></span>
      </button>

    </div>
  </header>
  <!-- /HEADER -->
