<?php
  $articleSlug = 'lanzamiento-cleaned-premium';
  require __DIR__ . '/../includes/blog-articulo-bootstrap.php';
?>
<?php include '../includes/header.php'; ?>

<section class="page-hero page-hero--cover page-hero--cover-has-media">
  <div class="page-hero__cover-bg" aria-hidden="true">
    <img src="<?= htmlspecialchars($heroCoverCss, ENT_QUOTES, 'UTF-8') ?>" alt="">
  </div>
  <div class="container">
    <div class="page-hero__breadcrumb">
      <a href="<?= $assetsPrefix ?>index.php">Inicio</a><span class="sep">›</span><a href="<?= $assetsPrefix ?>blog/">Blog</a><span class="sep">›</span><span>Cleaned Premium</span>
    </div>
    <span class="page-hero__badge">✨ <?= htmlspecialchars($articleMeta['category'], ENT_QUOTES, 'UTF-8') ?></span>
    <h1 class="page-hero__title">Cleaned Premium: la excelencia de Cleaned Services asciende a un nuevo nivel de exclusividad</h1>
    <p class="page-hero__desc">Una nueva división creada para personas, oficinas y espacios que no aceptan lo ordinario.</p>
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

      <p>Cleaned Services, compañía peruana de referencia en facility management y limpieza corporativa, anuncia el lanzamiento de <strong>Cleaned Premium</strong>: una división de atención de alto nivel, creada exclusivamente para oficinas ejecutivas, espacios de representación, residencias exclusivas y entornos donde cada detalle es una carta de presentación.</p>

      <p>Cleaned Premium no nace desde cero. Nace desde una trayectoria consolidada de excelencia operativa, certificaciones internacionales (ISO 9001, 14001 y 45001) y miles de espacios atendidos, que hoy se traducen en un servicio pensado para quienes exigen algo más que limpieza: discreción absoluta, protocolos a medida y una experiencia de confianza integral.</p>

      <h2>Un servicio pensado para quienes esperan más</h2>
      <p>La propuesta de Cleaned Premium combina personal rigurosamente seleccionado y capacitado, protocolos especializados de intervención y una cultura de servicio orientada a la excelencia absoluta. Cada visita se ejecuta bajo estrictos controles de calidad, priorizando el respeto por el espacio, la privacidad de las personas y el cuidado de materiales delicados o de alto valor.</p>

      <h2>Servicios diseñados a la medida de lo exclusivo</h2>
      <ul>
        <li>Atención especializada para oficinas ejecutivas y directorios corporativos</li>
        <li>Preparación y acondicionamiento de espacios para reuniones VIP</li>
        <li>Limpieza detallada de acabados premium, mobiliario de lujo y superficies delicadas</li>
        <li>Servicios personalizados para clientes particulares, empresarios y altos ejecutivos</li>
        <li>Atención programada o bajo requerimientos especiales, con total flexibilidad</li>
      </ul>

      <h2>Personal que representa la marca</h2>
      <p>El equipo humano es uno de los pilares de Cleaned Premium. Cada colaborador recibe formación continua en protocolos de atención, presentación personal, manejo de espacios exclusivos y técnicas avanzadas de limpieza profesional. Imagen impecable, puntualidad, discreción y cortesía no son un valor agregado: son el estándar mínimo de entrada.</p>

      <h2>Calidad visible en cada detalle</h2>
      <p>Desde una residencia familiar hasta una oficina en los principales centros empresariales de Lima, Cleaned Premium se posiciona como aliado estratégico de quienes entienden que un ambiente impecable comunica profesionalismo, bienestar y confianza. La división incorpora supervisión permanente, controles de cumplimiento y estándares operativos que garantizan resultados consistentes, servicio tras servicio.</p>

      <blockquote>
        <p>La excelencia se nota en los detalles. Porque los espacios más importantes merecen un cuidado excepcional.</p>
      </blockquote>

      <h2>Una nueva categoría de servicio</h2>
      <p>Con este lanzamiento, Cleaned Services fortalece su posicionamiento en el mercado y amplía su portafolio hacia un segmento que demanda soluciones más sofisticadas, personalizadas y orientadas a la excelencia. Cleaned Premium es la evolución natural de una compañía que entiende que los espacios más importantes merecen un nivel superior de cuidado.</p>

      <h2>Acerca de Cleaned Premium</h2>
      <p>Cleaned Premium es la división de alta gama de Cleaned Services, especializada en limpieza, mantenimiento y atención personalizada para residencias exclusivas, oficinas ejecutivas y ambientes VIP. Su propuesta combina personal de excelencia, protocolos de calidad superiores y una experiencia centrada en la confianza, la discreción y el detalle.</p>

      <div class="article-actions">
        <a class="btn btn--primary" href="https://premium.cleaned.pe" target="_blank" rel="noopener noreferrer">Conocer Cleaned Premium</a>
        <a class="btn btn--outline-dark" href="<?= $assetsPrefix ?>contacto/index.php">Solicitar información</a>
        <a class="btn btn--outline-dark" href="<?= $assetsPrefix ?>blog/">Volver al blog</a>
      </div>
    </article>
  </div>
</section>

<?php include '../includes/footer.php'; ?>
