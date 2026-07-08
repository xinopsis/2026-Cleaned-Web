<?php $pageTitle = 'Saneamiento Ambiental | Cleaned Services'; ?>
<?php $pageDescription = 'Servicios de saneamiento ambiental en Perú. Fumigación, control de plagas, desinfección, desratización y control de legionela. Cumplimiento normativo garantizado.'; ?>
<?php $pageJsonLd = <<<'JSONLD'
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Saneamiento Ambiental",
  "serviceType": "Saneamiento ambiental y control de plagas",
  "provider": { "@id": "https://www.cleaned.pe/#organization" },
  "areaServed": { "@type": "Country", "name": "Perú" },
  "description": "Saneamiento ambiental en Perú: fumigación, desinfección, control de plagas y manejo de residuos peligrosos, con productos biodegradables certificados y personal habilitado por DIGESA.",
  "url": "https://www.cleaned.pe/servicios/medio-ambiente.php"
}
JSONLD; ?>
<?php include '../includes/header.php'; ?>


<!-- HERO INTERIOR -->
<section class="page-hero page-hero--photo page-hero--photo--medio-ambiente" aria-label="Saneamiento Ambiental">
  <div class="container">
    <div class="page-hero__breadcrumb">
      <a href="../index.php">Inicio</a>
      <span class="sep">›</span>
      <a href="index.php">Servicios</a>
      <span class="sep">›</span>
      <span>Saneamiento Ambiental</span>
    </div>
    <span class="page-hero__badge">🌿 Saneamiento Ambiental</span>
    <h1 class="page-hero__title">Protección sanitaria para espacios seguros</h1>
    <p class="page-hero__desc">Protegemos la salud de sus instalaciones mediante servicios especializados de saneamiento ambiental con cumplimiento normativo garantizado.</p>
    <div class="page-hero__actions">
      <a href="../contacto/index.php" class="btn btn--primary btn--lg">Solicita Información</a>
      <a href="#tipos" class="btn btn--outline btn--lg">Ver Tipos de Servicio</a>
    </div>
  </div>
</section>

<!-- INTRO -->
<section class="service-intro section">
  <div class="container">
    <div class="service-intro__grid">
      <div class="service-intro__visual reveal reveal--left">
        <img src="../images/ambiental.png" alt="Saneamiento Ambiental">
      </div>
      <div class="service-intro__body reveal reveal--right">
        <span class="service-intro__tag">Control sanitario especializado</span>
        <h2 class="section-title">Ambientes saludables, libre de agentes patógenos</h2>
        <p>CLEANED SERVICES protege la salud de sus instalaciones mediante servicios especializados de saneamiento ambiental, cumpliendo con todas las normativas sanitarias vigentes en el Perú.</p>
        <p>Contamos con personal certificado, productos homologados y metodologías validadas para garantizar entornos seguros para su personal, clientes y visitantes.</p>
        <div class="feature-list">
          <div class="feature-list__item"><span>Personal con certificación sanitaria</span></div>
          <div class="feature-list__item"><span>Productos homologados por DIGESA</span></div>
          <div class="feature-list__item"><span>Cumplimiento normativo garantizado</span></div>
          <div class="feature-list__item"><span>Certificados y actas de servicio</span></div>
          <div class="feature-list__item"><span>Planes de control continuo</span></div>
          <div class="feature-list__item"><span>Atención de emergencias sanitarias</span></div>
        </div>
        <a href="../contacto/index.php" class="btn btn--primary btn--mt-lg">Solicitar Presupuesto</a>
      </div>
    </div>
  </div>
</section>

