<?php $pageTitle = 'Portal de Clientes | Cleaned Services'; ?>
<?php $pageDescription = 'Portal de Clientes - Cleaned Services. Acceso al área privada para gestión de servicios, informes y comunicaciones.'; ?>
<?php include '../includes/header.php'; ?>


<section class="page-hero page-hero--photo page-hero--photo--dummy page-hero--solid-tall" aria-label="Portal de Clientes">
  <div class="container">
    <div class="page-hero__breadcrumb">
      <a href="../index.php">Inicio</a><span class="sep">›</span>
      <a href="index.php">Nosotros</a><span class="sep">›</span>
      <span>Portal de Clientes</span>
    </div>
    <span class="page-hero__badge">🔑 Área Privada</span>
    <h1 class="page-hero__title">Portal de Clientes CLEANED</h1>
    <p class="page-hero__desc">Accede a tu área privada para consultar el estado de los servicios contratados, descargar informes, gestionar incidencias y comunicarte con tu equipo de gestión.</p>
  </div>
</section>

<!-- Login -->
<section class="section section--grey">
  <div class="container">
    <div class="portal-login-grid">

      <!-- Acceso -->
      <div class="reveal reveal--left">
        <div class="portal-login-card">
          <div class="portal-login-card__header">
            <div class="portal-login-card__icon" aria-hidden="true">🔑</div>
            <h2 class="portal-login-card__title">Iniciar Sesión</h2>
            <p class="portal-login-card__lead">Accede con tus credenciales corporativas</p>
          </div>
          <form novalidate>
            <div class="form-group">
              <label class="form-label" for="usuario">Usuario o correo electrónico *</label>
              <input class="form-control" type="email" id="usuario" placeholder="correo@empresa.com" required />
            </div>
            <div class="form-group">
              <label class="form-label" for="password">Contraseña *</label>
              <div class="portal-field-wrap">
                <input class="form-control form-control--password-pad" type="password" id="password" placeholder="••••••••" required />
                <button type="button" class="portal-password-toggle" title="Mostrar contraseña">👁️</button>
              </div>
            </div>
            <div class="portal-form-row">
              <label class="portal-checkbox-label">
                <input type="checkbox" /> Recordarme
              </label>
              <a href="#" class="portal-forgot-link">¿Olvidaste tu contraseña?</a>
            </div>
            <button type="submit" class="btn btn--primary btn--lg w-100">Entrar al Portal →</button>
          </form>
          <div class="portal-login-footer">
            <p>¿No tienes acceso? <a href="../contacto/index.php">Solicitar credenciales</a></p>
          </div>
        </div>
      </div>

      <!-- Funcionalidades -->
      <div class="reveal reveal--right">
        <h2 class="section-title">¿Qué puedes hacer en el Portal?</h2>
        <p class="portal-intro-lead">El Portal de Clientes de CLEANED te da visibilidad total sobre los servicios que tienes contratados, en tiempo real y desde cualquier dispositivo.</p>
        <div class="portal-feature-list">
          <div class="portal-feature-item">
            <span class="portal-feature-item__icon" aria-hidden="true">📊</span>
            <div>
              <h4>Panel de Control en Tiempo Real</h4>
              <p>Consulta el estado de ejecución de todos tus servicios con KPIs actualizados al instante.</p>
            </div>
          </div>
          <div class="portal-feature-item">
            <span class="portal-feature-item__icon" aria-hidden="true">📋</span>
            <div>
              <h4>Informes y Documentación</h4>
              <p>Descarga informes mensuales, partes de servicio, certificados y toda la documentación asociada.</p>
            </div>
          </div>
          <div class="portal-feature-item">
            <span class="portal-feature-item__icon" aria-hidden="true">🔧</span>
            <div>
              <h4>Gestión de Incidencias</h4>
              <p>Reporta incidencias, haz seguimiento de su resolución y valora la atención recibida.</p>
            </div>
          </div>
          <div class="portal-feature-item">
            <span class="portal-feature-item__icon" aria-hidden="true">💬</span>
            <div>
              <h4>Comunicación Directa</h4>
              <p>Chat directo con tu gestor de cuenta y equipo operativo asignado, sin intermediarios.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- App móvil -->
