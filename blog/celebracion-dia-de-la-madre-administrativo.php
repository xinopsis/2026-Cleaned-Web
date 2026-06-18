<?php
  $articleSlug = 'celebracion-dia-de-la-madre-administrativo';
  require __DIR__ . '/../includes/blog-articulo-bootstrap.php';
?>
<?php include '../includes/header.php'; ?>

<section class="page-hero page-hero--cover page-hero--cover-has-media">
  <div class="page-hero__cover-bg" aria-hidden="true">
    <img src="<?= htmlspecialchars($heroCoverCss, ENT_QUOTES, 'UTF-8') ?>" alt="">
  </div>
  <div class="container">
    <div class="page-hero__breadcrumb">
      <a href="<?= $assetsPrefix ?>index.php">Inicio</a><span class="sep">›</span><a href="<?= $assetsPrefix ?>blog/">Blog</a><span class="sep">›</span><span>Día de la Madre</span>
    </div>
    <span class="page-hero__badge">💐 <?= htmlspecialchars($articleMeta['category'], ENT_QUOTES, 'UTF-8') ?></span>
    <h1 class="page-hero__title">Día de la Madre: un desayuno para celebrar al equipo administrativo</h1>
    <p class="page-hero__desc">En las oficinas de San Isidro compartimos un desayuno con las colaboradoras del área administrativa, reconociendo su aporte diario a la operación de Cleaned.</p>
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
      <p>En Cleaned creemos que el buen servicio empieza por las personas que sostienen cada proceso detrás de escena. Por eso, con motivo del Día de la Madre, reunimos a las colaboradoras del área administrativa en un desayuno para compartir, agradecer y celebrar juntas.</p>

      <p>La actividad se realizó en nuestras oficinas de San Isidro, un espacio que concentra gran parte del trabajo de coordinación, atención a clientes, gestión documental y soporte a las operaciones en campo. Fue una mañana sencilla y cercana, pensada para pausar la rutina y dedicar un momento especial a quienes, día a día, hacen posible que todo funcione con orden y seguimiento.</p>

      <p>El desayuno fue una oportunidad para conversar, reír y reconocer el rol de cada una en la organización. Desde la planificación y el control administrativo hasta la atención interna y el apoyo a los equipos operativos, su trabajo aporta continuidad, claridad y confianza a toda la empresa.</p>

      <p>Celebrar el Día de la Madre también es reconocer el equilibrio entre la vida personal y profesional. Muchas de nuestras colaboradoras concilian ambas dimensiones con dedicación y responsabilidad; este encuentro fue una forma de decirles que su esfuerzo se ve y se valora.</p>

      <figure class="article-figure">
        <img src="<?= $assetsPrefix ?>images/articles/celebracion-dia-de-la-madre-administrativo.webp" alt="Detalle del desayuno y momento de convivencia del equipo administrativo de Cleaned" loading="lazy" decoding="async">
        <figcaption>Camaradería en nuestra sede de San Isidro posterior al día de la Madre 2026.</figcaption>
      </figure>

      <p>En Cleaned seguimos fortaleciendo una cultura de respeto, cercanía y trabajo en equipo. Iniciativas como esta refuerzan el sentido de pertenencia y recuerdan que, detrás de cada servicio bien ejecutado, hay un grupo de personas comprometidas con hacer las cosas bien.</p>

      <p>A todas las madres y referentes de nuestro equipo administrativo: gracias por su entrega, su calidez y su profesionalismo. ¡Feliz Día de la Madre!</p>

      <div class="article-actions">
        <a class="btn btn--primary" href="<?= $assetsPrefix ?>contacto/index.php">Solicitar información</a>
        <a class="btn btn--outline-dark" href="<?= $assetsPrefix ?>blog/">Volver al blog</a>
      </div>
    </article>
  </div>
</section>

<?php include '../includes/footer.php'; ?>
