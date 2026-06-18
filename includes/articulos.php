<?php
/**
 * Carga y utilidades para artículos del blog (data/articulos.xml).
 */

function articulos_xml_path(): string
{
    return dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'articulos.xml';
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
    $path = articulos_xml_path();
    $articles = [];

    if (!is_file($path)) {
        return $articles;
    }

    $xml = @simplexml_load_file($path);
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

        $articles[] = [
            'slug' => $slug,
            'title' => $title,
            'category' => (string)($a->category ?? ''),
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
