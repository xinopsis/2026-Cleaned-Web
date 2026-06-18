<?php
  $articleSlug = 'cumplimiento-normativo';
  require __DIR__ . '/../includes/blog-articulo-bootstrap.php';
?>
<?php include '../includes/header.php'; ?>

<section class="page-hero page-hero--cover page-hero--cover-has-media">
  <div class="page-hero__cover-bg" aria-hidden="true">
    <img src="<?= htmlspecialchars($heroCoverCss, ENT_QUOTES, 'UTF-8') ?>" alt="">
  </div>
  <div class="container">
    <div class="page-hero__breadcrumb">
      <a href="<?= $assetsPrefix ?>index.php">Inicio</a><span class="sep">›</span><a href="<?= $assetsPrefix ?>blog/">Blog</a><span class="sep">›</span><span>Cumplimiento normativo</span>
    </div>
    <span class="page-hero__badge">✅ <?= htmlspecialchars($articleMeta['category'], ENT_QUOTES, 'UTF-8') ?></span>
    <h1 class="page-hero__title">Cumplimiento normativo: operar con seguridad y trazabilidad</h1>
    <p class="page-hero__desc">Alineamos procesos a los requisitos del cliente y del entorno regulatorio, con control documental, formación y auditorías internas orientadas a prevención.</p>
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
      <h2>Cumplimiento como sistema, no como trámite</h2>
      <p>El cumplimiento normativo no es un “checklist” de inicio; es un sistema continuo que protege a las personas, al cliente y a la operación frente a riesgos legales, reputacionales y de seguridad.</p>
      <p>En Cleaned, iniciamos cada servicio con un levantamiento de requisitos: políticas internas del cliente, normas del sector, controles de acceso, lineamientos SSOMA y estándares de calidad que deben cumplirse en campo.</p>

      <blockquote>
        <p>La norma “existe” cuando se ejecuta, no cuando se archiva.</p>
      </blockquote>

      <h2>Procedimientos, control documental y formación</h2>
      <p>Ese levantamiento se convierte en procedimientos operativos: qué se hace, cómo se hace, con qué equipos, con qué productos y bajo qué medidas de seguridad, para que la ejecución sea consistente y auditable.</p>
      <p>El control documental es clave: formatos de inspección, registros de capacitación, reportes de incidentes, evidencias cuando aplica y trazabilidad de acciones correctivas.</p>
      <p>La capacitación del personal se enfoca en riesgos reales del puesto: uso de EPP, manipulación segura de químicos, trabajo en alturas cuando corresponde y protocolos específicos del entorno del cliente.</p>

      <h3>Supervisión y auditorías internas</h3>
      <p>La supervisión en campo valida la aplicación de procedimientos y corrige desviaciones con rapidez, evitando que un desvío pequeño se convierta en un evento de mayor impacto.</p>
      <p>Implementamos rutinas de inspección y auditorías internas para verificar cumplimiento de estándares y detectar oportunidades de mejora, con un enfoque preventivo.</p>

      <h2>Trazabilidad y continuidad operativa</h2>
      <p>Cuando hay hallazgos, definimos planes de acción con responsables y fechas. La trazabilidad permite demostrar cierre efectivo y evitar recurrencias.</p>
      <p>En entornos con alta exigencia (salud, industria, transporte), trabajamos con controles reforzados: segregación de residuos, señalización, orden y limpieza, y protocolos de higiene específicos.</p>
      <p>El cumplimiento también se conecta con continuidad operativa: procedimientos claros reducen incidentes, minimizan detenciones y mantienen el servicio estable incluso ante contingencias.</p>

      <h3>Confianza y menor exposición</h3>
      <p>Para el cliente, esto se traduce en confianza: saber que el servicio se presta con disciplina, seguridad y evidencia, facilitando auditorías y reduciendo exposición.</p>
      <p>Operar con cumplimiento es operar mejor: <strong>más seguridad</strong>, más control y menos sorpresas, con una cultura enfocada en hacer las cosas bien desde el primer día.</p>

      <div class="article-actions">
        <a class="btn btn--primary" href="<?= $assetsPrefix ?>contacto/index.php">Hablar con un especialista</a>
        <a class="btn btn--outline-dark" href="<?= $assetsPrefix ?>blog/">Volver al blog</a>
      </div>
    </article>
  </div>
</section>

<?php include '../includes/footer.php'; ?>
