<?php
/**
 * Carga y utilidades para artículos del blog (data/articulos.xml).
 */

function articulos_xml_path(): string
{
    return dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'articulos.xml';
}

/**
 * @return SimpleXMLElement|false
 */
function articulos_load_xml()
{
    static $xml = null;
    static $loaded = false;

    if ($loaded) {
        return $xml;
    }

    $loaded = true;
    $path = articulos_xml_path();
    if (!is_file($path)) {
        return false;
    }

    $xml = @simplexml_load_file($path);
    return $xml;
}

/**
 * @return array<string, string> slug => label
 */
function articulos_categorias_map(): array
{
    static $map = null;
    if ($map !== null) {
        return $map;
    }

    $map = [];
    $xml = articulos_load_xml();
    if ($xml !== false && isset($xml->categorias->categoria)) {
        foreach ($xml->categorias->categoria as $c) {
            $attrs = $c->attributes();
            if ($attrs === null) {
                continue;
            }
            $slug = trim((string)($attrs['slug'] ?? ''));
            $label = trim((string)($attrs['label'] ?? ''));
            if ($slug !== '' && $label !== '') {
                $map[$slug] = $label;
            }
        }
    }

    return $map;
}

function articulos_humanize_slug(string $slug): string
{
    if ($slug === '') {
        return '';
    }

    $text = str_replace('-', ' ', $slug);
    if (function_exists('mb_convert_case')) {
        return mb_convert_case($text, MB_CASE_TITLE, 'UTF-8');
    }

    return ucwords($text);
}

/**
 * @return array<int, array{slug: string, label: string}>
 */
function articulos_load_categorias(): array
{
    $map = articulos_categorias_map();
    $categorias = [];
    foreach ($map as $slug => $label) {
        $categorias[] = ['slug' => $slug, 'label' => $label];
    }
    if ($categorias !== []) {
        return $categorias;
    }

    // Respaldo: slugs únicos definidos en los artículos
    $seen = [];
    $xml = articulos_load_xml();
    if ($xml === false) {
        return [];
    }

    foreach ($xml->articulo as $a) {
        $slug = trim((string)($a->category ?? ''));
        if ($slug === '' || isset($seen[$slug])) {
            continue;
        }
        $seen[$slug] = true;
        $categorias[] = [
            'slug' => $slug,
            'label' => articulos_humanize_slug($slug),
        ];
    }

    return $categorias;
}

function articulos_categoria_label(string $slug): string
{
    if ($slug === '') {
        return '';
    }

    $map = articulos_categorias_map();
    if (isset($map[$slug])) {
        return $map[$slug];
    }

    return articulos_humanize_slug($slug);
}

function articulos_categoria_es_valida(string $slug): bool
{
    if ($slug === '') {
        return false;
    }

    foreach (articulos_load_categorias() as $c) {
        if ($c['slug'] === $slug) {
            return true;
        }
    }

    return false;
}

/**
 * @param array<int, array<string, mixed>> $articles
 * @return array<int, array<string, mixed>>
 */
function articulos_filtrar_por_categoria(array $articles, string $slug): array
{
    if ($slug === '') {
        return $articles;
    }

    return array_values(array_filter($articles, static function (array $a) use ($slug) {
        return ($a['categorySlug'] ?? '') === $slug;
    }));
}

/** Ruta relativa a la raíz del sitio: blog/{slug}/ */
function articulo_blog_path(string $slug): string
{
    return 'blog/' . $slug . '/';
}

function articulo_href(string $slug, string $assetsPrefix = ''): string
{
    return $assetsPrefix . articulo_blog_path($slug);
}

function blog_index_href(string $assetsPrefix = ''): string
{
    return $assetsPrefix . 'blog/';
}

/**
 * @return array<int, array<string, mixed>>
 */
function articulos_load_all(): array
{
    $xml = articulos_load_xml();
    $articles = [];

    if ($xml === false) {
        return $articles;
    }

    foreach ($xml->articulo as $a) {
        $slug = (string)($a['slug'] ?? '');
        if ($slug === '') {
            continue;
        }

        $metaTitle = trim((string)($a->metaTitle ?? ''));
        $metaDescription = trim((string)($a->metaDescription ?? ''));
        $title = trim((string)($a->title ?? ''));
        $excerpt = trim((string)($a->excerpt ?? ''));
        $categorySlug = trim((string)($a->category ?? ''));

        $articles[] = [
            'slug' => $slug,
            'title' => $title,
            'categorySlug' => $categorySlug,
            'category' => articulos_categoria_label($categorySlug),
            'date' => (string)($a->date ?? ''),
            'excerpt' => $excerpt,
            'keyword' => (string)($a->keyword ?? ''),
            'metaTitle' => $metaTitle !== '' ? $metaTitle : $title,
            'metaDescription' => $metaDescription !== '' ? $metaDescription : $excerpt,
            'url' => articulo_blog_path($slug),
            'image' => (string)($a->image ?? ''),
            'imageGradient' => (string)($a->imageGradient ?? ''),
            'featured' => ((string)($a->featured ?? 'false')) === 'true',
        ];
    }

    usort($articles, static function ($x, $y) {
        return strcmp($y['date'], $x['date']);
    });

    return $articles;
}

/**
 * @return array<string, mixed>|null
 */
function articulo_por_slug(string $slug): ?array
{
    foreach (articulos_load_all() as $a) {
        if ($a['slug'] === $slug) {
            return $a;
        }
    }
    return null;
}

function articulo_format_date_es(?string $iso): string
{
    if (!$iso) {
        return '—';
    }
    $months = ['ene.', 'feb.', 'mar.', 'abr.', 'may.', 'jun.', 'jul.', 'ago.', 'sep.', 'oct.', 'nov.', 'dic.'];
    $dt = DateTime::createFromFormat('Y-m-d', $iso);
    if (!$dt) {
        return $iso;
    }
    $d = (int)$dt->format('d');
    $m = (int)$dt->format('m');
    $y = (int)$dt->format('Y');
    $mm = $months[$m - 1] ?? $dt->format('m');
    return sprintf('%02d %s %d', $d, $mm, $y);
}
