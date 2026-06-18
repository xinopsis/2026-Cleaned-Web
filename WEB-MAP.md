# Mapa web — Cleaned Services (novo)

> Sitio en **PHP** con includes (`includes/header.php`, `includes/footer.php`), estilos en `css/`, comportamiento en `js/`.  
> Dominio de referencia para enlaces absolutos y sitemap: **https://www.cleaned.pe/**  
> Actualizado: mayo 2026

---

## Identidad visual (referencia rápida)

| Elemento | Valor típico |
|---|---|
| Color primario | Azul corporativo (`--color-primary`, p. ej. `#004AAC`) |
| Tipografías | Montserrat (títulos), Open Sans (cuerpo) |
| Header | Altura variable; menú responsive ≤768px |

Los valores exactos están en `css/styles.css` (variables CSS).

---

## Árbol de archivos relevante

```
novo/
├── index.php                    ← Inicio
├── sitemap.xml                  ← Mapa XML para buscadores (URLs + lastmod)
├── robots.txt                   ← Directivas de rastreo + URL del sitemap
├── llms.txt                     ← Resumen orientado a IA / asistentes
├── includes/
│   ├── header.php               ← `<head>`, header, navegación principal
│   └── footer.php               ← Pie, scripts
├── css/
│   ├── styles.css
│   └── service-pages.css        ← Páginas con profundidad > 0
├── js/
│   ├── main.js
│   └── components.js
├── data/
│   └── articulos.xml            ← Metadatos de artículos del blog (SEO + listados)
├── images/
├── servicios/
│   ├── index.php
│   ├── limpieza.php
│   ├── ingenieria-mantenimiento.php
│   ├── auxiliares.php
│   ├── medio-ambiente.php
│   └── aeroportuarios.php
├── sectores/
│   ├── index.php
│   ├── industria.php
│   ├── banca-seguros.php
│   ├── retail.php
│   ├── educacion.php
│   └── transporte.php
├── nosotros/
│   ├── index.php
│   ├── quienes-somos.php
│   ├── certificaciones.php
│   ├── cifras.php
│   ├── canal-denuncias.php
│   └── portal-clientes.php
├── blog/
│   ├── index.php
│   ├── tecnologia-e-innovacion-smart-cleaned.php
│   ├── renovacion-de-uniformes.php
│   ├── cumplimiento-normativo.php
│   ├── reduccion-de-costos-operativos.php
│   └── optimizacion-de-recursos.php
├── sostenibilidad/
│   └── index.php
├── contacto/
│   └── index.php
└── legal/
    ├── privacidad.php
    └── aviso-legal.php
```

**Nota:** Las páginas de servicios **Seguridad**, **RRHH**, **Sociosanitarios** y **Sostenibles** fueron retiradas del sitio (no enlazadas desde home ni menú).

---

## Navegación principal (menú superior)

| Ítem | Destino (relativo desde raíz del deploy) |
|---|---|
| Servicios (hub) | `/servicios/index.php` |
| Limpieza Corporativa | `/servicios/limpieza.php` |
| Facility Management | `/servicios/ingenieria-mantenimiento.php` |
| Servicios Generales | `/servicios/auxiliares.php` |
| Saneamiento Ambiental | `/servicios/medio-ambiente.php` |
| Servicios Aeroportuarios | `/servicios/aeroportuarios.php` |
| Sectores (hub) | `/sectores/index.php` |
| Industria, Banca y Seguros, Retail, Educación, Transporte | `/sectores/*.php` |
| Nosotros (hub) | `/nosotros/index.php` |
| Quiénes Somos, Certificaciones, Canal de Denuncias | `/nosotros/*.php` |
| Sostenibilidad | `/sostenibilidad/index.php` |
| Contacto | `/contacto/index.php` |

**Home (`index.php`):** hero slider, grid de **5** servicios (los mismos del megamenú), estadísticas, nosotros, certificaciones (marquee), sectores, bloque sostenibilidad, actualidad (enlaces al blog), footer.

---

## Blog

- Listado: `/blog/` → `blog/index.php` (lee `data/articulos.xml`).
- Artículos: `/blog/{slug}/` → `blog/{slug}.php` (URLs limpias vía `.htaccess`).
- SEO por artículo: `metaTitle`, `metaDescription` y `keyword` en el XML.
- Artículos actuales en XML: Smart Cleaned, renovación de uniformes, cumplimiento normativo, reducción de costos, optimización de recursos.

---

## Descubrimiento para buscadores e IA

| Recurso | Archivo | Uso |
|---|---|---|
| Sitemap XML | `sitemap.xml` | URLs canónicas para indexación |
| Robots | `robots.txt` | Permisos + URL del sitemap |
| LLMs | `llms.txt` | Resumen estructurado y enlaces prioritarios para modelos |

---

## Desarrollo local

Si sirves la carpeta `novo/` como raíz del servidor (p. ej. `php -S localhost:8080 -t novo`), las rutas coinciden con las del documento sin prefijo.

Si el sitio vive en un subdirectorio en producción, ajusta la base URL en `sitemap.xml`, `robots.txt` y `llms.txt` para que coincidan con el despliegue real.
