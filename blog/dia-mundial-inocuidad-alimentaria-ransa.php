<?php
  $articleSlug = 'dia-mundial-inocuidad-alimentaria-ransa';
  require __DIR__ . '/../includes/blog-articulo-bootstrap.php';
?>
<?php include '../includes/header.php'; ?>

<section class="page-hero page-hero--cover page-hero--cover-has-media">
  <div class="page-hero__cover-bg" aria-hidden="true">
    <img src="<?= htmlspecialchars($heroCoverCss, ENT_QUOTES, 'UTF-8') ?>" alt="">
  </div>
  <div class="container">
    <div class="page-hero__breadcrumb">
      <a href="<?= $assetsPrefix ?>index.php">Inicio</a><span class="sep">›</span><a href="<?= $assetsPrefix ?>blog/">Blog</a><span class="sep">›</span><span>Inocuidad alimentaria</span>
    </div>
    <span class="page-hero__badge">🛡️ <?= htmlspecialchars($articleMeta['category'], ENT_QUOTES, 'UTF-8') ?></span>
    <h1 class="page-hero__title">Día Mundial de la Inocuidad Alimentaria: feria en Ransa con Cleaned Services</h1>
    <p class="page-hero__desc">Ransa y Cleaned Services reunieron a colaboradores y proveedores en una jornada de prevención, seguridad biológica y cultura de inocuidad en la cadena de suministro.</p>
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

      <p>El pasado 7 de junio, en conmemoración del Día Mundial de la Inocuidad Alimentaria, la empresa Ransa llevó a cabo una feria integral en sus instalaciones con el objetivo de promover una sólida cultura de prevención y seguridad biológica. Este evento anual, que se ha consolidado como un espacio clave dentro del sector logístico y de distribución, convocó de manera masiva tanto a sus colaboradores internos como a sus principales proveedores y aliados estratégicos. Bajo la premisa de que la seguridad de los alimentos es una responsabilidad compartida, la jornada se estructuró como una plataforma para reforzar los estándares técnicos y operativos que garantizan la protección de la salud pública en cada etapa de la cadena de suministro.</p>

      <p>Como especialista clave en sanidad y soluciones de limpieza industrial, Cleaned Services estuvo presente con un módulo interactivo especialmente diseñado para la ocasión, destacando el lema institucional <strong>«Inocuidad es cuidar lo que importa»</strong>. La feria se desarrolló en un ambiente dinámico y de aprendizaje colaborativo, donde los participantes pudieron recorrer diversos stands informativos y técnicos. El evento combinó de manera exitosa la rigurosidad de los protocolos normativos con un enfoque lúdico y participativo, permitiendo que conceptos complejos de microbiología y control de contaminación fueran accesibles, entendibles y aplicables para todo el personal asistente.</p>

      <figure class="article-figure">
        <img
          src="<?= $assetsPrefix ?>images/articles/ransa04.jpeg"
          alt="Personaje caracterizado y colaboradora de Cleaned Services en el stand de la feria de inocuidad en Ransa"
          loading="lazy"
          decoding="async"
        >
        <figcaption>Módulo interactivo de Cleaned Services en la feria de inocuidad de Ransa.</figcaption>
      </figure>

      <p>Complementando estas actividades, se desarrolló una impactante dinámica utilizando pintura roja sobre guantes para simular de forma visual y gráfica la propagación y dispersión microbiológica que ocurre ante un lavado de manos deficiente o incorrecto. Los participantes mostraron con entusiasmo los resultados de la prueba, comprendiendo la importancia crítica de seguir los pasos de desinfección avalados por los estándares internacionales. Para sumar energía y conectar de manera cercana con el público, el módulo de Cleaned Services contó además con la participación de un carismático personaje caracterizado, quien se encargó de guiar las trivias, entregar material educativo y asegurar una experiencia memorable para cada uno de los proveedores y clientes que se acercaron al stand.</p>

      <div class="article-media-duo">
        <figure class="article-figure">
          <img
            src="<?= $assetsPrefix ?>images/articles/ransa03.jpeg"
            alt="Participantes muestran las manos con pintura roja tras la dinámica de lavado de manos"
            loading="lazy"
            decoding="async"
          >
          <figcaption>Simulación visual de la propagación microbiológica ante un lavado de manos deficiente.</figcaption>
        </figure>

        <figure class="article-figure">
          <img
            src="<?= $assetsPrefix ?>images/articles/ransa02.jpeg"
            alt="Vista general del stand de Cleaned Services en la feria de inocuidad de Ransa"
            loading="lazy"
            decoding="async"
          >
          <figcaption>Stand de Cleaned Services con el lema «Inocuidad es cuidar lo que importa».</figcaption>
        </figure>
      </div>

      <p>La participación en este evento reafirma la alianza estratégica entre Ransa y Cleaned Services, consolidando su visión compartida de mantener operaciones con cero riesgos y la más alta calidad del mercado. </p>

      <div class="article-actions">
        <a class="btn btn--primary" href="<?= $assetsPrefix ?>contacto/index.php">Solicitar información</a>
        <a class="btn btn--outline-dark" href="<?= $assetsPrefix ?>blog/">Volver al blog</a>
      </div>
    </article>
  </div>
</section>

<?php include '../includes/footer.php'; ?>