<section class="section">
  <div class="container">
    <div class="portal-app-grid reveal">
      <div>
        <span class="service-intro__tag">Disponible en móvil</span>
        <h2 class="section-title">Gestiona tus servicios desde cualquier lugar</h2>
        <p>La aplicación móvil de CLEANED para clientes está disponible para iOS y Android. Recibe notificaciones en tiempo real, aprueba presupuestos y accede a todos los informes desde tu smartphone.</p>
        <div class="portal-app-badges">
          <a href="#" class="portal-store-badge portal-store-badge--apple">
            <span class="portal-store-badge__icon" aria-hidden="true">🍎</span>
            <div>
              <div class="portal-store-badge__kicker">Disponible en</div>
              <div class="portal-store-badge__title">App Store</div>
            </div>
          </a>
          <a href="#" class="portal-store-badge portal-store-badge--play">
            <span class="portal-store-badge__icon" aria-hidden="true">🤖</span>
            <div>
              <div class="portal-store-badge__kicker">Disponible en</div>
              <div class="portal-store-badge__title">Google Play</div>
            </div>
          </a>
        </div>
      </div>
      <div class="portal-stat-grid">
        <div class="portal-stat-tile">
          <div class="portal-stat-tile__icon" aria-hidden="true">⚡</div>
          <div class="portal-stat-tile__value">24/7</div>
          <div class="portal-stat-tile__label">Disponibilidad</div>
        </div>
        <div class="portal-stat-tile">
          <div class="portal-stat-tile__icon" aria-hidden="true">🔔</div>
          <div class="portal-stat-tile__value">Real-time</div>
          <div class="portal-stat-tile__label">Notificaciones</div>
        </div>
        <div class="portal-stat-tile">
          <div class="portal-stat-tile__icon" aria-hidden="true">🔐</div>
          <div class="portal-stat-tile__value">SSL</div>
          <div class="portal-stat-tile__label">Cifrado seguro</div>
        </div>
        <div class="portal-stat-tile">
          <div class="portal-stat-tile__icon" aria-hidden="true">📱</div>
          <div class="portal-stat-tile__value">iOS + Android</div>
          <div class="portal-stat-tile__label">Multiplataforma</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Soporte -->
<section class="section section--grey">
  <div class="container">
    <div class="text-center reveal">
      <h2 class="section-title section-title--center">¿Necesitas ayuda con el Portal?</h2>
    </div>
    <div class="portal-support-grid">
      <div class="pillar-card pillar-card--text-center reveal reveal--delay-1">
        <span class="pillar-card__icon">📞</span>
        <h4 class="pillar-card__title">Soporte Técnico</h4>
        <p class="pillar-card__desc">Llama al <strong>+51 960 415 741</strong> para soporte técnico del portal. Atención L–V de 8:00 a 18:00.</p>
      </div>
      <div class="pillar-card pillar-card--text-center reveal reveal--delay-2">
        <span class="pillar-card__icon">📧</span>
        <h4 class="pillar-card__title">Soporte por Email</h4>
        <p class="pillar-card__desc">Escríbenos a <strong>contacto@cleaned.pe</strong> y te responderemos en menos de 24 horas en horario laboral.</p>
      </div>
      <div class="pillar-card pillar-card--text-center reveal reveal--delay-3">
        <span class="pillar-card__icon">📖</span>
        <h4 class="pillar-card__title">Guía de Usuario</h4>
        <p class="pillar-card__desc">Descarga nuestra guía completa del portal en PDF con tutoriales paso a paso para todas las funcionalidades.</p>
        <a href="#" class="portal-guide-link">Descargar guía →</a>
      </div>
    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>
