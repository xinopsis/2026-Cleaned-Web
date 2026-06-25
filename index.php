<?php $pageTitle = 'Cleaned Services - Soluciones integrales de limpieza, mantenimiento y gestión operativa'; ?>
<?php $pageDescription = 'Soluciones integrales de limpieza, mantenimiento y gestión operativa en Perú'; ?>
<?php
$homeCertLogos = [
  ['src' => 'images/logo-certificacion-01.png', 'alt' => 'ISO 9001:2015'],
  ['src' => 'images/logo-certificacion-02.png', 'alt' => 'ISO 14001:2015'],
  ['src' => 'images/logo-certificacion-03.png', 'alt' => 'ISO 45001:2018'],
  ['src' => 'images/logo-certificacion-04.png', 'alt' => 'HODELPE homologado'],
  ['src' => 'images/logo-certificacion-05.png', 'alt' => 'MEGA homologado'],
  ['src' => 'images/logo-certificacion-06.png', 'alt' => 'SGS homologado'],
];
?>
<?php include 'includes/header.php'; ?>

<!-- ====================================================
     HERO SLIDER
     ==================================================== -->
<section class="hero" aria-label="Presentación principal">

  <!-- Slide 1 — Equipo con uniformes, skyline Lima -->
  <div class="hero__slide hero__slide--1 active">
    <div class="container hero__content">
      <div class="hero__text">
        <span class="hero__tag">6 Años de Excelencia</span>
        <h1 class="hero__title">Transformamos tus espacios en<br>entornos de alto rendimiento</h1>
        <p class="hero__desc">Soluciones integrales de limpieza, mantenimiento y gestión operativa con estándares de clase mundial.</p>
        <div class="hero__actions">
          <a href="contacto/index.php" class="btn btn--white btn--lg">Quiero Cotizar</a>
          <a href="servicios/index.php" class="btn btn--outline btn--lg">Nuestros Servicios</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Slide 2 — Técnico limpiando sillas (acción) -->
  <div class="hero__slide hero__slide--2">
    <div class="container hero__content">
      <div class="hero__text">
        <span class="hero__tag">Servicio Profesional</span>
        <h1 class="hero__title">Cada Detalle<br>Marca la Diferencia</h1>
        <p class="hero__desc">Equipos altamente capacitados, protocolos de calidad certificados y tecnología de vanguardia para resultados impecables.</p>
        <div class="hero__actions">
          <a href="servicios/limpieza.php" class="btn btn--white btn--lg">Servicios de Limpieza</a>
          <a href="contacto/index.php" class="btn btn--outline btn--lg">Cotizar ahora</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Slide 3 — Colaborador en lobby con señal de precaución -->
  <div class="hero__slide hero__slide--3">
    <div class="container hero__content">
      <div class="hero__text">
        <span class="hero__tag">Innovación & Tecnología</span>
        <h1 class="hero__title">Tecnología que eleva cada operación</h1>
        <p class="hero__desc">Integramos plataformas digitales y data en tiempo real para optimizar cada proceso y garantizar resultados medibles en sus instalaciones.</p>
        <div class="hero__actions">
          <a href="blog/tecnologia-e-innovacion-smart-cleaned/" class="btn btn--white btn--lg">Conocer más</a>
          <a href="contacto/index.php" class="btn btn--outline btn--lg">Solicitar Demo</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Arrows (posicionados en los lados del hero) -->
  <button class="hero__arrow hero__arrow--prev" aria-label="Diapositiva anterior"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"/></svg></button>
  <button class="hero__arrow hero__arrow--next" aria-label="Siguiente diapositiva"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg></button>

  <!-- Dots (centrados en la parte inferior) -->
  <div class="hero__controls" aria-label="Controles del slider">
    <div class="hero__dots" role="tablist" aria-label="Indicadores de diapositiva">
      <button class="hero__dot active" role="tab" aria-label="Diapositiva 1" aria-selected="true"></button>
      <button class="hero__dot" role="tab" aria-label="Diapositiva 2" aria-selected="false"></button>
      <button class="hero__dot" role="tab" aria-label="Diapositiva 3" aria-selected="false"></button>
    </div>
  </div>

