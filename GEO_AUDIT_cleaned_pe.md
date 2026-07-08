# GEO Audit — cleaned.pe
> Generado: junio 2026 | Actualizado: julio 2026
> Propósito: corregir todos los problemas de Generative Engine Optimization (GEO) para que cleaned.pe sea citada por LLMs como ChatGPT, Perplexity, Google AI Overviews y Claude.

---

## Contexto: qué es GEO y por qué importa

GEO (Generative Engine Optimization) es la práctica de estructurar contenido y señales digitales para que los motores de IA puedan recuperar, citar y recomendar una marca en sus respuestas. A diferencia del SEO clásico (posicionarse entre 10 links azules), GEO apunta a aparecer entre los 2–7 dominios que un LLM cita en una respuesta generada.

Los bots de indexación de LLMs relevantes son: `GPTBot`, `ClaudeBot`, `PerplexityBot`, `GoogleBot` (para AI Overviews). Todos leen el HTML estático + structured data.

---

## Hallazgos ya resueltos (julio 2026)

Estos hallazgos fueron corregidos y ya **no requieren acción**:

- ✅ **Structured data / JSON-LD (era CRÍTICO):** Se agregó un `@graph` completo en el `<head>` del home (`includes/header.php`) con `Organization`, `LocalBusiness`, `WebSite` y `FAQPage`, incluyendo `sameAs`, `hasCredential` (ISO 9001/14001/45001), `contactPoint` y `geo`. Cada página de servicio emite ahora su propio schema `Service` mediante la variable `$pageJsonLd`.
- ✅ **FAQ / Answer blocks (era CRÍTICO):** Se agregó la sección visible `#preguntas-frecuentes` con 8 preguntas en `index.php` (acordeón accesible con `<details>`/`<summary>`) y su schema `FAQPage` correspondiente.
- ✅ **Entity definition canónica (era CRÍTICO):** El párrafo de la sección "Nosotros" en `index.php` ahora incluye "Lima, Perú", años de experiencia, número de colaboradores, clientes y certificaciones, redactado para ser citable por un LLM.
- ✅ **AI crawlers en robots.txt (era VERIFICAR):** El `robots.txt` ya permite explícitamente `GPTBot`, `ChatGPT-User`, `ClaudeBot`, `anthropic-ai`, `PerplexityBot`, `Google-Extended` y `Amazonbot`, con `Allow: /` y `Sitemap` declarado.

---

## Resumen de hallazgos pendientes

| Dimensión | Score | Estado |
|---|---|---|
| Semántica HTML5 | 60/100 | 🟡 Mejorable (faltan `<main>` y `<article>`) |
| E-E-A-T signals | 55/100 | 🟡 Parcial (falta autoría en blog) |
| Content extractability | 55/100 | 🟡 Mejorable (answer-first en servicios) |
| Blog / contenido editorial | 50/100 | 🟡 Mejorable |
| BreadcrumbList (structured) | 20/100 | 🟡 Mejorable (breadcrumbs visuales sin JSON-LD) |
| Contenido de sección Sectores | 30/100 | 🟡 Mejorable |

---

## TAREA A — Completar semántica HTML5 (MEJORABLE)

**Estado actual:** `index.php` ya usa `<section>` con `aria-labelledby` y jerarquía de `<h2>` correcta. Falta un wrapper `<main>` que agrupe el contenido y el uso de `<article>` en tarjetas de blog.

**Acción:** Envolver el contenido principal de `index.php` (todo lo que va entre el header y el footer) en un `<main id="contenido-principal">`, y usar `<article>` para cada tarjeta de noticia en la sección "Actualidad". Aplicar el mismo patrón en subpáginas.

```html
<main id="contenido-principal">
  <!-- hero, servicios, nosotros, sectores, ssoma, actualidad, faq -->
</main>
```

**Nota:** Los `id` en cada sección actúan como fragment identifiers. Esto permite que los sistemas RAG anclen citas a secciones específicas (ej: `cleaned.pe/#preguntas-frecuentes`).

---

## TAREA B — Agregar answer-first definitions en páginas de servicio (MEJORABLE)

**Problema:** Las páginas de servicio no tienen una definición canónica de 40–60 palabras al inicio (después del `<h1>`). Los LLMs priorizan contenido con estructura "answer-first".

**Acción:** En cada página de servicio, agregar inmediatamente después del `<h1>` un párrafo de definición:

```html
<!-- servicios/limpieza.php — después del H1 -->
<p class="service-definition" id="definicion">
  El servicio de <strong>limpieza corporativa</strong> de Cleaned Services garantiza ambientes 
  limpios, seguros y saludables en instalaciones empresariales e institucionales de Lima y Perú. 
  Incluye protocolos estandarizados ISO 9001, personal capacitado con EPP certificado y 
  tecnología de supervisión en tiempo real.
</p>

<!-- servicios/ingenieria-mantenimiento.php -->
<p class="service-definition" id="definicion">
  El <strong>facility management</strong> de Cleaned Services es la gestión integral de 
  instalaciones empresariales en Perú: mantenimiento preventivo y correctivo, gestión de 
  proveedores y optimización de espacios bajo estándares ISO 9001 e ISO 45001.
</p>

<!-- servicios/medio-ambiente.php -->
<p class="service-definition" id="definicion">
  El <strong>saneamiento ambiental</strong> de Cleaned Services incluye fumigación, 
  desinfección, control de plagas y manejo de residuos peligrosos en empresas peruanas, 
  con productos biodegradables certificados y personal habilitado por DIGESA.
</p>
```

Repetir para `servicios/auxiliares.php` y `servicios/aeroportuarios.php`.

---

