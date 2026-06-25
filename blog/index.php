<?php $pageTitle = 'Blog | Cleaned Services'; ?>
<?php $pageDescription = 'Blog de Cleaned Services: artículos sobre limpieza corporativa, facility management, innovación operativa y gestión de servicios en Perú.'; ?>
<?php
  require_once __DIR__ . '/../includes/articulos.php';
  require_once __DIR__ . '/../includes/site-path.php';
  $articles = articulos_load_all();
  $categorias = articulos_load_categorias();
  $categoriaActiva = isset($_GET['categoria']) ? trim((string)$_GET['categoria']) : '';
  if ($categoriaActiva !== '' && !articulos_categoria_es_valida($categoriaActiva)) {
    $categoriaActiva = '';
  }
?>
<?php include '../includes/header.php'; ?>


<section class="page-hero page-hero--photo page-hero--photo--dummy" aria-label="Blog">
  <div class="container">
    <div class="page-hero__breadcrumb">
      <a href="<?= htmlspecialchars(site_asset_href('index.php'), ENT_QUOTES, 'UTF-8') ?>">Inicio</a><span class="sep">›</span><span>Blog</span>
    </div>
    <span class="page-hero__badge">📝 Blog</span>
    <h1 class="page-hero__title">Blog Cleaned</h1>
    <p class="page-hero__desc">Artículos, casos y recursos sobre limpieza corporativa, facility management, innovación y gestión operativa para empresas en Perú.</p>
  </div>
</section>

<!-- Últimas entradas -->
<section class="section">
  <div class="container" data-article-filters="blog">
    <div class="com-index-toolbar reveal">
      <h2 class="section-title">Últimas publicaciones</h2>
      <div class="com-index-filters" role="group" aria-label="Filtrar por categoría">
        <button type="button" class="btn btn--outline com-filter-btn<?= $categoriaActiva === '' ? ' is-active' : '' ?>" data-filter-category="">Todas</button>
        <?php foreach ($categorias as $cat): ?>
        <button type="button" class="btn btn--outline com-filter-btn<?= $categoriaActiva === $cat['slug'] ? ' is-active' : '' ?>" data-filter-category="<?= htmlspecialchars($cat['slug'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($cat['label'], ENT_QUOTES, 'UTF-8') ?></button>
        <?php endforeach; ?>
      </div>
    </div>

    <?php
      $formatDateEs = 'articulo_format_date_es';

      $comThumbSrc = static function (array $a): ?string {
        $img = trim($a['image'] ?? '');
        if ($img === '' || !preg_match('/\.(webp|jpe?g|png|gif|avif|svg)$/i', $img)) {
          return null;
        }
        $rel = ltrim(str_replace(['/', '\\'], DIRECTORY_SEPARATOR, $img), DIRECTORY_SEPARATOR);
        $fs = dirname(__DIR__) . DIRECTORY_SEPARATOR . $rel;
        return is_file($fs) ? site_asset_href($img) : null;
      };

      $comMediaPaletteClass = static function (array $a) use ($comThumbSrc): string {
        if ($comThumbSrc($a)) {
          return '';
        }
        $n = hexdec(substr(md5($a['slug'] ?? 'x'), 0, 2)) % 4;
        return 'com-news-card__media--pal-' . $n;
      };
    ?>

    <div class="com-index-grid">
      <?php
        $visibleCount = 0;
        foreach ($articles as $i => $a):
          $isHidden = $categoriaActiva !== '' && $a['categorySlug'] !== $categoriaActiva;
          if (!$isHidden) {
            $visibleCount++;
          }
      ?>
        <?php
          $href = htmlspecialchars($a['slug'] . '/', ENT_QUOTES, 'UTF-8');
          $pal = $comMediaPaletteClass($a);
          $thumb = $comThumbSrc($a);
          $mediaClass = 'com-news-card__media' . ($pal !== '' ? ' ' . $pal : '');
        ?>
        <a href="<?= $href ?>" class="com-news-card reveal reveal--delay-<?= min($i + 1, 6) ?>" data-article-category="<?= htmlspecialchars($a['categorySlug'], ENT_QUOTES, 'UTF-8') ?>"<?= $isHidden ? ' hidden' : '' ?> aria-label="<?= htmlspecialchars($a['title'], ENT_QUOTES, 'UTF-8') ?>">
          <div class="<?= htmlspecialchars($mediaClass, ENT_QUOTES, 'UTF-8') ?>" aria-hidden="true">
            <?php if ($thumb): ?>
              <img src="<?= htmlspecialchars($thumb, ENT_QUOTES, 'UTF-8') ?>" alt="">
            <?php endif; ?>
          </div>
          <div class="com-news-card__body">
            <div class="com-news-card__meta-row">
              <span class="com-news-card__cat"><?= htmlspecialchars($a['category'], ENT_QUOTES, 'UTF-8') ?></span>
              <span class="com-news-card__date"><?= htmlspecialchars(articulo_format_date_es($a['date']), ENT_QUOTES, 'UTF-8') ?></span>
            </div>
            <h3 class="com-news-card__title"><?= htmlspecialchars($a['title'], ENT_QUOTES, 'UTF-8') ?></h3>
            <p class="com-news-card__excerpt"><?= htmlspecialchars($a['excerpt'], ENT_QUOTES, 'UTF-8') ?></p>
            <span class="com-news-card__readmore">Leer más →</span>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
    <p class="com-index-empty" data-article-empty<?= $visibleCount > 0 ? ' hidden' : '' ?>>No hay publicaciones en esta categoría.</p>
  </div>
</section>

<!-- Contacto -->
<section class="section">
  <div class="container">
    <div class="com-dept-grid reveal">
      <div>
        <span class="service-intro__tag">¿Tienes una consulta?</span>
        <h2 class="section-title">Contacto</h2>
        <p>Si necesitas información sobre nuestros servicios de limpieza corporativa y facility management, escríbenos y te responderemos a la brevedad.</p>
        <div class="com-dept-contacts">
          <div class="com-dept-line">
            <span class="com-dept-line__icon" aria-hidden="true">📧</span>
            <div>
              <strong>Correo electrónico</strong>
              <span class="link-primary">contacto@cleaned.pe</span>
            </div>
          </div>
          <div class="com-dept-line">
            <span class="com-dept-line__icon" aria-hidden="true">📞</span>
            <div>
              <strong>Teléfono</strong>
              <span>+51 960 415 741</span>
            </div>
          </div>
        </div>
      </div>
      <div class="com-media-box">
        <h3>Envíanos tu consulta</h3>
        <form novalidate>
          <div class="form-group">
            <label class="form-label">Nombre *</label>
            <input class="form-control" type="text" placeholder="Tu nombre" required />
          </div>
          <div class="form-group">
            <label class="form-label">Correo electrónico *</label>
            <input class="form-control" type="email" placeholder="correo@empresa.com" required />
          </div>
          <div class="form-group">
            <label class="form-label">Consulta *</label>
            <textarea class="form-control" rows="4" placeholder="Describe tu consulta..." required></textarea>
          </div>
          <button type="submit" class="btn btn--primary w-100">Enviar consulta →</button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>