</section>

<!-- ====================================================
     SERVICIOS
     ==================================================== -->
<section class="services section" id="servicios" aria-labelledby="services-title">
  <div class="container">
    <h2 class="section-title section-title--center reveal" id="services-title">Conoce nuestros servicios</h2>
    <p class="section-subtitle section-subtitle--center reveal reveal--delay-1">
      Garantizamos ambientes limpios, seguros y saludables mediante protocolos estandarizados y personal capacitado, adaptándonos a las necesidades de cada cliente.
    </p>
    <div class="services__grid">
      <a href="servicios/limpieza.php" class="service-card reveal reveal--delay-1">
        <img src="images/edificio-isometrico.png" alt="Limpieza Corporativa" class="service-card__img" loading="lazy">
        <h3 class="service-card__title">Limpieza Corporativa</h3>
        <span class="service-card__link">Ver más →</span>
      </a>
      <a href="servicios/ingenieria-mantenimiento.php" class="service-card reveal reveal--delay-2">
        <img src="images/facility.png" alt="Facility Management" class="service-card__img" loading="lazy">
        <h3 class="service-card__title">Facility Management</h3>
        <span class="service-card__link">Ver más →</span>
      </a>
      <a href="servicios/auxiliares.php" class="service-card reveal reveal--delay-3">
        <img src="images/servicios_generales.png" alt="Servicios Generales" class="service-card__img" loading="lazy">
        <h3 class="service-card__title">Servicios Generales</h3>
        <span class="service-card__link">Ver más →</span>
      </a>
      <a href="servicios/medio-ambiente.php" class="service-card reveal reveal--delay-4">
        <img src="images/ambiental.png" alt="Saneamiento Ambiental" class="service-card__img" loading="lazy">
        <h3 class="service-card__title">Saneamiento Ambiental</h3>
        <span class="service-card__link">Ver más →</span>
      </a>
      <a href="servicios/aeroportuarios.php" class="service-card reveal reveal--delay-5">
        <img src="images/novo_avion.png" alt="Servicios Aeroportuarios" class="service-card__img" loading="lazy">
        <h3 class="service-card__title">Servicios Aeroportuarios</h3>
        <span class="service-card__link">Ver más →</span>
      </a>
    </div>
  </div>
</section>

<!-- ====================================================
     CERTIFICACIONES (marquee infinito)
     ==================================================== -->
<section class="cert-marquee" aria-labelledby="cert-marquee-title">
  <div class="container">
    <div class="cert-marquee__head text-center reveal">
      <span class="section-tag">Acreditaciones</span>
      <h2 id="cert-marquee-title" class="section-title section-title--center">Certificaciones y homologaciones</h2>
      <p class="section-subtitle section-subtitle--center">Estándares internacionales que respaldan nuestra operación en cada servicio.</p>
    </div>
  </div>
  <div class="cert-marquee__viewport">
    <div class="cert-marquee__track">
      <?php foreach ([1, 2, 3] as $marqueeSeq): ?>
      <div class="cert-marquee__group<?= $marqueeSeq > 1 ? ' cert-marquee__group--clone' : '' ?>" role="<?= $marqueeSeq === 1 ? 'list' : 'presentation' ?>"<?= $marqueeSeq > 1 ? ' aria-hidden="true"' : '' ?>>
        <?php foreach ($homeCertLogos as $cert): ?>
          <div class="cert-marquee__cell"<?= $marqueeSeq === 1 ? ' role="listitem"' : '' ?>>
            <a href="nosotros/certificaciones.php" class="cert-marquee__link"<?= $marqueeSeq === 1 ? ' title="' . htmlspecialchars($cert['alt'], ENT_QUOTES, 'UTF-8') . '"' : ' tabindex="-1"' ?>>
              <img src="<?= htmlspecialchars($cert['src'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= $marqueeSeq === 1 ? htmlspecialchars($cert['alt'], ENT_QUOTES, 'UTF-8') : '' ?>" width="88" height="88" class="cert-marquee__img" loading="eager" decoding="async">
            </a>
          </div>
        <?php endforeach; ?>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  <div class="container cert-marquee__foot text-center reveal">
    <a href="nosotros/certificaciones.php" class="btn btn--outline btn--sm">Ver detalle de certificaciones</a>
  </div>
