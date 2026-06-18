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
    "@type": "ProfessionalService",
    "name": "Cleaned Services",
    "url": "<?= $eUrl ?>",
    "telephone": "+51 923 903 810",
    "image": ["<?= $eImage ?>"],
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Av. Camino Real 390, piso 13",
      "addressLocality": "Lima",
      "addressRegion": "Lima",
      "addressCountry": "PE"
    },
    "areaServed": [
      { "@type": "Country", "name": "Peru" },
      { "@type": "AdministrativeArea", "name": "Lima" }
    ],
    "makesOffer": [
      { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Limpieza Corporativa" } },
      { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Seguridad Privada" } },
      { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Ingeniería y Mantenimiento" } },
      { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Medio Ambiente" } },
      { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Servicios Auxiliares" } }
    ]
  }
  </script>
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
  <!-- BACK TO TOP -->
  <button id="back-to-top" class="back-to-top" aria-label="Volver arriba">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="18 15 12 9 6 15"/></svg>
  </button>

  <!-- HEADER -->
  <header class="header" id="header">
    <div class="container header__inner">

      <!-- Logo -->
      <div class="header__logo">
        <a href="<?= $assetsPrefix ?>index.php" aria-label="Cleaned Services - Inicio">
          <img src="<?= $assetsPrefix ?>images/logo_cleaned_color.svg"
               alt="Cleaned Services"
               class="header__logo-img"
               width="210" height="72" />
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
