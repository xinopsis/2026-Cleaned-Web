<?php $pageTitle = 'Sectores | Cleaned Services'; ?>
<?php $pageDescription = 'Sectores que atendemos: Industria, Banca y Seguros, Retail, Educación y Transporte. Cleaned Services.'; ?>
<?php include '../includes/header.php'; ?>


<section class="page-hero page-hero--photo page-hero--photo--sectores" aria-label="Sectores Cleaned">
  <div class="container">
    <div class="page-hero__breadcrumb">
      <a href="../index.php">Inicio</a><span class="sep">›</span><span>Sectores</span>
    </div>
    <span class="page-hero__badge">🏭 Sectores</span>
    <h1 class="page-hero__title">Soluciones adaptadas a cada sector</h1>
    <p class="page-hero__desc">Adaptamos nuestros servicios a las particularidades operativas y regulatorias de cada industria. Estos son los sectores en los que nos especializamos.</p>
  </div>
</section>

<section class="sectors section section--grey" aria-labelledby="sectors-hub-title">
  <div class="container">
    <h2 class="section-title section-title--center reveal" id="sectors-hub-title">Sectores que atendemos</h2>
    <p class="section-subtitle section-subtitle--center reveal reveal--delay-1">
      Elija un sector para conocer nuestro enfoque y servicios asociados.
    </p>
    <div class="sectors__grid">
      <a href="industria.php" class="sector-card reveal reveal--delay-1">
        <span class="sector-card__icon" aria-hidden="true">🏭</span>
        <span class="sector-card__name">Industria</span>
      </a>
      <a href="banca-seguros.php" class="sector-card reveal reveal--delay-2">
        <span class="sector-card__icon" aria-hidden="true">🏦</span>
        <span class="sector-card__name">Banca y Seguros</span>
      </a>
      <a href="retail.php" class="sector-card reveal reveal--delay-3">
        <span class="sector-card__icon" aria-hidden="true">🛒</span>
        <span class="sector-card__name">Retail</span>
      </a>
      <a href="educacion.php" class="sector-card reveal reveal--delay-4">
        <span class="sector-card__icon" aria-hidden="true">🎓</span>
        <span class="sector-card__name">Educación</span>
      </a>
      <a href="transporte.php" class="sector-card reveal reveal--delay-5">
        <span class="sector-card__icon" aria-hidden="true">✈️</span>
        <span class="sector-card__name">Transporte</span>
      </a>
    </div>
  </div>
</section>

<section class="service-cta reveal">
  <div class="container">
    <h2>¿Necesita una solución a medida?</h2>
    <p>Cuéntenos su contexto y le proponemos un plan de servicios alineado a su operación.</p>
    <a href="../contacto/index.php" class="btn btn--white btn--lg">Contactar con Cleaned</a>
  </div>
</section>

<?php include '../includes/footer.php'; ?>