</section>

<!-- ====================================================
     ESTADÍSTICAS
     ==================================================== -->
<section class="stats section--red" aria-label="Cifras clave de Cleaned Services">
  <div class="container">
    <div class="stats__grid">
      <div class="stat-item reveal">
        <div class="stat-item__number"><span data-count="6">6</span>+</div>
        <div class="stat-item__label">Años en el mercado</div>
      </div>
      <div class="stat-item reveal reveal--delay-1">
        <div class="stat-item__number"><span data-count="200">200</span>+</div>
        <div class="stat-item__label">Clientes atendidos</div>
      </div>
      <div class="stat-item reveal reveal--delay-2">
        <div class="stat-item__number"><span data-count="6">6</span></div>
        <div class="stat-item__label">Certificaciones</div>
      </div>
    </div>
  </div>
</section>

<!-- ====================================================
     ACERCA DE
     ==================================================== -->
<section class="about section" id="nosotros" aria-labelledby="about-title">
  <div class="container">
    <div class="about__inner">
      <div class="about__visual reveal reveal--left">
        <img src="images/hero-equipo-central.png" alt="Equipo Cleaned Perú" class="about__visual-img" loading="lazy">
        <div class="about__badge">
          <span class="about__badge-number">+3000</span>
          <span class="about__badge-text">Colaboradores</span>
        </div>
      </div>
      <div class="about__content reveal reveal--right">
        <span class="section-tag">Nosotros</span>
        <h2 class="section-title" id="about-title">Soluciones integrales para empresas e instituciones</h2>
        <p>CLEANED SERVICES es una empresa peruana especializada en brindar soluciones integrales para empresas e instituciones. Contamos con un equipo altamente capacitado, tecnología de punta y un enfoque basado en calidad, sostenibilidad y seguridad.</p>
        <div class="about__pillars">
          <div class="about__pillar">
            <span class="about__pillar-icon" aria-hidden="true">⭐</span>
            <div class="about__pillar-text">
              <h4>Compromiso con la excelencia y la calidad</h4>
            </div>
          </div>
          <div class="about__pillar">
            <span class="about__pillar-icon" aria-hidden="true">👥</span>
            <div class="about__pillar-text">
              <h4>Trabajo en equipo y responsabilidad operativa</h4>
            </div>
          </div>
          <div class="about__pillar">
            <span class="about__pillar-icon" aria-hidden="true">💡</span>
            <div class="about__pillar-text">
              <h4>Innovación constante orientada a resultados</h4>
            </div>
          </div>
        </div>
        <div class="about__cta btn-row">
          <a href="nosotros/quienes-somos.php" class="btn btn--primary">Conocer más</a>
          <a href="contacto/index.php" class="btn btn--outline-dark">Quiero Cotizar</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ====================================================
     SECTORES
     ==================================================== -->
<section class="sectors section section--grey" id="sectores" aria-labelledby="sectors-title">
  <div class="container">
    <h2 class="section-title section-title--center reveal" id="sectors-title">Sectores que Atendemos</h2>
   
    <div class="sectors__grid">
      <a href="sectores/industria.php" class="sector-card reveal reveal--delay-1">
        <span class="sector-card__icon" aria-hidden="true">🏭</span>
        <span class="sector-card__name">Industria</span>
      </a>
      <a href="sectores/banca-seguros.php" class="sector-card reveal reveal--delay-2">
        <span class="sector-card__icon" aria-hidden="true">🏦</span>
        <span class="sector-card__name">Banca y Seguros</span>
      </a>
      <a href="sectores/retail.php" class="sector-card reveal reveal--delay-3">
        <span class="sector-card__icon" aria-hidden="true">🛒</span>
        <span class="sector-card__name">Retail</span>
      </a>
      <a href="sectores/educacion.php" class="sector-card reveal reveal--delay-4">
        <span class="sector-card__icon" aria-hidden="true">🎓</span>
        <span class="sector-card__name">Educación</span>
      </a>
      <a href="sectores/transporte.php" class="sector-card reveal reveal--delay-5">
        <span class="sector-card__icon" aria-hidden="true">✈️</span>
        <span class="sector-card__name">Transporte</span>
      </a>
    </div>
  </div>
