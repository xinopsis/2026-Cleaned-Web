<?php $pageTitle = 'Servicios Generales | Cleaned Services'; ?>
<?php $pageDescription = 'Servicios generales y de soporte para empresas en Perú. Mensajería, recepción, atención al cliente, gestión documental y más. Soluciones operativas a medida.'; ?>
<?php $pageJsonLd = <<<'JSONLD'
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Servicios Generales",
  "serviceType": "Servicios generales y auxiliares para empresas",
  "provider": { "@id": "https://www.cleaned.pe/#organization" },
  "areaServed": { "@type": "Country", "name": "Perú" },
  "description": "Servicios generales y de soporte para empresas en Perú: mensajería, recepción, atención al cliente y gestión documental, con personal capacitado y protocolos SSOMA.",
  "url": "https://www.cleaned.pe/servicios/auxiliares.php"
}
JSONLD; ?>
<?php include '../includes/header.php'; ?>


<!-- HERO INTERIOR -->
<section class="page-hero page-hero--photo page-hero--photo--servicios-auxiliares" aria-label="Servicios Generales">
  <div class="container">
    <div class="page-hero__breadcrumb">
      <a href="../index.php">Inicio</a>
      <span class="sep">›</span>
      <a href="index.php">Servicios</a>
      <span class="sep">›</span>
      <span>Servicios Generales</span>
    </div>
    <span class="page-hero__badge">🤝 Servicios Generales</span>
    <h1 class="page-hero__title">Soporte operativo integral para tu empresa</h1>
    <p class="page-hero__desc">Proveemos el personal auxiliar y los servicios de soporte que permiten a su organización concentrarse en su core business con total tranquilidad.</p>
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
        <img src="../images/servicios_generales.png" alt="Servicios Generales">
      </div>
      <div class="service-intro__body reveal reveal--right">
        <span class="service-intro__tag">Soluciones a medida</span>
        <h2 class="section-title">Los servicios de soporte que tu organización necesita</h2>
        <p>CLEANED SERVICES provee el personal auxiliar y los servicios de soporte que permiten a su organización concentrarse en su core business, mientras nosotros nos encargamos de las operaciones de respaldo.</p>
        <p>Nuestros equipos están formados, uniformados y supervisados para representar con excelencia la imagen de su empresa ante clientes y colaboradores.</p>
        <div class="feature-list">
          <div class="feature-list__item"><span>Personal seleccionado y capacitado</span></div>
          <div class="feature-list__item"><span>Supervisión continua de operaciones</span></div>
          <div class="feature-list__item"><span>Uniformes e imagen corporativa</span></div>
          <div class="feature-list__item"><span>Cobertura de ausencias sin interrupciones</span></div>
          <div class="feature-list__item"><span>Flexibilidad horaria y multitarea</span></div>
          <div class="feature-list__item"><span>Reporte mensual de gestión</span></div>
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
      <h2 class="section-title section-title--center">Tipos de Servicios Generales</h2>
      <p class="section-subtitle section-subtitle--center">Soluciones específicas para cada necesidad operativa de su empresa.</p>
    </div>
    <div class="service-types__grid">
      <div class="service-type-card reveal reveal--delay-1">
        <span class="service-type-card__icon">🧑‍💼</span>
        <h3 class="service-type-card__title">Recepción y Atención al Cliente</h3>
        <p class="service-type-card__desc">Personal de recepción profesional para la atención de visitantes, gestión de llamadas y representación de la imagen corporativa de su empresa.</p>
      </div>
      <div class="service-type-card reveal reveal--delay-2">
        <span class="service-type-card__icon">📦</span>
        <h3 class="service-type-card__title">Mensajería y Courier Interno</h3>
        <p class="service-type-card__desc">Distribución interna y externa de correspondencia, paquetería y documentos con trazabilidad y confirmación de entrega en tiempo real.</p>
      </div>
      <div class="service-type-card reveal reveal--delay-3">
        <span class="service-type-card__icon">📁</span>
        <h3 class="service-type-card__title">Gestión Documental y Archivo</h3>
        <p class="service-type-card__desc">Organización, clasificación, digitalización y custodia de documentos e historiales. Gestión segura del archivo físico y electrónico de la empresa.</p>
      </div>
      <div class="service-type-card reveal reveal--delay-4">
        <span class="service-type-card__icon">💼</span>
        <h3 class="service-type-card__title">Apoyo Administrativo y Back-office</h3>
        <p class="service-type-card__desc">Soporte en tareas administrativas, tramitaciones, gestión de proveedores y procesos de back-office para agilizar la operativa diaria.</p>
      </div>
      <div class="service-type-card reveal reveal--delay-5">
        <span class="service-type-card__icon">🔐</span>
        <h3 class="service-type-card__title">Control de Accesos y Portería</h3>
        <p class="service-type-card__desc">Gestión del acceso de personas y vehículos a las instalaciones, registro de visitas y coordinación con sistemas de seguridad electrónica.</p>
      </div>
      <div class="service-type-card reveal reveal--delay-6">
        <span class="service-type-card__icon">🏢</span>
        <h3 class="service-type-card__title">Conserjería y Servicios de Apoyo</h3>
        <p class="service-type-card__desc">Servicios de conserje para la gestión de instalaciones, reserva de espacios, coordinación de proveedores y atención de incidencias del día a día.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="service-cta reveal">
  <div class="container">
    <h2>¿Necesitas personal de soporte para tu empresa?</h2>
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
      <a href="medio-ambiente.php" class="service-card reveal reveal--delay-3">
        <img src="../images/ambiental.png" alt="Saneamiento Ambiental" class="service-card__img" loading="lazy" decoding="async">
        <h3 class="service-card__title">Saneamiento Ambiental</h3>
        <p class="service-card__desc">Protección sanitaria especializada para entornos seguros y saludables.</p>
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
