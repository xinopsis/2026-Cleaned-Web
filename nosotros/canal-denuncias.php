<?php $pageTitle = 'Canal de Denuncias | Cleaned Services'; ?>
<?php $pageDescription = 'Canal de Denuncias - Cleaned Services. Canal ético confidencial para reportar irregularidades.'; ?>
<?php include '../includes/header.php'; ?>


<section class="page-hero page-hero--photo page-hero--photo--dummy" aria-label="Canal de Denuncias">
  <div class="container">
    <div class="page-hero__breadcrumb">
      <a href="../index.php">Inicio</a><span class="sep">›</span>
      <a href="index.php">Nosotros</a><span class="sep">›</span>
      <span>Canal de Denuncias</span>
    </div>
    <span class="page-hero__badge">🔒 Ética Corporativa</span>
    <h1 class="page-hero__title">Canal de Denuncias</h1>
    <p class="page-hero__desc">Un espacio seguro, confidencial y protegido para reportar conductas contrarias al Código Ético de Cleaned Services. Tu voz importa.</p>
  </div>
</section>

<!-- Qué es -->
<section class="section">
  <div class="container">
    <div class="service-intro__grid">
      <div class="service-intro__visual service-intro__visual--tone-canal reveal reveal--left">
        <div class="service-intro__visual-inner service-intro__visual-inner--stack">
          <span class="service-intro__visual-emoji" aria-hidden="true">🛡️</span>
          <span class="service-intro__visual-tagline">Canal Ético Confidencial</span>
        </div>
      </div>
      <div class="service-intro__body reveal reveal--right">
        <span class="service-intro__tag">Integridad y transparencia</span>
        <h2 class="section-title">¿Qué es el Canal de Denuncias?</h2>
        <p>El Canal de Denuncias de CLEANED es un mecanismo interno que permite a empleados, proveedores, clientes y cualquier persona vinculada a nuestra operación comunicar de forma confidencial y segura posibles irregularidades, conductas contrarias a la ética o incumplimientos del Código de Conducta.</p>
        <p>Está gestionado por un organismo independiente externo que garantiza la total confidencialidad del denunciante y la objetividad en el análisis de cada comunicación recibida.</p>
        <div class="feature-list">
          <div class="feature-list__item"><span>100% confidencial y anónimo si se desea</span></div>
          <div class="feature-list__item"><span>Gestionado por tercero independiente</span></div>
          <div class="feature-list__item"><span>Sin represalias garantizado</span></div>
          <div class="feature-list__item"><span>Disponible 24 horas, 7 días a la semana</span></div>
          <div class="feature-list__item"><span>Respuesta en un plazo máximo de 30 días</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Qué puedes reportar -->
<section class="section section--grey">
  <div class="container">
    <div class="text-center reveal">
      <h2 class="section-title section-title--center">¿Qué Conductas Puedes Reportar?</h2>
      <p class="section-subtitle section-subtitle--center">El canal está habilitado para comunicar cualquier comportamiento contrario a los valores y normas de CLEANED.</p>
    </div>
    <div class="pillar-grid--3">
      <div class="pillar-card reveal reveal--delay-1"><span class="pillar-card__icon">💼</span><h4 class="pillar-card__title">Fraude y Corrupción</h4><p class="pillar-card__desc">Sobornos, comisiones ilegales, malversación de fondos, falsificación de documentos o cualquier forma de corrupción.</p></div>
      <div class="pillar-card reveal reveal--delay-2"><span class="pillar-card__icon">⚖️</span><h4 class="pillar-card__title">Incumplimientos Legales</h4><p class="pillar-card__desc">Vulneración de normativa laboral, fiscal, de prevención de riesgos o cualquier otra legislación aplicable.</p></div>
      <div class="pillar-card reveal reveal--delay-3"><span class="pillar-card__icon">🚫</span><h4 class="pillar-card__title">Discriminación y Acoso</h4><p class="pillar-card__desc">Acoso laboral, sexual o por razón de género, discriminación por origen, religión, discapacidad u otras causas.</p></div>
      <div class="pillar-card reveal reveal--delay-4"><span class="pillar-card__icon">🌿</span><h4 class="pillar-card__title">Daños Medioambientales</h4><p class="pillar-card__desc">Prácticas que vulneren la normativa ambiental o causen perjuicio al medioambiente de forma dolosa o negligente.</p></div>
      <div class="pillar-card reveal reveal--delay-5"><span class="pillar-card__icon">🔐</span><h4 class="pillar-card__title">Vulneración de Datos</h4><p class="pillar-card__desc">Acceso no autorizado a datos personales, uso indebido de información confidencial o brechas de seguridad.</p></div>
      <div class="pillar-card reveal reveal--delay-6"><span class="pillar-card__icon">🤝</span><h4 class="pillar-card__title">Conflictos de Interés</h4><p class="pillar-card__desc">Situaciones en que intereses personales interfieran con las decisiones profesionales en perjuicio de la empresa.</p></div>
    </div>
  </div>