</section>

<!-- ====================================================
     SOSTENIBILIDAD
     ==================================================== -->
<section id="sostenibilidad" class="split-section" aria-labelledby="sustain-title">
  <!-- Imagen a sangre: 50% izquierda -->
  <div class="split-section__media reveal reveal--left">
    <img src="images/mujerSSOMA.webp"
         alt="Equipo Cleaned en operación"
    >
  </div>
  <!-- Texto: 50% derecha, fondo oscuro -->
  <div class="split-section__content reveal reveal--right">
    <div class="split-section__inner">
      <span class="split-section__kicker">SSOMA</span>
      <h2 class="section-title section-title--white split-section__title" id="sustain-title">Seguridad, Salud y Medio Ambiente en cada operación</h2>
      <p class="split-section__desc">Cada contrato incluye un plan SSOMA adaptado al entorno del cliente: control de riesgos, capacitación continua y uso exclusivo de productos biodegradables certificados.</p>
      <div class="split-section__list">
        <div class="split-section__item">
          <span class="split-section__item-icon">⛑️</span>
          <span class="split-section__item-text"><strong>Seguridad</strong> — EPP, IPERC y planes de emergencia activos</span>
        </div>
        <div class="split-section__item">
          <span class="split-section__item-icon">🩺</span>
          <span class="split-section__item-text"><strong>Salud Ocupacional</strong> — Vigilancia médica y prevención de riesgos</span>
        </div>
        <div class="split-section__item">
          <span class="split-section__item-icon">🌿</span>
          <span class="split-section__item-text"><strong>Medio Ambiente</strong> — Productos biodegradables y manejo responsable de residuos</span>
        </div>
      </div>
      <a href="sostenibilidad/index.php" class="btn btn--outline ssoma-cta">Conocer más</a>
    </div>
  </div>
</section>

<!-- ====================================================
     ACTUALIDAD / NOTICIAS
     ==================================================== -->
