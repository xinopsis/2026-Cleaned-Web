<?php $pageTitle = 'Contacto | Cleaned Services'; ?>
<?php $pageDescription = 'Contacto - Cleaned Services. Contáctanos para solicitar información sobre nuestros servicios. Lima, Perú.'; ?>
<?php include '../includes/header.php'; ?>


<section class="page-hero page-hero--photo page-hero--photo--contacto" aria-label="Contacto Cleaned">
  <div class="container">
    <div class="page-hero__breadcrumb">
      <a href="../index.php">Inicio</a><span class="sep">›</span><span>Contacto</span>
    </div>
    <span class="page-hero__badge">📬 Contacto</span>
    <h1 class="page-hero__title">¿Cómo podemos ayudarte?</h1>
    <p class="page-hero__desc">Estamos a tu disposición para resolver cualquier consulta, presentar nuestros servicios o diseñar una propuesta personalizada para tu empresa.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="contact-layout">

      <!-- Info de contacto -->
      <div class="reveal reveal--left">
        <h2 class="section-title">Información de Contacto</h2>

        <div class="contact-side-stack">
          <div class="contact-info-card">
            <span class="contact-info-card__icon" aria-hidden="true">📞</span>
            <div>
              <h4>Teléfono</h4>
              <p class="contact-info-card__value">+51 960 415 741</p>
              <p class="contact-info-card__hint">Lunes a Viernes: 8:00 – 18:00</p>
            </div>
          </div>

          <div class="contact-info-card">
            <span class="contact-info-card__icon" aria-hidden="true">📧</span>
            <div>
              <h4>Correo Electrónico</h4>
              <p class="contact-info-card__value contact-info-card__value--md">contacto@cleaned.pe</p>
              <p class="contact-info-card__hint">Respuesta en menos de 24 horas</p>
            </div>
          </div>

          <div class="contact-info-card">
            <span class="contact-info-card__icon" aria-hidden="true">📍</span>
            <div>
              <h4>Sede Principal — Lima</h4>
              <p class="contact-info-card__value contact-info-card__value--md">Av. Camino Real 390, piso 13</p>
              <p class="contact-info-card__hint">San Isidro, Lima PE</p>
            </div>
          </div>

          <div class="contact-info-card">
            <span class="contact-info-card__icon" aria-hidden="true">🕐</span>
            <div>
              <h4>Horario de Atención</h4>
              <p class="contact-info-card__value contact-info-card__value--md">Lunes – Viernes: 8:00 a 18:00</p>
              <p class="contact-info-card__hint">Sábados: 9:00 a 13:00</p>
            </div>
          </div>
        </div>

        <div class="contact-social-block">
          <h3>Síguenos en redes sociales</h3>
          <div class="contact-social-row">
            <a href="https://www.linkedin.com/company/cleaned-services/" target="_blank" rel="noopener noreferrer" class="contact-social-link">in LinkedIn</a>
            <a href="https://www.facebook.com/people/Cleaned-Services/61579062865176/" target="_blank" rel="noopener noreferrer" class="contact-social-link">f Facebook</a>
            <a href="https://www.instagram.com/cleanedoficial" target="_blank" rel="noopener noreferrer" class="contact-social-link">◻ Instagram</a>
          </div>
        </div>
      </div>

      <!-- Formulario -->
      <div class="reveal reveal--right">
        <div class="contact-form contact-form-intro">
          <h2 class="section-title">Envíanos un mensaje</h2>
          <p>Completa el formulario y un asesor se pondrá en contacto contigo en menos de 24 horas.</p>

          <form novalidate>
            <div class="form-row">
              <div class="form-group">
                <label class="form-label" for="nombre">Nombre *</label>
                <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Tu nombre" required />
              </div>
              <div class="form-group">
                <label class="form-label" for="apellidos">Apellidos *</label>
                <input class="form-control" type="text" id="apellidos" name="apellidos" placeholder="Tus apellidos" required />
              </div>
            </div>

            <div class="form-row">
              <div class="form-group">
                <label class="form-label" for="email">Correo electrónico *</label>
                <input class="form-control" type="email" id="email" name="email" placeholder="correo@empresa.com" required />
              </div>
              <div class="form-group">
                <label class="form-label" for="telefono">Teléfono</label>
                <input class="form-control" type="tel" id="telefono" name="telefono" placeholder="+51 999 999 999" />
              </div>
            </div>

            <div class="form-group">
              <label class="form-label" for="empresa">Empresa</label>
              <input class="form-control" type="text" id="empresa" name="empresa" placeholder="Nombre de tu empresa" />
            </div>

            <div class="form-group">
              <label class="form-label" for="servicio">Servicio de interés</label>
              <select class="form-control" id="servicio" name="servicio">
                <option value="">Selecciona un servicio...</option>
                <option>Limpieza Corporativa</option>
                <option>Facility Management</option>
                <option>Servicios Generales</option>
                <option>Saneamiento Ambiental</option>
                <option>Servicios Aeroportuarios</option>
              </select>
            </div>

            <div class="form-group">
              <label class="form-label" for="mensaje">Mensaje *</label>
              <textarea class="form-control" id="mensaje" name="mensaje" rows="5" placeholder="Cuéntanos en qué podemos ayudarte..." required></textarea>
            </div>

            <div class="form-group form-row--checkbox">
              <input type="checkbox" id="privacidad" name="privacidad" class="form-checkbox" required />
              <label for="privacidad">
                He leído y acepto la <a href="../legal/privacidad.php">Política de Privacidad</a> y consiento el tratamiento de mis datos personales para gestionar mi consulta. *
              </label>
            </div>

            <button type="submit" class="btn btn--primary btn--lg w-100">
              Enviar Mensaje →
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>