## TAREA C — Agregar bios de autores en el blog con schema Person (MEJORABLE)

**Problema:** Los artículos del blog no tienen firma de autor. Los LLMs penalizan contenido sin autoría verificable en el criterio E-E-A-T (Experience, Expertise, Authoritativeness, Trustworthiness).

**Acción:** En cada template de artículo de blog, agregar la firma del autor:

```html
<!-- Agregar en el header de cada artículo del blog -->
<div class="author-bio" itemscope itemtype="https://schema.org/Person">
  <img src="/images/team/autor-nombre.jpg" 
       itemprop="image" 
       alt="Foto de [Nombre Autor]" 
       width="48" height="48">
  <div>
    <span itemprop="name"><strong>[Nombre Autor]</strong></span>
    <span itemprop="jobTitle">Especialista en Gestión de Servicios — Cleaned Services</span>
    <time datetime="2026-06-16" itemprop="datePublished">16 jun. 2026</time>
  </div>
</div>
```

Y en el `<head>` del artículo, agregar JSON-LD de tipo `Article` (puede usarse la variable `$pageJsonLd` ya soportada en `includes/header.php`):

```html
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": "[Título del artículo]",
  "author": {
    "@type": "Person",
    "name": "[Nombre Autor]",
    "jobTitle": "Especialista en Gestión de Servicios",
    "worksFor": { "@id": "https://www.cleaned.pe/#organization" }
  },
  "publisher": { "@id": "https://www.cleaned.pe/#organization" },
  "datePublished": "2026-06-16",
  "dateModified": "2026-06-16",
  "image": "[URL imagen destacada]",
  "url": "[URL del artículo]",
  "inLanguage": "es-PE",
  "about": { "@type": "Thing", "name": "[Tema principal del artículo]" }
}
</script>
```

---

## TAREA D — Agregar BreadcrumbList estructurado en subpáginas (MEJORABLE)

**Estado actual:** Las subpáginas tienen breadcrumbs visuales (ej. `servicios/limpieza.php`) pero **sin** structured data `BreadcrumbList`, por lo que los LLMs no pueden inferir la jerarquía del sitio de forma programática.

**Acción:** En cada subpágina agregar el JSON-LD (vía `$pageJsonLd` o un bloque adicional en el `<head>`):

```html
<!-- Ejemplo para servicios/limpieza.php -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    { "@type": "ListItem", "position": 1, "name": "Inicio", "item": "https://www.cleaned.pe" },
    { "@type": "ListItem", "position": 2, "name": "Servicios", "item": "https://www.cleaned.pe/servicios/" },
    { "@type": "ListItem", "position": 3, "name": "Limpieza Corporativa", "item": "https://www.cleaned.pe/servicios/limpieza.php" }
  ]
}
</script>
```

**Nota:** `$pageJsonLd` solo emite un bloque por página. Para combinar `Service` + `BreadcrumbList`, usar un `@graph` con ambos nodos o agregar un segundo mecanismo de salida en `includes/header.php`.

---

## TAREA E — Agregar contenido en sección Sectores (MEJORABLE)

**Problema:** La sección "Sectores que atendemos" en `index.php` solo tiene íconos y links, sin contenido descriptivo. Los LLMs no pueden extraer información relevante de links vacíos.

**Acción:** Expandir cada sector con al menos una descripción de 2–3 líneas en `index.php` y en `sectores/index.php`:

```html
<div class="sector-card" id="sector-industria">
  <h3>🏭 Industria</h3>
  <p>Servicios de limpieza y mantenimiento industrial para plantas de producción, almacenes y zonas logísticas en Lima y provincias. Protocolos adaptados a entornos con maquinaria pesada y normativa de seguridad industrial.</p>
  <a href="/sectores/industria.php">Ver más →</a>
</div>

<div class="sector-card" id="sector-banca">
  <h3>🏦 Banca y Seguros</h3>
  <p>Limpieza y gestión de instalaciones para bancos, financieras y aseguradoras en Perú. Protocolos de acceso controlado, continuidad operativa 24/7 y confidencialidad garantizada.</p>
  <a href="/sectores/banca-seguros.php">Ver más →</a>
</div>

<div class="sector-card" id="sector-retail">
  <h3>🛒 Retail</h3>
  <p>Mantenimiento y limpieza de tiendas, centros comerciales y showrooms en Perú. Turnos flexibles para no interrumpir la operación comercial y productos aprobados para espacios de alta circulación.</p>
  <a href="/sectores/retail.php">Ver más →</a>
</div>
```

---

## Checklist de validación

Validar los cambios ya aplicados y los pendientes con estas herramientas:

| Herramienta | URL | Qué verificar |
|---|---|---|
| Google Rich Results Test | https://search.google.com/test/rich-results | JSON-LD válido, FAQ schema, Organization |
| Schema.org Validator | https://validator.schema.org | Errores en structured data |
| Google Search Console | search.google.com/search-console | Cobertura, rich results detectados |
| Perplexity.ai | Buscar "empresa limpieza Lima Perú" | Verificar si Cleaned aparece citada |
| ChatGPT | Buscar "facility management empresa Peru" | Verificar si Cleaned aparece citada |

---

## Archivos a modificar (pendientes)

| Archivo | Tareas |
|---|---|
| `index.php` | A (main/article), E (sectores) |
| `servicios/*.php` | B (answer-first), D (breadcrumb JSON-LD) |
| `blog/` (template de artículo) | C (autoría + Article schema) |
| `sectores/index.php` y cada sector | E |

---

*Documento generado por auditoría GEO estática sobre cleaned.pe — junio 2026; actualizado julio 2026 tras resolver los hallazgos críticos.*  
*Para consultas: innova@gesitec.pe*