<!-- TIPOS DE SERVICIO -->
<section class="section section--grey" id="tipos">
  <div class="container">
    <div class="text-center reveal">
      <span class="service-intro__tag">Especialización sectorial</span>
      <h2 class="section-title section-title--center">Tipos de Saneamiento Ambiental</h2>
      <p class="section-subtitle section-subtitle--center">Soluciones específicas para cada riesgo sanitario y tipo de instalación.</p>
    </div>
    <div class="service-types__grid">
      <div class="service-type-card reveal reveal--delay-1">
        <span class="service-type-card__icon">🦟</span>
        <h3 class="service-type-card__title">Fumigación y Control de Insectos</h3>
        <p class="service-type-card__desc">Tratamientos preventivos y curativos contra moscas, cucarachas, mosquitos y otros insectos. Métodos seguros y eficaces con mínimo impacto ambiental.</p>
      </div>
      <div class="service-type-card reveal reveal--delay-2">
        <span class="service-type-card__icon">🐀</span>
        <h3 class="service-type-card__title">Desratización y Control de Roedores</h3>
        <p class="service-type-card__desc">Eliminación y control de ratas y ratones con técnicas de captura y barreras preventivas. Planes de seguimiento para garantizar la ausencia de reinfestación.</p>
      </div>
      <div class="service-type-card reveal reveal--delay-3">
        <span class="service-type-card__icon">🧪</span>
        <h3 class="service-type-card__title">Desinfección y Sanitización</h3>
        <p class="service-type-card__desc">Tratamientos de desinfección de superficies, equipos y ambientes con productos virucidas y bactericidas certificados. Incluye nebulización y desinfección de aire.</p>
      </div>
      <div class="service-type-card reveal reveal--delay-4">
        <span class="service-type-card__icon">💧</span>
        <h3 class="service-type-card__title">Control de Legionela</h3>
        <p class="service-type-card__desc">Análisis, tratamiento y control de sistemas de agua para prevenir el desarrollo de legionela. Cumplimiento del protocolo MINSA y normativas vigentes.</p>
      </div>
      <div class="service-type-card reveal reveal--delay-5">
        <span class="service-type-card__icon">♻️</span>
        <h3 class="service-type-card__title">Gestión de Residuos Sólidos</h3>
        <p class="service-type-card__desc">Recolección, clasificación y disposición adecuada de residuos sólidos peligrosos y no peligrosos. Gestión conforme a la normativa ambiental peruana.</p>
      </div>
      <div class="service-type-card reveal reveal--delay-6">
        <span class="service-type-card__icon">🚰</span>
        <h3 class="service-type-card__title">Limpieza de Tanques y Reservorios</h3>
        <p class="service-type-card__desc">Limpieza y desinfección de cisternas, tanques elevados y reservorios de agua para garantizar la calidad del agua y el cumplimiento sanitario.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="service-cta reveal">
  <div class="container">
    <h2>¿Necesitas proteger sanitariamente tus instalaciones?</h2>
    <p>Contacta con nuestros expertos y recibe una propuesta personalizada para tu empresa sin compromiso.</p>
    <a href="../contacto/index.php" class="btn btn--white btn--lg">Solicitar Información</a>
  </div>
</section>

<!-- SERVICIOS RELACIONADOS -->
<section class="related-services">
  <div class="container">
    <h2 class="section-title reveal">Otros Servicios</h2>
    <div class="related-services__grid">
      <a href="limpieza.php" class="service-card reveal reveal--delay-1">
        <img src="../images/edificio-isometrico.png" alt="Limpieza Corporativa" class="service-card__img" loading="lazy" decoding="async">
        <h3 class="service-card__title">Limpieza Corporativa</h3>
        <p class="service-card__desc">Limpieza profesional para oficinas, industria y espacios corporativos.</p>
        <span class="service-card__link">Ver detalles →</span>
      </a>
      <a href="ingenieria-mantenimiento.php" class="service-card reveal reveal--delay-2">
        <img src="../images/facility.png" alt="Facility Management" class="service-card__img" loading="lazy" decoding="async">
        <h3 class="service-card__title">Facility Management</h3>
        <p class="service-card__desc">Gestión integral de instalaciones para maximizar su rendimiento operativo.</p>
        <span class="service-card__link">Ver detalles →</span>
      </a>
      <a href="auxiliares.php" class="service-card reveal reveal--delay-3">
        <img src="../images/servicios_generales.png" alt="Servicios Generales" class="service-card__img" loading="lazy" decoding="async">
        <h3 class="service-card__title">Servicios Generales</h3>
        <p class="service-card__desc">Soporte operativo integral para que tu organización funcione sin fricciones.</p>
        <span class="service-card__link">Ver detalles →</span>
      </a>
      <a href="aeroportuarios.php" class="service-card reveal reveal--delay-4">
        <img src="../images/novo_avion.png" alt="Servicios Aeroportuarios" class="service-card__img" loading="lazy" decoding="async">
        <h3 class="service-card__title">Servicios Aeroportuarios</h3>
        <p class="service-card__desc">Operaciones especializadas para terminales, aeronaves y zonas aeroportuarias.</p>
        <span class="service-card__link">Ver detalles →</span>
      </a>
    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>
