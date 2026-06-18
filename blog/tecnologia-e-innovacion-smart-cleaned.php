<?php
  $articleSlug = 'tecnologia-e-innovacion-smart-cleaned';
  require __DIR__ . '/../includes/blog-articulo-bootstrap.php';
?>
<?php include '../includes/header.php'; ?>

<section class="page-hero page-hero--cover page-hero--cover-has-media">
  <div class="page-hero__cover-bg" aria-hidden="true">
    <img src="<?= htmlspecialchars($heroCoverCss, ENT_QUOTES, 'UTF-8') ?>" alt="">
  </div>
  <div class="container">
    <div class="page-hero__breadcrumb">
      <a href="<?= $assetsPrefix ?>index.php">Inicio</a><span class="sep">›</span><a href="<?= $assetsPrefix ?>blog/">Blog</a><span class="sep">›</span><span>Tecnología e innovación</span>
    </div>
    <span class="page-hero__badge">⚙️ <?= htmlspecialchars($articleMeta['category'], ENT_QUOTES, 'UTF-8') ?></span>
    <h1 class="page-hero__title">Tecnología e innovación: Smart Cleaned para visibilidad de recursos</h1>
    <p class="page-hero__desc">Impulsamos una operación más transparente y medible con tecnología: control de asistencias, trazabilidad y mejores decisiones en tiempo real.</p>
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
      <div class="article-embed-wrap">
        <div class="article-video-frame">
          <video
            controls
            preload="metadata"
            playsinline
          >
            <source src="<?= $assetsPrefix ?>images/demo01.mp4" type="video/mp4">
            Tu navegador no soporta la reproducción de video.
          </video>
        </div>
      </div>

      <h2>Una operación más visible y medible</h2>
      <p>La innovación en servicios no se limita a “digitalizar” tareas: se trata de <strong>ganar visibilidad y control</strong> para tomar mejores decisiones operativas, con datos confiables y oportunos. Durante los últimos meses, hemos orientado esfuerzos a fortalecer nuestra gestión con herramientas que conecten la operación en campo con la supervisión y la experiencia del cliente.</p>

      <blockquote>
        <p>Cuando la operación se vuelve visible, la calidad deja de ser una percepción: se convierte en un estándar medible.</p>
      </blockquote>

      <h2>Smart Cleaned: control de asistencias y visibilidad de recursos</h2>
      <p>En ese camino, estamos desarrollando <strong>Smart Cleaned</strong>, un sistema de control de asistencias de personal que servirá para tener visibilidad de todos los recursos asignados a los clientes. El objetivo es simple: saber, con evidencia y trazabilidad, que cada puesto crítico está cubierto, que los turnos se cumplen y que cualquier contingencia se detecta a tiempo.</p>

      <h3>¿Qué habilita para el cliente?</h3>
      <p>Smart Cleaned permitirá consolidar información de asistencia y presencia operativa por sede, turno y equipo, facilitando la gestión diaria y mejorando la coordinación ante cambios o refuerzos. La visibilidad de recursos es un habilitador directo de calidad: cuando sabemos dónde están los equipos y cómo evoluciona la cobertura, se pueden priorizar tareas y responder más rápido.</p>

      <h3>Impacto en gestión, continuidad y costos</h3>
      <p>Para los responsables de operación, esto significa menos tiempo “persiguiendo información” y más tiempo gestionando: <strong>supervisión efectiva</strong>, control de incidencias y seguimiento de estándares. Para los clientes, significa transparencia: reportes claros, trazabilidad y un respaldo objetivo ante auditorías, reclamos o necesidades de ampliación del servicio.</p>
      <p>La innovación también impacta en costos: una mejor visibilidad reduce reprocesos, ayuda a prevenir horas extra innecesarias y permite planificar con precisión en escenarios de alta demanda.</p>

      <blockquote>
        <p>La tecnología debe ser un puente entre el servicio bien hecho y la confianza que el cliente necesita para operar sin interrupciones.</p>
      </blockquote>

      <h2>Hacia una operación conectada</h2>
      <p>Además, estos sistemas ayudan a fortalecer la cultura de seguridad: cuando la operación se gestiona con datos, es más fácil detectar patrones de riesgo y reforzar acciones preventivas.</p>
      <p>Smart Cleaned es parte de una visión más amplia: una operación conectada, con indicadores, evidencias y mejora continua, donde la calidad sea medible y sostenida.</p>
      <p>Seguiremos compartiendo avances de esta iniciativa, porque creemos que la tecnología debe aportar claridad, control y continuidad en cada operación.</p>

      <div class="article-actions">
        <a class="btn btn--primary" href="<?= $assetsPrefix ?>contacto/index.php">Solicitar una demo</a>
        <a class="btn btn--outline-dark" href="<?= $assetsPrefix ?>blog/">Volver al blog</a>
      </div>
    </article>
  </div>
</section>

<?php include '../includes/footer.php'; ?>