</section>

<!-- Formulario de denuncia -->
<section class="section">
  <div class="container">
    <div class="constrain-760">
      <div class="text-center reveal text-center--mb-xl">
        <h2 class="section-title section-title--center">Enviar una Comunicación</h2>
        <p class="section-subtitle section-subtitle--center">Puedes presentar tu comunicación de forma anónima o identificada. En ambos casos se garantiza la confidencialidad.</p>
      </div>
      <div class="contact-form reveal">
        <div class="canal-callout">
          <span class="canal-callout__icon" aria-hidden="true">🔒</span>
          <p>Esta comunicación es procesada por un organismo externo e independiente. CLEANED garantiza que no se tomarán represalias contra ningún denunciante de buena fe.</p>
        </div>
        <form novalidate>
          <div class="form-group">
            <label class="form-label">Tipo de comunicación *</label>
            <select class="form-control" required>
              <option value="">Selecciona el tipo...</option>
              <option>Fraude o corrupción</option>
              <option>Incumplimiento legal o normativo</option>
              <option>Acoso laboral o sexual</option>
              <option>Discriminación</option>
              <option>Daños medioambientales</option>
              <option>Conflicto de interés</option>
              <option>Vulneración de datos personales</option>
              <option>Otra conducta contraria al Código Ético</option>
            </select>
          </div>
          <div class="form-group">
            <label class="form-label">País / Unidad de negocio *</label>
            <select class="form-control" required>
              <option value="">Selecciona...</option>
              <option>Perú — Lima</option>
              <option>Perú — Arequipa</option>
              <option>Perú — Trujillo</option>
              <option>Perú — Cusco</option>
            </select>
          </div>
          <div class="form-group">
            <label class="form-label">Descripción de los hechos *</label>
            <textarea class="form-control" rows="6" placeholder="Describe con el mayor detalle posible los hechos que quieres comunicar: qué ocurrió, cuándo, dónde y quiénes estaban involucrados..." required></textarea>
          </div>
          <div class="form-group">
            <label class="form-label">¿Deseas identificarte? (opcional)</label>
            <input class="form-control" type="text" placeholder="Nombre y apellidos (dejar en blanco para comunicación anónima)" />
          </div>
          <div class="form-group">
            <label class="form-label">Correo de contacto (opcional)</label>
            <input class="form-control" type="email" placeholder="Para recibir actualizaciones sobre tu comunicación" />
          </div>
          <div class="form-group form-row--checkbox">
            <input type="checkbox" id="privacidad" class="form-checkbox" required />
            <label for="privacidad">
              He leído y acepto la <a href="../legal/privacidad.php">Política de Privacidad</a> y entiendo que los datos facilitados serán tratados de forma confidencial exclusivamente para gestionar esta comunicación. *
            </label>
          </div>
          <button type="submit" class="btn btn--primary btn--lg w-100">Enviar Comunicación de Forma Segura →</button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>