<section class="news section" id="actualidad" aria-labelledby="news-title">
  <div class="container">
    <h2 class="section-title reveal" id="news-title">Actualidad</h2>
    <?php
      require_once __DIR__ . '/includes/articulos.php';
      $articles = articulos_load_all();
      $blogCategorias = articulos_load_categorias();

      $formatDateEs = function (string $iso) {
        $months = ['ene.', 'feb.', 'mar.', 'abr.', 'may.', 'jun.', 'jul.', 'ago.', 'sep.', 'oct.', 'nov.', 'dic.'];
        $dt = DateTime::createFromFormat('Y-m-d', $iso);
        if (!$dt) return $iso;
        $d = (int)$dt->format('d');
        $m = (int)$dt->format('m');
        $y = (int)$dt->format('Y');
        $mm = $months[$m - 1] ?? $dt->format('m');
        return sprintf('%02d %s %d', $d, $mm, $y);
      };

      $featured = null;
      foreach ($articles as $a) {
        if ($a['featured']) { $featured = $a; break; }
      }
      if ($featured === null && count($articles) > 0) $featured = $articles[0];

      $homeThumbSrc = static function (array $a): ?string {
        $img = trim($a['image'] ?? '');
        if ($img === '' || !preg_match('/\.(webp|jpe?g|png|gif|avif|svg)$/i', $img)) {
          return null;
        }
        $rel = ltrim(str_replace(['/', '\\'], DIRECTORY_SEPARATOR, $img), DIRECTORY_SEPARATOR);
        $fs = __DIR__ . DIRECTORY_SEPARATOR . $rel;
        return is_file($fs) ? $img : null;
      };

      $homeFallbackPal = static function (array $a) use ($homeThumbSrc): int {
        if ($homeThumbSrc($a)) {
          return 0;
        }
        return hexdec(substr(md5($a['slug'] ?? 'x'), 0, 2)) % 4;
      };

      $side = [];
      foreach ($articles as $a) {
        if ($featured && $a['slug'] === $featured['slug']) continue;
        $side[] = $a;
        if (count($side) === 2) break;
      }
    ?>

    <div data-article-filters="home">
    <div class="news__grid">
      <?php if ($featured): ?>
      <a href="<?= htmlspecialchars($featured['url'], ENT_QUOTES, 'UTF-8') ?>" class="news-card news-card--featured news__cell--featured reveal" data-article-category="<?= htmlspecialchars($featured['categorySlug'], ENT_QUOTES, 'UTF-8') ?>" aria-label="<?= htmlspecialchars($featured['title'], ENT_QUOTES, 'UTF-8') ?>">
        <div class="news-card__img" aria-hidden="true">
          <?php
            $ft = $homeThumbSrc($featured);
            if ($ft):
          ?>
          <img class="news-card__thumb" src="<?= htmlspecialchars($ft, ENT_QUOTES, 'UTF-8') ?>" alt="">
          <?php else: ?>
          <span class="news-card__img-fallback news-card__img-fallback--pal-<?= (int) $homeFallbackPal($featured) ?>"></span>
          <?php endif; ?>
        </div>
        <div class="news-card__body">
          <span class="news-card__tag"><?= htmlspecialchars($featured['category'], ENT_QUOTES, 'UTF-8') ?></span>
          <h3 class="news-card__title"><?= htmlspecialchars($featured['title'], ENT_QUOTES, 'UTF-8') ?></h3>
          <p class="news-card__excerpt"><?= htmlspecialchars($featured['excerpt'], ENT_QUOTES, 'UTF-8') ?></p>
          <div class="news-card__meta">
            <span>📅 <?= htmlspecialchars($formatDateEs($featured['date']), ENT_QUOTES, 'UTF-8') ?></span>
            <span class="news-card__link">Leer más →</span>
          </div>
        </div>
      </a>
      <?php endif; ?>

      <?php foreach ($side as $idx => $a): ?>
      <a href="<?= htmlspecialchars($a['url'], ENT_QUOTES, 'UTF-8') ?>" class="news-card news-card--compact news__cell--side reveal reveal--delay-<?= $idx + 1 ?>" data-article-category="<?= htmlspecialchars($a['categorySlug'], ENT_QUOTES, 'UTF-8') ?>" aria-label="<?= htmlspecialchars($a['title'], ENT_QUOTES, 'UTF-8') ?>">
        <div class="news-card__img news-card__img--sm" aria-hidden="true">
          <?php
            $st = $homeThumbSrc($a);
            if ($st):
          ?>
          <img class="news-card__thumb" src="<?= htmlspecialchars($st, ENT_QUOTES, 'UTF-8') ?>" alt="">
          <?php else: ?>
          <span class="news-card__img-fallback news-card__img-fallback--pal-<?= (int) $homeFallbackPal($a) ?>"></span>
          <?php endif; ?>
        </div>
        <div class="news-card__body">
          <span class="news-card__tag"><?= htmlspecialchars($a['category'], ENT_QUOTES, 'UTF-8') ?></span>
          <h3 class="news-card__title"><?= htmlspecialchars($a['title'], ENT_QUOTES, 'UTF-8') ?></h3>
          <div class="news-card__meta">
            <span>📅 <?= htmlspecialchars($formatDateEs($a['date']), ENT_QUOTES, 'UTF-8') ?></span>
            <span class="news-card__link">Leer más →</span>
          </div>
        </div>
      </a>
      <?php endforeach; ?>

      <nav class="news__cats news__cell--cats reveal reveal--delay-3" aria-label="Categorías del blog">
        <button type="button" class="news__cat-pill is-active" data-filter-category="">Todas</button>
        <?php foreach ($blogCategorias as $cat): ?>
        <button type="button" class="news__cat-pill" data-filter-category="<?= htmlspecialchars($cat['slug'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($cat['label'], ENT_QUOTES, 'UTF-8') ?></button>
        <?php endforeach; ?>
      </nav>
    </div>
    <p class="news__empty" data-article-empty hidden>No hay noticias en esta categoría.</p>
    </div>
    <div class="text-center mt-xl">
      <a href="blog/" class="btn btn--outline-dark">Ver todas las noticias</a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
