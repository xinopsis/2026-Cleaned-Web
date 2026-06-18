<?php
  $articleSlug = 'renovacion-de-uniformes';
  require __DIR__ . '/../includes/blog-articulo-bootstrap.php';
?>
<?php include '../includes/header.php'; ?>

<section class="page-hero page-hero--cover page-hero--cover-has-media">
  <div class="page-hero__cover-bg" aria-hidden="true">
    <img src="<?= htmlspecialchars($heroCoverCss, ENT_QUOTES, 'UTF-8') ?>" alt="">
  </div>
  <div class="container">
    <div class="page-hero__breadcrumb">
      <a href="<?= $assetsPrefix ?>index.php">Inicio</a><span class="sep">›</span><a href="<?= $assetsPrefix ?>blog/">Blog</a><span class="sep">›</span><span>Renovación de uniformes</span>
    </div>
    <span class="page-hero__badge">👔 <?= htmlspecialchars($articleMeta['category'], ENT_QUOTES, 'UTF-8') ?></span>
    <h1 class="page-hero__title">Renovación de uniformes: identidad y presencia en cada operación</h1>
    <p class="page-hero__desc">Actualizamos la indumentaria del personal operativo para proyectar orden, confianza y consistencia de marca en cada sede donde trabajamos.</p>
    <div class="page-hero__article-meta">
      <span>📅 <?= htmlspecialchars($articleMeta['dateDisplay'], ENT_QUOTES, 'UTF-8') ?></span>
      <span class="sep" aria-hidden="true">|</span>
      <span>Categoría: <?= htmlspecialchars($articleMeta['category'], ENT_QUOTES, 'UTF-8') ?></span>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <article class="article-content reveal">
      <p>En Cleaned, la calidad no solo se ejecuta: también se comunica. Por eso iniciamos la renovación de uniformes para nuestro personal operativo, con un diseño moderno y alineado a nuestra identidad.</p>

      <p>En las sedes de nuestros clientes, cada detalle suma a la experiencia del servicio. Un uniforme impecable transmite orden, profesionalismo y la seguridad de que hay un equipo preparado detrás.</p>

      <figure class="article-figure">
        <img src="<?= $assetsPrefix ?>images/articles/foto-uniformes-01.webp" alt="Personal operativo con nuevos uniformes Cleaned en operación" loading="lazy" decoding="async">
        <figcaption>Espacio para foto 1: presencia y presentación en campo.</figcaption>
      </figure>

      <p>La renovación está pensada para acompañar el ritmo real de las operaciones: mayor comodidad, mejor ajuste y materiales que se mantienen bien durante la jornada. Así, la presentación se sostiene desde el primer turno hasta el último.</p>

      <p>Cuando una empresa cliente ve a nuestro equipo, reconoce una señal clara de estándar. Esa consistencia fortalece la confianza y crea una percepción de servicio que se nota, incluso antes de evaluar resultados.</p>

      <figure class="article-figure">
        <img src="<?= $assetsPrefix ?>images/articles/foto-uniformes-02.webp" alt="Detalle de uniformes: bordado y colores corporativos Cleaned" loading="lazy" decoding="async">
        <figcaption>Espacio para foto 2: detalles de identidad (color, bordado, acabados).</figcaption>
      </figure>

      <p>El uniforme también cumple un rol de identidad interna: refuerza pertenencia, orden y cultura de servicio. Es una forma concreta de decir “somos un solo equipo”, incluso en múltiples ubicaciones.</p>

      <p>Además, esta renovación facilita la gestión en campo: identificación rápida del personal, coherencia frente a visitas y auditorías, y una imagen uniforme en distintos entornos. Todo esto se traduce en control, claridad y tranquilidad para el cliente.</p>
  
      <p>La identidad de Cleaned se construye con hechos, pero también con presencia. Con estos nuevos uniformes, reforzamos el mensaje de una operación confiable, cuidada y lista para representar a nuestros clientes con orgullo.</p>

      <div class="article-actions">
        <a class="btn btn--primary" href="<?= $assetsPrefix ?>contacto/index.php">Solicitar información</a>
        <a class="btn btn--outline-dark" href="<?= $assetsPrefix ?>blog/">Volver al blog</a>
      </div>
    </article>
  </div>
</section>

<?php include '../includes/footer.php'; ?>

